<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['login']) || $_SESSION['role'] != 'admin') {
    header("Location: index.html");
    exit;
}

$query = "SELECT * FROM booking ORDER BY dibuat ASC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Admin | Data Booking Jeep</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
<style>
body{
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    margin: 0;
}

/* container utama */
.container{
    width: 90%;
    max-width: 1100px;
    margin: 50px auto;
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

/* judul */
h2{
    text-align: center;
    margin-bottom: 25px;
}

/* tabel */
table{
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed;
}

th{
    background: #2c3e50;
    color: white;
    padding: 12px;
}
th, td {
    padding: 12px;
    text-align: center;
    word-wrap: break-word;
    overflow-wrap: break-word;
}
td{
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}
td.catatan {
    max-width: 250px;
    white-space: normal;
}
tr:hover{
    background: #f2f2f2;
}

/* tombol */
.btn-hapus{
    background: #e74c3c;
    color: white;
    padding: 6px 12px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
}

.btn-hapus:hover{
    background: #c0392b;
}

.header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.logout{
    background:  #e74c3c;
    color: white;
    padding: 8px 14px;
    border-radius: 6px;
    text-decoration: none;
}

.logout:hover{
    background: #2c3e50;
}
.back {
    max-width: 900px;
    margin: 30px 100px 20px 100px;
    padding: 0 20px;
    
}
#tombol{
    margin:0px 0px 10px 10px;
}
</style>
</head>

<body>
    
  <div class="back">
        <a href="admin.php" class="btn btn-success">Kembali ke Home</a>
    </div>


<div class="container">
   <a href="tambahbooking.php" class="btn btn-info" id="tombol">
     <i class="fa fa-plus"></i> Tambah
   </a>
<div class="header">
    <h2>Data Booking Jeep</h2>
    
    <a href="logout.php" class="logout">Logout</a>
</div>

<table>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>No HP</th>
    <th>Armada</th>
    <th>Jumlah</th>
    <th>Tanggal</th>
    <th>Jemput</th>
    <th>Catatan</th>
    <th>Dibuat</th>
    <th>Aksi</th>
</tr>


<?php $no=1; while($row = mysqli_fetch_assoc($result)) : ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= htmlspecialchars($row['nama']) ?></td>
    <td><?= htmlspecialchars($row['no_hp']) ?></td>
    <td><?= htmlspecialchars($row['Armada']); ?></td>
    <td><?= $row['Jumlah'] ?></td>
    <td><?= $row['tanggal'] ?></td>
    <td><?= htmlspecialchars($row['jemput']) ?></td>
    <td><?= htmlspecialchars($row['catatan']) ?></td>
    <td><?= $row['dibuat'] ?></td>
    <td>
        <a href="editbooking.php?id=<?= $row['id']; ?>" class="btn btn-success mb-4">
              <i class="fa fa-pencil"></i>
            </a>

        <a class="btn btn-danger mb-4"
           href="hapusbooking.php?id=<?= $row['id'] ?>"
           onclick="return confirm('Yakin hapus data ini?')">
            <i class="fa fa-trash"></i>
        </a>

    </td>
</tr>
<?php endwhile; ?>

</table>

</div>
</body>
</html>
