<?php
$loginError = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Dummy check
    if ($username === "admin" && $password === "admin123") {
        header("Location: admin/beranda.php");
        exit();
    } elseif ($username === "user" && $password === "user123") {
        header("Location: user/beranda.php");
        exit();
    } else {
        $loginError = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIKOBA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('../assets/image/gedung_bps_updated.jpg') no-repeat center center fixed;
            background-size: cover;
            z-index: -2;
        }

        body::after {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 60, 143, 0.5);
            z-index: -1;
        }

        @keyframes slideUpFade {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(12px);
            border-radius: 16px;
            padding: 30px 25px;
            width: 100%;
            max-width: 350px;
            text-align: center;
            color: white;
            box-shadow: 0 0 25px rgba(0,0,0,0.25);
            animation: slideUpFade 1.5s ease-out;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .login-card img {
            width: 140px;
            margin-bottom: 5px;
        }

        .login-card h2 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .login-card h1 {
            font-size: 20px;
            margin: 0 0 10px;
        }

        .login-card p {
            font-size: 13px;
            margin-bottom: 20px;
        }

        .input-group {
            background: white;
            border-radius: 25px;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .input-group i {
            color: #555;
            margin-right: 10px;
        }

        .input-group input {
            border: none;
            outline: none;
            width: 100%;
            font-size: 14px;
        }

        .forgot-password {
            text-align: right;
            margin-bottom: 15px;
        }

        .forgot-password a {
            font-size: 12px;
            color: white;
            text-decoration: none;
        }

        .btn {
            width: 100%;
            background: #003c8f;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 25px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #002b6b;
        }
    </style>
</head>
<body>
<div class="login-card">
    <img src="../assets/image/logo_bps.png" alt="Logo BPS">
    <h2>BADAN PUSAT STATISTIK<br>KOTA SUKABUMI</h2>
    <h1>Selamat Datang di Aplikasi<br><strong>SIKOBA</strong></h1>
    <p>Aplikasi Pembuatan Surat Kontrak dan BAST</p>

    <?php if ($loginError): ?>
        <p style="color: #ffcccc;"><?php echo $loginError; ?></p>
    <?php endif; ?>

    <form method="POST">
        <div class="input-group">
            <i class="fa fa-user"></i>
            <input type="text" name="username" placeholder="Username" required>
        </div>

        <div class="input-group">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <input type="hidden" name="role" value="User">

        <div class="forgot-password">
            <a href="#">Lupa password?</a>
        </div>

        <button type="submit" class="btn">MASUK</button>
    </form>
</div>
</body>
</html>
