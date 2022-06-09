<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "connection.php";
    $posted = $_POST['posted'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $city = $_POST['city'];
    $pesan = $_POST['pesan'];

    //query insert data formulir ke dalam database
    $sql = "INSERT guestbook set posted='$posted', nama='$nama', email='$email', alamat='$alamat', city='$city', pesan='$pesan'";
    mysqli_query($koneksi, $sql) or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:cetak_guestbook.php");
    
    ?>