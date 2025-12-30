<?php

class Koneksi {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'db_buku';
    public $conn;

    function __construct(){
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    }

    public function getConnection(){
        return $this->conn;
    }

    function tampilData(){
        $data = mysqli_query($this->conn, "SELECT * FROM buku");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);

        return $rows;
    }

    function tambahData($judul, $genre, $halaman, $namaFile, $deskripsi) {
        mysqli_query($this->conn, "INSERT INTO buku VALUES (NULL, '$judul', '$genre', '$halaman', '$namaFile', '$deskripsi')");
        
    }

    function edit($id) {
        $data = mysqli_query($this->conn, "SELECT * FROM buku WHERE id = '$id'");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);

        return $rows;
    }

    function updateData($id, $judul, $genre, $halaman, $namaFile, $deskripsi) {
        mysqli_query($this->conn, "UPDATE `buku` SET `judul` = '$judul', `genre` = '$genre', `halaman` = '$halaman', `image` = '$namaFile', `deskripsi` = '$deskripsi' WHERE `buku`.`id` = '$id';");
    }

    function hapusData ($id) {
        mysqli_query($this->conn, "DELETE FROM `buku` WHERE `buku`.`id` = '$id'");    
    }
}
