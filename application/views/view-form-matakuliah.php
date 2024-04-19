<!DOCTYPE html>
<html>
<head>
    <title>Form Data Diri</title>
</head>
<body>
    <h2>Form Data Diri</h2>
    <form method="post">
        <label for="kode">Kode:</label><br>
        <input type="text" id="kode" name="kode"><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="sks">Jumlah SKS:</label><br>
        <input type="number" id="sks" name="sks"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Cek apakah form telah di-submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $sks = $_POST['sks'];

        // Tampilkan data diri
        echo "<h2>Hasil Data Diri:</h2>";
        echo "Kode: " . $kode . "<br>";
        echo "Nama: " . $nama . "<br>";
        echo "Jumlah SKS: " . $sks . "<br>";
    }
    ?>
</body>
</html>
