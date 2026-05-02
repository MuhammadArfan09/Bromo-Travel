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
  <title>Toyota Innova | Bromo Travel</title>

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
                  url('img/innova.jpeg') center/cover;
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
    <h1>Toyota Innova: Kenyamanan Maksimal untuk Perjalanan Keluarga</h1>
  </div>
  <br>
  <br>
  <article class="container">
   
    <div class="meta">Diposting oleh Admin Bromo Travel • 2026</div>

    <p>
      Toyota Innova merupakan kendaraan MPV yang dikenal luas karena kenyamanan kabin,
      performa stabil, serta efisiensi untuk perjalanan jauh. Mobil ini menjadi pilihan
      favorit untuk kebutuhan keluarga maupun perjalanan wisata karena mampu membawa
      penumpang dengan aman dan nyaman.
    </p>

    <h2>Desain Eksterior Modern dan Elegan</h2>
    <p>
      Innova hadir dengan desain modern, grille depan tegas, serta lampu LED yang memberikan
      tampilan berkelas. Bodi kokoh dan ground clearance tinggi membuat kendaraan ini tetap stabil
      di berbagai kondisi jalan, baik di perkotaan maupun jalur pegunungan.
    </p>

    <h2>Interior Luas dan Nyaman</h2>
    <p>
      Kabin dirancang lapang dengan posisi duduk ergonomis sehingga nyaman untuk perjalanan panjang.
<ul>
<li>Kabin luas hingga 7 penumpang</li>
<li>Sistem hiburan layar sentuh</li>
<li>AC double blower untuk pendinginan merata</li>
<li>Kursi empuk dengan ruang kaki lega</li>
</ul>
Kenyamanan kabin menjadikan perjalanan terasa lebih santai bagi seluruh penumpang.
    </p>

    <div class="highlight">
      <blockquote>“Nyaman di setiap perjalanan, percaya diri di setiap tujuan.”</blockquote>
    </div>

    <h2>Cocok untuk Perjalanan Wisata</h2>
    <p>
      Kendaraan ini sangat ideal digunakan untuk perjalanan wisata karena:
<ul>
<li>Kabin luas untuk penumpang dan barang</li>
<li>Perjalanan lebih halus dan stabil</li>
<li>Efisien untuk perjalanan jauh</li>
<li>Tampilan elegan dan profesional</li>
</ul>
Kombinasi kenyamanan dan efisiensi membuatnya menjadi pilihan tepat untuk perjalanan bersama keluarga.
    </p>

    <h2>Kesimpulan</h2>
    <p>
      Innova merupakan MPV yang mengutamakan kenyamanan, keamanan, dan efisiensi.
      Cocok untuk penggunaan harian maupun perjalanan wisata jarak jauh,
      kendaraan ini tetap menjadi salah satu pilihan terbaik di kelasnya.
    </p>

    <a href="armada.php" class="back-btn">← Kembali ke Armada</a>
  </article>

  <footer>
    © 2026 Bromo Travel — Artikel Otomotif
  </footer>

</body>
</html>