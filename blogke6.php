<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rute Menuju Gunung Bromo dari Berbagai Kota</title>

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
            color: #38bdf8;
            margin-bottom: 10px;
        }

        .meta {
            font-size: 13px;
            color: #94a3b8;
            margin-bottom: 30px;
        }

        .blog-image img {
            width: 100%;
            border-radius: 16px;
            margin-bottom: 35px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        }

        .blog-content p {
            font-size: 15px;
            line-height: 1.9;
            color: #e5e7eb;
            margin-bottom: 22px;
        }

        .blog-content ul {
            margin: 20px 0 30px 20px;
        }

        .blog-content ul li {
            margin-bottom: 12px;
            line-height: 1.7;
            color: #e5e7eb;
        }

        blockquote {
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
            color: #7dd3fc;
            transform: translateX(-4px);
        }

        @media (max-width: 768px) {
            .blog-header h1 {
                font-size: 28px;
            }

            .blog-content p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

<section class="blog-detail">
    <div class="container">

        <div class="blog-header">
            <h1>Rute Menuju Gunung Bromo dari Berbagai Kota</h1>
            <p class="meta">
                Diposting pada 15 Januari 2026 • Oleh Admin Bromo Travel
            </p>
        </div>

        <div class="blog-image">
            <img src="img/lereng.jpeg" alt="Rute Menuju Bromo">
        </div>

        <div class="blog-content">

            <p>
                Gunung Bromo merupakan salah satu destinasi wisata paling populer di Indonesia.
                Untuk mencapai kawasan wisata ini, terdapat beberapa rute perjalanan yang dapat
                dipilih sesuai kota asal dan preferensi perjalanan wisatawan.
            </p>

            <p>
                Berikut beberapa rute menuju Bromo dari kota-kota utama di Jawa Timur yang paling
                sering digunakan wisatawan.
            </p>

            <p><strong>Rute dari Malang</strong></p>
            <ul>
                <li>Malang → Tumpang → Gubugklakah → Jemplang → Kawasan Bromo</li>
                <li>Waktu tempuh sekitar 2–3 jam</li>
                <li>Pemandangan pegunungan sangat indah</li>
                <li>Cocok untuk wisatawan yang ingin menikmati panorama alam</li>
            </ul>

            <p><strong>Rute dari Surabaya</strong></p>
            <ul>
                <li>Surabaya → Pasuruan → Wonokitri → Kawasan Bromo</li>
                <li>Waktu tempuh sekitar 3–4 jam</li>
                <li>Jalur nyaman dan mudah diakses</li>
                <li>Banyak digunakan wisatawan dari luar kota</li>
            </ul>

            <p><strong>Rute dari Probolinggo</strong></p>
            <ul>
                <li>Probolinggo → Cemoro Lawang → Kawasan Bromo</li>
                <li>Waktu tempuh sekitar 1–2 jam</li>
                <li>Rute tercepat menuju Bromo</li>
                <li>Akses langsung ke area lautan pasir</li>
            </ul>

            <p><strong>Tips Memilih Rute Perjalanan</strong></p>
            <ul>
                <li>Pilih rute Malang untuk pengalaman wisata alam terbaik</li>
                <li>Pilih rute Probolinggo jika ingin perjalanan lebih cepat</li>
                <li>Gunakan jeep wisata untuk keamanan di area pegunungan</li>
                <li>Berangkat dini hari untuk menikmati sunrise</li>
                <li>Pastikan kendaraan dalam kondisi prima</li>
            </ul>

            <blockquote>
                “Memilih rute yang tepat akan membuat perjalanan ke Bromo lebih nyaman,
                aman, dan berkesan.”
            </blockquote>

            <p>
                Dengan mengetahui rute perjalanan yang tersedia, wisatawan dapat merencanakan
                perjalanan dengan lebih baik. Persiapan yang matang akan membuat pengalaman
                wisata ke Gunung Bromo menjadi lebih menyenangkan dan tak terlupakan.
            </p>

        </div>

        <div class="back">
            <a href="blog.php">← Kembali ke Blog</a>
        </div>

    </div>
</section>

</body>
</html>
