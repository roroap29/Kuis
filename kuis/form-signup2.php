<?php 
//perintah untuk menghubungkan php dengan database
include 'connection.php';

error_reporting(0);
 //memulai sesi
session_start();
if (isset($_SESSION['username'])) {
    header("Location: form-beranda.php");
}
if (isset($_POST['daftar'])) {
    //mengambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $homepage=$_POST['homepage'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    //insert data ke database query
    $mysqli="INSERT INTO user (nama, alamat, email, homepage, username, pass) VALUES ('$nama', '$alamat', '$email', '$homepage', '$username', '$pass' )";
    $result=mysqli_query ($koneksi, $mysqli);

    //untuk mengecek apakah data yang diinputkan berhasil atau tida
    if($result){
        //apabila berhasil maka akan menampilkan bahwa registrasi berhasil
        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
    }else{
        //jika tidak, maka akan menampilkan bahwa registrasi gagal
        echo "<script>alert('Maaf, registrasi gagal!')</script>".mysqli_error($conn);
    }
}
    mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <title>Sign Up</title>
</head>

<body>
    <div class="container-signup" id="container">
        <div class="form-container sign-up-container">
            <form action="simpan_signup.php" method="POST">
                <h1>Sign Up</h1>
                <br>
                <span>Create Account</span>
                <input type="text" name="nama" placeholder="Name" value="" required />
                <input type="text" name="alamat" placeholder="Address" value="" required />
                <input type="text" name="email" placeholder="Email" value="" required />
                <input type="text" name="homepage" placeholder="Homepage" value="" required />
                <input type="text" name="username" placeholder="Username" value="" required />
                <input type="text" name="pass" placeholder="Password" value="" required />
                <br>
                <button type="submit" name="daftar" value="daftar">Daftar</button>
            </form>
        </div>
    </div>
</body>

</html>