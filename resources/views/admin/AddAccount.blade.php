<?php
   if(empty($_SESSION['login_user'])){
      return redirect()->route('login');
   }
?>

<!DOCTYPE html>
<html>
   	<head>
		<title>Add Account</title>
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
                  <div class="panel panel-default" align="left">
                     <div class="panel-heading"><h2>Add Account</h2></div>
                     <div class="panel-body">
                        <?php
                          if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                          }
                        ?>
                        <br>
                        <form action = "#" method="POST">
                           <div class="form-group">
                              <input type="text" class="form-control" name="id" placeholder="ID" required>
                              </br>
                              <input type="password" class="form-control" name="pwd" placeholder="Password" required>
                              </br>
                              <select class="form-control" name="tipe" required>
                                 <option value=2>Supervisor</option>
                                 <option value=3>User</option>
                              </select>
                              </br>
                              <button type="submit" class="btn btn-default">Submit</button>
                              {{ csrf_field() }}
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4"></div>
      </center>
   </body>
</html>