<?php
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

  <title>Alur Pendaftaran</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand">SDN MOJOTENGAH 2</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>   
          <li class="nav-item">
            <a class="nav-link active" href="pendaftaran.php">Pendaftaran</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="penerimaan.php">Penerimaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li> 
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
      <div class="col-lg-12"> <br>
      
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
            <p class="card-text">** Pengumuman hasil penerimaan siswa baru dapat dilihat pada menu Penerimaan pada tanggal <b> 8 Juli 2021 </b> dengan keterangan status <b>Diterima/Tidak Diterima </b>.</p>
          </div>
        </div><br>
        <a href="penerimaan.php" class="btn btn-info">Ke Halaman Penerimaan</a>
        <a href="logout.php" class="btn btn-secondary">Logout</a>
      </div>
    <!-- </div> -->
    <hr>
  </div>
  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>