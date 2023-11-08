<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Document;
use App\Models\DocumentType;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class DocumentController extends Controller
{
    public function index()
    {
        $query = Document::with('customer', 'documentType');

        if (request()->has('document_type') && request('document_type') !== null) {
            $query->where('documenttype_id', request('document_type'));
        }

        $documents = $query->get();
        $documentTypes = DocumentType::all();

        return view('documents.index', compact('documents', 'documentTypes'));
    }

    public function edit($id = null)
    {
        $document = $id ? Document::find($id) : new Document();
        $customers = Customer::all();
        $documentTypes = DocumentType::all();
        return view('documents.edit', compact('document', 'customers', 'documentTypes'));
    }

    public function create()
    {
        return $this->edit();
    }

    public function pdf($id)
    {
        $document = Document::with('customer', 'documentType', 'products')->find($id);
        return view('documents.pdf', compact('document'));
    }

    public function download($id, $automaticcalculation = true)
    {
        $document = Document::with('customer', 'documentType', 'products')->find($id);
        $customer = new Party([
            'name' => $document->customer->name,
            'custom_fields' => [
                'Adresse email' => $document->customer->email,
                'Téléphone' => $document->customer->phone,
                'Site Web' => $document->customer->website,
                'Numéro de TVA' => $document->customer->vat_number,
            ],
        ]);
        $seller = new Party([
            'name' => 'INOVANCY SPRL',
            'custom_fields' => [
                'address' => 'Rue de Fleurus 140, 5060 Sambreville',
                'Adresse email' => 'contact@inovancy.dev',
                'Téléphone' => '+32 71 96 00 96',
                'Site Web' => 'inovancy.dev',
                'Numéro de TVA' => 'BE 0891.995.174',
            ],
        ]);
        

        $invoice = Invoice::make()
            // Informations générales
            ->date($document->created_at)
            ->name($document->documentType->name . ' #' . $document->reference)
            ->series($document->reference)
            ->serialNumberFormat('{SERIES}')
            ->payUntilDays(30)
            ->currencySymbol('€')
            ->dateFormat('d/m/Y')
            ->currencySymbol('€')
            ->currencyCode('EUR')
            ->filename($document->reference)
            ->notes($document->comment)
            // Client / Vendeur
            ->buyer($customer)
            ->seller($seller)
            // Design
            ->logo(public_path('img/paperpro.png'))
            ->template('paperpro');
        foreach ($document->products as $product) {
            if (!$automaticcalculation) { 
                $invoice->addItem((new InvoiceItem())
                    ->title($product->name)
                    ->description($product->brand)
                    ->pricePerUnit($product->pivot->price_hvat)
                    ->discountByPercent($product->pivot->discount)
                    ->taxByPercent($document->vat)
                    ->quantity($product->pivot->quantity));
            }else{
                $invoice->addItem((new InvoiceItem())
                    ->title($product->name)
                    ->description($product->brand)
                    ->pricePerUnit($product->pivot->price_hvat)
                    ->discountByPercent($product->pivot->discount)
                    ->taxByPercent($document->vat)
                    ->quantity($product->pivot->quantity)
                    ->subTotalPrice($product->pivot->total));
            }
        }
        if (!$automaticcalculation) {
            $invoice->totalAmount($document->totalttc);
        }
        return $invoice->stream();
    }

    public function update(Request $request, $id)
    {
        $document = Document::find($id);
        $document->update([
            'reference' => $request->input('reference'),
            'customer_id' => $request->input('customer_id'),
            'documenttype_id' => $request->input('documenttype_id'),
            'totalhvat' => $request->input('totalhvat'),
            'vat' => $request->input('vat'),
            'totalttc' => $request->input('totalttc'),
            'status' => $request->input('status'),
            'comment' => $request->input('comment'),
        ]);
        return redirect()->route('documents.index')->with('success', 'Document mis à jour avec succès.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required|unique:documents',
            'customer_id' => 'required|exists:customers,id',
            'documenttype_id' => 'required|exists:documenttypes,id',
            'totalhvat' => 'required|integer|min:0',
            'vat' => 'required|integer|min:0',
            'totalttc' => 'required|integer|min:0',
            'status' => 'required|boolean',
            'comment' => 'nullable',
        ]);
        $document = Document::create([
            'reference' => $request->input('reference'),
            'customer_id' => $request->input('customer_id'),
            'documenttype_id' => $request->input('documenttype_id'),
            'totalhvat' => $request->input('totalhvat'),
            'vat' => $request->input('vat'),
            'totalttc' => $request->input('totalttc'),
            'status' => $request->input('status'),
            'comment' => $request->input('comment'),
        ]);
        return redirect()->route('documents.index')->with('success', 'Document ajouté avec succès.');
    }

    public function destroy($id)
    {
        $document = Document::find($id);
        $document->delete();
        return redirect()->route('documents.index')->with('success', 'Document supprimé avec succès.');
    }
}