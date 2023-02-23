<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use App\Models\Conversation;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    
    public function create_conversation(Request $request)
    {
        $curr_user =  auth()->user()->id;

        //Generate Chat ID
        $chat_an_id = uniqid().'-'.uniqid().'-'.uniqid().'-'.uniqid().'-'.now()->timestamp;
        $conv_an_id = uniqid().'-'.uniqid().'-'.uniqid().'-'.now()->timestamp;

        
    }

    public function chat_msg(Request $request)
    {
       
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
