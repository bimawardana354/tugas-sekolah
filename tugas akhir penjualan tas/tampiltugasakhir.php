<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Customer</title>
</head>
<body>
    <h3>Data Customer</h3>
    <h4><a href="tugas akhir.html">[+] Tambah Baru</a></h4>
    <table border ="20">
        <tr>
            <th>nama_barang</th>
            <th>harga_barang</th>
            <th>jumlah_barang</th>
            <th>diskon</th>
            <th>ppn</th>
            <th>total_bayar</th>
        </tr>
        <?php

        $sql = "SELECT * FROM pesanan";
        $query = mysqli_query($connect,$sql);
            while($cus = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$cus['nama_barang']."</td>";
                echo "<td>".$cus['harga_barang']."</td>";
                echo "<td>".$cus['jumlah_barang']."</td>";
                echo "<td>".$cus['diskon']."</td>";
                echo "<td>".$cus['ppn']."</td>";
                echo "<td>".$cus['total_bayar']."</td>";

                echo"</tr>";
            }
            ?>
</body>