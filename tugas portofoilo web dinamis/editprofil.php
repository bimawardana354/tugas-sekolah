<?php
include 'koneksi.php';

if (isset($_POST['simpaneditprofil'])) {

    $id_profil = $_POST['id_profil'];
    $foto_profil = $_POST['foto_profil'];
    $nama_profil = $_POST['nama_profil'];
    $kalimat_profil = $_POST['kalimat_profil'];
    
    $sql = "UPDATE profil SET foto_profil='$foto_profil', nama_profil='$nama_profil', kalimat_profil='$kalimat_profil' WHERE id_profil='$id_profil'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editprofil.php?status=gagal');
    }
}
?>