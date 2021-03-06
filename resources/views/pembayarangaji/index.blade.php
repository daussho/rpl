
<!DOCTYPE html>
<html>
   <head>
		<title>Data Pembayaran Gaji Pegawai</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	</head>
	<body>
      <div style="display: none">
         {{$no=0}}  
      </div>
      <?php
            @include_once(app_path() . '/navbar/navbar.php');
      ?>
      <div class="container">
         <br>
         <h2><center>Data Pembayaran Gaji Pegawai</center></h2>
         <br><br> 
         <button type="button" class="btn btn-info" onclick="window.location='{{ url("pembayarangaji/reset") }}'">+ Reset</button>
         <br><br> 
         <button type="button" class="btn btn-info" onclick="window.location='{{ url("pembayarangaji/laporan") }}'">+ Download Tabel Pembayaran</button>
         <br><br>      
         <table class="table table-striped" >
            <thead class="thead-inverse">
               <tr align="center">
                  <th><center>No</center></th>
                  <th><center>NIP</center></th>
                  <th><center>Tanggal</center></th>
                  <th><center>Total Pembayaran</center></th>
                  <th><center>Status Pembayaran</center></th>
                  <th colspan="2"><center>Action</center></th>
               </tr>
            </thead>
            <tbody align="center">
               @foreach($pembayarangaji as $result)
               <tr>
                  <td>{{$no=$no+1}}</td>
                  <td>{{$result->nip_bayar}}</td>
                  <td>{{$result->bulan}}</td>   
                  <td>{{$result->total_pembayaran}}</td>
                  @if ($result->status_pembayaran==1)
                     <td>Sudah Bayar</td>
                  @endif
                  @if ($result->status_pembayaran==0)
                     <td>Belum Bayar</td>
                  @endif
                  <td><button type="button" class="btn btn-primary" onclick="window.location='{{ url("pembayarangaji/edit/$result->id") }}'">Edit Status Pembayaran</button></td>
                   <td><button type="button" class="btn btn-danger" onclick="window.location='{{ url("pembayarangaji/totalbiaya/$result->id") }}'">Check Total Pembayaran</button></td>
               </tr>
               @endforeach
               @if(Session::has('flash_message'))
                 <div class="alert alert-danger"><em> {!! session('flash_message') !!}</em></div>
               @endif
               </div>
            </tbody>
         </table>
      </div>
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
   </body>
</html>
