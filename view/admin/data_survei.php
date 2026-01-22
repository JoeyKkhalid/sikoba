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
    <link rel="stylesheet" href="/sikoba/assets/css/admin/data_survei.css">
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
