<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authen extends Controller
{
    public function login(){
        return view('authentication.login');
    }
}
