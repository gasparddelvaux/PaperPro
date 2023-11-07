@extends('layouts.app')
@section('title')
    {{ $product->id ? 'Modifier le produit' : 'Ajouter un produit' }}
@endsection
@section('content')
    <h3>{{ $product->id ? 'Modifier le' : 'Ajouter un' }} produit</h3>
    <form method="POST" action="{{ $product->id ? route('products.update', $product->id) : route('products.store') }}">
        @csrf
        @if($product->id)
            @method('PUT')
        @endif
        @if ($errors->any())
            <div class="alert alert-danger my-4">
                <ul class="my-0 list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-3 mb-3">
                <label for="reference" class="form-label">Référence</label>
                <input type="text" id="reference" name="reference" value="{{ old('reference', $product->reference) }}" class="form-control">
            </div>
            <div class="col-3 mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" class="form-control">
            </div>
            <div class="col-3 mb-3">
                <label for="brand" class="form-label">Marque</label>
                <input type="text" id="brand" name="brand" value="{{ old('brand', $product->brand) }}" class="form-control">
            </div>
            <div class="col-3 mb-3">
                <label for="ean_code" class="form-label">Code EAN</label>
                <input type="text" id="ean_code" name="ean_code" value="{{ old('ean_code', $product->ean_code) }}" class="form-control">
            </div>
            <div class="col-3 mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" id="stock" name="stock" value="{{ old('stock', $product->stock) }}" class="form-control">
            </div>
            <div class="col-3 mb-3">
                <label for="stock_min" class="form-label">Stock minimum</label>
                <input type="number" id="stock_min" name="stock_min" value="{{ old('stock_min', $product->stock_min) }}" class="form-control">
            </div>
            <div class="col-3 mb-3">
                <label for="buying_price" class="form-label">Prix d'achat</label>
                <input type="number" id="buying_price" name="buying_price" value="{{ old('buying_price', $product->buying_price) }}" class="form-control">
            </div>
            <div class="col-3 mb-3">
                <label for="selling_price" class="form-label">Prix de vente</label>
                <input type="number" id="selling_price" name="selling_price" value="{{ old('selling_price', $product->selling_price) }}" class="form-control">
            </div>
            <div class="col-6 mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
            </div>
            <div class="col-6 mb-3">
                <label for="comment" class="form-label">Commentaire</label>
                <textarea id="comment" name="comment" class="form-control">{{ old('comment', $product->comment) }}</textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="status" class="form-label">Statut</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ old('status', $product->status) == 1 ? 'selected' : '' }}>Actif</option>
                    <option value="0" {{ old('status', $product->status) == 0 ? 'selected' : '' }}>Inactif</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{ $product->id ? 'Mettre à jour' : 'Ajouter' }}</button>
        <a href="/products" class="btn btn-secondary">Retour</a>
    </form>
@endsection
