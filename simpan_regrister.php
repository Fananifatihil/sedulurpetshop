<?php
include 'db_koneksi.php';

$nama     = $_POST['nama'];
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
$alamat   = $_POST['alamat'];
$telepon  = $_POST['telepon'];

$sql = "INSERT INTO users (nama, email, password, alamat, telepon)
        VALUES ('$nama', '$email', '$password', '$alamat', '$telepon')";

if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman login setelah berhasil registrasi
    header("Location: auth.php?success=1");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
