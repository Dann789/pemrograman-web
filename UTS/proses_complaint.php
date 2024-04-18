<?php
include 'config/koneksi.php';

$action = $_GET['action'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$isi_pengaduan = $_POST['isi_pengaduan'];

if ($action == 'tambah') {
    $query = "INSERT INTO pengaduan (nama, alamat, no_telp, isi_pengaduan) VALUES ('$nama', '$alamat', '$no_telp', '$isi_pengaduan')";
    if (mysqli_query($koneksi, $query)) {
        header("Location: complaint.html");
        exit();
    } else {
        echo "Gagal menambahkan data pengaduan " . mysqli_error($koneksi);
    }
}
?>