<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama     = $_POST['nama'];
        $hp       = $_POST['hp'];
        $armada   = $_POST['armada'];
        $jumlah   = $_POST['jumlah'];
        $tanggal  = $_POST['tanggal'];
        $jemput   = $_POST['jemput'];
        $catatan  = $_POST['catatan'];

        $update = $conn->prepare(
            "UPDATE booking SET nama=?, no_hp=?, Armada=?, Jumlah=?, tanggal=?, jemput=?, catatan=? WHERE id=?"
        );

        $update->bind_param("sssisssi",$nama,$hp,$armada,$jumlah,$tanggal,$jemput,$catatan,$id
        );

        if ($update->execute()) {
            echo "<script>
                    alert('Booking berhasil diupdate');
                    window.location='booking.php';
                  </script>";
        } else {
            echo "Gagal update: " . $update->error;
        }
    }

    $query = "SELECT * FROM booking WHERE id = $id";
    $sql   = mysqli_query($conn, $query);
    $hasil = mysqli_fetch_assoc($sql);

    $nama    = $hasil['nama'];
    $hp      = $hasil['no_hp'];
    $armada  = $hasil['Armada'];
    $jumlah  = $hasil['Jumlah'];
    $tanggal = $hasil['tanggal'];
    $jemput  = $hasil['jemput'];
    $catatan = $hasil['catatan'];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Booking</title>
<link href="css/bootstrap.min.css" rel="stylesheet">

<style>
body{
  background:
  linear-gradient(rgba(15,23,42,0.6), rgba(15,23,42,0.6)),
  url("img/GUNUNGBROMO.jpg") center/cover no-repeat;
  font-family: Arial, sans-serif;
}

.booking-container{
  max-width: 600px;
  margin: 60px auto;
  background: #ffffff;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}

.booking-container h2{
  text-align: center;
  margin-bottom: 20px;
  color: #333;
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

.btn-primary{
  width: 100%;
  padding: 12px;
  border-radius: 8px;
}

.btn-secondary{
  width: 100%;
  padding: 10px;
  border-radius: 8px;
  margin-top: 8px;
}
</style>
</head>

<body>

<div class="booking-container">
<h2>Edit Booking Travel</h2>

<form method="POST">

<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" value="<?= $nama ?>" required>
</div>

<div class="form-group">
<label>No HP</label>
<input type="text" name="hp" value="<?= $hp ?>" required>
</div>

<div class="form-group">
<label>Armada</label>
<select name="armada">
  <option <?= $armada=='Toyota Fortuner'?'selected':'' ?>>Toyota Fortuner</option>
  <option <?= $armada=='Toyota Innova'?'selected':'' ?>>Toyota Innova</option>
  <option <?= $armada=='Isuzu Elf'?'selected':'' ?>>Isuzu Elf</option>
  <option <?= $armada=='Toyota Hiace'?'selected':'' ?>>Toyota Hiace</option>
  <option <?= $armada=='Jeep 4x4 Bromo'?'selected':'' ?>>Jeep 4x4 Bromo</option>
  <option <?= $armada=='Mercedez G-Class'?'selected':'' ?>>Mercedez G-Class</option>
</select>
</div>

<div class="form-group">
<label>Jumlah Orang</label>
<input type="number" name="jumlah" value="<?= $jumlah ?>" required>
</div>

<div class="form-group">
<label>Tanggal Wisata</label>
<input type="date" name="tanggal" value="<?= $tanggal ?>" required>
</div>

<div class="form-group">
<label>Lokasi Penjemputan</label>
<input type="text" name="jemput" value="<?= $jemput ?>" required>
</div>

<div class="form-group">
<label>Catatan</label>
<textarea name="catatan"><?= $catatan ?></textarea>
</div>

<button class="btn btn-primary">Update Booking</button>
<a href="booking.php" class="btn btn-secondary">Batal</a>

</form>
</div>

</body>
</html>