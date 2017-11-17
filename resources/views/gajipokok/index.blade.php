
<!DOCTYPE html>
<html>
   <head>
		<title>Data Gaji Pokok</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	</head>
	<body>

      <div style="display: none">
         {{$no=0}}  
      </div>
      <?php
            @include_once(app_path() . '/navbar/navbar.php');
      ?>
      <div class="container">

         <button type="button" class="btn btn-info" onclick="window.location='{{ url("gajipokok/create") }}'">+ Add</button>
         <br><br><br>         
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
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
   </body>
</html>
