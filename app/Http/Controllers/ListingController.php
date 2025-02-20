<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(){
        $listings = Listing::first();
        
        return view('listing.index', compact('listings'));
    }
}