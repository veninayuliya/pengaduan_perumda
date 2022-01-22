<?php
    session_start();
    include 'koneksi.php';
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
	<form action="input-proses.php" method="POST" enctype="multipart/form-data">
            <div class="form-grup">
                <label>ID Pengaduan</label><br>
                <input type="text" name="id_pengaduan" placeholder="Masukkan ID" class="form-control" required><br>
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
            
          <td class="form-control"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
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
