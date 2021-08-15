<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perms;
use App\Models\prelation;

class AdminController extends Controller
{
    //
    public function admin() {
        $perms = new perms;
        $relations = new prelation;
        if ($_SESSION["log"] == "in") {
            foreach ($relations::all() as $relation) {
                $uuidr = $relation->userid;
                if ($uuidr == $_SESSION["uuid"]) {
                    foreach ($perms::all() as $perm) {
                        if ($perm->id == $relation->permid) {
                            if ($perm->access == "admin") {
                                return view('admin');
                            }
                        }
                    }
                }
            }
            return redirect('/');
            
        } else {
            return redirect('/login');
        }
    }
}
