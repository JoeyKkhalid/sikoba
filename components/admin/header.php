<?php
$nama_user = "Wishnu";
$role_user = "Admin";
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
  header {
    background: linear-gradient(to right, #1f2b6c, #2e4aad);
    color: white;
    padding: 15px 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    z-index: 1101;
    top: 0;
    left: 0;
    width: 100%;
  }

  .logo-area {
    display: flex;
    align-items: center;
  }

  .logo-area img {
    height: 100px;
    margin-right: 15px;
  }

  .logo-area h1 {
    font-size: 22px;
    line-height: 1.1;
    margin: 0;
  }

  .logo-area span {
    font-size: 18px;
    font-weight: bold;
  }

  .right-header{
    margin-right: 50px;
  }
  .right-header .user {
    font-size: 16px;
  }

  .right-header .user i {
    font-size: 20px;
    margin-right: 6px;
  }

  .hamburger-menu {
    width: 30px;
    height: 25px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    margin-right: 20px;
  }

  .hamburger-menu .bar {
    height: 4px;
    width: 100%;
    background-color: white;
    border-radius: 2px;
    transition: 0.4s;
  }

  .hamburger-menu.active .bar:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }

  .hamburger-menu.active .bar:nth-child(2) {
    opacity: 0;
  }

  .hamburger-menu.active .bar:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
  }

  aside {
    width: 250px;
    background-color: #1d2a7a;
    color: white;
    height: 100%;
    padding: 120px 20px 20px; /* padding-top disesuaikan agar tidak tertutup header */
    position: fixed;
    top: 0;
    left: -300px;
    transition: left 0.3s ease;
    z-index: 1000;
    overflow-y: auto;
  }

  aside.active {
    left: 0;
  }

  aside ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  aside ul li {
    margin: 15px 0;
  }

  aside ul li a {
    display: flex;
    align-items: center;
    color: white;
    text-decoration: none;
  }

  aside ul li i {
    margin-right: 10px;
  }

  .menu-item {
    cursor: pointer;
    display: flex;
    flex-direction: column;
  }

  .submenu {
    display: none;
    margin-top: 10px;
    padding-left: 20px;
    background: #2e3b9c;
    border-left: 2px solid white;
  }

  .submenu li {
    margin: 5px 0;
  }

  .submenu a {
    color: white;
    text-decoration: none;
    padding: 5px 10px;
  }

  .menu-item.active .submenu {
    display: block;
  }

  @media (max-width: 768px) {
    header {
      flex-direction: column;
      align-items: flex-start;
    }

    .logo-area h1 {
      font-size: 18px;
    }

    .logo-area img {
      height: 80px;
    }

    aside {
      width: 220px;
    }
  }

  main {
    margin-left: 0;
    margin-top: 130px; /* untuk memberi ruang terhadap header */
    transition: margin-left 0.3s ease;
    padding: 20px;
  }

  main.shifted {
    margin-left: 290px;
  }
</style>

<header>
  <div class="logo-area">
    <div class="hamburger-menu" id="hamburger">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    <img src="../../assets/image/logo_bps.png" alt="Logo BPS">
    <div>
      <h1><em>BADAN PUSAT STATISTIK</em><br><em>KOTA SUKABUMI</em></h1>
      <span><em>SIKOBA</em></span>
    </div>
  </div>
  <div class="right-header">
    <div class="user">
      <i class="fas fa-user-circle"></i> Hello, <strong><?= $nama_user ?></strong><br>
      <span class="role-info">Anda Login Sebagai <?= $role_user ?></span>
    </div>
  </div>
</header>

<aside id="sidebar">
  <ul>
    <li><a href="beranda.php"><i class="fa fa-home"></i> Beranda</a></li>
    <li><a href="kontrak_bast.php"><i class="fa fa-file"></i> Daftar Kontrak dan BAST</a></li>
    <li><a href="kelola_user.php"><i class="fa fa-user"></i> Kelola User</a></li>
    <li><a href="pejabat_dipa.php"><i class="fa fa-briefcase"></i> Pejabat dan DIPA</a></li>
    <li><a href="data_kegiatan.php"><i class="fa fa-calendar"></i> Kelola Data Kegiatan</a></li>
    <li class="menu-item toggle-submenu">
      <span><i class="fa fa-building"></i><span style="margin-left: 10px;">Kelola Data Mitra</span></span>
      <ul class="submenu">
        <li><a href="mitra_sobat.php">Mitra Sobat</a></li>
        <li><a href="mitra_lainnya.php">Mitra Lainnya</a></li>
      </ul>
    </li>
    <li class="menu-item toggle-submenu">
      <span><i class="fa fa-database"></i><span style="margin-left: 10px;">Kelola Data Umum</span></span>
      <ul class="submenu">
        <li><a href="data_teknis.php">Data Teknis</a></li>
        <li><a href="data_pegawai.php">Data Pegawai</a></li>
        <li><a href="data_survei.php">Data Survei</a></li>
        <li><a href="jabatan_petugas.php">Jabatan Petugas</a></li>
        <li><a href="data_satuan.php">Data Satuan</a></li>
      </ul>
    </li>
    <li><a href="kelola_template.php"><i class="fa fa-file-lines"></i> Kelola Template</a></li>
    <li><a href="../index.php"><i class="fa fa-right-from-bracket"></i> Logout</a></li>
  </ul>
</aside>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('#hamburger');
    const sidebar = document.querySelector('#sidebar');
    const mainContent = document.querySelector('main');
    const menuItems = document.querySelectorAll('.menu-item');

    if (hamburger && sidebar) {
      hamburger.addEventListener('click', function () {
        hamburger.classList.toggle('active');
        sidebar.classList.toggle('active');
        mainContent.classList.toggle('shifted');
      });
    }

    menuItems.forEach(item => {
      item.addEventListener('click', function () {
        this.classList.toggle('active');
      });
    });
  });
</script>
