<?php
// Dummy data untuk kontrak dan BAST
$kontrakList = [
    ["judul" => "Kontrak A", "tgl" => "2025-01-10", "teknis" => "Teknis A", "pjk" => "PJK A", "lembar" => 3],
    ["judul" => "Kontrak B", "tgl" => "2025-02-15", "teknis" => "Teknis B", "pjk" => "PJK B", "lembar" => 5],
];

$bastList = [
    ["judul" => "BAST A", "tgl" => "2025-03-01", "teknis" => "Teknis A", "pjk" => "PJK A", "lembar" => 2],
    ["judul" => "BAST B", "tgl" => "2025-03-05", "teknis" => "Teknis B", "pjk" => "PJK B", "lembar" => 4],
];

// Simulasi data pengguna login
$nama_user = "Wishnu";
$role_user = "Admin";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIKOBA - Kontrak dan BAST</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background: linear-gradient(to right, #1f2b6c, #2e4aad);
            color: white;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }

        .hamburger-menu {
            width: 30px;
            height: 25px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            cursor: pointer;
            z-index: 1100;
        }

        .hamburger-menu .bar {
            height: 4px;
            width: 100%;
            background-color: white;
            border-radius: 2px;
            transition: 0.4s;
        }

        /* Animation when sidebar active */
        .hamburger-menu.active .bar:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .hamburger-menu.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger-menu.active .bar:nth-child(3) {
            transform: rotate(-45deg) translate(6px, -6px);
        }

        .logo-area {
            display: flex;
            align-items: center;
        }

        .logo-area img {
            height: 120px;
            margin-right: 15px;
        }

        .logo-area h1 {
            font-size: 26px;
            line-height: 1.1;
            margin: 0;
        }

        .logo-area span {
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        .right-header {
            text-align: right;
        }

        .right-header .user {
            font-size: 18px; /* perbesar teks utama */
            color: white;
        }

        .right-header .user i {
            font-size: 24px; /* ukuran ikon orang */
            margin-right: 8px;
            vertical-align: middle;
        }

        .role-info {
            font-size: 16px; /* perbesar teks status login */
            display: inline-block;
            margin-top: 4px;
        }

        .content {
            display: flex;
        }

        aside {
            width: 250px;
            background-color: #1d2a7a;
            color: white;
            height: calc(100vh - 150px - 110px); /* 150px untuk header, 110px untuk footer */
            padding: 20px;
            position: fixed;
            top: 150px;
            left: -300px;
            transition: left 0.1s ease;
            z-index: 1000;
        }

        aside.active {
            left: 0;
        }

        aside ul {
            list-style: none;
            padding: 0;
        }

        aside ul li {
            margin: 15px 0;
            cursor: pointer;
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

        main {
            flex-grow: 1;
            padding: 30px;
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }

        aside:not(.active) ~ main {
            margin-left: 0;
        }

        h3 {
            background-color: #1d2a7a;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            width: fit-content;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .aksi i {
            margin: 0 5px;
            cursor: pointer;
        }

        .aksi i.fa-pen { color: #9333ea; }
        .aksi i.fa-trash { color: #ef4444; }
        .aksi i.fa-eye { color: #0ea5e9; }

        .pagination {
            text-align: right;
            margin-top: -30px;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            .content {
                flex-direction: column;
            }

            main {
                margin-left: 0 !important;
            }
        }

        .menu-item {
            cursor: pointer;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .submenu {
            display: none;
            margin-top: 10px;
            padding-left: 20px;
            background-color: #2e3b9c;
            list-style-type: none;
            border-left: 2px solid white;
        }

        .submenu li {
            margin: 5px 0;
        }

        .submenu a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 5px 10px;
        }

        .menu-item .submenu {
            display: none;
        }

        .menu-item.active .submenu {
            display: block;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Toggle submenu
            const menuItems = document.querySelectorAll('.menu-item');
            const Sidebar = document.querySelector('aside');
            const toggleBtn = document.querySelector('.hamburger-menu');
            menuItems.forEach(item => {
                item.addEventListener('click', () => {
                    item.classList.toggle('active');
                });
            });

            toggleBtn.addEventListener('click', () => {
                Sidebar.classList.toggle('active');
                toggleBtn.classList.toggle('active'); // untuk animasi hamburger
            });
        });
    </script>
</head>

<body>
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

</header>

<div class="content">
    <aside>
        <ul>
            <li><a href="beranda.php"><i class="fa fa-home"></i> Beranda</a></li>
            <li><a href="kontrak_bast.php"><i class="fa fa-file"></i> Daftar Kontrak dan BAST</a></li>
            <li><a href="kelola_user.php"><i class="fa fa-user"></i> Kelola User</a></li>
            <li><a href="pejabat_dipa.php"><i class="fa fa-briefcase"></i> Pejabat dan DIPA</a></li>
            <li><a href="data_kegiatan.php"><i class="fa fa-calendar"></i> Kelola Data Kegiatan</a></li>

            <li class="menu-item toggle-submenu">
                <span><i class="fa fa-building"></i> <span style="margin-left: 10px;">Kelola Data Mitra</span></span>
                <ul class="submenu">
                    <li><a href="mitra_sobat.php">Mitra Sobat</a></li>
                    <li><a href="mitra_lainnya.php">Mitra Lainnya</a></li>
                </ul>
            </li>

            <li class="menu-item toggle-submenu">
                <span><i class="fa fa-database"></i> <span style="margin-left: 10px;">Kelola Data Umum</span></span>
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

    <main>
        <h3>Daftar Kontrak</h3>
        <table>
            <tr>
                <th>NO</th>
                <th>JUDUL KONTRAK</th>
                <th>TANGGAL SK</th>
                <th>TEKNIS</th>
                <th>NAMA PJK</th>
                <th>JUMLAH LEMBAR</th>
                <th>AKSI</th>
            </tr>
            <?php foreach ($kontrakList as $index => $row): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $row['judul'] ?></td>
                    <td><?= $row['tgl'] ?></td>
                    <td><?= $row['teknis'] ?></td>
                    <td><?= $row['pjk'] ?></td>
                    <td><?= $row['lembar'] ?></td>
                    <td class="aksi">
                        <i class="fas fa-pen"></i>
                        <i class="fas fa-trash"></i>
                        <i class="fas fa-eye"></i>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h3>Daftar BAST</h3>
        <table>
            <tr>
                <th>NO</th>
                <th>JUDUL BAST</th>
                <th>TANGGAL SK</th>
                <th>TEKNIS</th>
                <th>NAMA PJK</th>
                <th>JUMLAH LEMBAR</th>
                <th>AKSI</th>
            </tr>
            <?php foreach ($bastList as $index => $row): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $row['judul'] ?></td>
                    <td><?= $row['tgl'] ?></td>
                    <td><?= $row['teknis'] ?></td>
                    <td><?= $row['pjk'] ?></td>
                    <td><?= $row['lembar'] ?></td>
                    <td class="aksi">
                        <i class="fas fa-pen"></i>
                        <i class="fas fa-trash"></i>
                        <i class="fas fa-eye"></i>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="pagination">
            Halaman 1,2,3,4,5,...
        </div>
    </main>
</div>

</body>
</html>
