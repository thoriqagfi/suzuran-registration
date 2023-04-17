<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK Suzuran Official Website</title>
  <link rel="icon" href="./assets/images/logo.jpg">
  <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>
  <nav>
    <a class="logo" href="/index.php">
      <img src="./assets/images/logo.jpg" id="logo" alt="">
      <p class="logo"> SMK Suzuran<span class="logo-point">.</span></p>
    </a>
    <div class="nav-link">
      <a href="index.php">Home</a>
      <a href="#definition">About</a>
      <a href="list-siswa.php">Suzuran's Student</a>
      <a href="#news">How to Apply</a>
    </div>
    <div>
      <a href="form-pendaftaran.php"><button class="btn-blue">Register Here!</button></a>
    </div>
  </nav>
  <section id="news">
    <!-- <h4>How to Apply?</h4> -->
    <h2>Apply Here!</h2>
    <div class="card-col">
      <div class="card" style="cursor: pointer;">
        <img src="./assets/images/card-news-1.png" alt="" style="border-radius: 10px;">
        <h3>Academic Registration <br> Batch 2023/2024</h3>
        <a href="form-pendaftaran.php" style="color: #217BF4;">Register Here!</a>
      </div>
      <div class="card" style="cursor: pointer;">
        <img src="./assets/images/card-news-2.png" alt="" style="border-radius: 10px;">
        <h3>New Student Presence <br> SMK Suzuran</h3>
        <a href="list-siswa.php" style="color: #217BF4;">See Here!</a>
      </div>

    </div>
  </section>
</body>
</html>

<?php if(isset($_GET['status'])): ?>
    <p class="total-pendaftar">
        <?php
            if($_GET['status'] == 'success'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>