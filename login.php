<?php
include 'koneksi.php';
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    
    if ($email === "admin@gmail.com" && $password === "123123") {

        $_SESSION['login'] = true;
        $_SESSION['role']  = 'admin';
        $_SESSION['nama']  = 'Admin';

        header("Location: admin.php");
        exit;
    }

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' LIMIT 1");

    if (mysqli_num_rows($query) === 1) {
        $user = mysqli_fetch_assoc($query);

        if (password_verify($password, $user['password'])) {

            $_SESSION['login'] = true;
            $_SESSION['role']  = 'user';
            $_SESSION['id']    = $user['id'];
            $_SESSION['nama']  = $user['nama'];
            $_SESSION['email'] = $user['email'];

            header("Location: ha.php");
            exit;
            session_regenerate_id(true);
        } else {
            echo "<script>alert('Login Gagal');window.location='index.html';</script>";
        }

    } else {
        echo "<script>alert('Login Gagal');window.location='index.html';</script>";
    }

} else {
    header("Location: index.html");
}
?>
