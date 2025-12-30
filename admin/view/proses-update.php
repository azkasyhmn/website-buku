<?php

include "../../Koneksi.php";

$db = new Koneksi();

if(isset($_GET['aksi']) && $_GET['aksi'] == "update"){

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $halaman = $_POST['halaman'];
    $deskripsi = $_POST['deskripsi'];

    $dataOld = $db->edit($id);
    $imageOld = $dataOld['image'];

    if ($_FILES['image']['name'] != "") {
    $namaFile = basename($_FILES['image']['name']);
    $tmpFile  = $_FILES['image']['tmp_name'];

    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/web/gambar/';

    move_uploaded_file($tmpFile, $uploadDir . $namaFile);

    unlink($uploadDir . $imageOld);
    
    } else {
        $namaFile = $imageOld;
    }
    $db->updateData($id, $judul, $genre, $halaman, $namaFile, $deskripsi);

    header("location: ../daftar-buku.php");

}       

?>