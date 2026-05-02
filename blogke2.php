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
    <title>Serunya Jeep Adventure di Lautan Pasir</title>

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

        /* Header */
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

        /* Image */
        .blog-image img {
            width: 100%;
            border-radius: 16px;
            margin-bottom: 35px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        }

        /* Content */
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

        /* Back */
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

        /* Responsive */
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
            <h1>Serunya Jeep Adventure di Lautan Pasir</h1>
            <p class="meta">
                Diposting pada 25 Desember 2025 • Oleh Admin Bromo Travel
            </p>
        </div>

        <div class="blog-image">
            <img src="img/jeep-bromo.jpg" alt="Jeep Adventure Bromo">
        </div>

        <div class="blog-content">
            <p>
                Jeep Adventure di Lautan Pasir Bromo menjadi pengalaman wisata yang paling
                digemari oleh para wisatawan. Dengan menggunakan jeep 4x4, perjalanan
                terasa lebih seru dan menantang.
            </p>

            <p>
                Hamparan pasir luas yang membentang di kaki Gunung Bromo memberikan sensasi
                seperti berada di padang pasir. Jeep melaju menembus pasir, tanjakan,
                dan jalur ekstrem yang memacu adrenalin.
            </p>

            <p>
                Selain sensasi petualangan, wisatawan juga dapat menikmati panorama alam
                yang luar biasa. Perpaduan gunung, kabut tipis, dan udara sejuk menciptakan
                suasana yang sulit dilupakan.
            </p>

            <blockquote>
                “Jeep Adventure bukan hanya perjalanan, tapi pengalaman penuh kesan.”
            </blockquote>

            <p>
                Dengan driver profesional dan kendaraan yang terawat, Jeep Adventure
                bersama Bromo Travel menjamin perjalanan yang aman, nyaman, dan tentunya
                penuh keseruan.
            </p>
        </div>

        <div class="back">
            <a href="blog.php">← Kembali ke Blog</a>
        </div>

    </div>
</section>

</body>
</html>
