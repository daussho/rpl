  

<!DOCTYPE html>
<html>
   	<head>
		<title>Create Gaji Pokok</title>
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
        <h2>Buat Gaji Pokok Baru</h2>
        <form action="/gajipokok/create" method="post">
          <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP e.g. 12345" name="nip">
          </div>
          <div class="form-group">
            <label for="bulan">Bulan:</label>
            <input type="text" class="form-control" id="bulan" placeholder="Masukkan digit bulan e.g. 3" name="bulan">
          </div>
          <div class="form-group">
            <label for="nominal">Nominal:</label>
            <input type="text" class="form-control" id="nominal" placeholder="Masukkan jumlah nominal gaji pokok " name="nominal">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
          {{ csrf_field() }}
        </form>
      </div>
   </body>
</html>
