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
    <link rel="stylesheet" href="../../assets/css/admin/beranda.css">
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
