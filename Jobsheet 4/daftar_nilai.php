<?php
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ],
];
$jumlahSiswa = count($daftarNilai['Matematika']);
$totalNilai = 0;

foreach($daftarNilai['Matematika'] as $nilai) {
    $totalNilai += $nilai[1];
}

$rataRata = $totalNilai / $jumlahSiswa;

$nilaiDiatasRataRata = [];
foreach ($daftarNilai['Matematika'] as $nilai) {
    if($nilai[1] > $rataRata) {
        $nilaiDiatasRataRata[] = $nilai[0] . " (" . $nilai[1] . ")"; 
    }
}

echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas ($rataRata):\n";
echo"<br>";
echo implode(', ', $nilaiDiatasRataRata);

?>