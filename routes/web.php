<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// controladores
use App\Http\Controllers\CartArticleController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('cart', function () {
    return Inertia::render('Cart');
})->middleware(['auth', 'verified'])->name('cart');

Route::get('admin', function () {
    return Inertia::render('Admin');
})->middleware(['auth', 'verified'])->name('admin');

// API
Route::apiResource("/cart-article",CartArticleController::class);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
