<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentProductController extends Controller
{
    public function show($id)
    {
        $document = Document::findOrFail($id);
        $products = Product::all();

        return view('documents.products.show', compact('document', 'products'));
    }

    public function store(Request $request)
    {
        $document = Document::findOrFail($request->document_id);
        $document->products()->attach($request->product_id, [
            'selling_price' => $request->selling_price,
            'quantity' => $request->quantity,
            'discount' => $request->discount,
            'total' => $request->total,
            'price_hvat' => $request->price_hvat,
            'price_vvat' => $request->price_vvat,
            'total_hvat' => $request->total_hvat,
        ]);

        return redirect()->route('documentproducts.show', $request->document_id)->with('success', 'Relation enregistrée avec succès.');
    }

    public function destroy($document_id, $product_id)
    {
        $document = Document::findOrFail($document_id);
        $document->products()->detach($product_id);

        return redirect()->route('documentproducts.show', $document_id)->with('success', 'Relation supprimée avec succès.');
    }
}
