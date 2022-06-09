<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Sign-Up</title>
    <link rel="stylesheet" href="stylee.css">
</head>

<body>
    <div class="container-signup" id="container">
        <div class="form-container sign-up-container">
            <form action="simpan_signup.php" method="POST">
                <h1>Sign Up</h1>
                <br>
                <span>Create Account</span>
                <input type="text" name="nama" placeholder="Name" />
                <input type="text" name="alamat" placeholder="Address" />
                <input type="text" name="email" placeholder="Email" />
                <input type="text" name="homepage" placeholder="Homepage" />
                <input type="text" name="username" placeholder="Username" />
                <input type="text" name="pass" placeholder="Password" />
                <br>
                <button type="submit" name="daftar" value="daftar">Daftar</button>
            </form>
        </div>
    </div>
</body>

</html>