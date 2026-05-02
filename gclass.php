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
  <title>Mercedes G-Class | Artikel Bromo Travel</title>

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

    /* header artikel */
    .article-header {
      background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)),
                  url('img/mercedez.jpeg') center/cover;
      height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      padding: 15px;
    }

    .article-header h1 {
      font-size: 2.8rem;
      max-width: 800px;
    }

    /*  CONTAINER  */
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
    <h1>Mercedes G-Class: SUV Mewah Tangguh untuk Petualangan Premium</h1>
  </div>
  <br>
<br>
  <article class="container">
   
    <div class="meta">Diposting oleh Admin Bromo Travel • 2026</div>

    <p>
      Mercedes-Benz G-Class atau sering disebut G-Wagon merupakan SUV mewah legendaris
      yang dikenal karena desain kotaknya yang ikonik dan kemampuan off-road luar biasa.
      Kendaraan ini pertama kali diperkenalkan pada tahun 1979 dan awalnya dirancang
      sebagai kendaraan militer sebelum berkembang menjadi simbol kemewahan global.
    </p>

    <h2>Desain Ikonik yang Tidak Berubah</h2>
    <p>
      Salah satu daya tarik utama G-Class adalah bentuknya yang tetap mempertahankan
      karakter klasik selama puluhan tahun. Tampilan eksterior yang kokoh dipadukan
      dengan interior modern berteknologi tinggi menjadikan mobil ini unik di kelasnya.
    </p>

    <h2>Performa Off-Road Legendaris</h2>
    <p>
      Dilengkapi sistem penggerak semua roda dan differential lock, G-Class mampu
      melintasi berbagai medan ekstrem seperti pasir, bebatuan, dan tanjakan curam.
      Hal ini membuatnya cocok untuk perjalanan wisata di medan pegunungan.
    </p>

    <div class="highlight">
      G-Class bukan hanya kendaraan mewah, tetapi juga simbol kekuatan,
      ketahanan, dan prestise dalam dunia otomotif.
    </div>

    <h2>Kenyamanan Premium</h2>
    <p>
      Selain tangguh, kendaraan ini menawarkan kenyamanan tingkat tinggi.
      Interiornya menggunakan material premium, sistem hiburan modern,
      dan teknologi keselamatan canggih untuk pengalaman berkendara terbaik.
    </p>

    <h2>Kesimpulan</h2>
    <p>
      Mercedes-Benz G-Class adalah perpaduan sempurna antara kemewahan,
      teknologi, dan kemampuan off-road. Kendaraan ini menjadi pilihan ideal
      bagi wisatawan yang menginginkan pengalaman perjalanan eksklusif
      dengan kenyamanan maksimal.
    </p>
 <a href="armada.php" class="back-btn">← Kembali ke Armada</a>
  </article>

  <footer>
    © 2026 Bromo Travel — Artikel Otomotif
  </footer>

</body>
</html>
