<?php
include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$waktu = $_POST['waktu'];
$keperluan = $_POST['keperluan'];

    $sql = "INSERT INTO buku_tamu(nama_tamu,alamat,waktu,no_hp,keperluan) values ('$nama_lengkap','$alamat','$waktu','$no_hp','$keperluan')";
    $kueri = mysql_query
?>