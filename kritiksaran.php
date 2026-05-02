<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit;
}
?>

<?php
$query = "SELECT * FROM pesan ORDER BY tanggal ASC";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Pesan | Bromo Travel</title>
    <link rel="icon" type="image/png" href="img/logovohisma-removebg-preview.png">
      <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f1f5f9;
            color: #1e293b;
            padding: 30px;
        }

        h1 {
            margin-bottom: 10px;
        }

        .subtitle {
            margin-bottom: 25px;
            color: #64748b;
            font-size: 14px;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #0f172a;
            color: #fff;
        }

        th, td {
            padding: 12px;
            text-align: left;
            vertical-align: top;
            border-bottom: 1px solid #e5e7eb;
            font-size: 14px;
        }

        th {
            font-size: 13px;
            text-transform: uppercase;
        }

        tr:hover {
            background: #f8fafc;
        }

        .pesan {
            white-space: pre-wrap; 
            line-height: 1.6;
        }

        .tanggal {
            font-size: 12px;
            color: #64748b;
        }

        .empty {
            text-align: center;
            color: #94a3b8;
            padding: 20px;
        }
        .pesan {
    white-space: pre-wrap;     
    word-wrap: break-word;      
    overflow-wrap: break-word;  
    max-width: 400px; 
    line-height: 1.6;
}
.back {
    max-width: 900px;
    margin: 30px 200px 20px 0px;
    padding: 0 20px;
    
}
    </style>
</head>
<body>

<h1>Pesan Masuk</h1>
<p class="subtitle">Daftar pesan dari halaman Contact Bromo Travel</p>
 <div class="back">
        <a href="admin.php" class="btn btn-success">Kembali ke Home</a>
    </div>
<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php $no = 1; while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td class="pesan"><?= nl2br(htmlspecialchars($row['pesan'])) ?></td>
                    <td class="tanggal"><?= $row['tanggal'] ?></td>
                    <th>
            <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger mb-4">
   <i class="fa fa-trash"></i>
</a>

          </th>
                </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="empty">Belum ada pesan masuk</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
