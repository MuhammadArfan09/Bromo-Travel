<?php
include 'koneksi.php';

$nama      = htmlspecialchars($_POST['nama']);
$email     = htmlspecialchars($_POST['email']);
$password  = $_POST['password'];
$password2 = $_POST['password2'];

if ($password !== $password2) {
    echo "<script>alert('Konfirmasi password tidak sesuai');window.location='daftar.php';</script>";
    exit;
}

// cek email nek wis terdaftar
$cek = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
if (mysqli_num_rows($cek) > 0) {
    echo "<script>alert('Email sudah terdaftar');window.location='daftar.php';</script>";
    exit;
}

// Enkripsi password e
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Simpan nang database e
$query = mysqli_query($conn, "INSERT INTO users (nama, email, password)
                              VALUES ('$nama','$email','$password_hash')");

if ($query) {
    echo "<script>alert('Pendaftaran berhasil, silakan login');window.location='login.html';</script>";
} else {
    echo "<script>alert('Pendaftaran gagal');window.location='daftar.php';</script>";
}
?>
