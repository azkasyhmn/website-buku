<?php

include "Koneksi.php";
$koneksi = new Koneksi();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Buku</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
      <div class="container">
        <?php include 'components/navbar.php'; ?>
      </div>
    </header>

      <main>
      <section class="hero">
        <div class="hero-content">
          <h1>Ayo Membaca Buku</h1>
          <p>Karena buku adalah jembatan menuju ilmu.</p>
        </div>  
      </section>

      <section class="products">
        <h2>Buku Populer</h2>
        <?php include 'components/buku.php'; ?>
      </section>

      <section class="hero-secondary">
        <div class="hero-content">
          <h2>Tambahkan Buku favoritmu!</h2>
        </div>
      </section>

      <!-- <section class="events">
        <div class="events-header">
      <p>Discover our</p>

      <h2>Heading 2</h2>

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe minus voluptates iusto quam vero. At non accusantium veniam, vitae a quod quibusdam, magnam, optio perspiciatis deserunt beatae eos blanditiis quas?</p>
      </div>

      <div class="product-list">
        <div class="product">
            <img src="gambar/download (8).jpeg" alt="gambar4">
            <h3><a href="#">Product 4</a></h3>
            <p>150,00kr</p>
        </div>

        <div class="product">
            <img src="gambar/kaoruko waguri.jpeg" alt="gambar5">
            <h3><a href="#">Product 5</a></h3>
            <p>150,00kr</p>
        </div>
      </div> -->
      
      <div class="view-all-container">
        <h3><a href="#" class="view-all">View All Events</a></h3>
      </div>
      </section>
      </main>

      <footer>

        <div class="footer-top">YONOBI</div>

        <div class="footer-container">
          <div class="footer-logo">
            <div class="logo-2">YONOBI</div>
          </div>

          <div class="footer-column">
          <h4>YONOBI</h4>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Cookie Policy</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
          </div>

          <div class="footer-column">
          <h4>Pinch Pot</h4>
          <ul>
            <li><a href="#">Concept</a></li>
            <li><a href="#">Prices & Tutorials</a></li>
            <li><a href="#">Membership</a></li>
            <li><a href="#">Gift Card</a></li>
            <li><a href="#">Community events</a></li>
          </ul>
          </div>

          <div class="footer-column">
          <h4>Pottery Classes</h4>
          <ul>
            <li><a href="#">Pottery classes</a></li>
            <li><a href="#">Membership</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Gift card</a></li>
            <li><a href="#">Shipment of Class ceramics</a></li>
          </ul>
          </div>
        </div>

        <div class="footer-bottom">
        <div class="footer-social">
          <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
          <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="#" target="_blank"><i class="fab fa-tiktok"></i></a>
          <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-settings">
        <select name="language">
          <option value="en">English</option>
          <option value="da">Danish</option>
        </select>
      </div>
      
      <hr>

      <div class="footer-credits">
        <p>© SYAHMAN</p>
      </div>

      </footer>
       
      <!-- FOOTER END -->
</body>
</html>