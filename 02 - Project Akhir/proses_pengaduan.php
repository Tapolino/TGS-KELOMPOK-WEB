<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_pengaduan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Tangkap data yang dikirim dari form
$usia = $_POST['usia'];
$jdl_laporan = $_POST['jdl_laporan'];
$isi_laporan = $_POST['isi_laporan'];

// Cek apakah 'status' ada dalam $_POST sebelum mengambil nilainya
$status = isset($_POST['status']) ? $_POST['status'] : '';

// Upload gambar
$gambar_name = $_FILES['Foto']['name'];
$gambar_tmp = $_FILES['Foto']['tmp_name'];
$gambar_ext = pathinfo($gambar_name, PATHINFO_EXTENSION);
$usia_range = $_POST['usia'];

// Format penamaan file
$gambar_new_name = $usia_range . '_' . $jdl_laporan . '_' . $gambar_name;
$gambar_destination = "uploads/" . $gambar_new_name;

if (move_uploaded_file($gambar_tmp, $gambar_destination)) {
    // Simpan data ke database
    $sql = "INSERT INTO pengaduan (usia, jdl_laporan, isi_laporan, status, gambar) VALUES ('$usia', '$jdl_laporan', '$isi_laporan', '$status', '$gambar_new_name')";

    if ($conn->query($sql) === TRUE) {
        // Tampilkan pesan pengaduan berhasil terkirim
        echo "<div style='background-color: #f2f2f2; padding: 20px; border-radius: 5px; text-align: center; font-family: Arial, sans-serif;'>";
        echo "<h1 style='color: #333;'>Pengaduan Telah Terkirim</h1>";
        echo "<p style='color: #666;'>Terima kasih Atas Pengaduan Anda.</p>";
        echo "<a href='index.html' style='display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: #fff; 
              text-decoration: none; border-radius: 5px;'>Kembali ke Menu Utama</a>";
        echo "</div>";
    } else {
        echo "<div style='background-color: #f2f2f2; padding: 20px; border-radius: 5px; text-align: center;'>";
        echo "<p style='color: #ff0000;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        echo "</div>";
    }
} else {
    echo "<div style='background-color: #f2f2f2; padding: 20px; border-radius: 5px; text-align: center;'>";
    echo "<p style='color: #ff0000;'>Gagal mengunggah gambar.</p>";
    echo "</div>";
}

$conn->close();
