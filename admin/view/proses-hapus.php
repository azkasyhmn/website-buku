<?php

include "../../Koneksi.php";

$db = new Koneksi();

if(isset($_GET['aksi']) && $_GET['aksi'] == "hapus"){

    $id = $_POST['id'];

    $db->hapusData($_GET['id']);

    header("location: ../daftar-buku.php");

}       

?>