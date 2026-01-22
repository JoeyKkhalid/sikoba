<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Kegiatan - SIKOBA</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"> <!-- BI Icon -->
  <link rel="stylesheet" href="/sikoba/assets/css/admin/tambah_data_kegiatan.css">
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>
  <div class="container">
    <h2>Tambah Data Kegiatan</h2>
    <form action="proses_data_kegiatan.php" method="POST">
      <div>
        <label for="teknis">Teknis</label>
        <input type="text" id="teknis" name="teknis" required>
      </div>
      <div>
        <label for="aktivitas">Aktivitas</label>
        <input type="text" id="aktivitas" name="aktivitas" required>
      </div>
      <div>
        <label for="nama_survei">Nama Survei</label>
        <input type="text" id="nama_survei" name="nama_survei" required>
      </div>
      <button type="submit" class="btn btn-primary">
        <i class="bi bi-plus-lg"></i>Tambah Data
      </button>
    </form>
  </div>
</main>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
