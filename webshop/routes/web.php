<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

// routes for pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::Resource('products', ProductController::class);