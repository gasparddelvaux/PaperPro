@extends('layouts.app')
@section('title', 'Associer des produits au document')
@section('content')
    <h3>Associer des produits au document {{ $document->reference }}</h3>
    <form method="POST" action="{{ route('documentproducts.store') }}">
        @csrf
        <div class="row">
            <div class="col-3 mb-3">
                <label for="product_id" class="form-label">Sélectionner un produit</label>
                <select name="product_id" id="product_id" class="form-control">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->brand }} {{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3 mb-3">
                <label for="selling_price" class="form-label">Prix de Vente (HTVA)</label>
                <input type="number" id="selling_price" name="selling_price" class="form-control" required>
            </div>
            <div class="col-3 mb-3">
                <label for="quantity" class="form-label">Quantité</label>
                <input type="number" id="quantity" name="quantity" class="form-control" required>
            </div>
            <div class="col-3 mb-3">
                <label for="discount" class="form-label">Remise</label>
                <input type="number" id="discount" name="discount" class="form-control" required>
            </div>
            <div class="col-3 mb-3">
                <label for="price_hvat" class="form-label">Prix HTVA</label>
                <input type="number" id="price_hvat" name="price_hvat" class="form-control" required>
            </div>
            <div class="col-3 mb-3">
                <label for="price_vvat" class="form-label">Prix TVAC</label>
                <input type="number" id="price_vvat" name="price_vvat" class="form-control" required>
            </div>
            <div class="col-3 mb-3">
                <label for="total_hvat" class="form-label">Total HTVA</label>
                <input type="number" id="total_hvat" name="total_hvat" class="form-control" required>
            </div>
            <div class="col-3 mb-3">
                <label for="total" class="form-label">Total TVAC</label>
                <input type="number" id="total" name="total" class="form-control" required>
            </div>
            <input type="hidden" name="document_id" value="{{ $document->id }}">
        </div>
        <button type="submit" class="btn btn-primary">Associer le produit</button>
        <a href="{{ route('documents.index') }}" class="btn btn-secondary">Retour</a>
    </form>
    <h3 class="mt-4">Produits associés au document</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Produit</th>
                <th>Prix de Vente</th>
                <th>Quantité</th>
                <th>Remise</th>
                <th>Prix HTVA</th>
                <th>Prix TVAC</th>
                <th>Total HTVA</th>
                <th>Total TVAC</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($document->products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->pivot->selling_price }}</td>
                    <td>{{ $product->pivot->quantity }}</td>
                    <td>{{ $product->pivot->discount }}</td>
                    <td>{{ $product->pivot->price_hvat }}</td>
                    <td>{{ $product->pivot->price_vvat }}</td>
                    <td>{{ $product->pivot->total_hvat }}</td>
                    <td>{{ $product->pivot->total }}</td>
                    <td>
                        <form action="{{ route('documentproducts.destroy', [$document->id, $product->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Dissocier</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
