
<?php
$nilai1 = 85;
$nilai2 = 90;
$nilai3 = 80;

$rataRata = ($nilai1 + $nilai2 + $nilai3) / 3;

echo "<h2>Perhitungan Nilai Rata-rata</h2>";

echo "Nilai 1: " . $nilai1 . "<br>";
echo "Nilai 2: " . $nilai2 . "<br>";
echo "Nilai 3: " . $nilai3 . "<br>";

echo "Nilai rata-rata: " . number_format($rataRata, 2);
?>
