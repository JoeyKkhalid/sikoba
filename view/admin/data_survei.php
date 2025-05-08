<?php
// Dummy data survei
$surveys = [
    [
        'id' => 1,
        'nama' => 'Survei Sosial Ekonomi Nasional Februari 2025'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Survei</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background: #f2f2f2;
        }

        .content {
            background: white;
            margin: 30px auto;
            padding: 30px;
            width: 90%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: #2d337b;
        }

        .controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .controls select,
        .controls button {
            padding: 5px 10px;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #2d337b;
            color: white;
            border: none;
            padding: 7px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #2d337b;
            color: white;
        }

        .actions i {
            cursor: pointer;
            margin-right: 10px;
            font-size: 16px;
        }

        .icon-edit { color: #c26bd0; }
        .icon-delete { color: #8b1e1e; }
        .icon-file { color: #4a90e2; }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php include '../../components/admin/header.php'; ?>

<main>

    <div class="content">
        <h2>Data Survei</h2>
    
        <div class="controls">
            <div>
                <label for="tampil">Tampil Data</label>
                <select id="tampil" name="tampil">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                </select>
            </div>
            <button class="btn-primary">+ Tambah Data</button>
        </div>
    
        <table>
            <tr>
                <th style="width: 5%;">No.</th>
                <th>Nama Survei</th>
                <th style="width: 20%;">Aksi</th>
            </tr>
            <?php for ($i = 0; $i < 7; $i++): ?>
                <tr>
                    <td><?= $i + 1 ?>.</td>
                    <td>
                        <?= isset($surveys[$i]) ? $surveys[$i]['nama'] : '' ?>
                    </td>
                    <td class="actions">
                        <?php if (isset($surveys[$i])): ?>
                            <i class="fas fa-edit icon-edit" title="Edit"></i>
                            <i class="fas fa-trash icon-delete" title="Hapus"></i>
                            <i class="fas fa-file-alt icon-file" title="Lihat File"></i>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endfor; ?>
        </table>
    </div>
</main>

<?php include '../../components/admin/footer.php'; ?>

</body>
</html>
