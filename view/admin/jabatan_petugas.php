<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Jabatan Petugas - SIKOBA</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background-color: #ffffff;
    }

    .container {
      padding: 40px;
    }

    h2 {
      font-size: 24px;
      color: #30387B;
      margin-bottom: 20px;
    }

    .search-add {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
      justify-content: space-between;
    }

    .search-add input {
      padding: 10px 16px;
      width: 300px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .search-add button {
      background-color: #2C2F7C;
      color: white;
      border: none;
      padding: 10px 16px;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid #ccc;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 14px;
      text-align: center;
    }

    th {
      background-color: #2C2F7C;
      color: white;
      font-weight: 600;
    }

    .action-icons button {
      background: none;
      border: none;
      cursor: pointer;
      margin: 0 5px;
      font-size: 18px;
    }

    .action-icons .detail {
      color: #0056D2;
    }

    .action-icons .add {
      color: #00B8D9;
    }

    .action-icons .delete {
      color: #FF4D4D;
    }

    .sidebar-toggle {
      display: inline-block;
      font-size: 24px;
      margin-right: 20px;
      cursor: pointer;
    }
  </style>
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
