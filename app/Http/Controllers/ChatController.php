<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        //
        return view('pages.chat');

    }

    public function ws_test(Request $request)
    {
        event(new \App\Events\PlaygroundEvent());
        return view('pages.trigger');
    }

    public function chat_msg(Request $request)
    {
       
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
