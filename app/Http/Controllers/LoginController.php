<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function showLogin(){
        return view('login');
    }
    public function login(){
        $credentials = request()->validate([
            'email' =>'required|email',
            'password' => 'required|min:8',
        ]);

        if(Auth::attempt($credentials)){
            return redirect('/');
        }
        return redirect()->back()->withErrors(['message' => 'Invalid Credentials']);
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
