<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Request $request) {
//        dd(request(['tag']), $request->tag, $request);
        return view('listings.index', [
            "listings" => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function show(Listing $id) {
        return view('listings.show', [
            "single_listing" => $id
        ]);
    }
}
