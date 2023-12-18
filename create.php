<?php
// Mulai session
session_start();

// Fungsi untuk menyimpan informasi pengguna ke dalam session
function saveToSession($key, $value) {
    $_SESSION[$key] = $value;
}

// Set informasi pengguna ke dalam session
saveToSession('user', 'Tamu');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Mahasiswa Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="logo">
        <img src="logo_itera.png" alt="ITERA"/>
        <h1>Institut Teknologi Sumatera</h1>
    </header>

    <main>
        <div id="konten">
            <article class="box">
                <h1>Inputkan Data Mahasiswa</h1>
                <div class="form">
                    <form id="studentForm" action="process_create.php" method="post" onsubmit="return validateForm()">
                        <label for="nim">NIM:</label>
                        <input type="text" id="nim" name="nim"><br>

                        <label for="name">Nama:</label>
                        <input type="text" id="name" name="name"><br>

                        <label for="programStudi">Program Studi:</label>
                        <input type="text" id="program_studi" name="program_studi"><br>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email"><br>

                        <label for="tanggalLahir">Tanggal Lahir:</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br>

                        <button type="submit" onclick="setCookie('user', 'Tamu')">Submit</button>
                    </form>
                </div>
            </article>
        </div>

        <aside>
            <nav class="box">
                <ul class="nav-list">
                    <li><a href="create.php">Tambah Data</a></li>
                    <li><a href="index.php">Tabel Mahasiswa</a></li>
                </ul>
            </nav>

            <article class="box">
                <header>
                    <h2 id="info">Informasi Lainnya</h2>
                </header>

                <section>
                    <table>
                        <tr>
                            <th>Moto</th>
                            <td>Smart, Friendly, and Forest Campus</td>
                        </tr>
                        <tr>
                            <th>Didirikan</th>
                            <td>6 Oktober 2014</td>
                        </tr>
                        <tr>
                            <th>Web</th>
                            <td><a href="https://www.itera.ac.id/">www.itera.ac.id</a></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>Jalan Terusan Ryacudu, Way Hui, Kec. Jati Agung, Lampung Selatan, Lampung, Indonesia</td>
                        </tr>
                    </table>
                </section>
            </article>
        </aside>
    </main>

    <footer>
        <p>&#169; UAS-PemWeb, Abdur Rohman</p>
    </footer>

    <script src="validate.js"></script>
    <script src="cookie.js"></script> 
</body>
</html>
