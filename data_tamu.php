<h3>Data Tamu</h3>

<p>
    <a href="index.php">Input Tamu</a>
</p>

<?php
     require 'koneksi.php';


     $tampilan = mysqli_query ($koneksi, "SELECT * FROM tbl_buku_tamu ORDER BY id_tamu DESC");

     while ($data = mysqli_fetch_array ($tampil) ) {
        echo "Nama :$data[nama] <br>";
        echo "Alamat :$data[alamat] <br>";
        echo "waktu :$data[waktu] <br>";
        echo "no_hp :$data[no_hp] <br>";
        echo "keperluan :$data[keperluan] <br>";
     }
 ?>
