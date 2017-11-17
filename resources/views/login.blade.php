<?php
   session_start();
   if(!empty($_SESSION['login_user'])){
      header('Location: user.php');
   }
?>
<!DOCTYPE html>
<html>
   	<head>
		<title>Login page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
      </br></br></br>
      <center>
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-4"></div>
               <div class="col-sm-4">
           	 	  <img src="{{URL::asset('/files/logo.png')}}">
           	 	  <p>
                  <div class="panel panel-default" align="left">
                     <div class="panel-heading"><h2>Login</div>
                     <div class="panel-body">
                        <?php
                          if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                          }
                        ?>
                        <br>
                        <form action = "" method="POST">
                          <?php
                            $id = 18215007;
                            $pass = "25f9e794323b453885f5181f1b624d0b";
                            $type = DB::connection('users')->select("select type from user where id = ".$id." AND password = ".$pass.";");
                          ?>
                           <div class="form-group">
                              <input type="text" class="form-control" name="id" placeholder="ID" required>
                              </br>
                              <input type="password" class="form-control" name="pwd" placeholder="Password" required>
                              </br>
                              <button type="submit" class="btn btn-default">Submit</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4"></div>
      </center>
   </body>
</html>
