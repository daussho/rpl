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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
      <div class="container">
         <form action="/gajipokok/edit" method="post">
            <div class="form-group">
               @foreach($gajipokok as $result)
               <label>NIP</label>
               <input type="text" name="nip" readonly class="form-control-plaintext" value="{{$result->nip}}">
               <br>
               <label>Bulan</label>
               <input type="text" name="bulan" readonly class="form-control-plaintext" value="{{$result->bulan}}">
               @endforeach
               <br>
               <label>Nominal</label>
               <input type="text" name="nominal" class="form-control"><br>
               <input type="submit" value="Submit">
               {{ csrf_field() }}
            </div>
         </form>
      </div>
   </body>
</html>
