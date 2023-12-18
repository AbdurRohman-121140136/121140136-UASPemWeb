<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai-nilai dari form
    $nim = $_POST['nim'];
    $nama = $_POST['name'];
    $programStudi = $_POST['program_studi'];
    $email = $_POST['email'];
    $tanggalLahir = $_POST['tanggal_lahir'];

    // Query untuk mengupdate data di tabel siswa berdasarkan NIM
    $query = "UPDATE siswa SET nama='$nama', program_studi='$programStudi', email='$email', tanggal_lahir='$tanggalLahir' WHERE nim='$nim'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
