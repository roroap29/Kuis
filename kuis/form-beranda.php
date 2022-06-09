<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: form-login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Beranda</title>
    <link rel="stylesheet" href="stylee.css">
</head>

<body>
    <div class="container-beranda" id="container">
        <div class="form-container beranda-container">
            <div class="beranda">
                <form action="" method="POST" class="login-username">
                    <?php echo "<h3>Selamat Datang User " . $_SESSION['username'] ."!"."</h3>";?>
                    <!-- set hari dan tanggal -->
                    <p><?php echo date('D M y, H:i') ?></p>
                </form>
                <p style="font-size:14px" ;>Silahkan pilih:</p>
                <th>
                <td></td>
                </th>
                <button><a href="form-guestbook.php">Input Guestbook</a></button>
                <br>
                <button><a href="cetak_guestbook.php">Lihat Guestbook</a></button>
                <br>
                <button><a href="form-logout.php">Logout</a></button>
            </div>
        </div>
    </div>
</body>

</html>