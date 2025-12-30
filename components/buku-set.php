<div class="product-list">
<?php
    foreach ($koneksi->tampilData() as $buku){
    ?>
    
    <div class="product">
        <img src="../gambar/<?php echo $buku['image']; ?>" alt="gambar">
        <h3><?php echo $buku['judul']; ?></h3>
        <p>Genre : <?php echo $buku['genre']; ?></p>
        <a href="#" class="discover">Halaman : <?php echo $buku['halaman']; ?></a>

        <div class="aksi">
        <a href="view/edit.php?id=<?php echo $buku['id']; ?>" class="btn-edit">Edit</a>
        <a href="view/proses-hapus.php?id=<?php echo $buku['id']; ?>&aksi=hapus" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</a>
    </div>
    </div>
    <?php
        }
    ?>
    </div>