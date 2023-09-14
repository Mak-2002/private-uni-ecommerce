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
Route::prefix('/user')->name('user.')->group(
    function () {
        Route::middleware('auth:sanctum')->group(function () {
            Route::get('/', function (Request $request) {
                return $request->user();
            })->name('user');

            //* Product Related
            // Rating
            Route::post('rateproduct', [UserController::class, 'rateProduct'])->name('rateProduct');

            // Favorites
            Route::get('/favorites', [UserController::class, 'getFavorites'])->name('favorites.get');
            Route::post('/favorites/toggle', [UserController::class, 'toggleFavorite'])->name('favorites.toggle');

            //Cart
            Route::get('/cart', [UserController::class, 'getCart'])->name('cart.get');
            Route::post('/cart/modify', [UserController::class, 'changeProductQuantityInCart'])->name('cart.modify');

        });
    }
);
