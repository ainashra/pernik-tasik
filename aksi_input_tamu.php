<?php

     require 'koneksi.php';

     $nama = $_POST['Nama'];
     $alamat = $_POST['Alamat'];
     $waktu = $_POST['Waktu'];
     $no_hp = $_POST['No_hp'];
     $keperluan = $_POST['Keperluan'];

     $input = mysqli_query($koneksi, "INSERT INTO tbl_buku_tamu (nama, alamat, waktu, no_hp, keperluan) VALUES('$nama', '$alamat', '$waktu', '$no_hp', '$keperluan')"); "
     
     header ('location:data_tamu.php');
 ?>
    