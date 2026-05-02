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
    <title>Tips Persiapan Liburan ke Gunung Bromo</title>

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
            <h1>Spot Foto Terbaik di Gunung Bromo yang Wajib Dikunjungi</h1>
            <p class="meta">
            Diposting pada 5 Januari 2026 • Oleh Admin Bromo Trave
            </p>
        </div>

        <div class="blog-image">
            <img src="img/bukit.jpg" alt="Tips Liburan ke Bromo">
        </div>

        <div class="blog-content">
            <p>
                Salah satu alasan utama wisatawan datang ke Bromo adalah keindahan lanskapnya yang dramatis dan fotogenik. Setiap sudut menawarkan karakter visual yang berbeda — dari lautan pasir yang luas hingga perbukitan hijau yang lembut. Berikut spot foto yang wajib kamu datangi beserta tips pengambilan gambarnya.
            </p>

            <p><strong>Berikut beberapa spot foto terbaik di Bromo:</strong></p>

            <ul>
                <li><strong>Penanjakan 1</strong>  
                   Tempat terbaik untuk melihat sunrise dengan pemandangan lautan pasir dan gunung di sekitarnya.</li>

                <li><strong>Bukit Teletubbies</strong>  
                   Hamparan padang rumput hijau dengan bentuk bukit unik yang sangat indah saat musim hujan.</li>

                <li><strong>Pasir Berbisik</strong>  
                  Pasir Berbisik</li>

                <li><strong>Kawah Bromo</strong>  
                   Spot paling ikonik dengan latar asap kawah yang dramatis.</li>

                <li><strong>Tips foto di Bromo:</strong> <br> 
                   ✔ Datang sebelum matahari terbit <br>
✔ Gunakan kamera dengan mode landscape <br>
✔ Pakai outfit warna cerah agar kontras dengan alam</li>
            </ul>

            <blockquote>
                “Setiap sudut Bromo adalah spot foto alami yang luar biasa."
            </blockquote>

            <p>
                Dengan persiapan yang tepat, liburan ke Gunung Bromo akan menjadi pengalaman
                yang tak terlupakan. Bersama Bromo Travel, perjalanan Anda akan terasa lebih
                nyaman, aman, dan penuh kenangan indah.
            </p>
        </div>

        <div class="back">
            <a href="blog.php">← Kembali ke Blog</a>
        </div>

    </div>
</section>

</body>
</html>
