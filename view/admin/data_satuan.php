<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Satuan - SIKOBA</title>
  <link rel="stylesheet" href="../../assets/css/admin/data_satuan.css">
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>

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
</main>

<?php include '../../components/admin/footer.php'; ?>
<script src="/sikoba/assets/js/data_satuan.js"></script>

</body>
</html>