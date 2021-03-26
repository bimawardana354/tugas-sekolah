<?php
include 'koneksi.php';
if(isset($_POST['simpancontact'])){

$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$no_telepon = $_POST['no_telepon'];
$pesan = $_POST['pesan'];
$sql = "INSERT INTO contact (id, nama_lengkap, email, no_telepon, pesan) VALUES ('$id','$nama_lengkap','$email','$no_telepon','$pesan')";
$query = mysqli_query($connect,$sql);
if ($query) {
    header('Location: portofolio.php');
}else{
    header('Location: simpancontact.php?status=gagal');
}
}
?>