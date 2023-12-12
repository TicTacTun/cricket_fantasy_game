<?php

use App\Http\Controllers\authen;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cricketapicontroller;
use App\Http\Controllers\playerscontroller;
use App\Http\Controllers\howtoplaycontroller;
use App\Http\Controllers\create_playersController;
use App\Http\Controllers\admin;
use App\Http\Controllers\points;
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
Route::get('/cricinfo', [cricketapicontroller::class, 'cricinfo']);
Route::get('/playerdetail/{key}', [cricketapicontroller::class, 'playerdetails'])->name('playerdetail');
Route::get('/fixture', [cricketapicontroller::class, 'fixture']);


#Team Creation route
Route::get('/teamcreation', [playerscontroller::class, 'index'])->middleware('isLoggedIn');

#create teams route
Route::get('/player_table', [create_playersController::class, 'index1'])->middleware('isLoggedIn');

#How to play route
Route::get('/howtoplay', [howtoplaycontroller::class, 'howto'])->middleware('isLoggedIn');
Route::get('/points', [points::class, 'points'])->middleware('isLoggedIn');
#admin route
Route::get('/adminDashboard',[admin::class,'loginAdmin'])->name('adminDashboard')->middleware('isLoggedIn');
Route::post('delete_user_admin/{id}',[admin::class,'delete_user'])->name('delete_user_admin');
Route::post('/update_user',[admin::class,'update_user'])->name('update_user');

Route::get('/adminpoints',[admin::class,'points'])->name('adminpoints');
Route::post('delete_player_admin/{id}',[admin::class,'delete_player'])->name('delete_player_admin');
Route::post('/update_points',[admin::class,'editpointssubmit'])->name('update_points');
Route::get('/admineditpoints/{id}/{name}/{role}/{country}',[admin::class,'editpoints'])->name('admineditpoints');
