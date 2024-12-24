<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Rumah - Perumahan Sejahtera</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> -->
</head>

<body>
    <div class="container-order">
        <!-- Logo perumahan, opsional -->
        <!-- <img src="images/logo.png" alt="Logo Perumahan"> -->

        <!-- Judul Halaman -->
        <h1>Formulir Pemesanan Rumah</h1>
        <p>Isi formulir berikut untuk memesan rumah impian Anda.</p>

        <!-- Formulir Pemesanan -->
        <form action="" method="post">
            <table>
                <tr>
                    <td>id</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Nama pembeli</td>
                    <td><input type="text" name="nm_pembeli"></td>
                </tr>
                <tr>
                    <td>Tipe Rumah</td>
                    <td><input type="text" name="tp_rumah"></td>
                </tr>
                <tr>
                    <td>harga</td>
                    <td><input type="text" name="harga"></td>
                </tr>
                <tr>
                    <td>status</td>
                    <td><input type="text" name="status"></td>
                </tr>
            </table>

            <button type="submit" value="Simpan" name="pesan">Pesan Sekarang</button>

            <?php
        include "../koneksi.php";
            if (isset($_POST['pesan'])) {
               
                $id = $_POST['id'];
                $nm_pembeli = $_POST['nm_pembeli'];
                $tp_rumah = $_POST['tp_rumah'];
                $harga = $_POST['harga'];
                $status = $_POST['status'];
                
                if (empty($id) || empty($nm_pembeli) || empty($tp_rumah) || empty($harga) || empty($status)) {
                    echo "<p>Pastikan semua data telah diisi!</p>";
                } else {
                    $query = "INSERT INTO pembeli (id, nm_pembeli, tp_rumah, harga, status) 
                              VALUES ('$id', '$nm_pembeli', '$tp_rumah', '$harga', '$status')";
                }
                
                if (mysqli_query($koneksi, $query)) {
                    echo "<p>Data berhasil disimpan.</p>";
                    echo "<meta http-equiv=refresh content=2;URL='../data/data.php'>";
                } else {
                    echo "<p>Error: " . mysqli_error($koneksi) . "</p>";
                }
            }
            ?>

        </form>
    </div>
</body>


</html>