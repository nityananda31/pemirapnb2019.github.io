<?php

    include_once "autoload.php";
    include_once "tables/pemilih.php";

    if(isset($_POST['submit'])){
        if(!empty($_POST['nim'])&& !empty($_POST['password'])){
            $nim = $_POST['nim'];
            $password = $_POST['password'];
            $data = $pemilih->where('nim',$nim);
            $years = date('Y');
            $days = date('d');
            $date = date('m');
            $jam = date('H');
            
            if($date == 10 && $days == 11 && $years == 2019 && $jam == 8 ){
                if(count($data) > 0){
                    if(password_verify($password,$data['pass'])){
                        $_SESSION['nama'] = $data['nama'];
                        $_SESSION['nim'] = $data['nim'];
                        $_SESSION['status'] = $data['status'];
                        alert("Selamat Datang $_SESSION[nama] ","user");
                    }
                    else {
                        echo "gagal";
                    }
                }
                else {
                    echo "no data";
                }
            }else {
                alert('Belum Bisa Memilih :( Belum Jam Nya :(','index.php');
            }
        }else {
            echo "Kontol";
        }
    }else {
        echo "Somethings Error";
    }
?>