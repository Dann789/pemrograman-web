<?php

// Fungsi dengan parameter, nilai default
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    // Memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2004, 2023) ." tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi perkenalan
perkenalan("Wildan");

?>