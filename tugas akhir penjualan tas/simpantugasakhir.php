<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$diskon = $_POST['diskon'];
$ppn = $_POST['ppn'];
$total_bayar = $_POST['total_bayar'];

$sql = "INSERT INTO pesanan (nama_barang, harga_barang, jumlah_barang, , diskon, ppn, total_bayar) VALUES ('$nama_barang','$harga_barang','$jumlah_barang','$diskon','$ppn','$total_bayar')";
$query = mysqli_query($connect,$sql);
if ($query) {
    header('Location: tampiltugasakhir.php');
}else{
    header('Location: simpantugasakhir.php?status=gagal');
}
}
?>