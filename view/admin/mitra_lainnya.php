<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Mitra Lainnya - SIKOBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body { background-color: #f5f5f5; }
    .navbar-custom { background-color: #2e357b; color: white; }
    .table thead { background-color: #2e357b; color: white; }
    .icon-btn { border: none; background: none; font-size: 1.2rem; }
    .icon-view { color: #0066ff; }
    .icon-add { color: #00ccff; }
    .icon-delete { color: #ff4444; }
    .title { font-weight: bold; font-size: 1.5rem; margin-bottom: 1rem; }
  </style>
</head>
<body>

<?php include '../../components/admin/header.php'; ?>
<?php include '../../components/admin/sidebar.php'; ?>

<!-- Content -->
<div class="container mt-4">
  <div class="title">Mitra Lainnya</div>

  <!-- Search and Add Button -->
  <div class="d-flex justify-content-between mb-3">
    <input type="text" class="form-control w-25" placeholder="Cari Data Mitra">
    <button class="btn btn-primary">+ Tambah Data</button>
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

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
