<?php
//bayar = biaya produk

$bayar = 120000;
$produk = $bayar;
$diskonPersen = 20;

if ($bayar > 100000) {
    $hargaAkhir = $produk - ($produk * ($diskonPersen / 100));
} else {
    $hargaAkhir = $produk;
}

echo "Harga setelah diskon: Rp {$hargaAkhir}";
?>