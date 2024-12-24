<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Perumahan Sejahtera</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

if (isset($_POST['login'])) {
    // Mengambil input username dan password dari form
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    
    // Query untuk mencari username dan password
    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE usernama = '$username'");
    
    // Periksa apakah user ditemukan
    if (mysqli_num_rows($sql) > 0) {
        $data = mysqli_fetch_assoc($sql);

        // Periksa kecocokan password
        if ($data['password'] === $password) { // Sesuaikan jika password terenkripsi
            $_SESSION['username'] = $username;
            echo "<script>alert('Login berhasil!');</script>";
            echo "<meta http-equiv='refresh' content='0;URL= index/index.php'>";
        } else {
            echo "<p align='center'><b>Password salah!</b></p>";
        }
    } else {
        echo "<p align='center'><b>Username tidak ditemukan!</b></p>";
    }
}
?>


    <div class="container-login">
        <h1>Masuk</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <label for="username">Username</label>
                    <input type="text" name="username" required>
                </tr>
                <tr>
                    <label for="password">Password</label>
                    <input type="password" name="password" required>
                </tr>
                <tr>
                    <button type="submit" class="button" name="login">Login</button>
                </tr>
        </form>
        </table>
        <p>Belum punya akun? <a href="/formulir/formulir.php">Daftar di sini</a></p>
    </div>
</body>

</html>