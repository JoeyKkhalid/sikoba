<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Mitra Sobat - SIKOBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/sikoba/assets/css/admin/mitra_sobat.css">
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>

  <!-- Content -->
  <div class="container mt-4">
    <div class="title">Mitra Sobat</div>
  
  <!-- Search and Add Button -->
  <div class="d-flex justify-content-between mb-3">
    <input type="text" class="form-control w-25" placeholder="Cari Data Mitra">
    <a href="tambah_mitra_sobat.php" class="btn btn-primary">+ Tambah Mitra</a>
  </div>

  
    <?php
      $data = [
        ["statistik sosial", "Susenas", "Listing dan pendataan lapang"],
        ["IPDS", "Susenas", "Pengolahan Data"],
        ["", "", ""],
        ["", "", ""],
        ["", "", ""],
        ["", "", ""],
      ];
    ?>
  
    <!-- Table -->
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th> 
          <th>NIK</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $index => $row): ?>
          <tr>
            <td><?= $index + 1 ?>.</td>
            <td><?= $row[0] ?></td>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
            <td>
              <button class="icon-btn icon-view"><i class="bi bi-eye-fill"></i></button>
              <button class="icon-btn icon-add"><i class="bi bi-plus-circle-fill"></i></button>
              <button class="icon-btn icon-delete"><i class="bi bi-trash-fill"></i></button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</main>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
