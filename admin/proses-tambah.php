<?php

include "../Koneksi.php";

$db = new Koneksi();

if(isset($_GET['aksi']) && $_GET['aksi'] == "tambah"){

    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $halaman = $_POST['halaman'];
    $deskripsi = $_POST['deskripsi'];

    $namaFile = basename($_FILES['image']['name']);
    $tmpFile  = $_FILES['image']['tmp_name'];

    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/web/gambar/';

    move_uploaded_file($tmpFile, $uploadDir . $namaFile);

    $db->tambahData($judul, $genre, $halaman, $namaFile, $deskripsi);

    header("location: daftar-buku.php");

}       

?>