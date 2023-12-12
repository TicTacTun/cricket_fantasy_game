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
    public function delete_user($id){

        $user = DB::table('users')
        ->where('id','=',$id )
        ->delete();
        if($user){
            return redirect('adminDashboard')->with('deleted','Data has been deleted');
        }
    }//


    public function update_user(Request $request){
        $id = $request->email;
        $name = $request->name;
        
        
        $user = DB::table('users')
        ->where('id','=',$id )
        ->update(['name'=>$name]);
        if($user ){
            return redirect('adminDashboard')->with('update','Data has been Updated');
        }


    }
    public function points(){
        $player = DB::table('players')->get();
        return view('admin.adminpoints',compact('player'));
    }

    public function delete_player($id){
        $player = DB::table('players')
        ->where('id','=',$id )
        ->delete();
        if($player){
            return redirect('adminpoints')->with('deleted','Data has been deleted');
        }
    }

    public function editpoints($id,$name,$country,$role){
        return view ('admin.editplayer',compact('id','name','country','role'));
    }

    public function editpointssubmit(Request $request){
        
        $id = $request->id;
        $name = $request->name;
        $role = $request->role;
        $country = $request->country;
        $runs = $request->runs;
        $four = $request->fours;
        $six = $request->sixes;
        $catch = $request->catches;
        $wicket  = $request->wickets;
        
        
        $intrun = (int)$runs;
        $fourPoints = (int)$four * 2; // Assuming 2 points for each four
        $sixPoints = (int)$six * 4;  // Assuming 4 points for each six
        $catchPoints = (int)$catch * 5;  // Assuming 5 points for each catch
        $wicketPoints = (int)$wicket * 10; 

        $totalPoints = $fourPoints + $sixPoints + $catchPoints + $wicketPoints+$intrun ;
        
        
        $point = DB::table('players')
        ->where('id','=',$id)
        ->update([
            'name' => $name,
            'role' => $role,
            'country' => $country,
            'runs' => $intrun,
            'fours' => $fourPoints,
            'sixes' => $sixPoints,
            'catches' => $catchPoints,
            'wickets' => $wicketPoints,
            'total_points' => $totalPoints,
        ]);
        
    
        if($point){
            return redirect('adminpoints')->with('update','Data has been Updated');
        }

    }

    
}    


