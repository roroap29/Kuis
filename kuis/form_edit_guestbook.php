<?php

include("connection.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: cetak_guestbook.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM guestbook WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$result = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Edit data </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box-formulir">
        <h1>Silahkan Masuk</h1>
        <form action="proses_edit_guestbook.php" method="POST">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <input type="hidden" name="id" value="<?php echo $result['id'] ?>" />
                    </tr>
                    <tr>
                        <td>Posted</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="posted" value="<?php echo $result['posted'] ?>"
                                class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" value="<?php echo $result['nama'] ?>" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="email" value="<?php echo $result['email'] ?>"
                                class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td>
                            <textarea name="alamat" cols="22" rows="3"
                                class="input-control"><?php echo $result['alamat'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="city" value="<?php echo $result['city'] ?>"
                                class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td>:</td>
                        <td>
                            <textarea name="pesan" cols="22" rows="5"
                                class="input-control"><?php echo $result['pesan'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="update" class="btn-masuk" value="Update">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

</body>

</html>