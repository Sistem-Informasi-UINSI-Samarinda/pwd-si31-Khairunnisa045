<?php

$servername = "localhost";
$database = "pwd_2441919008";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("koneksi gagal: " . mysqli_connect_error());
}

echo "koneksi berhasil";

mysqli_close($conn);

?>
