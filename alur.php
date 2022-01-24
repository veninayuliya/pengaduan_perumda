<?php
    session_start();
    include 'koneksi.php';
    date_default_timezone_set('Asia/Jakarta');
$tgl= date("d/m/Y h:i:s");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Form Pengaduan</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="modern-business.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" style="color:white;">PERUMDA SIDOARJO</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="input-pengaduan.php">Form Pengaduan</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="">Pengaduan</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="">Ulasan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- <div class="card mb-4"> -->
  <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
          <div class="alert alert-success">
	        <h6>Pendaftaran Pengaduan Telah Berhasil Diterima </h6>
          <h6>Terkonfirmasi Laporan Pada :  <?php echo $tgl ?></h6>
            <p>Status Anda saat ini adalah <b> Sudah Terdaftar </b></p>
          </div>
            <!-- <h2 class="card-title">Thanks for joining our course!</h2> -->
            <p class="card-text"><h5>**Pengaduan dan Keluhan Anda Akan Kami Tindak Lanjuti.**<h5></p>
            <p class="card-text">** Pengaduan Ini Tidak Dipungut Biaya Apapun. Silahkan cek Status Pengaduan dan Tulisan Ulasan Anda Pada Kolom Yang Tersedia.**</b>.</p>
          </div>
        </div><br>
        <a href="input-pengaduan.php" class="btn btn-info">Ke Formulir Pengaduan</a>
       
      </div>
    <!-- </div> -->
    <hr>
  </div>
  <!-- /.container -->


  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2022</p>
    </div>
  </footer>
</body>
</html>
