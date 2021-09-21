<?php

    include_once "../../autoload.php";
    include_once $BASE_URL . 'tables/pemilih.php';

    if(!empty($_SESSION['nama'])){
        if(!empty($_GET['vote'])){
            $vote = $_GET['vote'];
            if($vote >= 1 && $vote <= 3 ){
                $query = $pemilih->update([
                    'pilihan' => $vote,
                    'status' => 1
                ],'nim',$_SESSION['nim']);
                if($query){
                    alert('Berhasil Memilih !','../index.php');
                }else{
                    alert('Sepertinya ada yang Salah !','../index.php');
                }
            }
            else {
                alert('Calon Tidak Valid !','../index.php');
            }
        }
    }else {
        alert('Tidak ada user yang masuk !','../../index.php');
    }


?>