<?php
include 'koneksi.php';

if (isset($_GET['id_gallery'])) {
    header('Location: admin.php');
}

$id_gallery = $_GET['id_gallery'];

$sql = "DELETE FROM gallery WHERE id_gallery ='$id_gallery'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: admin.php');
}else{
    header('Location: hapusgallery.php?status=gagal');
}
?>