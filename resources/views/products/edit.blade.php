@extends('layouts')

@section('content')
    <h1>Modifier le Produit</h1>

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="brand">Marque :</label>
            <input type="text" id="brand" name="brand" value="{{ $product->brand }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="ean_code">Code EAN :</label>
            <input type="text" id="ean_code" name="ean_code" value="{{ $product->ean_code }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="stock">Stock :</label>
            <input type="number" id="stock" name="stock" value="{{ $product->stock }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="stock_min">Stock minimum :</label>
            <input type="number" id="stock_min" name="stock_min" value="{{ $product->stock_min }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="buying_price">Prix d'achat :</label>
            <input type="number" id="buying_price" name="buying_price" value="{{ $product->buying_price }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="selling_price">Prix de vente :</label>
            <input type="number" id="selling_price" name="selling_price" value="{{ $product->selling_price }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description :</label>
            <textarea id="description" name="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="comment">Commentaire :</label>
            <textarea id="comment" name="comment" class="form-control">{{ $product->comment }}</textarea>
        </div>

        <div class="form-group">
            <label for="status">Statut :</label>
            <select name="status" id="status" class="form-control">
                <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Actif</option>
                <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
