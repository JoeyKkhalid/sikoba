<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>SIKOBA - Form Kontrak</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    * {
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      margin: 0;
      background-color: #fff;
    }

    header {
      background-color: #2e317c;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 20px;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo-text {
      font-weight: bold;
      line-height: 1.2;
      font-size: 18px;
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
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .form-container {
      display: flex;
      gap: 30px;
      width: 100%;
      max-width: 1000px;
      margin-top: 30px;
    }

    .form-left {
      flex: 1;
    }

    .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .form-group label {
      width: 120px;
      font-weight: bold;
    }

    .form-group input,
    .form-group select {
      flex: 1;
      padding: 8px 12px;
      border-radius: 20px;
      border: none;
      background-color: #e0e0e0;
      appearance: none;
    }

    .form-group select {
      background-image: url('https://upload.wikimedia.org/wikipedia/commons/9/9d/Caret_down_font_awesome_whitevariation.svg');
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-size: 12px;
    }

    .form-right {
      width: 350px;
      border: 1px solid black;
      border-radius: 10px;
      overflow: hidden;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      text-align: center;
      font-size: 14px;
    }

    table th, table td {
      border: 1px solid black;
      padding: 8px;
    }

    table th {
      background-color: #f2f2f2;
    }

    .submit-button {
      margin-top: 30px;
    }

    .submit-button button {
      background-color: #2e317c;
      color: white;
      border: none;
      padding: 10px 30px;
      border-radius: 20px;
      font-size: 16px;
      cursor: pointer;
    }

    .submit-button button:hover {
      background-color: #1e2158;
    }
  </style>
</head>
<body>


<?php include '../../components/user/header.php'; ?>

<main>
  <div class="form-container">
    <div class="form-left">
      <div class="form-group">
        <label>Teknis :</label>
        <input type="text" placeholder="">
      </div>
      <div class="form-group">
        <label>Survei :</label>
        <select><option></option></select>
      </div>
      <div class="form-group">
        <label>Judul kontrak :</label>
        <input type="text" placeholder="">
      </div>
      <div class="form-group">
        <label>No. kontrak :</label>
        <input type="text" placeholder="">
      </div>
      <div class="form-group">
        <label>Tgl. Mulai :</label>
        <input type="date">
      </div>
      <div class="form-group">
        <label>Tgl. Selesai :</label>
        <input type="date">
      </div>
      <div class="form-group">
        <label>Besaran Honor :</label>
        <select><option></option></select>
      </div>
      <div class="form-group">
        <label>Input Petugas :</label>
        <select><option>Nama</option></select>
      </div>
      <div class="form-group">
        <input type="text" placeholder="Jabatan">
      </div>
    </div>
    <div class="form-right">
      <table>
        <thead>
          <tr>
            <th>jabatan</th>
            <th>nilai</th>
            <th>satuan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>pcl</td>
            <td></td>
            <td>Dokumen</td>
          </tr>
          <tr>
            <td>pml</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="submit-button">
    <button>Submit</button>
  </div>
</main>

</body>
</html>
