<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'ean_code' => $request->input('ean_code'),
            'stock' => $request->input('stock'),
            'stock_min' => $request->input('stock_min'),
            'buying_price' => $request->input('buying_price'),
            'selling_price' => $request->input('selling_price'),
            'description' => $request->input('description'),
            'comment' => $request->input('comment'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('products.index')->with('success', 'Produit mis à jour avec succès.');
    }
}
