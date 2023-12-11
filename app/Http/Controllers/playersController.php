<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class playersController extends Controller
{
    public function index()
    {

        $data = Player::all();
        return view('players', ['players' => $data]);
    
    }

}
