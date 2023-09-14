<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Auth
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout'])->name('logout');

// User
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->name('user'); //TODO

    //* Product Related
    // Rating
    Route::post('/user/rateproduct', [UserController::class, 'rateProduct'])->name('rateProduct');

    // Favorites
    Route::get('/user/favorites', [UserController::class, 'getFavorites'])->name('favorites.get');
    Route::post('/user/favorites/toggle', [UserController::class, 'toggleFavorite'])->name('favorites.toggle');

    //Cart
    Route::get('/user/cart', [UserController::class, 'getCart'])->name('cart.get');
    Route::post('/user/cart/modify', [UserController::class, 'changeProductQuantityInCart'])->name('cart.modify');
});
