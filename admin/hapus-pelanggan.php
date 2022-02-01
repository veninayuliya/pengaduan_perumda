<?php
include '../koneksi.php';

$id_pelanggan = $_GET['id_pelanggan'];
$query = "DELETE FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
$result = mysqli_query($koneksi, $query);
if(!$result) {
    die ("Error deleting data. ".mysqli_errno($koneksi).
    " - ".mysqli_error($koneksi));
} else {
    echo "<script>alert('Data pelanggan telah terhapus');window.location='pelanggan.php';</script>";    
}
mysqli_close($koneksi);