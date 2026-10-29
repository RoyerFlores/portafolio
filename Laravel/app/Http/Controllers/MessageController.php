<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('messages', compact('messages'));
    }
}
