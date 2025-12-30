<?php

include "Koneksi.php";
$koneksi = new Koneksi();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
      <div class="container">
        <?php include 'components/navbar.php'; ?>
      </div>
    </header>
    
    <section class="products">
        <h2>List Buku</h2>
        <?php include 'components/buku.php'; ?>
      </section>
    
</body>
</html>