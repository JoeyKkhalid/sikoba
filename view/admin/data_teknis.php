<?php
session_start();

// Data default jika belum ada di session
if (!isset($_SESSION['data_teknis'])) {
  $_SESSION['data_teknis'] = [
    ["Sub Bagian Umum", "001"],
    ["Sub Bagian Administrasi", "002"],
    ["Sub Bagian Keuangan", "003"]
  ];
}

$data = $_SESSION['data_teknis'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Teknis - SIKOBA</title>
  <link rel="stylesheet" href="/sikoba/assets/css/admin/data_teknis.css">
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>
  <div class="container">
    <h2>Data Teknis</h2>
    <div class="search-bar">
      <input type="text" placeholder="Cari Data Teknis" id="searchInput">
      <button class="add-btn" onclick="window.location.href='../../view/admin/tambah_teknis.php'">+ Tambah Data</button>
    </div>
  
    <table id="dataTable">
      <thead>
        <tr>
          <th>No.</th>
          <th>Teknis</th>
          <th>Kode Teknis</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $i => $p): ?>
          <tr>
            <td><?= $i + 1 ?></td>
            <td class="teknis-name"><?= htmlspecialchars($p[0]) ?></td>
            <td class="teknis-name"><?= htmlspecialchars($p[1]) ?></td>
            <td>
              <button class='btn detail' onclick='showDetail("<?= htmlspecialchars($p[0]) ?>")'>📄</button>
              <button class='btn add' onclick='addData("<?= htmlspecialchars($p[0]) ?>")'>➕</button>
              <button class='btn delete' onclick='deleteData("<?= htmlspecialchars($p[0]) ?>")'>🗑️</button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</main>

<?php include '../../components/admin/footer.php'; ?>
<script src="/sikoba/assets/js/data_teknis.js"></script>

</body>
</html>
