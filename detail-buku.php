<?php

include 'Koneksi.php';
$koneksi = new Koneksi();

$id = $_GET['id'];

$query = mysqli_query($koneksi->conn, "SELECT * FROM buku WHERE id = $id");

$buku = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <title><?= $buku['judul'] ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
      <div class="container">
        <?php include 'components/navbar.php'; ?>
      </div>
    </header>
    
    <h1 class="head">Detail Buku</h1>

    <div class="detail-container">
        <div class="detail-card">
            <div class="detail-cover">
                <img src="gambar/<?= $buku['image'] ?>">
            </div>

            <div class="detail-info">
                <h1><?= $buku['judul']; ?></h1>
                <p class="genre"><strong>Genre : <?= $buku['genre'] ?></strong></p>
                <p class="halaman"><strong>Halaman : <?= $buku['halaman'] ?></strong></p>

                <div class="deskripsi">
                    <h3>Sinopsis</h3>
                    <p><?= nl2br($buku['deskripsi']); ?></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>