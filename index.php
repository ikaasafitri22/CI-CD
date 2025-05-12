<!DOCTYPE html>
<html>
<head>
    <title>Hitung Durasi Nonton Film</title>
</head>
<p>Halo dari lokal</p>
<p>Halo dari GitHub</p>
<body>
    <h2>Hitung Durasi Nonton Film</h2>
    <form method="POST">
        Judul Film: <input type="text" name="judul"><br>
        Jam Mulai: <input type="time" name="mulai"><br>
        Jam Selesai: <input type="time" name="selesai"><br>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $judul = $_POST['judul'];
        $mulai = new DateTime($_POST['mulai']);
        $selesai = new DateTime($_POST['selesai']);
        $durasi = $mulai->diff($selesai);
        echo "<p>Film: $judul</p>";
        echo "<p>Durasi: " . $durasi->format('%h jam %i menit') . "</p>";
    }
    ?>
</body>
</html>
