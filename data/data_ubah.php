<?php
include "../koneksi.php";

if (isset($_GET['kode'])) {
    $sql = mysqli_query($koneksi, "SELECT * FROM pembeli WHERE nm_pembeli = '$_GET[kode]'");
    $data = mysqli_fetch_array($sql);

    if (!$data) {
        die("Data pembeli tidak ditemukan!");
    }   
} else {
    die("Kode pembeli tidak ditemukan!");
}
?>

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
        <h1>Formulir Pemesanan Rumah</h1>
        <p>Isi formulir berikut untuk memperbarui data pembeli.</p>

        <!-- Formulir Pemesanan -->
        <form action="" method="post">
            <table>
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id" value="<?php echo $data['id']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama Pembeli</td>
                    <td><input type="text" name="nm_pembeli" value="<?php echo $data['nm_pembeli']; ?>"></td>
                </tr>
                <tr>
                    <td>Tipe Rumah</td>
                    <td><input type="text" name="tp_rumah" value="<?php echo $data['tp_rumah']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type="text" name="status" value="<?php echo $data['status']; ?>"></td>
                </tr>
            </table>

            <button type="submit" value="Simpan" name="ubah"> UBAH </button>
            <button type="submit"><a href="data.php"> BATAL </a></button>

            <?php   
        include "../koneksi.php";
        
        if (isset($_POST['ubah'])) {
            $id = $_POST['id'];
            $nm_pembeli = $_POST['nm_pembeli'];
            $tp_rumah = $_POST['tp_rumah'];
            $harga = $_POST['harga'];
            $status = $_POST['status'];

            // Validasi input
            if (empty($nm_pembeli) || empty($tp_rumah) || empty($harga) || empty($status)) {
                echo "<p>Semua data harus diisi!</p>";
            } else {
                // Query UPDATE
                $query = "UPDATE pembeli 
                          SET nm_pembeli = '$nm_pembeli', tp_rumah = '$tp_rumah', harga = '$harga', status = '$status' 
                          WHERE id = '$id'";

                // Eksekusi query
                if (mysqli_query($koneksi, $query)) {
                    echo "<p>Data berhasil diupdate.</p>";
                    echo "<meta http-equiv='refresh' content='0;URL=data.php'>";
                } else {
                    echo "<p>Error: " . mysqli_error($koneksi) . "</p>";
                }
            }
        }
        ?>

        </form>
    </div>
</body>


</html>