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
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
   </head>
   <body>
      <?php
       		@include('navbar/navbar-supervisor')
      ?>
      </br></br></br>
      <center>
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-4"></div>
               <div class="col-sm-4">
                  <div class="panel panel-default" align="left">
                     <div class="panel-heading"><h2>User Login</div>
                     <div class="panel-body">
                        <?php
                          if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                          }
                        ?>
                        <br>
                        <form action="cek-user-login.php" method="POST">
                           <div class="form-group">
                              <input type="text" class="form-control" name="id" placeholder="User ID" required>
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
