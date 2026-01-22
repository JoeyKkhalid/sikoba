<?php
$nama_user = "Wishnu";
$role_user = "Admin";
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="../../assets/css/style.css">
<style>
  /* Tambahan untuk dropdown user */
  .user-dropdown {
    position: relative;
    display: inline-block;
    text-align: left;
  }

  .dropdown-btn {
    background: none;
    border: none;
    cursor: pointer;
    color: white;
    font-size: 16px;
    padding: 0;
  }

  .dropdown-btn i {
    margin-right: 6px;
    font-size: 20px;
  }

  .dropdown-btn .arrow {
    margin-left: 5px;
    font-size: 12px;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: white;
    min-width: 130px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    z-index: 1102;
    border-radius: 6px;
    overflow: hidden;
  }

  .dropdown-content a {
    color: black;
    padding: 10px 15px;
    text-decoration: none;
    display: block;
    font-size: 14px;
  }

  .dropdown-content a:hover {
    background-color: #f0f0f0;
  }

  .dropdown-content.show {
    display: block;
  }

  body::-webkit-scrollbar {
    display: none;
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
    <div class="user-dropdown">
      <button onclick="toggleDropdown()" class="dropdown-btn">
        <i class="fas fa-user-circle"></i> Hello, <?= $nama_user ?> <span class="arrow">&#9660;</span><br>
        <span style="font-size: 12px;">Anda Login Sebagai <?= $role_user ?></span>
      </button>
      <div id="dropdown-menu" class="dropdown-content">
        <a href="../../view/admin/profil_admin.php"><i class="fas fa-user"></i> Profil</a>
      </div>
    </div>
  </div>
</header>

<aside id="sidebar">
  <ul>
    <li><a href="beranda.php"><img src="../../assets/image/icon/home.svg" alt="" class="icon-sidebar">Beranda</a></li>
    <li><a href="kontrak_bast.php"><img src="../../assets/image/icon/kegiatan.svg" alt="" class="icon-sidebar">Daftar Kontrak dan BAST</a></li>
    <li><a href="kelola_user.php"><img src="../../assets/image/icon/user.svg" alt="" class="icon-sidebar">Kelola User</a></li>
    <li><a href="pejabat_dipa.php"><img src="../../assets/image/icon/user.svg" alt="" class="icon-sidebar">Pejabat dan DIPA</a></li>
    <li><a href="data_kegiatan.php"><img src="../../assets/image/icon/kegiatan.svg" alt="" class="icon-sidebar">Kelola Data Kegiatan</a></li>
    <li class="menu-item toggle-submenu">
      <span><img src="../../assets/image/icon/mitra.svg" alt="" class="icon-sidebar"><span>Kelola Data Mitra</span></span>
      <ul class="submenu">
        <li><a href="mitra_sobat.php">Mitra Sobat</a></li>
        <li><a href="mitra_lainnya.php">Mitra Lainnya</a></li>
      </ul>
    </li>
    <li class="menu-item toggle-submenu">
      <span><img src="../../assets/image/icon/umum.svg" alt="" class="icon-sidebar"><span>Kelola Data Umum</span></span>
      <ul class="submenu">
        <li><a href="data_teknis.php">Data Teknis</a></li>
        <li><a href="data_pegawai.php">Data Pegawai</a></li>
        <li><a href="data_survei.php">Data Survei</a></li>
        <li><a href="jabatan_petugas.php">Jabatan Petugas</a></li>
        <li><a href="data_satuan.php">Data Satuan</a></li>
      </ul>
    </li>
    <li><a href="kelola_template.php"><img src="../../assets/image/icon/template.svg" alt="" class="icon-sidebar">Kelola Template</a></li>
    <li><a href="../index.php"><img src="../../assets/image/icon/logout.svg" alt="" class="icon-sidebar">Logout</a></li>
  </ul>
</aside>

<script src="../../assets/js/main.js"></script>