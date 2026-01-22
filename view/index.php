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
    <link rel="stylesheet" href="/sikoba/assets/css/login.css">
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
