<?php
$host     ="localhost";
$user     ="root";  //user pada admin
$password ="";  //jika tidak ada password cukup ditulis""
$database ="portofolio_pwpb";  //nama_database
$connect  =mysqli_connect($host,$user,$password,$database) or die("Gagal Menghubungkan");  //mengecek apakah sudah terkoneksi dengan database
?>