<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;


// Startseite auf Listings setzen 
Route::get('/', [ListingController::class, 'index'])->name('Startseite');

Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listings.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create');
    Route::post('/listings', [ListingController::class, 'store'])->name('listings.store');
    Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('listings.edit');
    Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('listings.update');
    Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->name('listings.destroy');

});

require __DIR__ . '/auth.php';