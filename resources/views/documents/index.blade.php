@extends('layouts.app')
@section('title', 'Vos documents')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Liste des documents</h3>
        <div class="d-flex flex-row gap-2">
            <form action="{{ route('documents.index') }}" method="GET" class="d-flex gap-2">
                <div class="form-group">
                    <select name="document_type" class="form-control">
                        <option value="">Filtre de type</option>
                        @foreach($documentTypes as $type)
                            <option value="{{ $type->id }}" {{ request('document_type') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary">Filtrer</button>
            </form>
            <a href="{{ route('documents.create') }}" class="btn btn-primary">Ajouter un document</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Référence</th>
                <th>Client</th>
                <th>Type</th>
                <th>Total HT</th>
                <th>TVA</th>
                <th>Total TTC</th>
                <th>Statut</th>
                <th >Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documents as $document)
                <tr>
                    <td>{{ $document->reference }}</td>
                    <td>{{ $document->customer ? $document->customer->name : 'N/A' }}</td>
                    <td>{{ $document->documentType ? $document->documentType->name : 'N/A' }}</td>
                    <td>{{ $document->totalhvat }}</td>
                    <td>{{ $document->vat }}</td>
                    <td>{{ $document->totalttc }}</td>
                    <td>{{ $document->status }}</td>
                    <td>
                        <a href="{{ route('documents.edit', $document->id) }}" class="btn btn-primary btn-sm"><i class="ti ti-edit-circle"></i> Modifier</a>
                        <a href="{{ route('documentproducts.show', $document->id) }}" class="btn btn-primary btn-sm"><i class="ti ti-layers-linked"></i> Produits liés</a>
                        <a href="{{ route('documents.pdf', $document->id) }}" class="btn btn-primary btn-sm"><i class="ti ti-file-type-pdf"></i> Générer</a>
                        <form action="{{ route('documents.destroy', $document->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="ti ti-trash"></i> Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
