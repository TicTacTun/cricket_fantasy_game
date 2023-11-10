<?php

use App\Http\Controllers\authen;
use Illuminate\Support\Facades\Route;

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
Route::get('/login',[authen::class,'login']);
Route::post('login-user',[authen::class,'loginUser'])->name('login-user');

#forget Password route
Route::get("/forget-password",[authen::class,'forgetpass'])->name('forget-password');
Route::post('postforgetpass',[authen::class,'postforgetpass'])->name('postforgetpass');
Route::get('reset',[authen::class,'reset'])->name('reset');
Route::post('postreset',[authen::class,'resetnewpass'])->name('post-reset');
#signup route
Route::get("/register",[authen::class,'register']);
Route::post("/register-user",[authen::class,'registerUser'])->name('register-user');

#logout route
Route::get('/logout',[authen::class,'logout']);

#after login route
Route::get("/dashboard",[authen::class,'dashboard']);