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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toyota Hiace | Bromo Travel</title>

  <style>
    :root {
      --primary: #1e3a8a;
      --accent: #f59e0b;
      --text: #1f2937;
      --bg: #f8fafc;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", Arial, sans-serif;
    }

    body {
      background: var(--bg);
      color: var(--text);
      line-height: 1.7;
    }

    .article-header {
      background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)),
                  url('img/hiace.jpeg') center/cover;
      height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      padding: 20px;
    }

    .article-header h1 {
      font-size: 2.8rem;
      max-width: 800px;
    }

    .container {
      max-width: 850px;
      margin: auto;
      padding: 50px 20px;
      background: white;
      margin-top: -60px;
      border-radius: 14px;
      box-shadow: 0 20px 25px rgba(0,0,0,0.08);
    }

    .meta {
      color: #6b7280;
      font-size: 0.9rem;
      margin-bottom: 20px;
    }

    h2 {
      color: var(--primary);
      margin: 30px 0 10px;
    }

    p {
      margin-bottom: 15px;
    }

    .highlight {
      background: #fff7ed;
      border-left: 4px solid var(--accent);
      padding: 15px;
      border-radius: 8px;
      margin: 20px 0;
    }

    .back-btn {
      display: inline-block;
      margin-bottom: 25px;
      text-decoration: none;
      color: var(--primary);
      font-weight: 600;
      transition: 0.3s;
    }

    .back-btn:hover {
      color: var(--accent);
    }

    footer {
      text-align: center;
      padding: 30px;
      font-size: 0.9rem;
      color: #6b7280;
    }
  </style>
</head>

<body>

  <div class="article-header">
    <h1>Toyota Hiace: Kendaraan Premium untuk Perjalanan Rombongan</h1>
  </div>
  <br>
  <br>

  <article class="container">
   
    <div class="meta">Diposting oleh Admin Bromo Travel • 2026</div>

    <p>
      Toyota Hiace merupakan kendaraan minibus premium yang dirancang untuk perjalanan rombongan
      dengan tingkat kenyamanan tinggi. Kendaraan ini banyak digunakan untuk layanan travel,
      wisata keluarga, hingga perjalanan bisnis karena kabin luas dan perjalanan yang stabil.
    </p>

    <h2>Desain Modern dan Profesional</h2>
    <p>
      Hiace hadir dengan desain modern, bodi besar, serta tampilan profesional yang cocok
      untuk layanan transportasi premium. Dimensi kendaraan yang luas memberikan ruang
      gerak lebih lega bagi seluruh penumpang.
    </p>

    <h2>Kabin Luas dan Nyaman</h2>
    <p>
      Interior dirancang untuk kenyamanan perjalanan jarak jauh dengan ruang duduk lega.
<ul>
<li>Kapasitas penumpang besar</li>
<li>Kursi nyaman dan ergonomis</li>
<li>AC merata di seluruh kabin</li>
<li>Ruang kaki luas untuk perjalanan panjang</li>
</ul>
Kenyamanan kabin membuat perjalanan rombongan terasa lebih santai dan menyenangkan.
    </p>

    <div class="highlight">
      <blockquote>“Perjalanan rombongan terasa lebih nyaman dan berkelas.”</blockquote>
    </div>

    <h2>Cocok untuk Perjalanan Wisata</h2>
    <p>
      Kendaraan ini sangat ideal untuk perjalanan wisata karena:
<ul>
<li>Kapasitas besar untuk rombongan</li>
<li>Perjalanan halus dan stabil</li>
<li>Nyaman untuk perjalanan jarak jauh</li>
<li>Tampilan premium untuk layanan profesional</li>
</ul>
Hiace menjadi pilihan tepat untuk transportasi rombongan yang mengutamakan kenyamanan.
    </p>

    <h2>Kesimpulan</h2>
    <p>
      Toyota Hiace merupakan kendaraan minibus premium yang menawarkan kapasitas besar,
      kenyamanan maksimal, serta performa stabil untuk perjalanan jauh.
      Cocok untuk layanan wisata maupun perjalanan bersama dalam satu kendaraan.
    </p>

    <a href="armada.php" class="back-btn">← Kembali ke Armada</a>
  </article>

  <footer>
    © 2026 Bromo Travel — Artikel Otomotif
  </footer>

</body>
</html>