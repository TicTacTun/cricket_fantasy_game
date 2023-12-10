<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class howtoplaycontroller extends Controller
{
    public function howto()
    {
        return view('howtoplay');
    }
}
