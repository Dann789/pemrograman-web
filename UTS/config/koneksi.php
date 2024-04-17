<?php
// Koneksi ke Database
$koneksi = mysqli_connect("localhost", "root", "", "pengaduan_masyarakat");

// Periksa Koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>