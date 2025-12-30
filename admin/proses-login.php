<?php
   require_once('../Auth.php');
    
    $auth = new Auth();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $login = $auth->login($email, $password);
        
        if($login) {

            if($_SESSION['role'] === 'admin') {
                header("location:dashboard.php");
            } else {
                header("location:../index.php");
            }
            
        } else {
            ?>
                <script>alert('username dan atau password tidak sesuai');</script>
                <meta http-equiv="refresh" content="0; url=login.php">
            <?php
        }
    } else {
        header("location: login.php");
    }



