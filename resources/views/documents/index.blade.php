@extends('layouts')
@section('content')
    <h1>Liste des Documents</h1>
    <table>
        <thead>
            <tr>
                <th>Référence</th>
                <th>Client</th>
                <th>Type</th>
                <th>Total HT</th>
                <th>Total TTC</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documents as $document)
                <tr>
                    <td>{{ $document->reference }}</td>
                    <td>{{ $document->customer ? $document->customer->name : 'N/A' }}</td>
                    <td>{{ $document->documentType ? $document->documentType->name : 'N/A' }}</td>
                    <td>{{ $document->totalhvat }}</td>
                    <td>{{ $document->totalttc }}</td>
                    <td>
                        <a href="{{ route('documents.edit', $document->id) }}">Modifier</a>
                        <form action="{{ route('documents.destroy', $document->id) }}" method="POST" style="display: inline;">
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
