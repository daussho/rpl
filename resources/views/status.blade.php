<?php
   session_start();
   if(empty($_SESSION['login_user'])){
      header('Location: login.blade.php');
   }
?>
<!DOCTYPE html>
<html>
   	<head>
		<title>Status Gaji</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	</head>
	<body>
      <?php
       		@include_once(app_path() . '/navbar/navbar.php');
      ?>
      </br></br></br>
      <center>
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-2"></div>
               <div class="col-sm-8">
                  <table class="table table-bordered">
                     <thead>
                     <tr>
                        <th>NIP</th>
                        <th>Gaji Tetap</th>
                        <th>Status</th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                  </table>
               </div>
               <div class="col-sm-2"></div>
            </div>
         </div>
      </center>
   </body>
</html>