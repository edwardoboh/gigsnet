<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // fetch and show all listings
    public function index()
    {
        dd(Listing::lazy()->where('id', '>', 0)->all());
        return view('listing.listings', [
            // 'listings' => Listing::all(),
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }

    // Show a single listing
    public function show(Listing $listing)
    {
        return view('listing.listing', [
            'listing' => $listing
        ]);
    }
}
