<?php
include "koneksi.php"; // Koneksi ke database

// Mengambil data dari form
$nama_pegawai = mysqli_real_escape_string($koneksi, $_POST['nama_pegawai']);
$password     = mysqli_real_escape_string($koneksi, $_POST['password']);
$teknis       = mysqli_real_escape_string($koneksi, $_POST['teknis']);
$role         = mysqli_real_escape_string($koneksi, $_POST['role']);
$username     = mysqli_real_escape_string($koneksi, $_POST['username']);

// Hashing password sebelum disimpan
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Query untuk memasukkan data user baru ke dalam tabel user
$query = "INSERT INTO user (nama_pegawai, password, teknis, role, username)
          VALUES ('$nama_pegawai', '$hashedPassword', '$teknis', '$role', '$username')";

// Mengeksekusi query dan memberikan feedback
if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('User berhasil ditambahkan'); window.location='kelola_user.php';</script>";
} else {
    // Menampilkan error jika query gagal
    echo "Error: " . mysqli_error($koneksi);
}
?>
