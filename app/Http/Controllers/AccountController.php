<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller{

	public function check(Request $request){
		$pass = hash('sha256', $request->pwd);
		$type = DB::select("select tipe from users where id = ".$request->id." AND password = '".$pass."';");
		if ($type != null){
			session_start();
			$_SESSION['login_user'] = $request->id;
			$_SESSION['tipe'] = $type[0]->tipe;

			return redirect('/');
		} else {
			$_SESSION['msg'] = "ID atau Password salah!";
		 	return redirect('/login');
		}
	}

	public function register(Request $request){
		$pass = hash('sha256', $request->pwd);
		#$type = DB::select("INSERT INTO 'users' ('id`, 'password', 'tipe') VALUES ("..", "..", "..");");
		if ($type != null){
			session_start();
			$_SESSION['login_user'] = $request->id;
			$_SESSION['tipe'] = $type[0]->tipe;

			return redirect('/');
		} else {
			$_SESSION['msg'] = "ID atau Password salah!";
		 	return redirect('/login');
		}
	}	
}

?>