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

}    


