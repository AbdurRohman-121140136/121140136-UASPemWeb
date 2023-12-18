<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">   
    <script src="validate.js"></script>
</head>
<body>
    <header class="logo">
        <img src="logo_itera.png" alt="ITERA"/>
        <h1>Institut Teknologi Sumatera</h1>
    </header>

    <main>
        <div id="konten">
            <article class="box">
                <h1>Edit Data Mahasiswa</h1>
                <div class="form">
                    <?php
                    include 'koneksi.php';

                    if (isset($_GET['nim'])) {
                        $nim = $_GET['nim'];

                        // Query untuk mendapatkan data mahasiswa berdasarkan NIM
                        $query = "SELECT * FROM siswa WHERE nim='$nim'";
                        $result = mysqli_query($koneksi, $query);

                        if ($result) {
                            if (mysqli_num_rows($result) == 1) {
                                $row = mysqli_fetch_assoc($result);

                                // Tampilkan form untuk mengedit data
                                ?>
                                <form id="editForm" action="process_edit.php" method="post" onsubmit="return validateForm()">
                                    <input type="hidden" name="nim" value="<?php echo $row['nim']; ?>">

                                    <label for="name">Nama:</label>
                                    <input type="text" id="name" name="name" value="<?php echo $row['nama']; ?>" ><br>

                                    <label for="programStudi">Program Studi:</label>
                                    <input type="text" id="program_studi" name="program_studi" value="<?php echo $row['program_studi']; ?>" ><br>

                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" ><br>

                                    <label for="tanggalLahir">Tanggal Lahir:</label>
                                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" ><br>

                                    <button type="submit">Update</button>
                                </form>
                                <?php
                            } else {
                                echo "Data mahasiswa tidak ditemukan.";
                            }
                        } else {
                            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
                        }

                        mysqli_close($koneksi);
                    } else {
                        echo "NIM tidak diberikan.";
                    }
                    ?>
                </div>
            </article>
        </div>
    </main>

    <footer>
        <p>&#169; UAS-PemWeb, Abdur Rohman</p>
    </footer>
</body>
</html>
