<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
        $travel_packages = TravelPackage::all();
        return view('travels.index', compact('travel_packages'));
    }

    public function show(TravelPackage $travel)
    {
        return view('travels.show', compact('travel'));
    }

    public function about()
    {
        return view('about');
    }
}
