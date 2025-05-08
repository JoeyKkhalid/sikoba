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
  <style>
    body { font-family: 'Poppins', sans-serif; margin: 0; background-color: #fff; }
    .container { padding: 40px; max-width: 600px; margin: auto; }
    h2 { color: #30387B; font-size: 24px; font-weight: 700; margin-bottom: 30px; }
    label { display: block; margin-bottom: 8px; font-weight: 500; }
    input[type="text"] { width: 100%; padding: 10px 15px; border: 1px solid #ccc; border-radius: 6px; margin-bottom: 25px; font-size: 16px; }
    button { background-color: #30387B; color: #fff; padding: 10px 25px; border: none; border-radius: 6px; font-weight: 600; cursor: pointer; }
    button:hover { background-color: #2a3169; }
  </style>
</head>
<body>

<?php include '../../components/admin/header.php'; ?>
<?php include '../../components/admin/sidebar.php'; ?>

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

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
