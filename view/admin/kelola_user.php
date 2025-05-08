<?php
session_start();

// Ambil data user dari session jika ada
$data_user = isset($_SESSION['data_user']) ? $_SESSION['data_user'] : [];

// Data dummy awal
$dummy_users = [
  ["Nabila Mahdar", "Pembangunan", "2022005011", "********", "admin"],
  ["Rangga Bayu Riansa", "Kesehatan", "2022005012", "********", "user"],
  ["Bella Putri", "Pembangunan", "2022005013", "********", "user"],
  ["Suswanto", "Kesehatan", "2022005014", "********", "admin"],
  ["Aryoko", "Pembangunan", "2022005015", "********", "user"]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola User - SIKOBA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f5f5f5; }
    .navbar-custom { background-color: #2e357b; color: white; }
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
    <div class="title">Kelola User</div>
  
    <!-- Search + Add Button -->
    <div class="d-flex justify-content-between mb-3">
      <input type="text" class="form-control w-25" placeholder="Cari User">
      <a href="../../view/admin/tambah_user.php" class="btn btn-primary">+ Tambah Data</a>
    </div>
  
    <!-- User Table -->
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Teknis</th>
          <th>Username</th>
          <th>Password</th>
          <th>Level</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $no = 1;
  
          // Tampilkan dummy user
          foreach ($dummy_users as $user) {
            echo "<tr>
                    <td>$no</td>
                    <td>{$user[0]}</td>
                    <td>{$user[1]}</td>
                    <td>{$user[2]}</td>
                    <td>{$user[3]}</td>
                    <td>{$user[4]}</td>
                    <td>
                      <a href='#' class='icon-btn icon-view'><i class='bi bi-eye-fill'></i></a>
                      <a href='#' class='icon-btn icon-add'><i class='bi bi-pencil-square'></i></a>
                      <a href='#' class='icon-btn icon-delete'><i class='bi bi-trash-fill'></i></a>
                    </td>
                  </tr>";
            $no++;
          }
  
          // Tampilkan user dari session
          foreach ($data_user as $user) {
            echo "<tr>
                    <td>$no</td>
                    <td>{$user['nama_pegawai']}</td>
                    <td>{$user['teknis']}</td>
                    <td>{$user['username']}</td>
                    <td>********</td>
                    <td>{$user['role']}</td>
                    <td>
                      <a href='#' class='icon-btn icon-view'><i class='bi bi-eye-fill'></i></a>
                      <a href='#' class='icon-btn icon-add'><i class='bi bi-pencil-square'></i></a>
                      <a href='#' class='icon-btn icon-delete'><i class='bi bi-trash-fill'></i></a>
                    </td>
                  </tr>";
            $no++;
          }
        ?>
      </tbody>
    </table>
  </div>
  
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</main>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
