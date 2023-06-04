<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// // Regular GET
// Route::get('/hello', function() {
//     return response('Hello world', 200)
//     ->header('Content-Type', 'text/plain')
//     ->header('foo', 'bar');
// });

// //GET with param and constraints
// Route::get('/hello/{id}', function($id) {
//     return response("Post number $id", 200);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name . ', '. $request->age;
// });

// View ALL listing
Route::get('/listings', function(){
    $data = [
        'heading'   => 'All Listings',
        'listings'  => Listing::all()
    ];
    return view('listings', $data);
});


// View SINGLE listing
Route::get('/listings/{id}', function($id){
    
    $listing = Listing::find($id);

    // echo json_encode($listing);

    return view('listing', [
        'listing' => $listing
    ]);
});