<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pejabat dan DIPA - SIKOBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body { background-color: #f5f5f5; }
    .table thead { background-color: #2e357b; color: white; }
    .table td, .table th { vertical-align: middle; }
    .icon-btn { border: none; background: none; font-size: 1.2rem; }
    .icon-view { color: #0066ff; }
    .icon-add { color: #00ccff; }
    .icon-delete { color: #ff4444; }
    .title { font-weight: bold; font-size: 1.5rem; margin-bottom: 1rem; }
  </style>
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>

  <!-- Content -->
  <div class="container mt-4">
    <div class="title">Pejabat Dan DIPA</div>
  
    <!-- Search + Add Button -->
    <div class="d-flex justify-content-between mb-3">
      <input type="text" class="form-control w-25" placeholder="Cari Data Pejabat Penandatangan">
      <button class="btn btn-primary">+ Tambah Data</button>
    </div>
  
    <?php
      $data = [
        ["Pejabat Pembuat Komitmen", "Nabila Mahdar", "20220004011"],
        ["", "", ""],
        ["", "", ""],
        ["", "", ""],
        ["", "", ""],
        ["", "", ""],
      ];
  
      function tampilkanTabel($data) {
        echo "<table class='table table-bordered text-center mb-4'>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Jabatan</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>";
        $no = 1;
        foreach ($data as $row) {
          echo "<tr>
                  <td>$no</td>
                  <td>{$row[0]}</td>
                  <td>{$row[1]}</td>
                  <td>{$row[2]}</td>
                  <td>
                    <button class='icon-btn icon-view'><i class='bi bi-eye-fill'></i></button>
                    <button class='icon-btn icon-add'><i class='bi bi-plus-circle-fill'></i></button>
                    <button class='icon-btn icon-delete'><i class='bi bi-trash-fill'></i></button>
                  </td>
                </tr>";
          $no++;
        }
        echo "</tbody></table>";
      }
  
      // Cetak dua tabel seperti di gambar
      tampilkanTabel($data);
    ?>
  </div>
</main>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
