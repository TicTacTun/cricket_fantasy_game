<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class create_playersController extends Controller
{
    public function index1()
    {
        $data = Player::all();
        return view('player_table', ['players' => $data]);
    }
}
