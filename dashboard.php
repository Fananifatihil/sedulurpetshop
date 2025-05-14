<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['nama']; ?>!</h2>
    <p>Anda berhasil login.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
