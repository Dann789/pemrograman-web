<?php
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

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

echo "Nilai rata-rata setelah mengabaikan dua nilai tertinggi dan terendah adalah: " . round($rataRata, 2);

?>