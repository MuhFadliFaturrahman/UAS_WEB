<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perumahan - Perumahan Sejahtera</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Data Perumahan</h1>
        <p>Daftar rumah yang tersedia di Perumahan Sejahtera beserta harga dan status terbaru.</p>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama Pembeli</th>
                        <th>Tipe Rumah</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                    </tr>

                    <?php

                include "../koneksi.php";
                $id = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM pembeli ");
                while ($tampil = mysqli_fetch_array($query)){
                echo"
                    <tr>
                    <td>$id</td>
                    <td>$tampil[nm_pembeli]</td>
                    <td>$tampil[tp_rumah]</td>
                    <td>$tampil[harga]</td>
                    <td>$tampil[status]</td>
                    <td><a href='?hapus=$tampil[nm_pembeli]' onclick=\"return confirm('Yakin Ingin Menghapus Data?') \" > HAPUS </a></td> 
                    <td><a href='data_ubah.php?kode=$tampil[nm_pembeli]'> UBAH </a></td> 
                    
                    </tr>";
                    
                $id++;
                }
                ?>
                </thead>

            </table>
            <?php
                include "../koneksi.php";

                if (isset($_GET['hapus'])) {
                    mysqli_query($koneksi, "DELETE from pembeli where nm_pembeli='$_GET[hapus]'")
                    or die (mysqli_error($koneksi));
                
                    echo "data berhasil dihapus";
                    echo "<meta http-equiv=refresh content=2;URL='data.php'>";
                
                }
            ?>


        </div>

        <a href="../formulir/formulir.php" class="button">Pesan Sekarang</a>
        <a href="../index/index.php" class="button">Home</a>
    </div>
</body>

</html>