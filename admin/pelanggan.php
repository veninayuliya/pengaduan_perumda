<?php
    session_start();
  include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pelanggan</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="../images/favicon.png" /> -->
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
     <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="home-admin.php"><img src="https://nomortelepon.id/wp-content/uploads/2019/09/PDAM-Sidoarjo.2.jpg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="home-admin.php"><img src="../images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">

            <!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown"> -->
              <a class="dropdown-item" href="../logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="home-admin.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pengaduan-admin.php">
              <span class="menu-title">Pengaduan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pelanggan.php">
              <span class="menu-title">Pelanggan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ulasan-admin.php">
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
                  <h3 class="font-weight-bold">Data Pelanggan</h3>
                </div>
                 <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr style="text-align:center;">
                        <th>No</th>
                        <th>ID Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Username</th>
                        <th>Aksi</th>
                    </tr>
                      </thead>
                      <tbody>
                      <?php
                          include '../koneksi.php';
                          $no=1;
                          $data=mysqli_query($koneksi,"SELECT * FROM pelanggan ORDER BY id_pelanggan ASC");
                          while($d=mysqli_fetch_array($data)){
                          ?>
                          <tr>
                              <td style="text-align:center;"><?php echo $no++; ?></td>
                              <td><?php echo $d['id_pelanggan']; ?></td>
                              <td><?php echo $d['nama']; ?></td>
                              <td><?php echo $d['alamat']; ?></td>
                              <td><?php echo $d['no_telp']; ?></td>
                              <td><?php echo $d['username']; ?></td>
                              <td>
                                  <a href="edit-pelanggan.php?id_pelanggan=<?php echo $d['id_pelanggan']; ?>" class="btn btn-warning">Edit</a>
                                  <a href="hapus-pelanggan.php?id_pelanggan=<?php echo $d['id_pelanggan']; ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin akan menghapus?')">Hapus</a>
                                  <script>
                                      $(".hapus").click(function () {
                                          var jawab = confirm("Press a button!");
                                          if (jawab === true) {
                                              var hapus = false;
                                              if (!hapus) {
                                                  hapus = true;
                                                  $.post('hapus-pelanggan.php', {id: $(this).attr('id_pelanggan')},
                                                  function (data) {
                                                      alert(data);
                                                  });
                                                  hapus = false;
                                              }
                                          } else {
                                              return false;
                                          }
                                      });
                                  </script>
                              </td>
                          </tr>
                          <?php
                          }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ?? 2022.<a href="#" target="_blank">Perumda Delta Tirta Sidoarjo</a> </span>
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

