<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Contact | Bromo Travel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="img/logovohisma-removebg-preview.png">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    background:
        linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
        url("img/GUNUNGBROMO.jpg");
    background-size: cover;
    background-attachment: fixed;
}

/* ===== NAVBAR SAMA SEPERTI HALAMAN LAIN ===== */

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
    color: rgb(255,196,0);
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

/* ===== CONTACT (TIDAK DIUBAH) ===== */

.contact {
    padding: 100px 20px;
}

.container {
    max-width: 1100px;
    margin: auto;
}

.contact h1 {
    text-align: center;
    font-size: 40px;
    color:rgb(255,196,0);
    margin-bottom: 10px;
}

.subtitle {
    text-align: center;
    color: #cbd5e1;
    margin-bottom: 50px;
    font-size: 15px;
}

.contact-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.contact-info,
.contact-form {
    background: rgba(255, 255, 255,);
    padding: 30px;
    border-radius: 30px;
    border: 2px solid rgb(255, 255, 255);
    backdrop-filter: blur(30px);
    box-shadow: 0px 0px 30px rgba(227, 228, 237, 0.37);
}

.contact-info h3,
.contact-form h3 {
    margin-bottom: 20px;
    color:rgb(255,196,0);
}

.contact-info p {
    margin-bottom: 12px;
    font-size: 14px;
    color: #e5e7eb;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: none;
    outline: none;
    font-size: 14px;
}

.contact-form button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
    background-color:rgb(255,196,0);
}

.contact-form button:hover {
    background-color:transparent;
    box-shadow:0px 0px 40px white;
    border: 0.5px white;
    color:white;
}

input{
    background-color:transparent;
    box-shadow:0px 0px 25px white;
    color:white;
}

textarea{
    background-color:transparent;
    box-shadow:0px 0px 25px white;
    color:white;
}

::placeholder {
    color: white;
    opacity: 1;
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

    .contact-wrapper {
        grid-template-columns: 1fr;
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

<section class="contact">
<div class="container">
<h1>Contact Us</h1>
<p class="subtitle">Hubungi kami untuk informasi paket wisata dan pemesanan</p>

<div class="contact-wrapper">

<div class="contact-info">
<h3>Informasi Kontak</h3>
<p>📍 Malang, Jawa Timur</p>
<p>📞 +62 822-9765-9482</p>
<p>✉️ arfanmuhammad0105@gmail.com</p>
<p>🕒 Setiap Hari (24 Jam)</p>
</div>

<form class="contact-form" action="pesan.php" method="POST">
<h3>Kirim Pesan</h3>
<input type="text" name="nama" placeholder="Nama Lengkap" required>
<input type="email" name="email" placeholder="Email" required>
<textarea name="pesan" rows="5" placeholder="Pesan Anda" required></textarea>
<button type="submit">Kirim Pesan</button>
</form>

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
