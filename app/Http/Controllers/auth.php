<?php

function auth_login($id, $pwd){
	$pass = hash('sha256', 'The quick brown fox jumped over the lazy dog.');
	$type = DB::connection('user')->select("select type from user where id = ".$id." AND password = ".$pass.";");
}

?>