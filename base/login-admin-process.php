<?php

    include_once "../autoload.php";
    include_once $BASE_URL . "tables/admin.php";

    if(isset($_POST['submit'])){
        if(!empty($_POST['username'])&& !empty($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $code = $_POST['code'];
            $data = $admin->where('username',$username);
            
            if(count($data) > 0){
                if(password_verify($password,$data['password'])){
                    if($code == $data['code']){
                        $_SESSION['nama'] = $data['nama_admin'];
                        $_SESSION['code'] = $data['code'];
                        $_SESSION['username'] = $data['username'];
                        $_SESSION['status'] = "Admin";
                        alert("Selamat Datang Admin $_SESSION[nama] ","../admin");
                    }

                }
                else {
                    echo "gagal";
                }
            }
            else {
                echo "no data";
            }
        }else {
            echo "Kontol";
        }
    }else {
        echo "Somethings Error";
    }
?>