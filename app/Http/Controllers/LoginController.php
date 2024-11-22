<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request){
        $request->validate([
            '*'=>'required',
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('home')->with('success','Login Successful!');
        }else{
            return redirect()->back()->with('error','Credential Does not match! ');
        }
    }



    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','Logout Successful!');
    }
}
