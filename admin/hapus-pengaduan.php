<?php
include '../koneksi.php';

$id_pengaduan = $_GET['id_pengaduan'];
$query = "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'";
$result = mysqli_query($koneksi, $query);
if(!$result) {
    die ("Error deleting data. ".mysqli_errno($koneksi).
    " - ".mysqli_error($koneksi));
} else {
    echo "<script>alert('Data pengaduan telah terhapus');window.location='pengaduan-admin.php';</script>";    
}
mysqli_close($koneksi);