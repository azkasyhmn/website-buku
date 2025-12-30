<?php
session_start();

require_once('Koneksi.php');
class Auth extends Koneksi{

    public $conn;
    public function __construct(){
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function login($username, $password){
        $sql = "SELECT * FROM user WHERE username='".$username."'";
        $query = $this->conn->query($sql);

        if($query->num_rows >0){
            $row = $query->fetch_array();
            if(password_verify($password, $row['password'])){
                
                session_regenerate_id(true);

                $_SESSION['login'] = true;
                $_SESSION['kode_pengguna'] = $row['kode_pengguna'];
                $_SESSION['role'] = $row['role'];
                return true;
            }else{
                return false;
            }            
        }else{
            return false;
        }
    }
}