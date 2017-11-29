<!DOCTYPE html>
<html>
   	<head>
		<title>Create Pembayaran Gaji</title>
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
        <h2>Pembayaran Gaji</h2>
        <form action="/pembayarangaji/create" method="post">
          <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP e.g. 12345" name="nip_bayar">
          </div>
          <div class="form-group">
            <label for="bulan">Tanggal:</label>
            <input type="text" class="form-control" id="bulan" placeholder="Masukkan digit bulan e.g. 3" name="bulan">
          </div>
          <div class="form-group">
            <label for="total_pembayaran">Total Pembayaran:</label>
            <input type="text" class="form-control" id="total_pembayaran" placeholder="Masukkan total pembayaran gaji pegawai" name="total_pembayaran">
          </div>
          <div class="form-group">
            <label for="status_pembayaran">Status Pembayaran:</label>
            <input type="text" class="form-control" id="status_pembayaran" placeholder="Masukkan 1 = Sudah bayar dan 0 = belum bayar" name="status_pembayaran">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
          {{ csrf_field() }}
        </form>
      </div>
   </body>
</html>
