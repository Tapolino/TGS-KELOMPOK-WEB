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
$status = $_POST['status'];

// Upload gambar
$gambar_name = $_FILES['Foto']['name'];
$gambar_tmp = $_FILES['Foto']['tmp_name'];
$gambar_ext = pathinfo($gambar_name, PATHINFO_EXTENSION);
$gambar_new_name = uniqid() . "." . $gambar_ext;
$gambar_destination = "uploads/" . $gambar_new_name;

if (move_uploaded_file($gambar_tmp, $gambar_destination)) {
    // Simpan data ke database
    $sql = "INSERT INTO pengaduan (usia, jdl_laporan, isi_laporan, status, gambar) VALUES ('$usia', '$jdl_laporan', '$isi_laporan', '$status', '$gambar_new_name')";

    if ($conn->query($sql) === TRUE) {
        // Tampilkan pesan pengaduan berhasil terkirim
        echo "<h1>Pengaduan Telah Terkirim</h1>";
        echo "<p>Terima kasih atas pengaduan Anda.</p>";
        echo "<a href='index.html' class='button'>Kembali ke Menu Utama</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Gagal mengunggah gambar.";
}

$conn->close();
?>
