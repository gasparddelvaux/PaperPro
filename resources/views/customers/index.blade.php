@extends('layouts')
@section('content')
    <h1>Liste des Clients</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Référence</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Site internet</th>
                <th>Numéro de TVA</th>
                <th>Statut</th>
                <th>Création</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->reference }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->website }}</td>
                    <td>{{ $customer->vat_number }}</td>
                    <td>{{ $customer->status }}</td>
                    <td>{{ $customer->created_at }}</td>
                    <td>
                        <a href="{{ route('customers.edit', $customer->id) }}">Modifier</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display: inline;">
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
