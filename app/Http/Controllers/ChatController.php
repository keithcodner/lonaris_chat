<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('pages.chat');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
