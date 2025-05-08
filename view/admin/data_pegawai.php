<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Pegawai - SIKOBA</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background-color: #f9f9f9;
    }

    .user {
      display: flex;
      align-items: center;
      font-weight: 500;
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
    .add { color: #17c0eb; }
    .delete { color: #ff6b6b; }

    .action-btn:hover {
      transform: scale(1.1);
    }
  </style>
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>

  <div class="container">
    <h2>Data Pegawai</h2>
    <div class="search-bar">
      <input type="text" placeholder="Cari Data Pegawai" id="searchInput">
      <button class="add-btn" onclick="alert('Fungsi Tambah Data belum diimplementasikan')">+ Tambah Data</button>
    </div>
  
    <table id="dataTable">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>NIP</th>
          <th>Jabatan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $pegawai = [
            ["Nabila Mahdar", "2022005011", "UI Design"],
            ["Rangga Bayu Riansa", "2022005011", "PM"],
            ["Bella Putri", "2022005011", "COL"],
            ["Suswanto", "2022005011", "Desain Grafis"],
            ["Aryoko", "2022005011", "Video Editor"],
            ["Nabila Mahdar", "2022005011", "UI Design"],
            ["Nabila Mahdar", "2022005011", "UI Design"]
          ];
          foreach ($pegawai as $i => $p) {
            echo "<tr>
                    <td>".($i + 1)."</td>
                    <td class='pegawai-name'>{$p[0]}</td>
                    <td>{$p[1]}</td>
                    <td>{$p[2]}</td>
                    <td>
                      <button class='action-btn detail' onclick='showDetail(\"{$p[0]}\")'>📄</button>
                      <button class='action-btn delete' onclick='deleteData(\"{$p[0]}\")'>🗑️</button>
                    </td>
                  </tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</main>

<script>
  function showDetail(nama) {
    alert("Lihat detail untuk: " + nama);
  }

  function addData(nama) {
    alert("Tambah data untuk: " + nama);
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
      let nama = row.querySelector(".pegawai-name").textContent.toLowerCase();
      row.style.display = nama.includes(filter) ? "" : "none";
    });
  });
</script>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
