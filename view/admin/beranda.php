<?php
// Simulasi data pengguna login
$nama_user = "Wishnu";
$role_user = "Admin";

// Data statistik
$data_kontrak = 0;
$data_bast = 0;
$data_pegawai = 0;
$data_mitra = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIKOBA - Dashboard</title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        main {
            background: url('../../assets/image/gedung_bps_updated.jpg') no-repeat center center;
            background-size: cover;
            min-height: 100vh;
            padding: 40px 30px;
            color: white;
            position: relative;
        }

        .breadcrumb {
            font-size: 12px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .welcome {
            text-align: center;
            margin-bottom: 30px;
            animation: fadeIn 1.2s ease-in-out forwards;
        }

        .welcome h1 {
            font-size: 26px;
            font-weight: bold;
            text-shadow: 1px 1px 2px black;
            opacity: 0;
            transform: translateY(30px);
            animation: slideUpFade 1.5s ease forwards;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            background-color: rgba(0,0,0,0.4);
            border-radius: 15px;
            padding: 25px;
        }

        .card {
            background-color: white;
            color: #1f2b6c;
            width: 160px;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            position: relative;
            font-weight: bold;
            opacity: 0;
            transform: translateY(40px);
            animation: slideUpFade 0.8s ease forwards;
        }

        .card:nth-child(1) { animation-delay: 0.3s; }
        .card:nth-child(2) { animation-delay: 0.5s; }
        .card:nth-child(3) { animation-delay: 0.7s; }
        .card:nth-child(4) { animation-delay: 0.9s; }

        .card:hover {
            transform: scale(1.05);
            transition: 0.3s ease;
        }

        .card .icon {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .card .number {
            color: red;
            font-size: 20px;
            margin-top: 8px;
        }

        .btn-more {
            text-align: center;
            margin-top: 30px;
            opacity: 0;
            animation: fadeIn 1.5s ease forwards;
            animation-delay: 1.5s;
        }

        .btn-more a {
            background-color: #192b77;
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn-more a:hover {
            background-color: #0e1b4f;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            .card-container {
                flex-direction: column;
                align-items: center;
            }
        }

        /* ANIMASI */
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

    </style>
</head>
    
<?php include '../../components/admin/header.php'; ?>

    <main class>
        <div class="welcome">
            <h1>Selamat Datang di SIKOBA<br>Aplikasi Pembuatan Kontrak dan<br>Berita Acara Serah Terima Pekerjaan</h1>
        </div>

        <div class="card-container">
            <div class="card">
                <div class="icon"><i class="fas fa-display"></i></div>
                <div>DATA KONTRAK</div>
                <div class="number"><?= $data_kontrak ?></div>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <div>DATA BAST</div>
                <div class="number"><?= $data_bast ?></div>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-user"></i></div>
                <div>DATA PEGAWAI</div>
                <div class="number"><?= $data_pegawai ?></div>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-users"></i></div>
                <div>DATA MITRA</div>
                <div class="number"><?= $data_mitra ?></div>
            </div>
        </div>

        <div class="btn-more">
            <a href="kontrak_bast.php">Selengkapnya</a>
        </div>
    </main>
    
    <?php include '../../components/admin/footer.php'; ?>

</body>
</html>
