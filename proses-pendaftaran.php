<?php

include("config.php");

if(isset($_POST['daftar'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jk = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $sekolah = $_POST['sekolah_asal'];

  $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

  if($query) {
    header("Location: index.php?status=success");
  } else {
    header("Location: index.php?status=failed");
  }
} else {
  die("You do not have permission to access this page");
}

?>