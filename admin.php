<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['role'] != 'admin') {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Admin Panel | Bromo Travel</title>
<link rel="icon" type="image/png" href="img/logovohisma-removebg-preview.png">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Poppins", sans-serif;
}

body{
    min-height:100vh;
    background:
        linear-gradient(rgba(15,23,42,0.6), rgba(15,23,42,0.6)),
        url("img/GUNUNGBROMO.jpg") center/cover no-repeat;
    color:#fff;
}

/* NAVBAR */
.nav{
    display:flex;
    justify-content:space-between;
    padding:10px 25px;
    align-items:center;
    position:sticky;
    top:0;
    z-index:9999;
    background:transparent;
    border:2px solid rgba(255,255,255,0.18);
    backdrop-filter:blur(30px);
    box-shadow:0 0 30px rgba(227,228,237,0.37);
}

.nav ul{
    display:flex;
    list-style:none;
    gap:3rem;
    align-items:center;
}

.nav ul li a{
    text-decoration:none;
    color:white;
    font-weight:600;
}

.nav ul li a:hover{
    color:rgb(255,196,0);
    text-decoration:overline;
}

.Logo a{
    color:white;
    font-size:2rem;
    font-weight:bold;
    text-decoration:none;
}

.Logo a:hover{
    color:rgb(255,196,0);
}

.start a{
    color:white;
    padding:8px 15px;
    border-radius:15px;
    text-decoration:none;
    font-weight:bold;
    border:1.5px solid black;
}

.start a:hover{
    box-shadow:0 0 20px white;
}

/* HERO ADMIN */
.hero{
    text-align:center;
    margin-top:140px;
    padding:0 20px;
}

.hero h1{
    font-size:40px;
    margin-bottom:10px;
}

.hero p{
    font-size:17px;
    opacity:0.9;
    margin-bottom:40px;
}

/* tombol menu admin */
.menu-admin{
    display:flex;
    gap:20px;
    justify-content:center;
    flex-wrap:wrap;
}

.btn{
    background:#facc15;
    color:#0f172a;
    padding:14px 35px;
    border-radius:10px;
    text-decoration:none;
    font-weight:bold;
    transition:.3s;
}

.btn:hover{
    background:#eab308;
}

.btn2{
    background:#22c55e;
    color:white;
}

.btn2:hover{
    background:#16a34a;
}

footer{
    position:fixed;
    bottom:0;
    width:100%;
    text-align:center;
    padding:10px;
    background:rgba(15,23,42,0.85);
    font-size:13px;
}
</style>
</head>

<body>

<div class="nav">
    <div class="Logo"><a href="#">Bromo Travel</a></div>

    <ul>
        <li><a href="admin.php">Home Admin</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="kritiksaran.php">Kritik & Saran</a></li>
    </ul>

    <div class="start">
        <a href="#">Admin: <?= htmlspecialchars($_SESSION['nama']); ?> 👋</a>
        <a href="logout.php" style="margin-left:10px;background:#ef4444;">Logout</a>
    </div>
</div>

<section class="hero">
    <h1>Dashboard Admin</h1>
    <p>Pilih data yang ingin dikelola</p>

    <div class="menu-admin">
        <a href="booking.php" class="btn">
            Lihat Data Booking Jeep
        </a>

        <a href="kritiksaran.php" class="btn btn2">
            Lihat Kritik & Saran
        </a>
    </div>
</section>

<footer>
    © <?= date('Y'); ?> Bromo Travel | Admin Panel
</footer>

</body>
</html>
