<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "bromo_travel"; 

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = $conn->prepare("DELETE FROM pesan WHERE id = ?");
    $delete->bind_param("i", $id);

    if ($delete->execute()) {
        echo "<script>
                alert('Data berhasil dihapus');
                window.location='admin.php';
              </script>";
    } else {
        echo "Gagal menghapus data: " . $delete->error;
    }

    $delete->close();
} else {
    echo "ID tidak ditemukan!";
}
?>
