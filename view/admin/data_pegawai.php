<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Pegawai - SIKOBA</title>
  <link rel="stylesheet" href="/sikoba/assets/css/admin/data_pegawai.css">
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

<?php include '../../components/admin/footer.php'; ?>
<script src="/sikoba/assets/js/data_pegawai.js"></script>

</body>
</html>
