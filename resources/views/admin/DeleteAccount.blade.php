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
               <div class="col-sm-3"></div>
               <div class="col-sm-6">
                  <table class="table table-striped" >
                    <thead class="thead-inverse">
                       <tr align="center">
                          <th>No</th>
                          <th>NIP</th>
                          <th>Bulan</th>
                          <th>Nominal Gaji Pokok</th>
                          <th colspan="2">Action</th>
                       </tr>
                    </thead>
                    <tbody align="center">
                       @foreach($gajipokok as $result)
                       <tr>
                          <td>{{$no=$no+1}}</td>
                          <td>{{$result->nip}}</td>
                          <td>{{$result->bulan}}</td>   
                          <td>{{$result->nominal}}</td>
                          <td><button type="button" class="btn btn-primary" onclick="window.location='{{ url("gajipokok/edit/$result->id") }}'">Edit</button></td>
                          <td><button type="button" class="btn btn-danger" onclick="window.location='{{ url("gajipokok/delete/$result->id") }}'">Delete</button></td>
                       </tr>
                       @endforeach
                    </tbody>
                 </table>
               </div>
               <div class="col-sm-3"></div>
      </center>
   </body>
</html>