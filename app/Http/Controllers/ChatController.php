<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use App\Models\Conversation;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        //Get Conversation and Item Data
        $curr_user =  auth()->user()->id;
        
        $conversations =  "";
        $conversations =  Conversation::where('user_id', $curr_user)
                                        ->where('status', 'active')
                                        ->orWhere('from_id', $curr_user)
                                        ->orderBy('updated_at', 'DESC')
                                        ->get();


        return view('pages.chat');

    }

    public function ws_test(Request $request)
    {
        event(new \App\Events\PlaygroundEvent());
        return view('pages.trigger');
    }

    public function chat_msg(Request $request)
    {
        event(new \App\Events\ChatMessageEvent($request->message, auth()->user()));
        return null;
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
