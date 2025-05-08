<!-- index.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola Template - SIKOBA</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #fff;
    }

    .container {
      padding: 40px;
    }

    h2 {
      color: #2C2F7C;
      margin-bottom: 20px;
      font-size: 22px;
    }

    .controls {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .controls select {
      padding: 6px;
      border-radius: 5px;
    }

    .add-btn {
      background-color: #2C2F7C;
      color: white;
      border: none;
      padding: 10px 18px;
      border-radius: 6px;
      cursor: pointer;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th, table td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
    }

    table th {
      background-color: #2C2F7C;
      color: white;
    }

    .action-icons {
      display: flex;
      gap: 10px;
      justify-content: center;
    }

    .action-icons a {
      color: white;
      padding: 6px;
      border-radius: 4px;
      text-decoration: none;
    }

    .detail { background-color: #007bff; }
    .edit { background-color: #00bcd4; }
    .delete { background-color: #f44336; }
  </style>
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>
  
  <div class="container">
    <h2>Kelola Template</h2>
  
    <div class="controls">
      <div>
        <label for="dataLength">Tampil Data</label>
        <select id="dataLength">
          <option>11</option>
        </select>
      </div>
      <button class="add-btn">+ Tambah Data</button>
    </div>
  
    <table>
      <thead>
        <tr>
          <th>No.</th>
          <th>Jenis Template</th>
          <th colspan="3">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $templates = [
            "Surat Kontrak",
            "BAST",
            "", "", "", "", ""
          ];
          $i = 1;
          foreach ($templates as $template) {
            echo "<tr>";
            echo "<td>$i.</td>";
            echo "<td>" . ($template ?: '') . "</td>";
            echo "<td class='action-icons'>
                    <a class='detail' href='#'>📄</a>
                    <a class='edit' href='#'>📑</a>
                    <a class='delete' href='#'>🗑️</a>
                  </td>";
            echo "</tr>";
            $i++;
          }
        ?>
      </tbody>
    </table>
  </div>
</main>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
