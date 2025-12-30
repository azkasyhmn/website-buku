<div class="product-list">
<?php
    foreach ($koneksi->tampilData() as $buku){
    ?>
    
    <div class="product">
        <img src="gambar/<?php echo $buku['image']; ?>" alt="gambar">
        <a href="detail-buku.php?id=<?= $buku['id']; ?>">
            <h3><?php echo $buku['judul']; ?></h3>
        </a>
        <p>Genre : <?php echo $buku['genre']; ?></p>
        <p class="discover">Halaman : <?php echo $buku['halaman']; ?></p>
    </div>
    <?php
        }
    ?>
    </div>