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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armada | Bromo Travel</title>
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


    .armada{
        padding:80px 20px;
    }

    .container{
        max-width:1100px;
        margin:auto;
    }

    .armada h1{
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

    .armada-grid{
        display:grid;
        grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));
        gap:30px;
    }

    .armada-card{
        background:rgba(255,255,255,0.08);
        border-radius:30px;
        overflow:hidden;
        transition:0.3s ease;
        border:2px solid white;
        backdrop-filter:blur(30px);
        box-shadow:0 0 30px rgba(227,228,237,0.37);
    }

    .armada-card:hover{
        transform:translateY(-8px);
    }

    .armada-card img{
        width:100%;
        height:200px;
        object-fit:cover;
    }

    .armada-card .content{
        padding:20px;
    }

    .armada-info{
        font-size:12px;
        color:#94a3b8;
    }

    .armada-card h3{
        font-size:18px;
        margin:10px 0;
        color:#7dd3fc;
    }

    .armada-card p{
        font-size:14px;
        color:#e5e7eb;
        line-height:1.6;
        margin-bottom:15px;
    }

    .armada-card a{
        text-decoration:none;
        color:white;
        background:#38bdf8;
        padding:8px 16px;
        border-radius:10px;
        font-weight:500;
    }

    .armada-card a:hover{
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

    <section class="armada">
    <div class="container">

    <h1>Armada Bromo Travel</h1>
    <p class="subtitle">Pilihan kendaraan nyaman untuk perjalanan wisata Anda!!</p>

    <div class="armada-grid">

    <div class="armada-card">
    <img src="img/jeep4.jpg">
    <div class="content">
    <span class="armada-info">Kapasitas 4 Orang</span>
    <h3>Jeep Hardtop 4x4</h3>
    <p>Kendaraan utama wisata Bromo. Tangguh di medan pasir dan pegunungan.</p>
    <a href="jeep.php">Baca Sekarang</a>
    </div>
    </div>

    <div class="armada-card">
    <img src="img/hiace.png">
    <div class="content">
    <span class="armada-info">Kapasitas 12–14 Orang</span>
    <h3>Toyota Hiace</h3>
    <p>Mobil travel nyaman untuk rombongan dengan AC dingin dan kursi lega.</p>
    <a href="hiace.php">Baca Sekarang</a>
    </div>
    </div>

    <div class="armada-card">
    <img src="img/isuzuelf.jpg">
    <div class="content">
    <span class="armada-info">Kapasitas 15–19 Orang</span>
    <h3>Isuzu Elf</h3>
    <p>Armada besar untuk perjalanan wisata keluarga atau rombongan.</p>
    <a href="isuzu.php">Baca Sekarang</a>
    </div>
    </div>

    <div class="armada-card">
    <img src="img/innova1.jpg">
    <div class="content">
    <span class="armada-info">Kapasitas 5–7 Orang</span>
    <h3>Toyota Innova</h3>
    <p>Mobil keluarga nyaman dengan kabin luas dan perjalanan stabil.</p>
    <a href="innova.php">Baca Sekarang</a>
    </div>
    </div>

    <div class="armada-card">
    <img src="img/fortunner.jpg">
    <div class="content">
    <span class="armada-info">Kapasitas 5–7 Orang</span>
    <h3>Toyota Fortunner</h3>
    <p>Partner perjalanan tangguh dengan kenyamanan kelas atas.</p>
    <a href="fortunner.php">Baca Sekarang</a>
    </div>
    </div>

    <div class="armada-card">
    <img src="img/gclass.jpg">
    <div class="content">
    <span class="armada-info">Kapasitas 5–7 Orang</span>
    <h3>Mercedes Benz G-Class</h3>
    <p>Mobil keluarga premium dengan kenyamanan maksimal.</p>
    <a href="gclass.php">Baca Sekarang</a>
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
