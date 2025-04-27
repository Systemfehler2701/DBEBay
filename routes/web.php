<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('user', UserController::class);
Route::resource('listings', ListingController::class);

Route::post('/favorites/{listing}', [FavoriteController::class, 'store'])->name('favorites.store');


// Extra-Routen für Auth
Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/register', [UserController::class, 'store'])->name('user.store');
Route::post('/login', [UserController::class, 'authenticate'])->name('user.authenticate');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');