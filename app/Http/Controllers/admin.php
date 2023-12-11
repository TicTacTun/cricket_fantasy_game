<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class admin extends Controller
{
    public function loginAdmin(){

        $user = DB::table('users')
        ->get();
        return view("admin.adminDashboard",compact('user'));

    }
}    


