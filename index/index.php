<?php
include "../session.php";
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perumahan Sejahtera</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="container">
        <img src="../gambar/logo.png" alt="Logo Perumahan">
        <nav>
            <ul>
                <li><a href="#features">Fitur</a></li>
                <li><a href="#testimonials">Testimoni</a></li>
                <li><a href="#cta">Pesan Sekarang</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Temukan Rumah Impian Anda</h1>
        <p>Perumahan Sejahtera menawarkan hunian nyaman dengan fasilitas lengkap di lingkungan asri.</p>
        <button class="cta-button"><a href="../formulir/formulir.php">Pesan Sekarang</a></button>


    </section>

    <!-- Features Section -->
    <section id="features" class="features container">
        <h2>Fitur Perumahan</h2>
        <div class="feature-grid">
            <div class="feature">
                <img src="../gambar/security.jpeg" alt="Fitur 1">
                <h3>Keamanan 24 Jam</h3>
                <p>Menjamin keamanan penghuni dengan petugas jaga dan CCTV.</p>
            </div>
            <div class="feature">
                <img src="../gambar/lingkungan.jpg" alt="Fitur 2">
                <h3>Lingkungan Asri</h3>
                <p>Dikelilingi taman hijau untuk udara segar setiap hari.</p>
            </div>
            <div class="feature">
                <img src="../gambar/olahraga.jpeg" alt="Fitur 3">
                <h3>Fasilitas Olahraga</h3>
                <p>Dilengkapi kolam renang, gym, dan lapangan olahraga.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <h2>Apa Kata Penghuni?</h2>
        <div class="testimonial">
            <p>"Tinggal di Perumahan Sejahtera adalah pengalaman yang luar biasa. Suasana asri dan fasilitas lengkap!"
            </p>
            <span class="author">- Dwi K.</span>
        </div>
        <div class="testimonial">
            <p>"Kami merasa sangat aman dan nyaman di sini. Anak-anak juga senang dengan taman yang luas."</p>
            <span class="author">- Rina L.</span>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="cta" class="cta-section">
        <h2>Siap Memesan Rumah Impian?</h2>
        <button class="cta-button"><a href="../formulir/formulir.php">Pesan Sekarang</a></button>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Perumahan Sejahtera. Semua hak dilindungi.</p>
    </footer>
</body>

</html>