<?php

include("config.php");

if( !isset($_GET['id']) ){
  header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
  die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form New Student | SMK Suzuran</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/form-pendaftaran.css">
  </head>
  <body class="gradient-color">
    <div class="main">
      <div class="card-form">
        <div>
          <a href="list-siswa.php"><< Back to List</a>
        </div>
        <h1>Edit Student Form</h1>
        <form action="proses-edit.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">

          <div class="input-label">
            <label id="icon" for="nama">Name</label>
            <input type="text" name="nama" id="nama" placeholder="Full Name" value="<?php echo $siswa['nama'] ?>"/>
          </div>
          <div class="input-label">
            <label id="icon" for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $siswa['alamat'] ?>"/>
          </div>
          <div class="input-label">
            <label id="icon" for="jenis_kelamin">Jenis Kelamin</label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <div class="radio-input">
              <p><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</p>
              <p><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</p>
            </div>
          </div>
          <div class="input-label">
            <label for="agama">Agama: </label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
              <option>Islam</option>
              <option>Kristen</option>
              <option>Hindu</option>
              <option>Budha</option>
              <option>Atheis</option>
            </select>
          </div>
          <div class="input-label">
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="Asal Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>"/>
          </div>
          <div class="btn-block">
            <button id="btnSignup" type="submit" name="simpan">Save</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>