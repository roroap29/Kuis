<?php
//perintah untuk menghubungkan php dengan database
include 'connection.php';
error_reporting(0);
//memulai sesi
session_start();
//jika sesi yang dimulai adalah username maka akan menampilkan halaman beranda.php
if (isset($_SESSION['username'])) {
    header("Location: form-beranda.php");
}

//untuk mengecek tombol submit
if (isset($_POST['masuk'])) {
    //mengambil data dan dicocokkan dengan database
    $username =$_POST['username'];
    $password = $_POST['pass'];
    $mysqli = "SELECT * FROM user WHERE username='$username' AND pass='$pass'";
    $result = mysqli_query($koneksi, $mysqli);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: form-beranda.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

mysqli_close($koneksi);
?>