<?php
     if ($_SESSION['tipe'] == 1){
        include 'navbar-admin.html';
     } else if ($_SESSION['tipe'] == 2){
        include 'navbar-supervisor.html';
     }if ($_SESSION['tipe'] == 3){
     	include 'navbar-user.html';
     }
?>