<?php
include 'koneksi.php';

if (isset($_POST['simpaneditgallery'])) {

    $id_gallery = $_POST['id_gallery'];
    $foto_gallery = $_POST['foto_gallery'];
    $keterangan = $_POST['keterangan'];
    
    $sql = "UPDATE gallery SET foto_gallery='$foto_gallery', keterangan='$keterangan' WHERE id_gallery='$id_gallery'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editgallery.php?status=gagal');
    }
}
?>