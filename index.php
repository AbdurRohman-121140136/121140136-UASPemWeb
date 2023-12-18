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
                <h1>Tabel Mahasiswa</h1>
                <div class="daftar">
                    <table>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th>Email</th>
                            <th>Tanggal Lahir</th>
                            <th>Action</th>
                        </tr>
                        <tbody id="tableData">
                            <?php
                            include 'koneksi.php';
                            include 'mahasiswa.php';

                            $query = "SELECT * FROM siswa";
                            $result = mysqli_query($koneksi, $query);

                            if ($result) {
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $mahasiswa = new Mahasiswa(
                                            $row['nim'],
                                            $row['nama'],
                                            $row['program_studi'],
                                            $row['email'],
                                            $row['tanggal_lahir']
                                        );

                                        echo "<tr>";
                                        echo "<td>" . $mahasiswa->getNim() . "</td>";
                                        echo "<td>" . $mahasiswa->getNama() . "</td>";
                                        echo "<td>" . $mahasiswa->getProgramStudi() . "</td>";
                                        echo "<td>" . $mahasiswa->getEmail() . "</td>";
                                        echo "<td>" . $mahasiswa->getTanggalLahir() . "</td>";
                                        echo "<td><a href='edit.php?nim=" . $mahasiswa->getNim() . "'>Edit</a> | <a href='process_delete.php?nim=" . $mahasiswa->getNim() . "'>Hapus</a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>Tidak ada data mahasiswa.</td></tr>";
                                }
                            } else {
                                echo "Error: " . $query . "<br>" . $koneksi->error; 
                            }

                            $koneksi->close(); 
                            ?>
                        </tbody>
                    </table>
                </div>
            </article>
        </div>

        <aside>
            <nav class="box">
                <ul class="nav-list">
                    <li><a href="create.php">Tambah Data</a></li>
                    <li><a href="">Tabel Mahasiswa</a></li>
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
</body>
</html>
