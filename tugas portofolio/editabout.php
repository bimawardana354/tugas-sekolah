<?php
include 'koneksi.php';

if (isset($_POST['simpaneditabout'])) {

    $id_about = $_POST['id_about'];
    $isi_about = $_POST['isi_about'];
    
    $sql = "UPDATE about SET isi_about='$isi_about' WHERE id_about='$id_about'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editabout.php?status=gagal');
    }
}
?>