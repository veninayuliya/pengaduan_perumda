<?php
    session_start();
  include "koneksi.php";
?>

 <?php
    if(isset(($_POST['submit'])))
    {
      $balasan="Ulasan belum dibalas";
      $koneksi->query("INSERT INTO ulasan (
        id_pengaduan, ulasan, balasan
        ) VALUES (
          '$_POST[id_pengaduan]', '$_POST[ulasan]', '$balasan'
          )");
          echo "<script>alert('Berhasil mengirimkan Ulasan');window.location='ulasan.php';</script>";
          } else {
          echo "<script>alert('Gagal mengirimkan ulasan!');window.location='ulasan.php;</script>'";
            }
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ulasan Pengaduan</title>
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
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
             <li class="nav-item">
            <a class="nav-link" href="pengaduan.php">
              <span class="menu-title">Pengaduan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ulasan.php">
              <span class="menu-title">Ulasan</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Form Ulasan</h3>
                  <h6 class="font-weight-normal mb-0">Silahkan isikan ulasan Anda di sini</h6><br>
                </div>
                 <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">ID Pengaduan</label>
                      <input type="text" name="id_pengaduan" placeholder="Masukkan ID Pengaduan" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Isi Ulasan</label>
                      <textarea class="form-control" name="ulasan"  style="border-radius:5px;width:570px;height:200px;" required>
                      </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
                <div class="card-body">
                 <b><h3>Ulasan</h3></b>
                   <?php
                            include 'koneksi.php';
                            $data=mysqli_query($koneksi,"SELECT * FROM ulasan ORDER BY id_pengaduan ASC");
                            while($d=mysqli_fetch_array($data)){
                            ?>
                            <tr><hr>
                                <b><td><?php echo $d['id_pengaduan']; ?></td></b>
                                <td><?php echo $d['ulasan']; ?></td><br>
                                <b>Admin</b>
                                <td><?php echo $d['balasan']; ?></td><br><hr>
                                <td>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                </div>
              </div>

            </div>
              </div>
            </div>
          </div>


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

