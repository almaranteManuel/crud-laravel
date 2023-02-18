<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/products', [productsController::class , 'index' ])
//     ->name('products.index');

// Route::get('/products/create', [productsController::class , 'create' ])
//     ->name('products.create');

// Route::post('/products/create', [productsController::class , 'store' ])
//     ->name('products.store');

Route::resource('/products', productsController::class);