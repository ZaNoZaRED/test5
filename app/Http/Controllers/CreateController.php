<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function showCreate(){
        return view('create');
    }
    public function create(Request $request){
        Message::create([
            'title' => request('title'),
            'text' => request('text'),
            'name' => Auth::user()->name,
        ]);
        return redirect('/')->with('success', 'Message created successfully');
    }
}
