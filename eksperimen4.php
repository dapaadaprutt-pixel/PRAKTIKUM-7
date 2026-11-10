
<?php
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = trim($_POST["nim"]);

    if (ctype_digit($nim) && strlen($nim) == 9) {
        $pesan = "NIM valid!";
    } else {
        $pesan = "NIM tidak valid. NIM harus terdiri dari 9 angka.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Validasi NIM</title>
</head>
<body>

    <h2>Form Validasi NIM</h2>

    <form method="POST">
        <label>Masukkan NIM:</label><br>
        <input type="text" name="nim" required>
        <button type="submit">Periksa</button>
    </form>

    <p><?php echo htmlspecialchars($pesan); ?></p>

</body>
</html>
