<?php
    session_start();
  include "koneksi.php";
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

  <h3 class="my-4">Formulir Pengaduan Pelayanan Perumda Delta Tirta Sidoarjo</h3>
  <div class="col-md-6">
    <div class="container">
      <?php

         $query = "SELECT max(id_pengaduan) as maxId FROM pengaduan";
          $hasil = mysqli_query($koneksi, $query);
          $data  = mysqli_fetch_array($hasil);
          $idPengaduan = $data['maxId'];
          $noUrut = (int) substr($idPengaduan, 3, 3);
          // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
          $noUrut++;
          $char = "PGD";
          $newID = $char . sprintf("%03s", $noUrut);

        if(isset(($_POST['submit'])))
        {
                $status="Sudah Terdaftar";
                $koneksi->query("INSERT INTO pengaduan (
                    id_pengaduan, no_wa, jenis_pengaduan, isi_pengaduan, status, id_pelanggan
                    ) VALUES (
                        '$_POST[id_pengaduan]', '$_POST[no_wa]', '$_POST[jenis_pengaduan]', '$_POST[isi_pengaduan]',
                        '$status', '$_POST[id_pelanggan]'
                    )");
                echo "<script>alert('Berhasil melakukan pendaftaran.');window.location='input-pengaduan.php';</script>";
            } else {
                echo "<script>alert('Masukkan foto dengan ukuran dibawah 100mb');window.location='input-pengaduan.php;</script>'";

        }
        ?>
	<form method="POST" enctype="multipart/form-data">
            <div class="form-grup">
                <label>ID Pengaduan</label><br>
                <input type="text" class="form-control" readonly="" name="id_pengaduan" value="<?php echo $newID; ?>">
                <!-- <input type="text" name="id_pengaduan" placeholder="Masukkan ID" class="form-control" required><br> -->
            </div>
            <div class="form-grup">
                <label>ID Pelanggan</label><br>
                <input type="text" name="id_pelanggan" placeholder="Masukkan ID Pelanggan" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Nomor Whatsapp</label><br>
                <input type="text" name="no_wa" placeholder="Masukkan nomor Whatsapp" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Jenis Pengaduan</label><br>
                <select class="form-control" name="jenis_pengaduan">
                    <option value="Pipa">Pipa</option>
                    <option value="Pipa">Pipa</option>
                </select>
            </div><br>
            <div class="form-group">
                <label>Isi Pengaduan</label><br>
                <textarea name="isi_pengaduan" placeholder="Masukkan Pengaduan" style="border-radius:5px;width:570px;height:200px;" required>
                </textarea>
            </div><br>
            
          <button type="submit" class="btn btn-primary" name="submit">Submit</button><br><br>
        </form>

    </div>
  </div>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; 2022</p>
    </div>
  </footer>
</body>
</html>
