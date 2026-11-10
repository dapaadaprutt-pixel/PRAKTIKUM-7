
<?php
$nama = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eksperimen Tombol Reset</title>
</head>
<body>

    <h2>Form Tombol Reset</h2>

    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required>

        <br><br>

        <button type="submit">Kirim</button>
        <button type="reset">Reset</button>
    </form>

    <?php
    if ($nama != "") {
        echo "<p>Nama yang dikirim: " . $nama . "</p>";
    }
    ?>

</body>
</html>
