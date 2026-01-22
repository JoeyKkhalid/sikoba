<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pejabat dan DIPA - SIKOBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/sikoba/assets/css/admin/pejabat_dipa.css">
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
      <a href="../../view/admin/tambah_pejabat_dipa.php" class="btn btn-primary">+ Tambah Data</a>
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
