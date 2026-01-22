<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $namaPegawai = $_POST["nama_pegawai"];
  $password = $_POST["password"];
  $teknis = $_POST["teknis"];
  $role = $_POST["role"];
  $username = $_POST["username"];

  if (!isset($_SESSION["data_user"])) {
    $_SESSION["data_user"] = [];
  }

  $_SESSION["data_user"][] = [
    "nama_pegawai" => $namaPegawai,
    "password" => $password,
    "teknis" => $teknis,
    "role" => $role,
    "username" => $username
  ];

  header("Location: ../../view/admin/kelola_user.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah User</title>
  <link rel="stylesheet" href="/sikoba/assets/css/admin/tambah_user.css">
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>

  <div class="container">
    <h2>Tambah User</h2>
    <form method="post">
      <div class="form-group">
        <label for="nama_pegawai">Nama Pegawai</label>
        <select name="nama_pegawai" id="nama_pegawai" required>
          <option value="">Pilih Pegawai</option>
          <option value="Pegawai A">Pegawai A</option>
          <option value="Pegawai B">Pegawai B</option>
        </select>
      </div>
  
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
      </div>
  
      <div class="form-group">
        <label for="teknis">Teknis</label>
        <select name="teknis" id="teknis" required>
          <option value="">Pilih Teknis</option>
          <option value="Teknis A">Teknis A</option>
          <option value="Teknis B">Teknis B</option>
        </select>
      </div>
  
      <div class="form-group">
        <label for="role">Role</label>
        <select name="role" id="role" required>
          <option value="">Pilih Role</option>
          <option value="Admin">Admin</option>
          <option value="User">User</option>
        </select>
      </div>
  
      <div class="form-group full-width">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
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
