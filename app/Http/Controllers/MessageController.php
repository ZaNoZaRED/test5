<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::orderBy('created_at' , 'desc')->get();
        return view('welcome', compact('messages'));
    }
}
