<?php
// Sertakan file koneksi
include '../../config/koneksi.php';

// Cek apakah form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_teknis = trim($_POST['nama_teknis']);
    $kode_teknis = trim($_POST['kode_teknis']);

    // Validasi sederhana (pastikan tidak kosong)
    if (!empty($nama_teknis) && !empty($kode_teknis)) {
        // Siapkan query
        $query = "INSERT INTO teknis (nama_teknis, kode_teknis) VALUES (?, ?)";
        $stmt = mysqli_prepare($koneksi, $query);

        // Cek jika prepare berhasil
        if ($stmt) {
            // Bind parameter
            mysqli_stmt_bind_param($stmt, 'ss', $nama_teknis, $kode_teknis);

            // Eksekusi query
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Data teknis berhasil ditambahkan'); window.location.href='tambah_teknis.php';</script>";
            } else {
                echo "<script>alert('Gagal menyimpan data: " . mysqli_error($koneksi) . "'); window.history.back();</script>";
            }

            // Tutup statement
            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('Kesalahan dalam query'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Nama Teknis dan Kode Teknis tidak boleh kosong'); window.history.back();</script>";
    }

    // Tutup koneksi
    mysqli_close($koneksi);
} else {
    // Jika akses langsung tanpa POST
    echo "<script>alert('Akses tidak valid'); window.location.href='tambah_teknis.php';</script>";
}
?>
