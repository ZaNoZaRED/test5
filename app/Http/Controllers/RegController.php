<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class RegController extends Controller
{
    public function showRegister(){
        return view('register');
    }
    public function register(Request $request) {
        $request -> validate([
            'name' => 'required|max:50',
            'password' => 'required|min:8',
            'email' => 'required|email|unique:users'
        ]);

        $user = User::create([
            'name' => $request -> name,
            'password' => $request -> password,
            'email' => $request -> email
        ]);

        Auth::login($user);
        return redirect()->route('index');
    }
}
