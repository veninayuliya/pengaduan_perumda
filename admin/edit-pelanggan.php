<?php
session_start();
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Pelanggan</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" style="color:white;">PERUMDA DELTA TIRTA SIDOARJO</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="home-panitia.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="alur_pendaftaran.php">Kelola Alur</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="penerimaan.php">Penerimaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div> -->
    </div>
  </nav>

  <div class="col-md-6">
    <h3 class="my-4">Penerimaan Siswa Baru SDN Mojotengah 2</h3>
    <div class="container">
        <?php
        $id_pelanggan = ($_GET['id_pelanggan']);

        $query = "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
        $result = mysqli_query($koneksi, $query);
        $d = mysqli_fetch_array($result);
        ?>
	  <form method="POST">
            <div class="form-grup">
                <label>ID Pelanggan</label><br>
                <input type="text" name="id_pelanggan" class="form-control" readonly value="<?php echo $d['id_pelanggan'];?>"><br>
            </div>
            <div class="form-grup">
                <label>Nama Pelanggan</label><br>
                <input type="text" name="nama" class="form-control" value="<?php echo $d['nama'];?>"><br>
            </div>
            <div class="form-group">
                <label>Alamat</label><br>
                <input type="text" name="alamat" class="form-control" value="<?php echo $d['alamat'];?>"><br>
            </div>
            <div class="form-group">
                <label>No Telepon</label><br>
                <input type="text" name="no_telp" class="form-control" value="<?php echo $d['no_telp'];?>"><br>
            </div><br>

            <a href="pelanggan.php" class="btn btn-default">Kembali</a>
            <button type="submit" class="btn btn-primary" name="update">Update</button><br><br>
        </form>
        <?php
        if(isset(($_POST['update'])))
        {
            mysqli_query($koneksi,"UPDATE pelanggan SET nama='$_POST[nama]', alamat='$_POST[alamat]', no_telp='$_POST[no_telp]'
            WHERE id_pelanggan='$_GET[id_pelanggan]'");	

            echo "<script>alert('Data pelanggan berhasil diperbaharui!');window.location='pelanggan.php';</script>";
        }
        ?>
    </div>
  </div>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Kelompok 10</p>
    </div>
  </footer>
</body>
</html>