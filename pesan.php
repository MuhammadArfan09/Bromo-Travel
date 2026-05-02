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

$nama  = $_POST ['nama'];
$email = $_POST ['email'];
$pesan = $_POST ['pesan'];

$insert = $conn->prepare(
    "INSERT INTO pesan (nama, email, pesan) VALUES (?, ?, ?)"
);
$insert->bind_param("sss", $nama, $email, $pesan);

if ($insert->execute()) {
    echo "<script>alert('Pesan berhasil disimpan');window.location='contact.php';</script>";
} else {
    echo "Gagal: " . $insert->error;
}
?>
