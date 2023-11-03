@extends('layouts')
@section('content')
    <h1>Liste des Produits</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Référence</th>
                <th>Nom</th>
                <th>Marque</th>
                <th>Code EAN</th>
                <th>Stock</th>
                <th>Stock minimum</th>
                <th>Prix d'achat</th>
                <th>Prix de vente</th>
                <th>Statut</th>
                <th>Création</th>
                <th>Action</th>
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
                        <a href="{{ route('products.edit', $product->id) }}">Modifier</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
