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
  <style>
    /* Style sama seperti sebelumnya */
    body { font-family: Arial, sans-serif; margin: 0; background: #f9f9f9; }
    .header { background-color: #30387B; color: white; padding: 30px 20px; display: flex; align-items: center; justify-content: space-between; }
    .menu-icon { font-size: 24px; cursor: pointer; margin-right: 15px; }
    .header-left { display: flex; align-items: center; flex: 1; }
    .header-left img { width: 50px; margin-right: 10px; }
    .header-left div { line-height: 1.2; }
    .header-left strong { font-size: 16px; }
    .nav { display: flex; align-items: center; gap: 20px; font-weight: bold; }
    .nav a, .user { color: white; text-decoration: none; }
    .container { padding: 20px; }
    h2 { color: #30387B; }
    .search-bar { display: flex; gap: 10px; margin: 15px 0; }
    .search-bar input { padding: 8px; width: 250px; border: 1px solid #ccc; border-radius: 5px; }
    .add-btn { background-color: #30387B; color: white; border: none; padding: 8px 15px; border-radius: 5px; cursor: pointer; }
    table { width: 100%; border-collapse: collapse; margin-top: 15px; background-color: white; }
    table th, table td { border: 1px solid #ddd; padding: 10px; text-align: center; }
    table th { background-color: #30387B; color: white; }
    .btn { border: none; padding: 5px 8px; margin: 0 2px; border-radius: 5px; cursor: pointer; font-size: 16px; }
    .detail { background-color: #007bff; color: white; }
    .add { background-color: #17c0eb; color: white; }
    .delete { background-color: #ff6b6b; color: white; }
  </style>
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

<script>
  function showDetail(item) {
    alert("Lihat detail untuk: " + item);
  }

  function addData(item) {
    alert("Tambah data ke: " + item);
  }

  function deleteData(item) {
    if (confirm("Apakah Anda yakin ingin menghapus " + item + "?")) {
      alert(item + " berhasil dihapus (simulasi).");
    }
  }

  document.getElementById("searchInput").addEventListener("keyup", function () {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll("#dataTable tbody tr");
    rows.forEach(function(row) {
      let text = row.querySelector(".teknis-name").textContent.toLowerCase();
      row.style.display = text.includes(filter) ? "" : "none";
    });
  });
</script>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
