<?php
$servername = "localhost";
$database = "db_wisata";
$username = "root";
$password = "";

$kon = mysqli_connect($servername, $username, $password, $database);

//memeriksa koneksi
if (!$kon) {
    die("Koneksi gagal" . mysqli_connect_error());
}

?>