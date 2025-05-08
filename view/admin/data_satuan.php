<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Satuan - SIKOBA</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background-color: #f9f9f9;
    }

    .container {
      padding: 30px;
    }

    h2 {
      color: #30387B;
      margin-bottom: 20px;
    }

    .search-bar {
      display: flex;
      gap: 15px;
      margin-bottom: 20px;
    }

    .search-bar input {
      padding: 10px 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      width: 300px;
    }

    .add-btn {
      background-color: #30387B;
      color: white;
      border: none;
      border-radius: 6px;
      padding: 10px 20px;
      font-weight: 600;
      cursor: pointer;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    table th, table td {
      padding: 12px 15px;
      text-align: center;
      border: 1px solid #eaeaea;
    }

    table th {
      background-color: #30387B;
      color: white;
      font-weight: 600;
    }

    .action-btn {
      border: none;
      background: none;
      cursor: pointer;
      font-size: 18px;
      margin: 0 4px;
    }

    .detail { color: #007bff; }
    .edit { color: #17c0eb; }
    .delete { color: #ff6b6b; }

    .action-btn:hover {
      transform: scale(1.1);
    }
  </style>
</head>
<body>

<?php include '../../components/admin/header.php'; ?>
<?php include '../../components/admin/sidebar.php'; ?>

<div class="container">
  <h2>Data Satuan</h2>
  <div class="search-bar">
    <input type="text" placeholder="Cari Uraian atau Satuan" id="searchInput">
    <button class="add-btn" onclick="window.location.href='tambah_satuan.php'">+ Tambah Data</button>
  </div>

  <table id="dataTable">
    <thead>
      <tr>
        <th>No.</th>
        <th>Uraian</th>
        <th>Uraian Satuan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        for ($i = 1; $i <= 7; $i++) {
          $uraian = "Contoh Uraian $i";
          $satuan = "Contoh Satuan $i";
          echo "<tr>
                  <td>$i</td>
                  <td class='satuan-name'>$uraian</td>
                  <td>$satuan</td>
                  <td>
                    <button class='action-btn edit' onclick='editData(\"$uraian\")'>✏️</button>
                    <button class='action-btn delete' onclick='deleteData(\"$uraian\")'>🗑️</button>
                    <button class='action-btn detail' onclick='showDetail(\"$uraian\")'>📄</button>
                  </td>
                </tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<script>
  function showDetail(nama) {
    alert("Lihat detail untuk: " + nama);
  }

  function editData(nama) {
    alert("Edit data untuk: " + nama);
  }

  function deleteData(nama) {
    if (confirm("Yakin ingin menghapus data " + nama + "?")) {
      alert(nama + " berhasil dihapus (simulasi).");
    }
  }

  document.getElementById("searchInput").addEventListener("keyup", function () {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll("#dataTable tbody tr");
    rows.forEach(function(row) {
      let uraian = row.querySelector(".satuan-name").textContent.toLowerCase();
      row.style.display = uraian.includes(filter) ? "" : "none";
    });
  });
</script>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
