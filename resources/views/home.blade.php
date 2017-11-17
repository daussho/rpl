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
       		@include_once(app_path() . '/navbar/navbar.php');
      ?>
      </br></br></br>
      <center>
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-4"></div>
               <div class="col-sm-4">
                  <p><h1>Selamat Datang</h1></p>
                  <h1>
                     <?php
                        if($_SESSION['tipe'] == 1){
                           echo "Admin";
                        } else if($_SESSION['tipe'] == 2){
                           echo "Supervisor";
                        } else if($_SESSION['tipe'] == 3){
                           echo "User";
                        }
                     ?>
                  </h1>
               </div>
               <div class="col-sm-4"></div>
      </center>
   </body>
</html>
