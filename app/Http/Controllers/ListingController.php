<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // All listings
    public function index(Request $request) {
        
        $data = [
            'heading'   =>  'All Listings',
            'listings'  =>  Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ];
        return view('listings.index', $data);
    }

    // Single Listing
    public function show(Listing $listing){
    
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Create Form 
    public function create() {
        return view('listings.create');
    }

    // Save the new Listing
    public function store(Request $request) {
       
        $data = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings')],
            'location' => 'required',
            'description' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required'
        ]);

        Listing::create($data);

        return redirect('/')->with('message', 'Listing Created Successfully');
    }
}
