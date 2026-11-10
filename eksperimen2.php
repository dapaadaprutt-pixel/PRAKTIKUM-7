
<?php
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Daffa"];

$hasil = "";

if (isset($_GET["nama"])) {
    $cari = trim($_GET["nama"]);

    if ($cari === "") {
        $hasil = "Masukkan nama yang ingin dicari.";
    } else {
        $ditemukan = false;

        foreach ($mahasiswa as $nama) {
            if (strtolower($nama) === strtolower($cari)) {
                $hasil = "Nama " . htmlspecialchars($nama) . " ditemukan.";
                $ditemukan = true;
                break;
            }
        }

        if (!$ditemukan) {
            $hasil = "Nama tidak ditemukan.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Mahasiswa</title>
</head>
<body>

    <h2>Pencarian Nama Mahasiswa</h2>

    <form method="GET">
        <input type="text" name="nama" placeholder="Masukkan nama">
        <button type="submit">Cari</button>
    </form>

    <p>
        <?php echo $hasil; ?>
    </p>

    <h3>Daftar Mahasiswa</h3>

    <ol>
        <?php foreach ($mahasiswa as $nama): ?>
            <li><?php echo htmlspecialchars($nama); ?></li>
        <?php endforeach; ?>
    </ol>

</body>
</html>
