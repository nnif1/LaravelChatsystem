<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class UserCreateController extends Controller
{
    public function create() {
        $user = new users;
        $user->uname = request()->uname;
        $user->password = request()->pword;
        $user->save();
        return redirect('/admin');


    }
}
