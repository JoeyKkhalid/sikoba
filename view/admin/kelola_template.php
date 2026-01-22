<!-- index.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola Template - SIKOBA</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/sikoba/assets/css/admin/kelola_template.css">
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
                    <a class='delete' href='x#'>🗑️</a>
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
