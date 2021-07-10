<?php
session_start();

use Illuminate\Support\Facades\Route;
use App\Models\chats;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\LoginController;

if (isset($_SESSION["log"])) {

} else {
$_SESSION["log"] = "";
}

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
	if ($_SESSION["log"] == "in") {
    return view('home', ['post' => '<h1>hello world</h1>' ]);
	} else {
	return redirect('/login');
	}
});
Route::get('/hi', function() {
    return view('welcome');
});
Route::get('/ichat', function() {
    return view('ichat');
});
Route::get('/chat/{chatname}', function($cname) {
	if ($_SESSION["log"] == "in") {
	$_SESSION["chatty"] = $cname;
    return view('chat');
} else {
	return redirect('/login');
	}
});
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'loginin']);
Route::post('/post', [ChatController::class, 'mess']);
Route::get('/logout', [LoginController::class, 'logout']);


