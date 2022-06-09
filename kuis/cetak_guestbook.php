<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0- beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384- 0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmV or" crossorigin="anonymous">
    <title>Cetak Guestbook</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0- beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384- pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52n D2" crossorigin="anonymous">
    </script>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Posted</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM guestbook";
            $query = mysqli_query($koneksi, $sql);
            while ($result = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $result['id'] . "</td>";
                echo "<td>" . $result['posted'] . "</td>";
                echo "<td>" . $result['nama'] . "</td>";
                echo "<td>" . $result['email'] . "</td>";
                echo "<td>" . $result['alamat'] . "</td>";
                echo "<td>" . $result['city'] . "</td>";
                echo "<td>" . $result['pesan'] . "</td>";

                echo "<td>";
                echo "<a href='form_edit_guestbook.php?id=".$result['id']."' class='btn btn-success'>Edit</a> &ensp;";
                echo "<a href='hapus_guestbook.php?id=".$result['id']."'class='btn btn-danger'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>

    </table>
    <br>
    <a href="form-guestbook.php">Kembali</a>
</body>

</html>