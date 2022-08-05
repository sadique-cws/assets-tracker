<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $req){

        $data = $req->only("email","password");
        
        if(Auth::attempt($data)){
            return redirect()->route("home");
        }
        else{
            return redirect()->route("login");
        }

    }

    public function logout(Request $req){
        Auth::logout();
        return redirect()->route('home');
    }
    
}
