<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ListingController;

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  


// View ALL listing
Route::get('/', [ListingController::class, 'index']);

// View ALL listing
Route::get('/listings', [ListingController::class, 'index']);

// Create new Listing
Route::get('/listings/create', [ListingController::class, 'create']);

// Save new Listing
Route::post('/listings', [ListingController::class, 'store']);

// View SINGLE listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);