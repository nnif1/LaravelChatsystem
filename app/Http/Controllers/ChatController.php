<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\msgs;

class ChatController extends Controller
{
    public function mess() {
	$message = new msgs;
	$message->user = $_SESSION["user"];
	$message->chat = $_SESSION["chatty"];
	$message->message = request()->texta;
	$message->save();
	return redirect('/chat/'. $_SESSION["chatty"]);
    }
}
