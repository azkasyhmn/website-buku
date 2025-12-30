<?php

include '../../Koneksi.php';

$db = new Koneksi();

$detail = $db->edit($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link rel="stylesheet" href="/pertemuan-3/style.css">
    <style>
      body {
        font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
      }
    </style>
</head>
<body>
    <h2 class="text-center mt-5">Edit Buku</h2>

    <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card shadow-sm">
        <div class="card-body">

          <form action="proses-update.php?aksi=update" method="POST" enctype="multipart/form-data">

            <?php
                foreach ($detail as $buku) {
            ?>
            <input type="hidden" name="id" value="<?php echo $buku['id'] ?>">
            <div class="mb-3">
              <label class="form-label">Cover</label>
              <input type="file" name="image" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Judul</label>
              <input type="text" name="judul" class="form-control" value="<?php echo $buku['judul'] ?>"  required>
            </div>

            <div class="mb-3">
              <label class="form-label">Genre</label>
              <input type="text" name="genre" class="form-control" value="<?php echo $buku['genre'] ?>" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Halaman</label>
              <input type="text" name="halaman" class="form-control" value="<?php echo $buku['halaman'] ?>" required>
            </div>

            <div class="mb-3">
              <label>Deskripsi</label><br>
              <textarea name="deskripsi" rows="5" class="form-control" required><?php echo $buku['deskripsi'] ?>"</textarea>
            </div>

            <?php
                }
            ?>

            <button type="submit" class="btn btn-dark ">Simpan</button>

          </form>

        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>