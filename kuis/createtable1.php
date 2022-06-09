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
$querysql = "CREATE TABLE user(
    id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50),
    alamat  VARCHAR(50),
    email  VARCHAR(50),
    homepage VARCHAR(25),
    username VARCHAR(25),
    pass VARCHAR(25)";
//penmgecekan
if(mysqli_query($conn, $querysql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn)
?>