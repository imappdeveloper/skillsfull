<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Website;
use App\Models\Service;
use App\Models\Feature;

class HomeController extends Controller
{
     public function index()
    {
        
        $features = Feature::where('status', 1)->get(); // or ::where() if you expect  rows

        return view('home', compact('features'));
    }
  
}
