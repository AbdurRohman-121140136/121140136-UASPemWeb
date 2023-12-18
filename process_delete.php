<?php
include 'koneksi.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    // Query untuk menghapus data mahasiswa berdasarkan NIM
    $query = "DELETE FROM siswa WHERE nim='$nim'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);

    // Redirect kembali ke halaman utama setelah menghapus data
    
    exit();
} else {
    echo "NIM tidak diberikan.";
}
?>
