<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;

Route::resource('kategori', KategoriController::class);
Route::resource('produk', ProdukController::class);

Route::get('/', function () {
    return view('welcome');
    
});
