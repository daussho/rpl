<!DOCTYPE html>
<html>
   	<head>
		<title>Edit Total dan Status Pembayaran</title>
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
         <h2>Edit Total dan Status Pembayaran</h2>
         <form action="/pembayarangaji/edit" method="post">
            @foreach($pembayarangaji as $result)
               <div class="form-group">
                  <label for="nip_bayar">NIP</label>
                  <input type="text" name="nip_bayar" id="nip_bayar" readonly class="form-control" value="{{$result->nip_bayar}}">
               </div>
               <div class="form-group">
                  <label for="bulan">Tanggal</label>
                  <input type="text" name="bulan" id="bulan" readonly class="form-control" value="{{$result->bulan}}">
               </div>
               <div class="form-group">
                  <label for="total_pembayaran">Total Pembayaran</label>
                  <input type="text" name="total_pembayaran" readonly class="form-control" value="{{$result->total_pembayaran}}"><br>
               </div>
               @endforeach
               <div class="form-group">
                  <label for="status_pembayaran">Status Pembayaran</label>
                  <input type="text" id="status_pembayaran" name="status_pembayaran" class="form-control"><br>
               </div>
               <input type="submit" value="Submit">
               {{ csrf_field() }}
         </form>
      </div>
   </body>
</html>
