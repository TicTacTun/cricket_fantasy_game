<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class playersController extends Controller
{
    public function index()
    {
        $players = true; // Replace this with your actual condition

        if ($players) {
            $data = Player::where('role', 'Wicket Keeper')->get();
        } 
        return view('players', ['players' => $data]);
        if ($players) {
            $data = Player::where('role', 'Batsman')->get();
        } 
        return view('players', ['players' => $data]);
        if ($players) {
            $data = Player::where('role', 'All Rounder')->get();
        } 
        return view('players', ['players' => $data]);
        if ($players) {
            $data = Player::where('role', 'Bowler')->get();
        } 
            
        return view('players', ['players' => $data]);

    }

}

// Assuming you have a condition, for example, filtering players with a certain attribute
// $condition = true; // Replace this with your actual condition

// if ($condition) {
//     $data = Player::where('your_column', 'your_value')->get();
// } else {
//     $data = Player::all();
// }

// return view('players', ['players' => $data]);
