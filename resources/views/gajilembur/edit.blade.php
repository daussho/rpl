
<!DOCTYPE html>
<html>
   	<head>
		<title>Edit Gaji Lembur</title>
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
         <h2>Edit Gaji Lembur</h2>
         <form action="/gajilembur/edit" method="post">
            @foreach($gajilembur as $result)
               <div class="form-group">
                  <label for="nip">NIP</label>
                  <input type="number" name="nip" id="nip" readonly class="form-control" value="{{$result->nip}}">
               </div>
               <div class="form-group">
                  <label for="bulan">Bulan</label>
                  <input type="number" name="bulan" id="bulan" readonly class="form-control" value="{{$result->bulan}}">
               </div>
               <div class="form-group">
                  <label for="gajilemburjam">Gaji Lembur/Jam</label>
                  <input type="number" required min="0" max="10000000000" name="gaji_lembur_jam" id="gajilemburjam" class="form-control" value="{{$result->gaji_lembur_jam}}">
               </div>

               @endforeach
               <div class="form-group">
                  <label for="jamlembur">Jam Lembur</label>
                  <input type="number" id="jamlembur" min="0" name="jam_lembur" class="form-control"><br>
               </div>
               <input type="submit" value="Submit">
               {{ csrf_field() }}
         </form>
      </div>
   </body>
</html>
