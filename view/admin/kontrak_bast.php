<?php
// Dummy data untuk kontrak dan BAST
$kontrakList = [
    ["judul" => "Kontrak A", "tgl" => "2025-01-10", "teknis" => "Teknis A", "pjk" => "PJK A", "lembar" => 3],
    ["judul" => "Kontrak B", "tgl" => "2025-02-15", "teknis" => "Teknis B", "pjk" => "PJK B", "lembar" => 5],
];

$bastList = [
    ["judul" => "BAST A", "tgl" => "2025-03-01", "teknis" => "Teknis A", "pjk" => "PJK A", "lembar" => 2],
    ["judul" => "BAST B", "tgl" => "2025-03-05", "teknis" => "Teknis B", "pjk" => "PJK B", "lembar" => 4],
];

// Simulasi data pengguna login
$nama_user = "Wishnu";
$role_user = "Admin";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIKOBA - Kontrak dan BAST</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        h3 {
            background-color: #1d2a7a;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            width: fit-content;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .aksi i {
            margin: 0 5px;
            cursor: pointer;
        }

        .aksi i.fa-pen { color: #9333ea; }
        .aksi i.fa-trash { color: #ef4444; }
        .aksi i.fa-eye { color: #0ea5e9; }

        .pagination {
            text-align: right;
            margin-top: -30px;
        }

    </style>
</head>

<body>

<?php include '../../components/admin/header.php'; ?>
    <main>
        <h3>Daftar Kontrak</h3>
        <table>
            <tr>
                <th>NO</th>
                <th>JUDUL KONTRAK</th>
                <th>TANGGAL SK</th>
                <th>TEKNIS</th>
                <th>NAMA PJK</th>
                <th>JUMLAH LEMBAR</th>
                <th>AKSI</th>
            </tr>
            <?php foreach ($kontrakList as $index => $row): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $row['judul'] ?></td>
                    <td><?= $row['tgl'] ?></td>
                    <td><?= $row['teknis'] ?></td>
                    <td><?= $row['pjk'] ?></td>
                    <td><?= $row['lembar'] ?></td>
                    <td class="aksi">
                        <i class="fas fa-pen"></i>
                        <i class="fas fa-trash"></i>
                        <i class="fas fa-eye"></i>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h3>Daftar BAST</h3>
        <table>
            <tr>
                <th>NO</th>
                <th>JUDUL BAST</th>
                <th>TANGGAL SK</th>
                <th>TEKNIS</th>
                <th>NAMA PJK</th>
                <th>JUMLAH LEMBAR</th>
                <th>AKSI</th>
            </tr>
            <?php foreach ($bastList as $index => $row): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $row['judul'] ?></td>
                    <td><?= $row['tgl'] ?></td>
                    <td><?= $row['teknis'] ?></td>
                    <td><?= $row['pjk'] ?></td>
                    <td><?= $row['lembar'] ?></td>
                    <td class="aksi">
                        <i class="fas fa-pen"></i>
                        <i class="fas fa-trash"></i>
                        <i class="fas fa-eye"></i>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="pagination">
            Halaman 1,2,3,4,5,...
        </div>
    </main>
</div>

</body>
</html>
