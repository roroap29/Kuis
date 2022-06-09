<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "connection.php";
error_reporting(0);
//memulai sesi
session_start();
if (isset($_SESSION['username'])) {
header("Location: form-beranda.php");
}
if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $homepage = $_POST['homepage'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    //query insert data formulir ke dalam database
    $sql = "INSERT user set nama='$nama', alamat='$alamat', email='$email', homepage='$homepage', username='$username', pass='$pass'";
    mysqli_query($koneksi, $sql) or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:form-beranda.php");
}
?>