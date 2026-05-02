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
<title>About | Bromo Travel</title>
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

.about-container{
    max-width:900px;
    margin:80px auto;
    padding:40px;
    border-radius:12px;
    border:2px white solid;
    background:rgba(255,255,255,0.1);
    backdrop-filter:blur(20px);
    box-shadow:0 0 30px rgba(0,0,0,0.4);
}

.about-container h1{
    text-align:center;
    margin-bottom:20px;
    font-size:36px;
    color:#facc15;
}

.about-container p{
    line-height:1.8;
    margin-bottom:15px;
    font-size:16px;
}

.review-grid{
    max-width:1000px;
    margin:40px auto 120px auto;
    padding:20px;
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(260px,1fr));
    gap:20px;
}

.review-card{
    background:rgba(255,255,255,0.1);
    backdrop-filter:blur(20px);
    padding:25px;
    border-radius:12px;
    box-shadow:0 0 20px rgba(0,0,0,0.3);
    border:2px white solid;
    transition: all 0.35s ease;
    cursor: pointer;
}
.review-card:hover{
     transform: translateY(-10px) scale(1.02);
    box-shadow: 0 10px 40px rgba(0,0,0,0.4);
}

.profile{
    display:flex;
    align-items:center;
    gap:12px;
    margin-bottom:15px;
}

.profile img{
    width:50px;
    height:50px;
    border-radius:50%;
    object-fit:cover;
    border:2px solid #facc15;
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

.logout-mobile{
    display:none;
}
/* untuk mobile */
@media (max-width: 900px){
    .nav{
        flex-wrap:wrap;
    }
    .logout-mobile{
        display:block;
    }
    .nav-center{
        width:100%;
        order:3;
    }
  .logout-desktop{
        display:none;
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

    .about-container{
        margin:60px 15px;
        padding:25px;
    }

    .about-container h1{
        font-size:28px;
    }

    .about-container p{
        font-size:15px;
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

<section class="about-container">
    <h1>Tentang Bromo Travel</h1>

    <p>
        Bromo Travel adalah layanan wisata yang menyediakan perjalanan nyaman dan aman
        menuju kawasan Gunung Bromo. Kami berkomitmen memberikan pengalaman terbaik
        bagi setiap wisatawan yang ingin menikmati keindahan alam Indonesia.
    </p>

    <p>
        Dengan armada kendaraan yang terawat, sopir berpengalaman, dan pelayanan ramah,
        kami siap membantu perjalanan Anda mulai dari penjemputan hingga kembali dengan aman.
    </p>

    <p>
        Layanan kami meliputi:
        <br>✔ Sewa Jeep Bromo
        <br>✔ Paket Wisata Sunrise
        <br>✔ Tour Privat & Grup
        <br>✔ Konsultasi Perjalanan Wisata
    </p>

    <p>
        Terima kasih telah mempercayakan perjalanan wisata Anda kepada Bromo Travel.
        Kami siap menemani petualangan Anda menjelajahi keindahan alam Bromo.
    </p>
</section>

<div class="review-grid">

    <div class="review-card">
        <div class="profile">
            <img src="img/Fadhel.jpg" alt="Fadhil">
            <div>
                <strong>Fadhil</strong><br>
                <small>Karangploso</small>
            </div>
        </div>
        <p>"Perjalanan ke Bromo sangat menyenangkan! Jeep bersih dan sopirnya ramah, Wed لطيف - جيد Wed."</p>
        <h4>⭐ ⭐ ⭐ ⭐ ⭐</h4>
    </div>

    <div class="review-card">
        <div class="profile">
            <img src="img/Awed.jpg" alt="Awed">
            <div>
                <strong>Awed</strong><br>
                <small>Spendunam</small>
            </div>
        </div>
        <p>"Sunrise di Bromo luar biasa. Pelayanan cepat dan profesional."</p>
        <h4>⭐ ⭐ ⭐ ⭐ ⭐</h4>
    </div>

    <div class="review-card">
        <div class="profile">
            <img src="img/Iqbal.jpg" alt="Iqbal">
            <div>
                <strong>Iqbal Ramadhan</strong><br>
                <small>Sakdurung NK Cafe</small>
            </div>
        </div>
        <p>"Harga terjangkau, perjalanan aman, dan sangat direkomendasikan."</p>
        <h4>⭐ ⭐ ⭐ ⭐ ⭐</h4>
    </div>

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
