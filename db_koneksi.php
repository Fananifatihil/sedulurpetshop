<?php
$host = "localhost";
$user = "root";
$password = ""; // sesuaikan jika ada password
$dbname = "petshop"; // ganti dengan nama database kamu

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
