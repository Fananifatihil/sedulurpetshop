<?php
session_start();
include 'db_koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Cek data user berdasarkan email
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verifikasi password
    if (password_verify($password, $user['password'])) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['nama'] = $user['nama'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Password salah.";
    }
} else {
    echo "Email tidak ditemukan.";
}

$conn->close();
?>
