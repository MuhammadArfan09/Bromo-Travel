<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Estimasi Biaya Liburan ke Gunung Bromo 2026</title>

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

        .back-top {
            margin-bottom: 25px;
        }

        .back-top a {
            text-decoration: none;
            color: #38bdf8;
            font-weight: 500;
        }

        .back-top a:hover {
            color: #7dd3fc;
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
        }

        .highlight {
            background: rgba(255,255,255,0.08);
            border-left: 5px solid #38bdf8;
            padding: 20px 25px;
            margin: 35px 0;
            border-radius: 8px;
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
            <h1>Estimasi Biaya Liburan ke Gunung Bromo 2026</h1>
            <p class="meta">
                Diposting pada 10 Januari 2026 • Oleh Admin Bromo Travel
            </p>
        </div>

        <div class="blog-image">
            <img src="img/Bromo.jpeg" alt="Biaya Wisata Bromo">
        </div>

        <div class="blog-content">
            <p>
                Salah satu pertanyaan paling sering dari wisatawan sebelum berkunjung ke Gunung Bromo adalah mengenai estimasi biaya perjalanan. Mengetahui perkiraan biaya sejak awal akan membantu merencanakan liburan dengan lebih matang dan nyaman.
            </p>

            <p><strong>Berikut estimasi biaya wisata ke Bromo:</strong></p>

            <ul>
                <li><strong>Tiket masuk wisatawan domestik</strong>  
                Sekitar Rp30.000 – Rp50.000 per orang.</li>

                <li><strong>Sewa Jeep Wisata</strong>  
                Rp600.000 – Rp1.000.000 per jeep (4–5 orang).</li>

                <li><strong>Penginapan sekitar Bromo</strong>  
                Rp200.000 – Rp800.000 per malam tergantung fasilitas.</li>

                <li><strong>Makan dan minum</strong>  
                Rp50.000 – Rp100.000 per orang.</li>
            </ul>

            <div class="highlight">
                <strong>Contoh estimasi total biaya per orang:</strong><br>
                Tiket masuk ± Rp40.000<br>
                Jeep wisata ± Rp200.000<br>
                Penginapan ± Rp200.000<br>
                Konsumsi ± Rp75.000<br><br>
                <strong>Total sekitar Rp515.000 per orang</strong>
            </div>

            <p><strong>Tips hemat liburan ke Bromo:</strong></p>

            <ul>
                <li>✔ Datang berkelompok agar biaya jeep lebih murah</li>
                <li>✔ Pesan paket wisata agar lebih praktis</li>
                <li>✔ Hindari musim liburan panjang</li>
                <li>✔ Siapkan anggaran cadangan</li>
            </ul>

            <p>
                Dengan perencanaan yang baik, liburan ke Gunung Bromo bisa tetap hemat, nyaman, dan menyenangkan. Persiapkan budget dengan bijak agar pengalaman wisata menjadi lebih maksimal.
            </p>
        </div>
 <div class="back-top">
            <a href="blog.php">← Kembali ke Blog</a>
        </div>
    </div>
</section>

</body>
</html>
