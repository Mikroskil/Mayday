<?php
/*$host = "localhost";
$user = "root";
$pass = "";
$db = "dbsehat";
$connect = mysql_connect($host,$user,$pass) or die("Koneksi ke database server gagal.");
$pilih_db = mysql_select_db($db,$connect) or die("Database tidak ditemukan.");*/
$host = "localhost";
$username = "root";
$password = "";
$databasename = "dbsehat";
$connection = mysql_connect($host, $username, $password) or die("Kesalahan Koneksi ... !!");
mysql_select_db($databasename, $connection) or die("Databasenya Error");
?>