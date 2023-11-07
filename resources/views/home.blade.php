@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
<h3>Bienvenue {{ Auth::user()->name}} !</h3>
<div class="row mt-3">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Documents</h5>
                <p class="card-text">Gérer facilement vos documents</p>
                <a href="{{route ('documents.index')}}" class="card-link">Gérer vos documents</a>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Produits</h5>
                <p class="card-text">Gérer facilement vos documents</p>
                <a href="{{route ('products.index')}}" class="card-link">Gérer vos documents</a>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Clients</h5>
                <p class="card-text">Gérer facilement vos documents</p>
                <a href="{{route ('customers.index')}}" class="card-link">Gérer vos documents</a>
            </div>
        </div>
    </div>
</div>
@endsection
