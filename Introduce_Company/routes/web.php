<?php

use App\Models\Product_Type;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{id?}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/product', [ProductTypeController::class, 'index'])->name('product');
Route::get('/list-product/{id?}', [ProductController::class, 'list'])->name('list');
Route::get('/show-product/{id?}', [ProductController::class, 'show'])->name('show');


