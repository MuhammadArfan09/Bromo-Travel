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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog | Bromo Travel</title>
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
    font-size:2rem;
    font-weight:bold;
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

/* BLOG */

.blog{
    padding:80px 20px;
}

.container{
    max-width:1100px;
    margin:auto;
}

.blog h1{
    text-align:center;
    font-size:40px;
    margin-bottom:10px;
    color:#38bdf8;
}

.subtitle{
    text-align:center;
    color:#cbd5e1;
    margin-bottom:50px;
}

.blog-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));
    gap:30px;
}

.blog-card{
    background:rgba(255,255,255,0.08);
    border-radius:30px;
    overflow:hidden;
    transition:0.3s ease;
    border:2px solid white;
    backdrop-filter:blur(30px);
    box-shadow:0 0 30px rgba(227,228,237,0.37);
}

.blog-card:hover{
    transform:translateY(-8px);
}

.blog-card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

.blog-card .content{
    padding:20px;
}

.blog-date{
    font-size:12px;
    color:#94a3b8;
}

.blog-card h3{
    margin:10px 0;
    color:#7dd3fc;
}

.blog-card p{
    color:#e5e7eb;
    margin-bottom:15px;
}

.blog-card a{
    text-decoration:none;
    color:white;
    background:#38bdf8;
    padding:8px 16px;
    border-radius:10px;
    font-weight:500;
}

.blog-card a:hover{
    background:#0ea5e9;
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

/* MOBILE */

@media (max-width: 900px){

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
        color:white;
    }

    .logout-desktop{
        display:none;
    }

    .logout-mobile{
        display:block;
    }
}
</style>
</head>

<body>

<div class="nav">

    <div class="Logo">
        <a href="ha.php">Bromo Travel</a>
    </div>

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
        <div class="user">
            Hi, <?= htmlspecialchars($_SESSION['nama']); ?> 👋
        </div>
        <a href="logout.php" class="logout logout-desktop">Logout</a>
        <div class="menu-toggle" id="menuToggle">☰</div>
    </div>

</div>

<section class="blog">
<div class="container">

<h1>Blog Bromo Travel</h1>
<p class="subtitle">Tips perjalanan dan informasi wisata Gunung Bromo</p>

<div class="blog-grid">

<div class="blog-card">
<img src="img/bromo-sunrise.jpg">
<div class="content">
<span class="blog-date">24 Januari 2026</span>
<h3>Waktu Terbaik Menikmati Sunrise Bromo</h3>
<p>Menikmati matahari terbit di Bromo membutuhkan waktu yang tepat dan persiapan matang.</p>
<a href="blogke1.php">Baca Selengkapnya</a>
</div>
</div>

<div class="blog-card">
<img src="img/jeep-bromo.jpg">
<div class="content">
<span class="blog-date">10 Januari 2026</span>
<h3>Serunya Jeep Adventure di Lautan Pasir</h3>
<p>Dengan menggunakan jeep 4x4, perjalanan terasa lebih seru dan menantang.</p>
<a href="blogke2.php">Baca Selengkapnya</a>
</div>
</div>

<div class="blog-card">
<img src="img/tips-bromo.jpg">
<div class="content">
<span class="blog-date">5 Januari 2026</span>
<h3>Tips Persiapan Liburan ke Gunung Bromo</h3>
<p>Perlengkapan wajib agar perjalanan ke Bromo aman dan nyaman bersama keluarga.</p>
<a href="blogke3.php">Baca Selengkapnya</a>
</div>
</div>

<div class="blog-card">
<img src="img/bukit.jpg">
<div class="content">
<span class="blog-date">8 Januari 2026</span>
<h3>Spot Foto Terbaik di Gunung Bromo yang Wajib Dikunjungi</h3>
<p>Berikut spot foto foto yang wajib kamu datangi beserta tips pengambilan gambarnya.</p>
<a href="blogke4.php">Baca Selengkapnya</a>
</div>
</div>

<div class="blog-card">
<img src="img/Bromo.jpeg">
<div class="content">
<span class="blog-date">13 Januari 2026</span>
<h3>Estimasi Biaya Liburan ke Gunung Bromo 2026</h3>
<p>Mengetahui perkiraan biaya sejak awal akan membantu merencanakan liburan dengan lebih matang dan nyaman.</p>
<a href="blogke5.php">Baca Selengkapnya</a>
</div>
</div>
 
<div class="blog-card">
<img src="img/lereng.jpeg">
<div class="content">
<span class="blog-date">31 Januari 2026</span>
<h3>Rute Menuju Gunung Bromo dari Berbagai Kota</h3>
<p>Berikut beberapa rute menuju Bromo dari kota-kota utama di Jawa Timur yang paling sering digunakan wisatawan.</p>
<a href="blogke6.php">Baca Selengkapnya</a>
</div>
</div>

</div>
</div>
</section>

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