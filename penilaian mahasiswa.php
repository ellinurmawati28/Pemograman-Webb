<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>

<h2>Aplikasi Penilaian Mahasiswa</h2>

<form method="post" action="">
    <label>Masukkan Nilai Mata Kuliah 1:</label>
    <input type="number" name="nilai1" required><br><br>

    <label>Masukkan Nilai Mata Kuliah 2:</label>
    <input type="number" name="nilai2" required><br><br>

    <label>Masukkan Nilai Mata Kuliah 3:</label>
    <input type="number" name="nilai3" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    // Ambil nilai dari input form
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];

    // Hitung nilai rata-rata
    $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

    // Tentukan status kelulusan (lulus jika rata-rata >= 60)
    if ($rata_rata >= 60) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }

    // Tampilkan hasil
    echo "<h3>Hasil Penilaian</h3>";
    echo "Nilai Rata-Rata: " . number_format($rata_rata, 2) . "<br>";
    echo "Status Kelulusan: " . $status . "<br>";
}
?>

</body>