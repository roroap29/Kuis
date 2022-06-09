<?php

include "connection.php";

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['update'])){

    // ambil data dari database
    $id = $_POST['id'];
    $posted = $_POST['posted'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $city = $_POST['city'];
    $pesan = $_POST['pesan'];

    // buat query update
    $sql = "UPDATE guestbook SET posted='$posted', nama='$nama', email='$email', alamat='$alamat', city='$city', pesan='$pesan' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: cetak_guestbook.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>