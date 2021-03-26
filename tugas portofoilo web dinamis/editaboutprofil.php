<?php
include 'koneksi.php';

if (isset($_POST['simpaneditaboutprofil'])) {

    $id_about_p = $_POST['id_about_p'];
    $nama_about = $_POST['nama_about'];
    $jk = $_POST['jk'];
    $sekolah = $_POST['sekolah'];
    $umur = $_POST['umur'];
    $agama = $_POST['agama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    
    
    $sql = "UPDATE about_profil SET nama_about='$nama_about', jk='$jk', sekolah='$sekolah', umur='$umur', agama='$agama', ttl='$ttl', alamat='$alamat' WHERE id_about_p='$id_about_p'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editaboutprofil.php?status=gagal');
    }
}
?>