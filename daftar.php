<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun | Bromo Travel</title>
<link rel="icon" type="image/png" href="img/logovohisma-removebg-preview.png">
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            min-height:100vh;
            background: linear-gradient(
                rgba(15,23,42,0.6),
                rgba(15,23,42,0.6)
            ), url("img/GUNUNGBROMO.jpg") center/cover no-repeat;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .register-container{
                background: #ffffff;
    width: 380px;
    padding: 35px 30px;
    border-radius: 12px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.3);

    animation: muncul 0.8s ease forwards;
            
        }
        @keyframes muncul {
    0% {
        opacity: 0;
        transform: translateY(60px);
    }
    70% {
        transform: translateY(-5px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}


        h2{
            text-align:center;
            margin-bottom:10px;
            color:#0f172a;
        }

        p{
            text-align:center;
            font-size:14px;
            color:#64748b;
            margin-bottom:25px;
        }

        input{
            width:100%;
            padding:12px;
            margin-bottom:15px;
            border-radius:6px;
            border:1px solid #cbd5e1;
        }

        input:focus{
            outline:none;
            border-color:#facc15;
        }

        button{
            width:100%;
            padding:12px;
            background:#facc15;
            border:none;
            border-radius:6px;
            font-weight:bold;
            cursor:pointer;
            font-size:15px;
        }

        button:hover{
            background:#eab308;
        }

        .login{
            text-align:center;
            margin-top:20px;
            font-size:14px;
        }

        .login a{
            color:#2563eb;
            font-weight:bold;
            text-decoration:none;
        }

        .login a:hover{
            text-decoration:underline;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Daftar Akun</h2>
    <p>Buat akun untuk memesan wisata Bromo</p>

    <form action="prosesdaftar.php" method="POST">
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="Email Aktif" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password2" placeholder="Konfirmasi Password" required>

        <button type="submit">Daftar</button>
    </form>

    <div class="login">
        Sudah punya akun?
        <a href="login.html">Login</a>
    </div>
</div>

</body>
</html>
