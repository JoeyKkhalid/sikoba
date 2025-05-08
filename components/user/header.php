<?php
// Simulasi data pengguna login
$nama_user = "Nabilla";
$role_user = "User";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIKOBA - Badan Pusat Statistik</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
    }

    header {
      background: linear-gradient(to right, #1f2b6c, #2e4aad);
      color: white;
      padding: 15px 30px;
      display: flex;
      /* justify-content: space-between; */
      align-items: center;
      position: relative;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1001;
      width: auto;
    }

    .menu-icon {
      font-size: 28px;
      cursor: pointer;
      margin-right: 15px;
    }

    .logo-area {
      display: flex;
      align-items: center;
      margin-left: 80px;
    }

    .logo-area img {
      height: 55px;
      margin-right: 15px;
    }

    .logo-area h1 {
      font-size: 18px;
      line-height: 1.2;
    }

    .right-header {
      text-align: right;
      margin-left: auto; /* Tambahkan baris ini */
    }

    .right-header .title {
      font-weight: bold;
      color: #c8ff00;
      font-size: 20px;
    }

    .right-header .user {
      font-size: 14px;
    }

    .sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 60px; /* Menyesuaikan dengan tinggi header */
      left: -250px;
      background-color: #1d2a7a;
      color: white;
      overflow-y: auto;
      transition: left 0.3s ease;
      z-index: 1000;
      font-size: 13px;
    }

    .sidebar.active {
      left: 0;
    }

    .close-btn {
      position: absolute;
      top: 15px;
      right: 20px;
      font-size: 25px;
      color: white;
      cursor: pointer;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .sidebar ul li {
      margin: 15px 0;
    }

    .sidebar ul li a,
    .sidebar ul li span {
      display: flex;
      align-items: center;
      color: white;
      text-decoration: none;
      padding: 5px 10px;
    }

    .sidebar ul li i {
      margin-right: 10px;
    }

    .menu-item .submenu {
      display: none;
      margin-left: 20px;
      margin-top: 5px;
      background-color: #2e3b9c;
      padding-left: 10px;
      border-left: 2px solid white;
    }

    .menu-item.active .submenu {
      display: block;
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: rgba(0,0,0,0.5);
      z-index: 999;
      display: none;
    }

    .overlay.active {
      display: block;
    }

    @media (max-width: 768px) {
      .logo-area h1 {
        font-size: 14px;
      }

      .right-header .title {
        font-size: 16px;
      }

      .main-content {
        margin: 20px;
        padding: 20px;
      }
    }

  </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <div class="close-btn" onclick="toggleSidebar()">
    <i class="fas fa-times"></i>
  </div>
  <ul>
    <li style="margin-top: 55px;"><a href="../../view/user/dashboard.php"><img src="../../assets/image/home.png" style="width:16px; margin-right:8px;"> Beranda</a></li>
    <li><a href="../../view/user/menu.php"><img src="../../assets/image/surat.png" style="width:16px; margin-right:8px;"> Buat Surat Kontrak</a></li>
    <li><a href="../../view/user/menu_dua.php"><img src="../../assets/image/balpen.png" style="width:16px; margin-right:8px;"> Buat Berita Acara</a></li>
    <li><a href="../../view/index.php"><img src="../../assets/image/exit.png" style="width:16px; margin-right:8px;"> Logout</a></li>
  </ul>
</div>

<!-- Overlay -->
<div class="overlay" id="overlay" onclick="toggleSidebar()"></div>

<!-- Header -->
<header>
  <span class="menu-icon" onclick="toggleSidebar()">☰</span>
  <div class="logo-area">
    <img src="../../assets/image/logo_bps.png" alt="Logo BPS">
    <h1>BADAN PUSAT STATISTIK<br>SIKOBA</h1>
  </div>
  <div class="right-header">
    <div class="user"><i class="bi bi-person-circle"></i> Hello, <?= $nama_user ?></div>
  </div>
</header>

<!-- JavaScript -->
<script>
  function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");
    sidebar.classList.toggle("active");
    overlay.classList.toggle("active");
  }

  document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.menu-item');
    items.forEach(item => {
      item.addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  });
</script>

</body>
</html>
