<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Services | Bromo Travel</title>
<link rel="icon" type="image/png" href="img/logovohisma-removebg-preview.png">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Poppins", sans-serif;
}

body{
    background:
        linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
        url("img/GUNUNGBROMO.jpg");
    background-size:cover;
    background-attachment:fixed;
    color:white;
}

.nav{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:12px 25px;
    position:sticky;
    top:0;
    z-index:9999;
    border:2px solid rgba(255,255,255,0.18);
    backdrop-filter:blur(30px);
    box-shadow:0 0 30px rgba(227,228,237,0.37);
}

.Logo a{
    color:white;
    font-weight:bold;
    font-size:2rem;
    text-decoration:none;
}

.nav-center{
    display:flex;
}

#navMenu{
    display:flex;
    gap:30px;
    list-style:none;
}

#navMenu a{
    text-decoration:none;
    color:white;
    font-weight:600;
}

#navMenu a:hover{
    color:#facc15;
}

.nav-right{
    display:flex;
    align-items:center;
    gap:10px;
}

.user{
    color:white;
    padding:6px 14px;
    border-radius:12px;
    font-weight:600;
    border:1px solid rgba(255,255,255,0.4);
}

.logout{
    background:#ef4444;
    color:white;
    padding:6px 14px;
    border-radius:8px;
    text-decoration:none;
    font-weight:600;
}

.menu-toggle{
    display:none;
    font-size:26px;
    cursor:pointer;
}

.logout-mobile{
    display:none;
}

.wrapper{
    max-width:1100px;
    margin:120px auto 50px;
    background:rgba(255,255,255,0.95);
    padding:30px;
    border-radius:15px;
    box-shadow:0 4px 10px rgba(255,255,255,1);
    color:#0f172a;
}

.wrapper h1{
    margin-bottom:6px;
    font-size:28px;
}

.subtitle{
    margin-bottom:25px;
    color:#64748b;
    font-size:14px;
}

table{
    width:100%;
    border-collapse:collapse;
}

thead{
    background-color:#0f172a;
    color:white;
}

thead th{
    padding:12px;
    text-align:left;
}

tbody td{
    padding:12px;
    border-bottom:1px solid #e5e7eb;
}

tbody tr:hover{
    background-color:#f8fafc;
}

.active{
    color:#16a34a;
    font-weight:bold;
}

.inactive{
    color:#dc2626;
    font-weight:bold;
}

footer{
    position:fixed;
    bottom:0;
    width:100%;
    text-align:center;
    padding:10px;
    background:rgba(15,23,42,0.85);
    font-size:13px;
    color:white;
}

@media (max-width:900px){

    .nav{
        flex-wrap:wrap;
    }

    .nav-center{
        width:100%;
        order:3;
    }

    #navMenu{
        position:absolute;
        top:70px;
        right:20px;
        width:220px;
        background:rgba(15,23,42,0.95);
        border-radius:10px;
        padding:20px;
        flex-direction:column;
        gap:18px;
        display:none;
    }

    #navMenu.active{
        display:flex;
    }

    .menu-toggle{
        display:block;
    }

    .logout-desktop{
        display:none;
    }

    .logout-mobile{
        display:block;
    }

    .wrapper{
        margin:80px 15px;
        padding:25px;
    }
}
</style>
</head>

<body>

<div class="nav">

    <div class="Logo"><a href="ha.php">Bromo Travel</a></div>

    <div class="nav-center">
        <ul id="navMenu">
            <li><a href="ha.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="armada.php">Armada</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="logout-mobile">
                <a href="logout.php" class="logout">Logout</a>
            </li>
        </ul>
    </div>

    <div class="nav-right">
        <div class="user">Hi, <?= htmlspecialchars($_SESSION['nama']); ?> 👋</div>
        <a href="logout.php" class="logout logout-desktop">Logout</a>
        <div class="menu-toggle" id="menuToggle">☰</div>
    </div>

</div>

<div class="wrapper">
    <h1>Daftar Layanan Bromo Travel</h1>
    <p class="subtitle">Layanan wisata yang tersedia untuk pelanggan</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Layanan</th>
                <th>Deskripsi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Bromo Sunrise Tour</td>
                <td>Wisata matahari terbit di Penanjakan dengan jeep 4x4</td>
                <td class="active">Aktif</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jeep Adventure</td>
                <td>Eksplor Lautan Pasir, Kawah Bromo & Bukit Teletubbies</td>
                <td class="active">Aktif</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Private Trip</td>
                <td>Perjalanan eksklusif dengan jadwal fleksibel</td>
                <td class="active">Aktif</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Paket Wisata Lengkap</td>
                <td>Transportasi, hotel, dan tiket masuk</td>
                <td class="active">Aktif</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Dokumentasi Wisata</td>
                <td>Foto & video profesional selama perjalanan</td>
                <td class="inactive">Nonaktif</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Paket Prewedding</td>
                <td>Paket Prewedding di Gunung Bromo dengan jeep private dan spot sunrise terbaik</td>
                <td class="inactive">Nonaktif</td>
            </tr>
        </tbody>
    </table>
</div>

<footer>
© <?= date('Y'); ?> Bromo Travel | Explore The Nature
</footer>

<script>
const toggle = document.getElementById("menuToggle");
const menu = document.getElementById("navMenu");
toggle.onclick = () => menu.classList.toggle("active");
</script>

</body>
</html>
