<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// Routes pour les Documents
Route::get('/documents', 'App\Http\Controllers\DocumentController@index')->name('documents.index');
Route::get('/documents/create', 'DocumentController@create')->name('documents.create');
Route::post('/documents', 'DocumentController@store')->name('documents.store');
Route::get('/documents/{document}/edit', 'DocumentController@edit')->name('documents.edit');
Route::put('/documents/{document}', 'DocumentController@update')->name('documents.update');
Route::delete('/documents/{document}', 'DocumentController@destroy')->name('documents.destroy');

// Routes pour les Clients
Route::get('/clients', 'ClientController@index')->name('clients.index');
Route::get('/clients/create', 'ClientController@create')->name('clients.create');
Route::post('/clients', 'ClientController@store')->name('clients.store');
Route::get('/clients/{client}/edit', 'ClientController@edit')->name('clients.edit');
Route::put('/clients/{client}', 'ClientController@update')->name('clients.update');
Route::delete('/clients/{client}', 'ClientController@destroy')->name('clients.destroy');

// Routes pour les Produits
Route::get('/produits', 'ProductController@index')->name('products.index');
Route::get('/produits/create', 'ProductController@create')->name('products.create');
Route::post('/produits', 'ProductController@store')->name('products.store');
Route::get('/produits/{product}/edit', 'ProductController@edit')->name('products.edit');
Route::put('/produits/{product}', 'ProductController@update')->name('products.update');
Route::delete('/produits/{product}', 'ProductController@destroy')->name('products.destroy');
