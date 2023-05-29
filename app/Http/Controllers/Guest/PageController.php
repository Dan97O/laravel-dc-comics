<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $comics = config('comics');
        //$comics = Comics::all();
        //dd($comics);
        return view('home', compact('comics'));
    }
    public function comic()
    {
        $comics = config('comics');

        //$comics = Comics::all();
        //dd($comics);
        return view('comic', compact('comics'));
    }
}
