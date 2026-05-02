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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Isuzu Elf | Bromo Travel</title>

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
                  url('img/isuzu.jpeg') center/cover;
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
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
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
    <h1>Isuzu Elf: Kendaraan Rombongan Nyaman untuk Perjalanan Wisata</h1>
  </div>
  <br>
<br>
  <article class="container">
   
    <div class="meta">Diposting oleh Admin Bromo Travel • 2026</div>

    <p>
      Isuzu Elf merupakan kendaraan minibus yang dirancang untuk mengangkut penumpang dalam jumlah banyak
      dengan tetap mengutamakan kenyamanan dan keamanan. Kendaraan ini sangat populer digunakan untuk
      perjalanan wisata, study tour, maupun perjalanan rombongan keluarga.
    </p>

    <h2>Desain Kokoh dan Fungsional</h2>
    <p>
      Desain bodi yang kokoh serta ukuran kabin yang besar membuat kendaraan ini mampu membawa
      banyak penumpang sekaligus. Pintu lebar dan akses masuk yang mudah memberikan kenyamanan
      saat naik dan turun kendaraan.
    </p>

    <h2>Kabin Luas dan Nyaman</h2>
    <p>
      Kabin dirancang luas dengan tempat duduk ergonomis sehingga perjalanan jarak jauh tetap nyaman.
<ul>
<li>Kapasitas penumpang besar</li>
<li>Kursi empuk dan lega</li>
<li>AC merata di seluruh kabin</li>
<li>Ruang bagasi luas</li>
</ul>
Kenyamanan ini menjadikan perjalanan rombongan terasa lebih santai dan menyenangkan.
    </p>

    <div class="highlight">
      <blockquote>“Solusi terbaik untuk perjalanan bersama dalam satu kendaraan.”</blockquote>
    </div>

    <h2>Cocok untuk Perjalanan Wisata</h2>
    <p>
      Kendaraan ini sangat ideal digunakan untuk perjalanan wisata karena:
<ul>
<li>Mampu membawa banyak penumpang</li>
<li>Nyaman untuk perjalanan jarak jauh</li>
<li>Stabil di berbagai kondisi jalan</li>
<li>Efisien untuk perjalanan rombongan</li>
</ul>
Tidak heran kendaraan ini menjadi pilihan utama untuk layanan travel dan wisata.
    </p>

    <h2>Kesimpulan</h2>
    <p>
      Isuzu Elf merupakan kendaraan yang mengutamakan kapasitas, kenyamanan, dan efisiensi.
      Cocok untuk perjalanan wisata rombongan maupun kebutuhan transportasi bersama,
      kendaraan ini menjadi solusi transportasi yang praktis dan terpercaya.
    </p>

    <a href="armada.php" class="back-btn">← Kembali ke Armada</a>
  </article>

  <footer>
    © 2026 Bromo Travel — Artikel Otomotif
  </footer>

</body>
</html>