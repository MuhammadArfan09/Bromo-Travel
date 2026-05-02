<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home | Bromo Travel</title>
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

/* kiri */
.nav-left{
    display:flex;
    align-items:center;
    gap:15px;
}

.Logo a{
    color:white;
    font-size:2rem;
    font-weight:bold;
    text-decoration:none;
}

/* tengah */
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

/* kanan */
.nav-right{
    display:flex;
    align-items:center;
    gap:12px;
}

.user{
    color:white;
    padding:6px 14px;
    border-radius:12px;
    font-weight:600;
    border:1px solid rgba(255,255,255,0.4);
}

.menu-toggle{
    display:none;
    font-size:26px;
    cursor:pointer;
}

/* tombol logout di menu */
.logout{
     background:#ef4444;
    color:white;
    padding:6px 14px;
    border-radius:8px;
    text-decoration:none;
    font-weight:600;
}

/* hero */
.hero{
    text-align:center;
    margin-top:160px;
    padding:0 20px;
}

.hero h1{
    font-size:42px;
    margin-bottom:15px;
}

.hero p{
    font-size:18px;
    opacity:0.9;
    margin-bottom:35px;
}

.btn{
    background:#facc15;
    color:#0f172a;
    padding:14px 35px;
    border-radius:10px;
    text-decoration:none;
    font-weight:bold;
}

/* footer */
footer{
    position:fixed;
    bottom:0;
    width:100%;
    text-align:center;
    padding:10px;
    background:rgba(15,23,42,0.85);
    font-size:13px;
}
.logout-mobile{
    display:none;
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

    <div class="nav-left">
        <div class="Logo"><a href="#">Bromo Travel</a></div>
    </div>

    <div class="nav-center">
        <ul id="navMenu">
            <li><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="armada.php">Armada</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>

            <!-- logout khusus mobile -->
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

<section class="hero">
    <h1>Selamat Datang, <?= htmlspecialchars($_SESSION['nama']); ?> 👋</h1>
    <p>Jelajahi keindahan Gunung Bromo bersama layanan terbaik kami</p>
    <a href="https://wa.me/6282297659482?text=Halo%20Mimin%20Bromo%20Travel%20,%20saya%20ingin%20memesan%20wisata" target="_blank" class="btn">Pesan Sekarang</a>
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
