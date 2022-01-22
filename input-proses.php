<?php
include'koneksi.php'; //menyisipkan/mamanggil file koneksi.php untuk koneksi dengan database
$id_pengaduan = $_POST['id_pengaduan'];
$no_wa = $_POST['no_wa'];
$jenis_pengaduan = $_POST['jenis_pengaduan'];
$isi_pengaduan = $_POST['isi_pengaduan'];
$status = "Sedang DIproses";
$id_pelanggan = $_POST['id_pelanggan'];

if(isset($_POST['simpan'])){

	$sql = "INSERT INTO pelanggan VALUES('$id_pengaduan', '$no_wa', '$jenis_pengaduan', '$isi_pengaduan', '$status', '$id_pelanggan')";
	$query = mysqli_query($koneksi, $sql);

}
?>