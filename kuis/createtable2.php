<?php
//deklarasi server, ussername, pw dan database
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "myweb";
//membuat tabel
//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek koneksi
if(!$conn){
    die("connection failed : " . mysqli_connect_error()); //msg eror

}
//pembuatan tabel
$querysql = "CREATE TABLE guestbook(
    id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    posted date,
    nama  VARCHAR(50),
    email  VARCHAR(75),
    alamat VARCHAR(75),
    city VARCHAR(75),
    pesan longblob)";
//penmgecekan
if(mysqli_query($conn, $querysql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn)
?>