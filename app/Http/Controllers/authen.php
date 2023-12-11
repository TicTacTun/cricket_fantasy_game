<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash; // secure our passwords
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Mail\forgotpassmail;
use Mail;
use Str;

class authen extends Controller
{
    public function login(){
        return view('authentication.login');
    }
    public function loginUser(Request $request){
        $request->validate([
            
            'email'=>'required|email',
            'pass'=>'required|min:6|max:12'

        ]);

        $user = DB::table('users')->where('email', $request->email)->first();
    

        if ($user){
            $type = DB::table('users')->where('email', $request->email)->where('user_type', 'user')->select('user_type')->first();
            
            if ($type!=null){
                if ($type->user_type == 'user' ){
                    if (Hash::check($request->pass, $user->password)){

                        $request->session()->put('loginId', $user->id);
                        return redirect('dashboard');

                    }else{
                        return back()->with('fail','Password not match or do not have any email');
                    }
                }
            }elseif($type == null){
                if ($request->pass == $user->password){

                    $request->session()->put('loginId', $user->id);
                    return redirect('adminDashboard');

                }else{
                    return back()->with('fail','Password not match or do not have any email');
                }

            }
            

        }else{
            return back()->with('fail','This email not found');

        }
    }


    
    public function register(){
        return view("authentication.signup");
    }
    public function registerUser(Request $request){

        $request->validate([

            'name'=>'required',
            'email'=>'required|email|unique:users',
            'pass'=>'required|min:6|max:12',
            'cpass'=>'required|min:6|max:12',

        ]);

        
        if ($request->pass == $request->cpass) {
            
            $saved = DB::table('users')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make(($request->pass)),
                're-password' => Hash::make(($request->pass)),
                'user_type' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),                
            ]);

            if($saved){

                return redirect('login')->with('success','You have been registered!');

            }else{

                return back()->with('fail','Something Wrong!');

            }
        }else{
            return back()->with('fail','Password doesnt match!');  
        }

    }

    public function dashboard(){

        $data = array();
        if (Session::has('loginId')){
            $data = DB::table('users')->where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }

    public function forgetpass(){
        return view('authentication.forgetpass');
    }

    public function postforgetpass(Request $request){
        $user= DB::table('users')->where('email','=', $request->email)->first();
        if(!empty($user)){
            $newToken = Str::random(30);
            session(['reset_token' => $newToken]);
            DB::table('users')->where('email', $request->email)->update(['remember_token' => $newToken]);

            Mail::to($user->email)->send(new forgotpassmail($user));
            return back()->with('success','Mail has been sent');
            
        }else{
            return back()->with('fail','Email not found');
        };
    }
    public function reset(){
        $token = session('reset_token');
        $user = DB::table('users')->where('remember_token','=',$token)->first();
        
        if(!empty($user)){
            $data['user'] = $user;
            return view("authentication.reset",$data);
        }
        else{
            abort(404);
        }
    }

    public function resetnewpass(Request $request){
        $request->validate([
            'pass'=>'required|min:6|max:12',
            'cpass'=>'required|min:6|max:12',

        ]);

        
        if ($request->pass == $request->cpass) {
            
            $saved = DB::table('users')->update([
                
                'password' => Hash::make(($request->pass)),
                're-password' => Hash::make(($request->pass)),
                'updated_at' => Carbon::now(),                
            ]);

            if($saved){

                return redirect('login')->with('success','You password have been changed');

            }else{

                return back()->with('fail','Something Wrong!');

            }
        }else{
            return back()->with('fail','Password doesnt match!');  
        }
    }
    public function logout(){

        if (Session::has('loginId')){

            Session::pull('loginId');
            
            return redirect('/');

        }
    }
}
