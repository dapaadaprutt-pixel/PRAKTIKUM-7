
<?php
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Daffa", "Rizky", "Andi"];

echo "<h3>Daftar Mahasiswa</h3>";
echo "<ol>";

foreach ($mahasiswa as $nama) {
    echo "<li>" . htmlspecialchars($nama) . "</li>";
}

echo "</ol>";
?>
