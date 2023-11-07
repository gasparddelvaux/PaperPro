@extends('layouts.app')
@section('title', 'Vos clients')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Liste des clients</h3>
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Ajouter un client</a>
    </div>
    <table class="table">
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
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary btn-sm"><i class="ti ti-edit-circle"></i> Modifier</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="d-inline">
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
