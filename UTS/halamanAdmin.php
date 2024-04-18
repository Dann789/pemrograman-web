<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Bebas Bersuara</title>
    <link rel="stylesheet" href="css/styleHalaman.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
    <nav>
        <div class="judul-atas">
            <img src="assets/megaphones.svg" alt="logo">
            <h1 id="judul">Bebas Bersuara!</h1>
        </div>
        <ul>
            <li>
                <a href="halamanAdmin.php">Inbox Pengaduan</a>
            </li>
            <li>
                <a href="#tanggapan">Tanggapan</a>
            </li>
            <li>
                <a href="logout.php"><button>Log Out</button></a> 
            </li>
        </ul>
    </nav>

    <main id="content-admin">
        <section id="inbox">
            <h1>Inbox Pengaduan Masyarakat</h1>

            <?php
            include 'config/koneksi.php';
                $query = "SELECT * FROM pengaduan order by id";
                $result = mysqli_query($koneksi, $query);

                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    echo "<table>";
                    echo "<tr><th>No</th><th>Nama</th>
                        <th>No. Telp</th><th>Isi Pengaduan</th></tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>
                        <td>" . $no++ . "</td><td>" . $row["nama"] . "</td>
                        <td>" . $row["no_telp"] . "</td>
                        <td>" . $row["isi_pengaduan"] . "</td>
                        </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Tidak ada pengajuan yang masuk";
                }
                mysqli_close($koneksi);
            ?>
        </section>
        
        <section id="tanggapan">
            <h2>Tanggapan</h2>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
            <label for="no_telp">No. Telp</label>
            <input type="text" name="no_telp" id="no_telp">
            <label for="tanggapan">Tanggapan</label>
            <textarea name="tanggapan" id="tanggapan" cols="30" rows="10"></textarea>
            <button type="submit" id="btn-tanggapan">Kirim</button>
        </section>
    </main>

    <footer>
        <div class="judul-bawah">
            <img src="assets/megaphones.svg" alt="logo">
            <h1 id="judul">Bebas Bersuara!</h1>
        </div>
        <p>&copy; 2024 Copyright: Muhammad Wildan Ramadhana</p>
        <div class="social-icon">
            <box-icon type='logo' name='facebook-circle'></box-icon>
            <box-icon name='instagram' type='logo'></box-icon>
            <box-icon name='youtube' type='logo'></box-icon>
        </div>
    </footer>

</body>
</html>