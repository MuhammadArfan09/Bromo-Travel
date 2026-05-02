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
  <title>Toyota Fortunner | Bromo Travel</title>

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
                  url('img/fortunnerlagi.jpeg') center/cover;
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
    <h1>Toyota Fortunner: Partner Perjalanan Tangguh untuk Setiap Petualangan</h1>
  </div>
  <br>
  <br>
  <article class="container">
   
    <div class="meta">Diposting oleh Admin Bromo Travel • 2026</div>

    <p>
     Toyota Fortuner adalah SUV ladder-frame yang terkenal tangguh, nyaman, 
     dan cocok untuk berbagai kondisi jalan di Indonesia — dari aspal kota sampai jalur
      pegunungan seperti rute menuju kawasan wisata alam. Mobil ini menjadi pilihan populer 
      bagi keluarga maupun pelaku wisata karena kombinasi performa kuat dan tampilan gagah.
    </p>

    <h2>Desain Eksterior yang Berwibawa</h2>
    <p>
      Fortuner tampil dengan grille besar beraksen krom, lampu LED 
      modern, serta bodi tinggi berkarakter SUV sejati. Ground clearance yang 
      tinggi membuat mobil ini lebih percaya diri
       saat melintasi jalan tidak rata, tanjakan, maupun genangan air.

Velg alloy
 berukuran besar menambah kesan sporty sekaligus meningkatkan 
 stabilitas saat berkendara jarak jauh.
    </p>

    <h2>Interior Nyaman dan Fungsional</h2>
    <p>
     Masuk ke kabin, suasana terasa premium dengan material berkualitas dan desain dashboard modern. Beberapa fitur interior unggulan:
<ul>
<li>Head unit layar sentuh dengan konektivitas smartphone</li>

<li>AC digital dengan ventilasi baris kedua</li>

<li>Kursi ergonomis untuk perjalanan jauh</li>

<li>Kabin luas hingga 7 penumpang</li>
</ul>

Suspensi yang empuk membantu meredam guncangan, jadi perjalanan panjang tetap nyaman.
    </p>

    <div class="highlight">
      <blockquote>“Tak peduli medan, Fortuner selalu punya jawaban.”</blockquote>
    </div>

    <h2>Cocok untuk Perjalanan Wisata</h2>
    <p>
     Bagi kebutuhan perjalanan wisata darat, SUV ini unggul karena:
<ul>
<li>Kabin luas untuk penumpang dan barang</li>

<li>Tenaga kuat untuk jalur menanjak</li>

<li>Nyaman untuk perjalanan jauh</li>

<li>Tampilan elegan dan profesional</li>
</ul>

Tidak heran jika mobil ini sering dipilih sebagai kendaraan perjalanan premium.
    </p>

    <h2>Kesimpulan</h2>
    <p>
      Fortuner merupakan SUV yang memadukan ketangguhan, kenyamanan, dan tampilan berkelas.
       Mobil ini cocok untuk penggunaan harian maupun perjalanan wisata jarak jauh. 
      Dengan performa kuat dan fitur lengkap, SUV ini tetap menjadi salah satu pilihan favorit di kelasnya.
    </p>
 <a href="armada.php" class="back-btn">← Kembali ke Armada</a>
  </article>

  <footer>
    © 2026 Bromo Travel — Artikel Otomotif
  </footer>

</body>
</html>
