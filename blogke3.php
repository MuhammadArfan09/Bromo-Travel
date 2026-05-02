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
            <h1>Tips Persiapan Liburan ke Gunung Bromo</h1>
            <p class="meta">
                Diposting pada 20 Desember 2025 • Oleh Admin Bromo Travel
            </p>
        </div>

        <div class="blog-image">
            <img src="img/tips-bromo.jpg" alt="Tips Liburan ke Bromo">
        </div>

        <div class="blog-content">
            <p>
                Gunung Bromo merupakan salah satu destinasi wisata favorit di Indonesia.
                Untuk menikmati keindahannya secara maksimal, diperlukan persiapan yang
                matang agar perjalanan tetap nyaman dan menyenangkan.
            </p>

            <p><strong>Berikut beberapa tips penting sebelum liburan ke Gunung Bromo:</strong></p>

            <ul>
                <li><strong>Gunakan pakaian hangat</strong>  
                    Suhu di Bromo bisa mencapai 5°C, terutama saat dini hari. Jaket tebal,
                    sarung tangan, kupluk, dan syal sangat disarankan.</li>

                <li><strong>Datang di waktu yang tepat</strong>  
                    Musim kemarau (April–Oktober) adalah waktu terbaik karena cuaca lebih cerah
                    dan pemandangan sunrise terlihat jelas.</li>

                <li><strong>Siapkan kondisi fisik</strong>  
                    Aktivitas seperti naik ke kawah Bromo membutuhkan stamina yang cukup,
                    jadi pastikan tubuh dalam kondisi fit.</li>

                <li><strong>Gunakan jasa tour terpercaya</strong>  
                    Menggunakan jeep tour resmi akan membuat perjalanan lebih aman dan efisien,
                    terutama untuk menjangkau spot wisata utama.</li>

                <li><strong>Bawa perlengkapan tambahan</strong>  
                    Masker atau buff untuk melindungi dari debu pasir, serta kamera untuk
                    mengabadikan momen indah.</li>
            </ul>

            <blockquote>
                “Persiapan yang baik akan membuat liburan ke Bromo jauh lebih berkesan.”
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
