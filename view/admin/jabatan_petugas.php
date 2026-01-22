<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jabatan Petugas - SIKOBA</title>
  <link rel="stylesheet" href="/sikoba/assets/css/admin/jabatan_petugas.css">
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>

  <div class="container">
    <h2>Data Jabatan Petugas</h2>
    <div class="search-add">
      <input type="text" placeholder="Cari Data Pegawai" id="searchInput" />
      <button onclick="alert('Fungsi Tambah Data belum diimplementasikan')">+ Tambah Data</button>
    </div>
  
    <table>
      <thead>
        <tr>
          <th>No.</th>
          <th>Jabatan Petugas</th>
          <th>Uraian</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>PCL</td>
          <td>Petugas Pencacah Lapangan</td>
          <td class="action-icons">
            <button class="detail">📄</button>
            <button class="delete">🗑️</button>
          </td>
        </tr>
        <tr>
          <td>2.</td>
          <td>PML</td>
          <td>Petugas Pemeriksa Lapangan</td>
          <td class="action-icons">
            <button class="detail">📄</button>
            <button class="delete">🗑️</button>
          </td>
        </tr>
        <tr>
          <td>3.</td>
          <td>PENGOLAH</td>
          <td>Petugas Pengolah Data</td>
          <td class="action-icons">
            <button class="detail">📄</button>
            <button class="delete">🗑️</button>
          </td>
        </tr>
      </tbody>
    </table>
  
    <h2>Status (Digunakan untuk pelatihan / Briefing)</h2>
    <div class="search-add">
      <input type="text" placeholder="Cari Data Pegawai" id="searchInput" />
      <button onclick="alert('Fungsi Tambah Data belum diimplementasikan')">+ Tambah Data</button>
    </div>
  
    <table>
      <thead>
        <tr>
          <th>No.</th>
          <th>Status Pada Pelatihan</th>
          <th>Uraian Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>PCL</td>
          <td>Petugas Pencacah Lapangan</td>
          <td class="action-icons">
            <button class="detail">📄</button>
            <button class="delete">🗑️</button>
          </td>
        </tr>
        <tr>
          <td>2.</td>
          <td>PML</td>
          <td>Petugas Pemeriksa Lapangan</td>
          <td class="action-icons">
            <button class="detail">📄</button>
            <button class="delete">🗑️</button>
          </td>
        </tr>
        <tr>
          <td>3.</td>
          <td>PENGOLAH</td>
          <td>Petugas Pengolah Data</td>
          <td class="action-icons">
            <button class="detail">📄</button>
            <button class="delete">🗑️</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</main>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
