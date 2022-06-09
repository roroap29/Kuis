<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Guestbook</title>
    <link rel="stylesheet" href="stylee.css">
</head>

<body>
    <div class="container-signup" id="container">
        <div class="form-container sign-up-container">
            <form action="simpan_guestbook.php" method="POST">
                <h1>Guestbook</h1>
                <br>
                <span>Post guestbook:</span>
                <input type="date" name="posted" placeholder="Posted" />
                <input type="text" name="nama" placeholder="Name" />
                <input type="text" name="email" placeholder="Email" />
                <input type="text" name="alamat" placeholder="Address" />
                <input type="text" name="city" placeholder="City" />
                <input type="textarea" name="pesan" placeholder="Message" />
                <br>
                <button type="submit" name="masuk" value="Masuk">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>