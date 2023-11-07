@extends('layouts.app')
@section('title', 'Vos types de document')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Liste des types de documents</h3>
        <a href="{{ route('documenttypes.create') }}" class="btn btn-primary">Ajouter un type</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Référence</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Statut</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documentTypes as $documentType)
                <tr>
                    <td>{{ $documentType->id }}</td>
                    <td>{{ $documentType->reference }}</td>
                    <td>{{ $documentType->name }}</td>
                    <td>{{ $documentType->description }}</td>
                    <td>{{ $documentType->status }}</td>
                    <td>
                        <a href="{{ route('documenttypes.edit', $documentType->id) }}" class="btn btn-primary btn-sm"><i class="ti ti-edit-circle"></i> Modifier</a>
                        <form action="{{ route('documenttypes.destroy', $documentType->id) }}" method="POST" class="d-inline">
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