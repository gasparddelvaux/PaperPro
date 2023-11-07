@extends('layouts.app')
@section('title', 'Vos produits')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Liste des produits</h3>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Ajouter un produit</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Référence</th>
                <th scope="col">Nom</th>
                <th scope="col">Marque</th>
                <th scope="col">EAN</th>
                <th scope="col">Stock</th>
                <th scope="col">Stock min</th>
                <th scope="col">P. d'achat</th>
                <th scope="col">P. de vente</th>
                <th scope="col">Statut</th>
                <th scope="col">Création</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->reference }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->ean_code }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->stock_min }}</td>
                    <td>{{ $product->buying_price }}</td>
                    <td>{{ $product->selling_price }}</td>
                    <td>{{ $product->status }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="ti ti-edit-circle"></i> Modifier</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
