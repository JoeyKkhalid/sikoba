<?php
$loginError = "";
$roleLabel = "User"; // Default role label

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $roleLabel = $role;

    if ($username === "admin" && $password === "admin123" && $role === "Admin") {
        header("Location: admin/beranda.php");
        exit();
    } elseif ($username === "user" && $password === "user123" && $role === "User") {
        header("Location: user/index.php");
        exit();
    } else {
        $loginError = "Username, password, atau role salah.";
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

        /* Animasi dari index.php */
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

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .login-card {
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.6), rgba(0, 60, 143, 0.4));
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 20px 15px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            color: white;
            box-shadow: 0 0 30px rgba(0,0,0,0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
            tranform: translateY(40px);
            animation: slideUpFade 2s ease-out;
        }

        .login-card img {
            width: 180px;
            margin-bottom: 1px;
        }

        .login-card h2 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 5px;
            line-height: 1.3;
        }

        .login-card h1 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .login-card p {
            font-size: 12px;
            margin-bottom: 10px;
        }

        .input-group {
            background: white;
            border-radius: 15px;
            padding: 15px 19px;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
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
            margin-bottom: 20px;
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
            border: none;
            border-radius: 15px;
            padding: 15px 19px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 10px;
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:hover {
            background: #002b6b;
            box-shadow: 0 0 10px rgba(0, 60, 143, 0.7), 0 0 20px rgba(0, 60, 143, 0.5);
        }

        .admin-link {
            font-size: 13px;
            color: white;
        }

        .admin-link a {
            color: white;
            text-decoration: underline;
            cursor: pointer;
        }

        #toggle-role-label {
            display: inline-block;
            transition: opacity 0.3s ease;
        }
    </style>
</head>
<body>
<div class="login-card">
    <img src="../assets/image/logo_bps.png" alt="Logo BPS">
    <h2 style="font-style: italic;">BADAN PUSAT STATISTIK<br>KOTA SUKABUMI</h2>
    <h1><strong style="font-size: 28px;">SIKOBA</strong></h1>
    <p style="margin-top: -10px;">Aplikasi Pembuatan Surat Kontrak dan BAST</p>
    <p style="font-size: 13px; margin-top: 10px; margin-bottom: 10px;">
        Masukan Username dan Password untuk login <span id="form-role-label"><?php echo strtolower($roleLabel); ?></span>
    </p>

    <?php if ($loginError): ?>
        <p style="color: #ffcccc; font-size: 14px;"><?php echo $loginError; ?></p>
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

        <input type="hidden" name="role" id="role-hidden" value="<?php echo $roleLabel; ?>">

        <div class="forgot-password">
            <a href="#">Lupa password?</a>
        </div>

        <button type="submit" class="btn">MASUK</button>
    </form>

    <p class="admin-link">
        Masuk sebagai <span id="toggle-role-label"><?php echo ($roleLabel === "User") ? "Admin" : "User"; ?></span>? 
        <a href="#" id="switch-role" style="text-transform: uppercase; font-weight: bold;">Klik di sini</a>
    </p>
</div>

<script>
    const switchRoleBtn = document.getElementById("switch-role");
    const roleHidden = document.getElementById("role-hidden");
    const roleLabel = document.getElementById("toggle-role-label");
    const formRoleLabel = document.getElementById("form-role-label");

    // Fungsi untuk set role di localStorage dan UI
    function setRole(role) {
        roleHidden.value = role;
        formRoleLabel.textContent = role.toLowerCase();
        roleLabel.textContent = role === "Admin" ? "User" : "Admin";
        localStorage.setItem("selectedRole", role);
    }

    // Load dari localStorage saat halaman dimuat
    window.addEventListener("DOMContentLoaded", () => {
        const savedRole = localStorage.getItem("selectedRole");
        if (savedRole) {
            setRole(savedRole);
        }
    });

    switchRoleBtn.addEventListener("click", function(event) {
        event.preventDefault();
        const currentRole = roleHidden.value;
        const newRole = (currentRole === "Admin") ? "User" : "Admin";

        roleLabel.style.opacity = "0";
        formRoleLabel.style.opacity = "0";

        setTimeout(() => {
            setRole(newRole);
            roleLabel.style.opacity = "1";
            formRoleLabel.style.opacity = "1";
        }, 300);
    });
</script>
</body>
</html>
