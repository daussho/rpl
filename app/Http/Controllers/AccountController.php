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
			#session_start();
			$_SESSION['login_user'] = $request->id;
			$_SESSION['tipe'] = $type[0]->tipe;
			return redirect('/');
		} else {
			$_SESSION['msg'] = "ID atau Password salah!";
		 	return redirect('/login');
		}
	}
	
	public function index(){
		$users = DB::table('users')
			->select('id', 'tipe')
			->get();
        return view('admin/DeleteAccount', ['users' => $users]);
	}

	public function register(Request $request){
		if (!is_numeric($request->id)){
			$_SESSION['msg'] = "ID harus berupa angka!";
		} else {
			$pass = hash('sha256', $request->pwd);
			$type = DB::select("select tipe from users where id = ".$request->id." AND password = '".$pass."';");
			if ($type != null){
				$_SESSION['msg'] = "ID sudah terdaftar!";
			} else {
				DB::table('users')->insert(['id' => $request->id, 'password' => $pass, 'tipe' => $request->tipe]);	
				$_SESSION['msg'] = "Registrasi berhasil!";
			}
		}
		return redirect('/admin/add');
	}

	public function delete(Request $request){
		DB::table('users')->where('id', '=', $request->choice)->delete();
		$_SESSION['msg'] = "Delete akun ".$request->choice." berhasil!";

		return redirect('/admin/list');
	}

	public function logout(){
		session_unset();
		return redirect('/login');
	}
}

?>