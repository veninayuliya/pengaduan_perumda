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
  <title>Form Pengaduan</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="https://nomortelepon.id/wp-content/uploads/2019/09/PDAM-Sidoarjo.2.jpg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
      </div>
    </nav>
    <!-- partial -->
   <!-- <div class="card mb-4"> -->
  <div class="card-body">
    <br>
    <br>
    <br>
        <div class="row">
          <div class="col-lg-12">
          <div class="alert alert-success">
	        <h6>Pendaftaran Pengaduan Telah Berhasil Diterima </h6>
          <h6>Terkonfirmasi Laporan Pada :  <?php echo $tgl ?></h6>
            <p>Status Anda saat ini adalah <b> Sudah Terdaftar </b></p>
          </div>
            <!-- <h2 class="card-title">Thanks for joining our course!</h2> -->
            <p class="card-text"><h5>**Pengaduan dan Keluhan Anda Akan Kami Tindak Lanjuti.**<h5></p>
            <p class="card-text">** Pengaduan Ini Tidak Dipungut Biaya Apapunn **</b>.</p>
          </div>
        </div><br>
        <a href="pengaduan.php" class="btn btn-info">Ke Formulir Pengaduan</a>
       
      </div>
    <!-- </div> -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.<a href="#" target="_blank">Perumda Delta Tirta Sidoarjo</a> </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>



  <!-- <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2022</p>
    </div>
  </footer> -->
</body>
</html>
