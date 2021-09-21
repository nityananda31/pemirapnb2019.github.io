<?php

    require_once $BASE_URL . "database/query.php";
    class Pemilih extends Query {

        protected $table = "tb_mahasiswa";

    }
    $pemilih = new Pemilih();


?>