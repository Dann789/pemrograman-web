<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$nilaiTinggiPertama = 0;
$nilaiTinggiKedua = 0;
$nilaiRendahPertama = 100;
$nilaiRendahKedua = 100;

foreach ($nilaiSiswa as $nilai) {
    if ($nilai > $nilaiTinggiPertama) {
        $nilaiTinggiKedua = $nilaiTinggiPertama;
        $nilaiTinggiPertama = $nilai;
    } elseif ($nilai > $nilaiTinggiKedua) {
        $nilaiTinggiKedua = $nilai;
    }

    if ($nilai < $nilaiRendahPertama) {
        $nilaiRendahKedua = $nilaiRendahPertama;
        $nilaiRendahPertama = $nilai;
    } elseif ($nilai < $nilaiRendahKedua) {
        $nilaiRendahKedua = $nilai;
    }
}

$totalNilai = array_sum($nilaiSiswa) - ($nilaiTinggiPertama + $nilaiTinggiKedua + $nilaiRendahPertama + $nilaiRendahKedua);

$jumlahNilai = count($nilaiSiswa) - 4;

$rataRata = $totalNilai / $jumlahNilai;

echo "Nilai Tertinggi Pertama $nilaiTinggiPertama <br>";
echo "Nilai Tertinggi Kedua $nilaiTinggiKedua <br>";
echo "Nilai Terendah Pertama $nilaiRendahPertama <br>";
echo "Nilai Terendah Kedua $nilaiRendahKedua <br>";

echo "Nilai rata-rata setelah mengabaikan dua nilai tertinggi dan terendah adalah: " . round($rataRata, 2);

?>