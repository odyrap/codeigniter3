Isi Username dan Password 

<!DOCTYPE html>
<html>
<head>
    <title>Form Data Diri</title>
</head>
<body>

<h2>Isi Data Diri</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nama: <input type="text" name="nama"><br>
    Umur: <input type="text" name="umur"><br>
    Alamat: <input type="text" name="alamat"><br>
    Pekerjaan: <input type="text" name="pekerjaan"><br>
    <input type="submit">
</form>

<?php
// Cek apakah form sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan data yang diisi ke dalam variabel
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    
    // Tampilkan data diri yang telah diisi
    echo "<h2>Data Diri Anda:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Umur: " . $umur . "<br>";
    echo "Alamat: " . $alamat . "<br>";
    echo "Pekerjaan: " . $pekerjaan . "<br>";
}
?>

</body>
</html>
