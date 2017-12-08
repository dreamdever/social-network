<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Message;

class MessageController extends Controller
{
    public function getMessages($id) {
        $messages = Message::select('messages.id as id','from_id', 'to_id', 'text', 'time', 'users.id as user_id','img','name')
        					->where([['from_id', Auth::user()->id],['to_id', $id]])
        					->orWhere([['from_id', $id],['to_id', Auth::user()->id]])
        					->join('users', 'users.id', '=', 'from_id')
        					->orderBy('time', 'asc')
        					->get();


        return view('user.partial.chat',[
        	'messages' => $messages,
        	'id' => $id
        ]);
    }

    public function send(Request $request) {

    	$message = new Message;
    	$message->text = $request->text;
    	$message->from_id = Auth::user()->id;
    	$message->to_id = $request->to_id;
    	$message->save();

    	return redirect('chat/'.$request->to_id);
    }
}
