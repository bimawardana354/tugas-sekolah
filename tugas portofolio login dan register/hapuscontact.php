<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    header('Location: admin.php');
}

$id = $_GET['id'];

$sql = "DELETE FROM contact WHERE id ='$id'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: admin.php');
}else{
    header('Location: hapuscontact.php?status=gagal');
}
?>