<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chats;

class ChatCreateController extends Controller
{
    public function createchat () {
        $chat = new chats;
        $chat->chatname = request()->cname;
        $chat->save();
        return redirect('/admin');
    }
}
