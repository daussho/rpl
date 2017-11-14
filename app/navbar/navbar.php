<?php
	include 'navbar-supervisor.html';
     if ($_SESSION['tipe'] == "murid"){
        include 'navbar-admin.html';
     } else if ($_SESSION['tipe'] == "murid"){
        include 'navbar-supervisor.html';
     }if ($_SESSION['tipe'] == "murid"){
     	include 'navbar-supervisor.html';
     }
?>