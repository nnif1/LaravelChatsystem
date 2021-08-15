<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prelation; 

class PermAddController extends Controller
{
    //
    public function permtouser() {
        $pre = new prelation;
        $pre->userid = request()->useid;
        $pre->permid = request()->perid;
        $pre->save();
        return redirect('/admin');
    }
}
