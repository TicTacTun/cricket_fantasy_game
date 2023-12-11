<?php

use App\Http\Controllers\authen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cricketapicontroller;
use App\Http\Controllers\playerscontroller;
use App\Http\Controllers\howtoplaycontroller;
use App\Http\Controllers\admin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
#login route
Route::get('/', [authen::class,'login']);
Route::get('/login',[authen::class,'login'])->middleware('islogout');
Route::post('login-user',[authen::class,'loginUser'])->name('login-user');

#forget Password route
Route::get("/forget-password",[authen::class,'forgetpass'])->name('forget-password')->middleware('islogout');
Route::post('postforgetpass',[authen::class,'postforgetpass'])->name('postforgetpass');
Route::get('reset',[authen::class,'reset'])->name('reset')->middleware('islogout');
Route::post('postreset',[authen::class,'resetnewpass'])->name('post-reset');

#signup route
Route::get("/register",[authen::class,'register'])->middleware('islogout');
Route::post("/register-user",[authen::class,'registerUser'])->name('register-user');

#logout route
Route::get('/logout',[authen::class,'logout']);

#after login route
Route::get("/dashboard",[authen::class,'dashboard'])->middleware('isLoggedIn');

#api route
Route::get('/points', [cricketapicontroller::class, 'cricinfo']);

#Team Creation route
Route::get('/teamcreation', [playerscontroller::class, 'index'])->middleware('isLoggedIn');

#How to play route
Route::get('/howtoplay', [howtoplaycontroller::class, 'howto'])->middleware('isLoggedIn');

#admin route
Route::get('/adminDashboard',[admin::class,'loginAdmin'])->middleware('isLoggedIn');