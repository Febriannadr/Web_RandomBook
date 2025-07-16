<?php
$host = "localhost";
$user = "root";       // biasanya 'root' di XAMPP
$pass = "";           // kosongkan jika tidak ada password
$db   = "toko";       // nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
