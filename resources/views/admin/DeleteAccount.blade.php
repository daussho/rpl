<!DOCTYPE html>
<html>
   	<head>
		<title>Delete Account</title>
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
               <div class="col-sm-3"></div>
               <div class="col-sm-6">
                <?php
                  if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                  }
                ?>
              </br>
                <form action = "delete" method="POST">
                  <table class="table table-striped" >
                    <thead class="thead-inverse">
                       <tr align="center">
                          <th>ID</th>
                          <th>Tipe</th>
                          <th>Choice</th>
                       </tr>
                    </thead>
                    <tbody>
                      
                       @foreach($users as $result)
                       <tr>
                          <td>{{$result->id}}</td>
                          <td><?php 
                            if($result->tipe == 1){
                              echo "Admin";
                            } else if($result->tipe == 2){
                              echo "Supervisor";
                            } else {
                              echo "User";
                            }
                          ?></td>   
                          <td>
                            <?php
                              if ($result->tipe != 1){
                                echo "<input type='radio' name='choice' value='".$result->id."'><br>";
                              }
                            ?>
                            {{ csrf_field() }}
                          </td>
                       </tr>
                       @endforeach

                    </tbody>
                 </table>
                 <button type="submit" class="btn btn-default">Submit</button>
                  {{ csrf_field() }}
                 </form>
               </div>
               <div class="col-sm-3"></div>
      </center>
   </body>
</html>