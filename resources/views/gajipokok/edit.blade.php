
<!DOCTYPE html>
<html>
   	<head>
		<title>Edit Gaji Pokok</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	</head>
	<body>
      <?php
            @include_once(app_path() . '/navbar/navbar.php');
      ?>
      <div class="container">
         <h2>Edit Gaji Pokok</h2>
         <form action="/gajipokok/edit" method="post">
            @foreach($gajipokok as $result)
               <div class="form-group">
                  <label for="nip">NIP</label>
                  <input type="text" name="nip" id="nip" readonly class="form-control" value="{{$result->nip}}">
               </div>
               <div class="form-group">
                  <label for="bulan">Tanggal</label>
                  <input type="text" name="bulan" id="bulan" readonly class="form-control" value="{{$result->bulan}}">
               </div>
               @endforeach
               <div class="form-group">
                  <label for="nominal">Nominal</label>
                  <input type="text" id="nominal" name="nominal" class="form-control"><br>
               </div>
               <input type="submit" value="Submit">
               {{ csrf_field() }}
         </form>
      </div>
   </body>
</html>
