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

    public function edit($id = null)
    {
        $product = $id ? Product::find($id) : new Product();
        return view('products.edit', compact('product'));
    }

    public function create()
    {
        return $this->edit();
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

    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required|unique:products',
            'name' => 'required',
            'brand' => 'nullable',
            'ean_code' => 'nullable',
            'stock' => 'required|integer|min:0',
            'stock_min' => 'required|integer|min:0',
            'buying_price' => 'required|integer|min:0',
            'selling_price' => 'nullable|json',
            'description' => 'nullable',
            'comment' => 'nullable',
            'status' => 'required|boolean',
        ]);

        $product = new Product();
        $product->reference = $request->input('reference');
        $product->name = $request->input('name');
        $product->brand = $request->input('brand');
        $product->ean_code = $request->input('ean_code');
        $product->stock = $request->input('stock');
        $product->stock_min = $request->input('stock_min');
        $product->buying_price = $request->input('buying_price');
        $product->selling_price = $request->input('selling_price');
        $product->description = $request->input('description');
        $product->comment = $request->input('comment');
        $product->status = $request->input('status');

        $product->save();

        return redirect('/products')->with('success', 'Produit ajouté avec succès.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products')->with('success', 'Produit supprimé avec succès.');
    }
}
