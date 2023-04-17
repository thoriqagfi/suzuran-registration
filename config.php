<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pendaftaran_siswa";
$port = 3307;

$db = mysqli_connect($server, $user, $password, $nama_database, $port);

if(!$db) {
  die("Cannot connect to database :" . mysqli_connect_error());
}

?>