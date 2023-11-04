@extends('layouts')

@section('content')
    <h3>{{ $document->id ? 'Modifier' : 'Ajouter' }} le Document</h3>
    <form method="POST" action="{{ $document->id ? route('documents.update', $document->id) : route('documents.store') }}">
        @csrf
        @if($document->id)
            @method('PUT')
        @endif
        <div class="row">
            <div class="col-4 mb-3">
                <label for="reference" class="form-label">Référence</label>
                <input type="text" id="reference" name="reference" value="{{ old('reference', $document->reference) }}" class="form-control">
            </div>
            <div class="col-4 mb-3">
                <label for="customer_id" class="form-label">Client</label>
                <select name="customer_id" id="customer_id" class="form-control">
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}" {{ old('customer_id', $document->customer_id) == $customer->id ? 'selected' : '' }}>
                            {{ $customer->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-4 mb-3">
                <label for="documenttype_id" class="form-label">Type de document</label>
                <select name="documenttype_id" id="documenttype_id" class="form-control">
                    @foreach($documentTypes as $type)
                        <option value="{{ $type->id }}" {{ old('documenttype_id', $document->documenttype_id) == $type->id ? 'selected' : '' }}>
                            {{ $type->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-4 mb-3">
                <label for="totalhvat" class="form-label">Total hors TVA</label>
                <input type="number" id="totalhvat" name="totalhvat" value="{{ old('totalhvat', $document->totalhvat) }}" class="form-control">
            </div>
            <div class="col-4 mb-3">
                <label for="vat" class="form-label">TVA (%)</label>
                <input type="number" id="vat" name="vat" value="{{ old('vat', $document->vat) }}" class="form-control">
            </div>
            <div class="col-4 mb-3">
                <label for="totalttc" class="form-label">Total TTC</label>
                <input type="number" id="totalttc" name="totalttc" value="{{ old('totalttc', $document->totalttc) }}" class="form-control">
            </div>
            <div class="col-12 mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" {{ old('status', $document->status) == 'N' ? 'selected' : '' }}>Actif</option>
                    <option value="0" {{ old('status', $document->status) == 'A' ? 'selected' : '' }}>Inactif</option>
                </select>
            </div>
            <div class="col-12 mb-3">
                <label for="comment" class="form-label">Commentaire</label>
                <textarea id="comment" name="comment" class="form-control">{{ old('comment', $document->comment) }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{ $document->id ? 'Mettre à jour' : 'Ajouter' }}</button>
        <a href="/documents" class="btn btn-secondary">Retour</a>
    </form>
@endsection