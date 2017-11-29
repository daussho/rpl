  

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
            <input type="number" class="form-control" id="nip" placeholder="Masukkan NIP e.g. 12345" name="nip" required min="0" max="60000">
          </div>
          <div class="form-group">
            <label for="bulan">Bulan:</label>
            <input type="number" class="form-control" id="bulan" placeholder="Masukkan digit bulan e.g. 3" name="bulan" required min="1" max="12">
          </div>
          <div class="form-group">
            <label for="nominal">nominal:</label>
            <input type="number" class="form-control" required id="nominal" placeholder="Masukkan jumlah gaji lembur per jamnnya" name="nominal" min="0" max="1000000000">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
          {{ csrf_field() }}
        </form>
      </div>
   </body>
</html>
