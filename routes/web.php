<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
Route::resource('listings', ListingController::class);

// Extra-Routen für Auth
Route::get('/register', [UserController::class, 'register'])->name('users.register');
Route::post('/register', [UserController::class, 'store'])->name('users.store');
Route::post('/login', [UserController::class, 'authenticate'])->name('users.authenticate');
Route::post('/logout', [UserController::class, 'logout'])->name('users.logout');