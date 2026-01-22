<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nama = $_POST["nama_teknis"];
  $kode = $_POST["kode_teknis"];

  if (!isset($_SESSION["data_teknis"])) {
    $_SESSION["data_teknis"] = [];
  }

  $_SESSION["data_teknis"][] = [$nama, $kode];

  header("Location: ../../view/admin/data_teknis.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Teknis</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="/sikoba/assets/css/admin/tambah_teknis.css">
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>
  <div class="container">
    <h2>Tambah Data Teknis</h2>
    <form method="post">
      <label for="nama_teknis">Nama Teknis</label>
      <input type="text" id="nama_teknis" name="nama_teknis" required>
  
      <label for="kode_teknis">Kode Teknis</label>
      <input type="text" id="kode_teknis" name="kode_teknis" required>
  
      <button type="submit">Simpan</button>
    </form>
  </div>
</main>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
