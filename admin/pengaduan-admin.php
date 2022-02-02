<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3">Menu</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <div class="nav">
                            <a class="nav-link active" href="pengaduan-admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
                                Data Pengaduan
                                <hr>
                            </a>
                            <a class="nav-link" href="ulasan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-about"></i></div>
                                Ulasan
                                <hr>
                            </a>
                            <a class="nav-link" href="pelanggan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-about"></i></div>
                                Data Pelanggan
                                <hr>
                            </a>
                            <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-arrow-alt-circle-left"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Pengaduan</h1><br>
        <div class="col-lg-12"> <br>
            <div class="card">
                <div class="card-header text-center">
                    <h3></h3>
                </div>
                <!-- <a href="laporan-penerimaan.php" class="btn btn-primary" target="_blank">Export to PDF</a> -->
                </br></br>
            </div>
            <!-- Title -->
            <div class="card body">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr style="text-align:center;">
                        <th>No</th>
                        <th>Jenis Pengaduan</th>
                        <th>Isi Pengaduan</th>
                        <th>No WA</th>
                        <th>ID Pelanggan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include '../koneksi.php';
                $no=1;
                $data=mysqli_query($koneksi,"SELECT * FROM pengaduan ORDER BY jenis_pengaduan ASC");
                while($d=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td style="text-align:center;"><?php echo $no++; ?></td>
                    <td><?php echo $d['jenis_pengaduan']; ?></td>
                    <td><?php echo $d['isi_pengaduan']; ?></td>
                    <td><?php echo $d['no_wa']; ?></td>
                    <td><?php echo $d['id_pelanggan']; ?></td>
                    <td><?php echo $d['status']; ?></td>
                    <td>
                        <!-- <a href="detail-pengaduan.php?id_pengaduan=<?php echo $d['id_pengaduan']; ?>" class="btn btn-info">Lihat</a> -->
                        <a href="edit-pengaduan.php?id_pengaduan=<?php echo $d['id_pengaduan']; ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus-pengaduan.php?id_pengaduan=<?php echo $d['id_pengaduan']; ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin akan menghapus?')">Hapus</a>
                        <script>
                            $(".hapus").click(function () {
                                var jawab = confirm("Press a button!");
                                if (jawab === true) {
                                    var hapus = false;
                                    if (!hapus) {
                                        hapus = true;
                                        $.post('hapus-pengaduan.php', {id: $(this).attr('id_pengaduan')},
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
                </br></br>
            </div>
        </div>
      </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Perumda Delta Tirta Sidoarjo 2022</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
