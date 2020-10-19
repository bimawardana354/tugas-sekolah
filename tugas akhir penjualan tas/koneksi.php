<?php
$host     ="localhost";
$user     ="root";  //user pada admin
$password ="";  //jika tidak ada password cukup ditulis""
$database ="web_penjualan_tas";  //nama_database
$connect  =mysqli_connect($host,$user,$password,$database) or die("Gagal Menghubungkan");  //mengecek apakah sudah terkoneksi dengan database
?>