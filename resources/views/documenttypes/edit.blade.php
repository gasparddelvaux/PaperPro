@extends('layouts.app')
@section('title')
    {{ $documentType->id ? 'Modifier le type de document' : 'Ajouter un type de document' }}
@endsection
@section('content')
    <h3>{{ $documentType->id ? 'Modifier le' : 'Ajouter un' }} type de document</h3>
    <form method="POST" action="{{ $documentType->id ? route('documenttypes.update', $documentType->id) : route('documenttypes.store') }}">
        @csrf
        @if($documentType->id)
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

            <div class="col-4 mb-3">
                <label for="reference" class="form-label">Référence</label>
                <input type="text" id="reference" name="reference" value="{{ old('reference', $documentType->reference) }}" class="form-control">
            </div>

            <div class="col-4 mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" id="name" name="name" value="{{ old('name', $documentType->name) }}" class="form-control">
            </div>
            
            <div class="col-4 mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ old('status', $documentType->status) == 1 ? 'selected' : '' }}>Actif</option>
                    <option value="0" {{ old('status', $documentType->status) == 0 ? 'selected' : '' }}>Inactif</option>
                </select>
            </div>

            <div class="col-12 mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control">{{ old('description', $documentType->description) }}</textarea>
            </div>

        </div>
        <button type="submit" class="btn btn-primary">{{ $documentType->id ? 'Mettre à jour' : 'Ajouter' }}</button>
        <a href="{{ route('documenttypes.index') }}" class="btn btn-secondary">Retour</a>
    </form>
@endsection