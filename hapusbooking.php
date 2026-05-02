<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['login'])) {
    header("Location: index.html");
    exit;
}

if (isset($_GET['id'])) {

    $id = (int) $_GET['id'];

    $hapus = $conn->prepare("DELETE FROM booking WHERE id = ?");
    $hapus->bind_param("i", $id);

    if ($hapus->execute()) {
        echo "<script>
            alert('Data booking berhasil dihapus');
            window.location='booking.php';
        </script>";
    } else {
        echo "Gagal menghapus data";
    }

    $hapus->close();
}
?>
