<?php
    session_start();
    include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Detail Pengaduan</title>
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
                <div class="container-fluid">
                    <h1 class="mt-4">Detail Pengaduan</h1><br>
                    <div class="col-lg-8">
                        <?php
                        $id_pengaduan = ($_GET['id_pengaduan']);
                        $query = "SELECT jenis_pengaduan, isi_pengaduan, no_wa, id_pelanggan, status FROM pengaduan WHERE id_pengaduan='$id_pengaduan'";
                        $result = mysqli_query($koneksi, $query);
                        $d = mysqli_fetch_array($result);
                        ?>
                            <div class="form-grup">
                                <label>Jenis Pengaduan</label><br>
                                <input type="text" name="jenis_pengaduan" class="form-control" readonly value="<?php echo $d['jenis_pengaduan'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Isi Pengaduan</label><br>
                                <input type="text" name="isi_pengaduan" class="form-control" readonly value="<?php echo $d['isi_pengaduan'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>No WA</label><br>
                                <input type="text" name="no_wa" class="form-control" readonly value="<?php echo $d['no_wa'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>ID Pelanggan</label><br>
                                <input type="text" name="id_pelanggan" class="form-control" readonly value="<?php echo $d['id_pelanggan'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Status</label><br>
                                <input class="form-control" name="status" readonly value="<?php echo $d['status'];?>">
                            </div><br>
                            <a href="pengaduan-admin.php" class="btn btn-info">Kembali</a><br><br>
                    </div>
                </div>
            </div>
        </div>
        </div>
                </main>
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
