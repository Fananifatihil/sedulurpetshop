<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Form Registrasi</h2>
    <form action="simpan_registrasi.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <label>Telepon:</label><br>
        <input type="text" name="telepon" required><br><br>

        <input type="submit" value="Daftar">
    </form>

    <p style="text-align: center; margin-top: 15px;">
        Sudah punya akun? <a href="login.php">Login di sini</a>
    </p>
</body>
</html>
