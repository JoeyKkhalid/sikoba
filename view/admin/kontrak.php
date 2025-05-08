<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIKOBA - Badan Pusat Statistik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f3f3f3;
        }

        header {
            background: linear-gradient(to right, #1f2b6c, #2e4aad);
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-area {
            display: flex;
            align-items: center;
        }

        .logo-area img {
            height: 55px;
            margin-right: 15px;
        }

        .logo-area h1 {
            font-size: 18px;
            line-height: 1.2;
        }

        .right-header {
            text-align: right;
        }

        .right-header .title {
            font-weight: bold;
            color: #c8ff00;
            font-size: 20px;
        }

        .right-header .user {
            font-size: 14px;
        }

        .container {
            padding: 20px;
            background-color: white;
            margin: 20px auto;
            width: 90%;
            max-width: 900px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            border: 1px solid #000;
            padding: 10px;
        }

        th {
            background-color: #f0f0f0;
        }

        .print-icon {
            cursor: pointer;
        }

        .print-icon img {
            width: 20px;
        }
    </style>
</head>
<body>

<?php include '../../components/header.php'; ?>

<div class="container">
    <h2>Judul Kontrak / No Kontrak</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>No. Kontrak</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Cetak</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <tr>
                    <td><?= $i ?>.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="print-icon">
                        <img src="https://img.icons8.com/ios-filled/50/000000/print.png" alt="Print">
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>

<?php include '../../components/footer.php'; ?>
</body>
</html>
