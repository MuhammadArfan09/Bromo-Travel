<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['role'] != 'admin') {
    header("Location: login.html");
    exit;
}
?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$nama     = $_POST['nama'] ?? '';
$hp       = $_POST['hp'] ?? '';
$armada   = $_POST['armada'] ?? '';
$jumlah   = $_POST['jumlah'] ?? '';
$tanggal  = $_POST['tanggal'] ?? '';
$jemput   = $_POST['jemput'] ?? '';
$catatan  = $_POST['catatan'] ?? '';

if (!$nama || !$hp || !$armada || !$jumlah || !$tanggal || !$jemput) {
    die("Data belum lengkap");
}


    $tambah = $conn->prepare(
        "INSERT INTO booking (nama,no_hp,Armada,Jumlah,tanggal,jemput,catatan) VALUES (?, ?, ?, ?, ?, ?, ?)"
    );

    $tambah->bind_param("sssisss", $nama, $hp,$armada,$jumlah,$tanggal,$jemput,$catatan);

    if ($tambah->execute()) {
     echo "<script> 
        alert('Sudah tersimpan boskuu');
        window.location='booking.php';
</script>";
    } else {
        echo "Gagal menyimpan: " . $tambah->error;
    }

    $tambah->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <style>
        body
        {
             background:
        linear-gradient(rgba(15,23,42,0.6), rgba(15,23,42,0.6)),
        url("img/GUNUNGBROMO.jpg") center/cover no-repeat;

        }
.booking-container{
  max-width: 900px;
  margin: 20px auto;
  background: #ffffff;
  padding: 40px;
  border-radius: 12px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.1);
  font-family: Arial, sans-serif;
}

.booking-container h2{
  text-align: center;
  margin-bottom: 20px;
}

.form-group{
  margin-bottom: 15px;
}

label{
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input, select, textarea{
  width: 100%;
  padding: 10px;
  border-radius: 8px;
  border: 1px solid #ccc;
  font-size: 14px;
}

textarea{
  resize: vertical;
}

button{
  width: 100%;
  padding: 12px;
  background: #2c7be5;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  margin: 5px;
}

button:hover{
  background: #1a5edb;
}
#hehe{
     width: 100%;
  padding: 12px;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  margin: 5px;
}
</style>
</head>
<body>
   <div class="booking-container">
  <h2>Form Booking Travel</h2>

  <form action="" method="POST">

    <div class="form-group">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" required>
    </div>

    <div class="form-group">
      <label>No HP / WhatsApp</label>
      <input type="tel" name="hp" required>
    </div>

    <div class="form-group">
      <label>Pilih Armada</label>
      <select name="armada" required>
        <option value="">-- Pilih Armada --</option>
        <option>Toyota Fortuner</option>
        <option>Toyota Innova</option>
        <option>Isuzu Elf</option>
        <option>Toyota Hiace</option>
        <option>Jeep 4x4 Bromo</option>
         <option>Mercedez G-Class</option>
        
      </select>
    </div>

    <div class="form-group">
      <label>Jumlah Orang</label>
      <input type="number" name="jumlah" min="1" required>
    </div>

    <div class="form-group">
      <label>Tanggal Wisata</label>
      <input type="date" name="tanggal" required>
    </div>

    <div class="form-group">
      <label>Lokasi Penjemputan</label>
      <input type="text" name="jemput" required>
    </div>

    <div class="form-group">
      <label>Catatan Tambahan</label>
      <textarea name="catatan" rows="4"></textarea>
    </div>

    <button type="submit">Kirim Booking</button>
    <a href="booking.php" class="btn btn-danger" id="hehe">Batal</a>
  </form>
</div>
</body>
</html>
