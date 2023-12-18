<?php
include 'koneksi.php'; // Hubungkan ke file koneksi.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai-nilai dari form
    $nim = $_POST['nim'];
    $nama = $_POST['name'];
    $programStudi = $_POST['program_studi'];
    $email = $_POST['email'];
    $tanggalLahir = $_POST['tanggal_lahir'];

    // Query untuk menyimpan data ke dalam tabel siswa
    $query = "INSERT INTO siswa (nim, nama, program_studi, email, tanggal_lahir) VALUES ('$nim', '$nama', '$programStudi', '$email', '$tanggalLahir')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi); // Tutup koneksi ke database
?>
