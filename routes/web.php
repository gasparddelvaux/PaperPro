<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/home', function () {
        return view('home');
    });
    Route::resource('documents', 'App\Http\Controllers\DocumentController');
    Route::get('/documents/{document}/pdf', 'App\Http\Controllers\DocumentController@pdf')->name('documents.pdf');
    Route::resource('documentproducts', 'App\Http\Controllers\DocumentProductController')->except(['destroy']);
    Route::delete('/documentproducts/{document}/{product}', 'App\Http\Controllers\DocumentProductController@destroy')->name('documentproducts.destroy');
    Route::resource('customers', 'App\Http\Controllers\CustomerController');
    Route::resource('products', 'App\Http\Controllers\ProductController');
    Route::resource('documenttypes', 'App\Http\Controllers\DocumentTypeController');
    Route::resource('users', 'App\Http\Controllers\UserController');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
