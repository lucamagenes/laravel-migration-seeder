<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
        $travel_packages = TravelPackage::all();
        return view('welcome', compact('travel_packages'));
    }
}
