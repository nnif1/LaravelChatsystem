<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\users;

class LoginController extends Controller
{
    public function login() {
		return view('login');
    
    }
    public function loginin() {
		$users = new users;
		foreach ($users::all() as $user) {
			$utemp = $user->uname;
			if (request()->uname == $utemp) {
				if (request()->pword == $user->password) {
					$_SESSION["log"] = "in";
					$_SESSION["user"] = $user->uname;
					$_SESSION["uuid"] = $user->id;
				}
			}
		}
		return redirect('/');
    
    }
	public function logout() {
		$_SESSION["log"] = "out";
		$_SESSION["user"] = "";
		
		return redirect('/login');
    
    }
}
