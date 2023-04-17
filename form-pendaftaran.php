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
          <a href="index.php"><< Back to Home</a>
        </div>
        <h1>Registration New Student SMK Suzuran 2023/2024</h1>
        <form action="proses-pendaftaran.php" method="POST">
          <div class="input-label">
            <label id="icon" for="nama">Name</label>
            <input type="text" name="nama" id="nama" placeholder="Full Name" required/>
          </div>
          <div class="input-label">
            <label id="icon" for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" placeholder="Alamat" required/>
          </div>
          <div class="input-label">
            <label id="icon" for="jenis_kelamin">Jenis Kelamin</label>
            <div class="radio-input">
              <p><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</p>
              <p><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</p>
            </div>
          </div>
          <div class="input-label">
            <label for="agama">Agama: </label>
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
            <input type="text" name="sekolah_asal" placeholder="Asal Sekolah" />
          </div>
          <div class="btn-block">
            <button id="btnSignup" type="submit" name="daftar">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>