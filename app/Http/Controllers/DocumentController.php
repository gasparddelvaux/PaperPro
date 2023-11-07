<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Document;
use App\Models\DocumentType;
use Illuminate\Http\Request;

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