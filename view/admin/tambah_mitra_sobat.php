<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $noMitra = $_POST["no_mitra"];
  $nama = $_POST["nama"];
  $nik = $_POST["nik"];
  $alamat = $_POST["alamat"];

  if (!isset($_SESSION["data_mitra"])) {
    $_SESSION["data_mitra"] = [];
  }

  $_SESSION["data_mitra"][] = [
    "no_mitra" => $noMitra,
    "nama" => $nama,
    "nik" => $nik,
    "alamat" => $alamat
  ];

  header("Location: ../../view/admin/mitra_sobat.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Mitra</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="/sikoba/assets/css/admin/tambah_mitra_sobat.css">
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>
  <div class="container">
    <h2>Tambah Mitra</h2>
    <form method="post">
      <div class="row">
        <div class="form-group">
          <label for="no_mitra">No Mitra</label>
          <input type="text" name="no_mitra" id="no_mitra" required>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" id="alamat" required>
        </div>
      </div>

      <div class="row">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" required>
        </div>

        <div class="form-group">
          <label for="nik">NIK</label>
          <input type="text" name="nik" id="nik" required>
        </div>
      </div>

      <div class="full-width">
        <button type="submit">+ Tambah Data</button>
      </div>
    </form>
  </div>
</main>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
