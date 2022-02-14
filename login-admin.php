<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>
<body>
    
	<div class="container">
		<h4 class="text-center">FORM LOGIN</h4>

		<form method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
			</div>
			<br>
			<button type="submit" class="btn btn-primary" name="login" value="login">LOGIN</button>
		</form>
	</div>

		<?php
		//jika ada tombol login gi
		if(isset($_POST["login"]))
		{
			$username = $_POST["username"];
			$password = $_POST["password"];
			//lakukan query mengecek akun di tabel user di db
			$data = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE username='$username'
				AND password ='$password'");

			//ngitung akun yg terambil
			$akunbenar = mysqli_num_rows($data);

			//jika 1 akun cocok maka login
			if($akunbenar==1)
			{
				//anda login
				$akun = mysqli_fetch_assoc($data);
				if($akun['roles'] == "Administrator"){
					echo "<script>alert('Login Admin berhasil!')</script>";
					echo "<script>location='admin/home-admin.php';</script>";
				}else{
					echo "<script>alert('Selamat datang')</script>";
					echo "<script>location='home-pelanggan.php';</script>";
				}
				
			}
			else
			{
				//anda gagal login
				echo "<script>alert('Login failed! Please try again')</script>";
				echo "<script>location='index.php';</script>";
			}
		}
		?>
        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>