<?php


use App\Models\Listing;

use Illuminate\Http\Request;
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

// View SINGLE listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);