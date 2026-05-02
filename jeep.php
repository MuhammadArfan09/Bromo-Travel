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
  <title>Jeep 4x4 | Bromo Travel</title>

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
                  url('img/jeep.jpeg') center/cover;
      height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      padding: 25px;
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
    <h1>Jeep 4x4: Kendaraan Offroad Andalan untuk Petualangan</h1>
  </div>
  <br>
  <br>
  <article class="container">
   
    <div class="meta">Diposting oleh Admin Bromo Travel • 2026</div>

    <p>
      Jeep 4x4 merupakan kendaraan offroad yang dirancang untuk menaklukkan medan ekstrem
      seperti pasir, batu, dan jalur pegunungan. Kendaraan ini sangat populer digunakan
      untuk wisata petualangan karena performanya yang tangguh dan stabil.
    </p>

    <h2>Desain Tangguh dan Ikonik</h2>
    <p>
      Dengan bodi kokoh, ground clearance tinggi, serta sistem penggerak empat roda,
      kendaraan ini mampu melewati medan berat dengan lebih mudah dan aman.
    </p>

    <h2>Performa Offroad Andal</h2>
    <p>
      Sistem penggerak 4x4 memberikan traksi maksimal di berbagai kondisi medan.
<ul>
<li>Penggerak empat roda untuk stabilitas maksimal</li>
<li>Mesin bertenaga untuk jalur ekstrem</li>
<li>Suspensi kuat untuk medan berat</li>
<li>Stabil di tanjakan dan turunan</li>
</ul>
Kemampuan ini membuat perjalanan petualangan terasa lebih aman dan seru.
    </p>

    <div class="highlight">
      <blockquote>“Dirancang untuk menaklukkan medan, bukan sekadar melewatinya.”</blockquote>
    </div>

    <h2>Cocok untuk Wisata Petualangan</h2>
    <p>
      Kendaraan ini ideal digunakan untuk wisata alam dan jalur offroad karena:
<ul>
<li>Mampu melewati medan ekstrem</li>
<li>Stabil dan aman di jalur pegunungan</li>
<li>Pengalaman berkendara lebih seru</li>
<li>Cocok untuk wisata petualangan</li>
</ul>
Jeep 4x4 menjadi pilihan utama untuk perjalanan eksplorasi alam.
    </p>

    <h2>Kesimpulan</h2>
    <p>
      Jeep 4x4 merupakan kendaraan yang mengutamakan ketangguhan, stabilitas,
      dan performa offroad. Cocok untuk perjalanan wisata petualangan maupun
      eksplorasi alam dengan medan menantang.
    </p>

    <a href="armada.php" class="back-btn">← Kembali ke Armada</a>
  </article>

  <footer>
    © 2026 Bromo Travel — Artikel Otomotif
  </footer>

</body>
</html>