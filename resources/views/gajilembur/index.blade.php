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
         
         <div class="row"> 
         @foreach($gajipokok as $result)
            <div class="col">
               NIP: {{$result->nip}}   
            </div>
            <div class="col">
               Bulan: {{$result->bulan}}   
            </div>
            <div class="col">
               Nominal: {{$result->nominal}}   
            </div>
         @endforeach

   </body>
</html>
