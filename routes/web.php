<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/tienda', function () {
    return view('tienda');
});

// Esta línea ya cubre todas las rutas CRUD para productos (incluye index, store, create, edit, update y destroy)
Route::resource('productos', ProductoController::class);
