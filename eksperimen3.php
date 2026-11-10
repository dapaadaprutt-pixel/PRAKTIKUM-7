
<?php
function formatRupiah($harga) {
    return "Rp" . number_format($harga, 0, ",", ".");
}

$harga1 = 150000;
$harga2 = 27500;

echo "<h2>Format Harga Rupiah</h2>";
echo "Harga 1: " . formatRupiah($harga1) . "<br>";
echo "Harga 2: " . formatRupiah($harga2) . "<br>";
?>
