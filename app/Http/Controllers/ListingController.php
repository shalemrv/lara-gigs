<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // All listings
    public function index() {
        $data = [
            'heading'   => 'All Listings',
            'listings'  => Listing::all()
        ];
        return view('listings.index', $data);
    }

    // public function singleOld($id){
    
    //     $listing = Listing::find($id);

    //     if (!$listing)
    //         abort(404);
    
    //     return view('listing', [
    //         'listing' => $listing
    //     ]);
    // }

    // Single Listing
    public function show(Listing $listing){
    
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
