@extends('layouts.app')
@section('title')
    {{ $user->id ? 'Modifier l\'utilisateur' : 'Ajouter un utilisateur' }}
@endsection
@section('content')
    <h3>{{ $user->id ? 'Modifier l\'' : 'Ajouter un ' }}utilisateur</h3>
    <form method="POST" action="{{ $user->id ? route('users.update', $user->id) : route('users.store') }}">
        @csrf
        @if($user->id)
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
                <label for="name" class="form-label">Nom</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control">
            </div>
            <div class="col-4 mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control">
            </div>
            <div class="col-4 mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{ $user->id ? 'Mettre à jour' : 'Ajouter' }}</button>
        <a href="/users" class="btn btn-secondary">Retour</a>
    </form>
@endsection