<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', function () {


    if(!Auth::user()){

        return view('auth.login');
    }else{
        return redirect()->route('home');
    }
})->name('login');

Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::post('/user/register',[RegisterController::class,'signup'])->name('user.register');


Route::post('/user/login',[LoginController::class,'login'])->name('user.login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::get('/home',[HomeController::class,'index'])->name('home');

Route::prefix('/user/')->group(function(){
    Route::get('list',[UserController::class,'index'])->name('user.list');
    Route::get('create',[UserController::class,'create'])->name('user.create');
    Route::post('create',[UserController::class,'store'])->name('user.create');
    Route::get('edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('update/{id}',[UserController::class,'update'])->name('user.update');
    Route::get('delete/{id}',[UserController::class,'destroy'])->name('user.delete');
    Route::get('show/{id}',[UserController::class,'show']);

});
