<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Waktu Terbaik Menikmati Sunrise Bromo</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
      background-color: #0f172a;
            color: #ffffff;
}

.blog-detail {
    padding: 80px 20px;
}

.container {
    max-width: 900px;
    margin: auto;
}

.blog-header h1 {
    font-size: 36px;
    color: #0f172a;
    margin-bottom: 10px;
    font-weight: 600;
}

.meta {
    font-size: 13px;
    color: #94a3b8;
    margin-bottom: 30px;
}

.blog-image img {
    width: 100%;
    border-radius: 16px;
    margin-bottom: 30px;
}

.blog-content p {
     font-size: 15px;
            line-height: 1.9;
            color: #e5e7eb;
            margin-bottom: 22px;
}

.blog-content blockquote {
     background: rgba(255,255,255,0.08);
            border-left: 5px solid #38bdf8;
            padding: 20px 25px;
            margin: 35px 0;
            font-style: italic;
            color: #cbd5e1;
            border-radius: 8px;
}

.back {
    margin-top: 40px;
}

.back a {
   text-decoration: none;
            color: #38bdf8;
            font-weight: 500;
            transition: 0.3s;
}

.back a:hover {
    text-decoration: underline;
}
</style>
</head>

<body>

<section class="blog-detail">
<div class="container">

    <div class="blog-header">
        <h1>Waktu Terbaik Menikmati Sunrise Bromo</h1>
        <p class="meta">
            Diposting pada 24 Januari 2025 • Oleh Admin Bromo Travel
        </p>
    </div>

    <div class="blog-image">
        <img src="img/bromo-sunrise.jpg" alt="Sunrise Bromo">
    </div>

    <div class="blog-content">
        <p>
            Gunung Bromo dikenal sebagai salah satu destinasi wisata terbaik di Indonesia
            untuk menikmati keindahan matahari terbit. Setiap tahunnya, ribuan wisatawan
            datang untuk menyaksikan panorama sunrise yang memukau.
        </p>

        <p>
            Waktu terbaik untuk menikmati sunrise di Bromo adalah pada musim kemarau,
            sekitar bulan April hingga Oktober. Pada periode ini, cuaca cenderung cerah
            sehingga matahari terbit terlihat lebih jelas.
        </p>

        <p>
            Pengunjung disarankan berangkat dini hari menggunakan jeep 4x4 menuju
            Penanjakan agar tidak tertinggal momen matahari terbit. Jangan lupa
            menggunakan pakaian hangat karena suhu bisa sangat dingin.
        </p>

        <blockquote>
            “Sunrise di Bromo bukan hanya pemandangan, tapi pengalaman yang tak terlupakan.”
        </blockquote>

        <p>
            Dengan persiapan yang tepat dan memilih layanan tour yang terpercaya,
            perjalanan Anda ke Bromo akan menjadi kenangan indah sepanjang masa.
        </p>
    </div>

    <div class="back">
        <a href="blog.php">← Kembali ke Blog</a>
    </div>

</div>
</section>

</body>
</html>
