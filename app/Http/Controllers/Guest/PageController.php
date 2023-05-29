<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comics;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comics::all();
        //dd($comics);
        return view('home', compact('comics'));
    }
    public function comic()
    {
        $comics = Comics::all();
        //dd($comics);
        return view('comic', compact('comics'));
    }
}
