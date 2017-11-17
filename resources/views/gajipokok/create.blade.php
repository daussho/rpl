<?php
   session_start();
   if(empty($_SESSION['login_user'])){
      header('Location: login.blade.php');
   }
?>
<!DOCTYPE html>
<html>
   	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	</head>
	<body>
      <form action="/gajipokok/create" method="post">
         NIP: <input type="text" name="nip"><br>
         Bulan: <input type="text" name="bulan"><br>
         Nominal: <input type="text" name="nominal"><br>
         <input type="submit" value="Submit">
         {{ csrf_field() }}
      </form>

   </body>
</html>
