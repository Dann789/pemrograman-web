<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakwebdb";

// Buat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query membuat tabel user
// $query = "CREATE TABLE user (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(50) NOT NULL,
//     password VARCHAR(50) NOT NULL
// )";

// // Mengeksekusi query
// if (mysqli_query($conn, $query)) {
//     echo "Tabel user berhasil dibuat";
// } else {
//     echo "Error saat membuat tabel: " . mysqli_error($conn);
// }

// Data yang akan dimasukkan
// $nama_pengguna = "contoh_user";
// $kata_sandi = "contoh_katasandi";

// // Query memasukkan data ke tabel user
// $query = "INSERT INTO user (username, password) VALUES ('$nama_pengguna', '$kata_sandi')";

// // Mengeksekusi query
// if (mysqli_query($conn, $query)) {
//     echo "Data berhasil dimasukkan ke tabel user";
// } else {
//     echo "Error saat memasukkan data: " . mysqli_error($conn);
// }

// Tutup koneksi
//mysqli_close($conn);
?>