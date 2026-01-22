<?php
session_start();

// Dummy data untuk kontrak dan BAST
$kontrakList = [
    ["judul" => "Kontrak A", "tgl" => "2025-01-10", "teknis" => "Teknis A", "lembar" => 3],
    ["judul" => "Kontrak B", "tgl" => "2025-02-15", "teknis" => "Teknis B", "lembar" => 5],
];

$bastList = [
    ["judul" => "BAST A", "tgl" => "2025-03-01", "teknis" => "Teknis A", "lembar" => 2],
    ["judul" => "BAST B", "tgl" => "2025-03-05", "teknis" => "Teknis B", "lembar" => 4],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontrak & BAST - SIKOBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/sikoba/assets/css/admin/kontrak_bast.css">
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main class="container mt-4">
  <div class="title">Daftar Kontrak dan BAST</div>

  <div class="filter-bar mb-3">
    <div>Tampil Data: <span class="border px-2 py-1 rounded">4</span></div>
    <div>
      <input type="text" class="form-control" placeholder="Cari data...">
    </div>
  </div>

  <!-- Kontrak Section -->
  <div class="section-title">DAFTAR SURAT KONTRAK</div>
  <table class="table table-bordered text-center">
    <thead>
      <tr>
        <th>NO</th>
        <th>JUDUL KONTRAK</th>
        <th>TANGGAL SK</th>
        <th>TEKNIS</th>
        <th>JUMLAH LEMBAR</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($kontrakList as $i => $k): ?>
        <tr>
          <td><?= $i + 1 ?></td>
          <td><?= $k['judul'] ?></td>
          <td><?= $k['tgl'] ?></td>
          <td><?= $k['teknis'] ?></td>
          <td><?= $k['lembar'] ?></td>
          <td>
            <button class="icon-btn icon-view"><i class="bi bi-eye-fill"></i></button>
            <button class="icon-btn icon-edit"><i class="bi bi-pencil-square"></i></button>
            <button class="icon-btn icon-delete"><i class="bi bi-trash-fill"></i></button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <!-- BAST Section -->
  <div class="section-title">DAFTAR BAST</div>
  <table class="table table-bordered text-center">
    <thead>
      <tr>
        <th>NO</th>
        <th>JUDUL BAST</th>
        <th>TANGGAL SK</th>
        <th>TEKNIS</th>
        <th>JUMLAH LEMBAR</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($bastList as $i => $b): ?>
        <tr>
          <td><?= $i + 1 ?></td>
          <td><?= $b['judul'] ?></td>
          <td><?= $b['tgl'] ?></td>
          <td><?= $b['teknis'] ?></td>
          <td><?= $b['lembar'] ?></td>
          <td>
            <button class="icon-btn icon-view"><i class="bi bi-eye-fill"></i></button>
            <button class="icon-btn icon-edit"><i class="bi bi-pencil-square"></i></button>
            <button class="icon-btn icon-delete"><i class="bi bi-trash-fill"></i></button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

<div class="d-flex justify-content-end mt-3">
    <div class="pagination">Halaman 1, 2, 3, 4, 5 ...</div>
</div>
</main>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
