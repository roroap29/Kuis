<?php
include 'connection.php';

// mengambil data nama dari database
$query =mysqli_query($koneksi, "SELECT nama FROM user");
$result=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Sukses Login</title>
</head>

<body>
    <!--bagian box formulir-->
    <section class="box-formulir">
        <h2>Log Out</h2>
        <div class="box">
            <h3>Terima kasih <?php echo $result['nama'] ?> sudah mengunjungi website kami :)</h3>
        </div>
    </section>
</body>

</html>