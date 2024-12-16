<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//bad practice
// Route::get('/', function () {
//     return view('welcome');
// });

//HTTP METHOD
//GET -> Aksi Mengambil data
//POST -> AKsi membuat data ke dalam database
Route::get('/', [ProductController::class, 'getProducts'])->name('product.view');
Route::get('/create-product', [ProductController::class, 'createProductPage'])->name('product.create.page');
Route::post('/create', [ProductController::class, 'createProduct'])->name('product.create');
