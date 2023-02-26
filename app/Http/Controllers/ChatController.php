<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use App\Models\Conversation;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class ChatController extends Controller
{
    public function index()
    {
        //Get Conversation and Item Data
        $curr_user =  auth()->user()->id;
        $all_users = User::whereNotIn('id', [$curr_user])->get(); // select all users but me

        //Get first convo if it exists
        $first_conv = Conversation::where('user_id', $curr_user)->orWhere('from_id', $curr_user)->first();

        //Need to get something for chats, even if its empty active
        $chat_zero = Chat::where('id', '0')->limit(0)->get();
        
        //Get active conversations
        $conversations =  "";
        $conversations =  Conversation::where('user_id', $curr_user)
                                        ->where('status', 'active')
                                        ->orWhere('from_id', $curr_user)
                                        ->orderBy('updated_at', 'DESC')
                                        ->get();
        //Create custom collection
        $your_convo_collection = new Collection();

        $counter = 0;
        //Add to the custom collection
        foreach($conversations as $conversation){
            
            if($counter === 1){$first_convo = "active";}else{$first_convo = "";}
            //Someone else started the convo 
            if($conversation->user_id === $curr_user){
                //Get info for new collection of convo particiapnts
                $end_user = User::where('id', $conversation->from_id)->first();
                $last_convo = Chat::where('conversation_id', $conversation->id)->orderBy('updated_at', 'DESC')->first();

                //Add them to new collection
                $your_convo_collection->push((object)[
                    "end_user_name" => $end_user->name,
                    "end_user_id" => $end_user->id,
                    "end_user_avatar" => $end_user->avatar,
                    "last_message" => $last_convo->content,
                    "first_convo" => $first_convo,
                    "convo_id" => $conversation->id
                ]);

            //I started the convo
            }else if($conversation->from_id === $curr_user){
                //Get info for new collection of convo particiapnts
                $end_user = User::where('id', $conversation->user_id)->first();
                $last_convo = Chat::where('conversation_id', $conversation->id)->orderBy('updated_at', 'DESC')->first();

                //Add them to new collection
                $your_convo_collection->push((object)[
                    "end_user_name" => $end_user->name,
                    "end_user_id" => $end_user->id,
                    "end_user_avatar" => $end_user->avatar,
                    "last_message" => $last_convo->content,
                    "first_convo" => $first_convo,
                    "convo_id" => $conversation->id
                ]);
            }

            $counter++;
        }

        $your_convo_collection = collect($your_convo_collection);

        //Determine if convo exists or not, and tell the page what to do in each case
        if(isset($first_conv)){
            //Grab chats of first conversation or most up to date for this user
            $chats = Chat::where('conversation_id', $first_conv->id)->get();

            //Users should only ever see their own chats
            if(($curr_user === $first_conv->user_id) || ($curr_user === $first_conv->from_id) ){
                return view('pages.chat', [
                    'conversations' => $conversations,
                    'chats' => $chats,
                    'your_convo_collection' => $your_convo_collection,
                    'all_users' => $all_users
                ]); 
            }else{
                return view('pages.chat',[
                    'all_users' => $all_users
                ]); 
            }
        }else{
            return view('pages.chat', [
                'conversations' => $conversations,
                'chats' => $chat_zero,
                'your_convo_collection' => $your_convo_collection,
                'all_users' => $all_users
            ]); 
        }
    }

    public function create_conversation(Request $request)
    {
        $curr_user =  auth()->user()->id;
        $user_to_create_convo_with = $request->value1;

        //Determine if the conversation already exists item (both ways; i start convo or other person started convo)
        if (Conversation::where('user_id', $user_to_create_convo_with)->where('from_id', $curr_user)->exists() || Conversation::where('user_id', $curr_user)->where('from_id', $user_to_create_convo_with )->exists()) {
            return 'This conversation already exists';
        }else{
            //Generate Chat ID
            $chat_an_id = uniqid().'-'.uniqid().'-'.uniqid().'-'.uniqid().'-'.now()->timestamp;
            $conv_an_id = uniqid().'-'.uniqid().'-'.uniqid().'-'.now()->timestamp;

            Conversation::create([
                'user_id' => $user_to_create_convo_with, // other user
                'from_id' => $curr_user, // I clicked the msg btn
                //'item_id' => $request->item_id,
                'conv_an_id' => $conv_an_id,
                //'title' => $init_user_fname[0]. ' to ' .$end_user_fname[0],
            ]);

            $conv_id = Conversation::where('conv_an_id', $conv_an_id)->pluck('id');

            Chat::create([
                'init_user_id' => $curr_user, // I clicked the msg btn
                'end_user_id' => $user_to_create_convo_with, //other user
                'conversation_id' => $conv_id[0],
                'chat_an_id' => $chat_an_id,
                'content' => 'Hey there, I want to chat with you...'
            ]);

            return 'You convo with this person has started';
        }

        
    }

    public function ws_test(Request $request)
    {
        event(new \App\Events\PlaygroundEvent());
        return view('pages.trigger');
    }

    public function chat_msg(Request $request)
    {
        event(new \App\Events\ChatMessageEvent($request->message, auth()->user(), $request->convo, $request->sender, $request->receiver));
        return null;
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
