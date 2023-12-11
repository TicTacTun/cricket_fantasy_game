<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class playersController extends Controller
{
    public function index()
    {
        return view('players');
    }

}
