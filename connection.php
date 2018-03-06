<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_spbu";

$koneksi = new mysqli ("localhost", "root", "", "db_spbu");

mysql_connect($host, $user, $password, $database) or die ("Koneksi Gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");
?>