<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $namaPejabat = $_POST["nama_pejabat"];
  $nip = $_POST["nip"];
  $jabatan = $_POST["jabatan"];

  if (!isset($_SESSION["data_pejabat_dipa"])) {
    $_SESSION["data_pejabat_dipa"] = [];
  }

  $_SESSION["data_pejabat_dipa"][] = [
    "nama_pejabat" => $namaPejabat,
    "nip" => $nip,
    "jabatan" => $jabatan
  ];

  header("Location: ../../view/admin/pejabat_dipa.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Pejabat DIPA</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="/sikoba/assets/css/admin/tambah_pejabat_dipa.css">
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>
  <div class="container">
    <h2>Tambah Pejabat DIPA</h2>
    <form method="post">
      <div class="form-group full-width">
        <label for="nama_pejabat">Nama Pejabat</label>
        <input type="text" name="nama_pejabat" id="nama_pejabat" required>
      </div>

      <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" name="nip" id="nip" required>
      </div>

      <div class="full-width">
        <button type="submit">Simpan</button>
      </div>
    </form>
  </div>
</main>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
