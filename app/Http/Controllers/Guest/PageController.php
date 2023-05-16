<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function index()
    {


        $comics = config('comics');


        return view('home', compact('comics'));
    }
}
