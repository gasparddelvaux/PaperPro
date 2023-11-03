<?php

use Illuminate\Support\Facades\Route;

// Route pour la page de login
Route::get('/', function () {
    return view('login');
});
// Routes pour les Documents
Route::resource('documents', 'App\Http\Controllers\DocumentController');
// Routes pour les Clients
Route::resource('customers', 'App\Http\Controllers\CustomerController');
// Routes pour les Produits
Route::resource('products', 'App\Http\Controllers\ProductController');