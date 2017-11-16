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
      <?php
       		@include_once(app_path() . '/navbar/navbar-supervisor.html');
      ?>
      </br></br></br>
      <center>
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-4"></div>
               <div class="col-sm-4">
                  <p><h1>Selamat Datang</h1></p>
               </div>
               <div class="col-sm-4"></div>
      </center>
   </body>
</html>
