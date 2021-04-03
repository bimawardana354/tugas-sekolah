<?php
include 'koneksi.php';
if(isset($_POST['simpangallery'])){

$id_gallery = $_POST['id_gallery'];
$foto_gallery = $_POST['foto_gallery'];
$keterangan = $_POST['keterangan'];


$sql = "INSERT INTO gallery (id_gallery, foto_gallery, keterangan) VALUES ('$id_gallery','$foto_gallery','$keterangan')";
$query = mysqli_query($connect,$sql);
if ($query) {
    header('Location: admin.php');
}else{
    header('Location: simpangallery.php?status=gagal');
}
}
?>