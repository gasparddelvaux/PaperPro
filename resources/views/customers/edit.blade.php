@extends('layouts.app')
@section('title')
    {{ $product->id ? 'Modifier le client' : 'Ajouter un client' }}
@endsection
@section('content')
    <div class="container">
        <h3>{{ $customer->id ? 'Modifier le' : 'Ajouter un' }} client</h3>
        <form method="POST" action="{{ $customer->id ? route('customers.update', $customer->id) : route('customers.store') }}">
            @csrf
            @if($customer->id)
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
                <div class="col-3 mb-3">
                    <label for="reference" class="form-label">Référence</label>
                    <input type="text" id="reference" name="reference" value="{{ old('reference', $customer->reference) }}" class="form-control" required>
                </div>
                <div class="col-3 mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $customer->name) }}" class="form-control" required>
                </div>
                <div class="col-3 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $customer->email) }}" class="form-control">
                </div>
                <div class="col-3 mb-3">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone', $customer->phone) }}" class="form-control">
                </div>
                <div class="col-6 mb-3">
                    <label for="website" class="form-label">Site Internet</label>
                    <input type="text" id="website" name="website" value="{{ old('website', $customer->website) }}" class="form-control">
                </div>
                <div class="col-6 mb-3">
                    <label for="vat_number" class="form-label">Numéro de TVA</label>
                    <input type="text" id="vat_number" name="vat_number" value="{{ old('vat_number', $customer->vat_number) }}" class="form-control">
                </div>
                <div class="col-6 mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" name="description" class="form-control">{{ old('description', $customer->description) }}</textarea>
                </div>
                <div class="col-6 mb-3">
                    <label for="comment" class="form-label">Commentaire</label>
                    <textarea id="comment" name="comment" class="form-control">{{ old('comment', $customer->comment) }}</textarea>
                </div>
                <div class="col-12 mb-3">
                    <label for="status" class="form-label">Statut</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="1" {{ old('status', $customer->status) == 1 ? 'selected' : '' }}>Actif</option>
                        <option value="0" {{ old('status', $customer->status) == 0 ? 'selected' : '' }}>Inactif</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">{{ $customer->id ? 'Mettre à jour' : 'Ajouter' }}</button>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Retour</a>
        </form>
    </div>
@endsection