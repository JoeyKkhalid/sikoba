<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>SIKOBA - Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }

    .menu {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .menu a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    .user-info {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .user-info i {
      font-size: 18px;
    }

    main {
      padding: 30px 50px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      margin-bottom: 30px;
    }

    table th, table td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }

    table th {
      background-color: #f2f2f2;
    }

    .buttons {
      display: flex;
      gap: 10px;
      justify-content: center;
    }

    .buttons button {
      background-color: #2e317c;
      color: white;
      border: none;
      padding: 8px 20px;
      border-radius: 10px;
      cursor: pointer;
      font-size: 14px;
    }

    .buttons button:hover {
      background-color: #1e2158;
    }
  </style>
</head>
<body>

<?php include '../../components/user/header.php'; ?>

<main>
  <table>
    <thead>
      <tr>
        <th>No.</th>
        <th>Judul kontrak</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Pembuat</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>

  <div class="buttons">
    <button>Tambah</button>
    <button>Edit</button>
    <button>Lihat</button>
    <button>Daftar</button>
  </div>
</main>

</body>
</html>
