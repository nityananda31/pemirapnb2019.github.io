<?php

    require_once $BASE_URL . "database/query.php";

    class Pilihan extends Query {

        protected $table = "tb_pilihan";

        // Costum Query Start Here

        public function winner(){
            $sql = "SELECT * FROM `tb_pilihan` ORDER BY pemilih DESC LIMIT 1";
            $query = $this->conn->query($sql);
            // Fetch Data
            $rows = $query->fetchAll();
            return $rows;
        }

    }

    $pilihan = new Pilihan();


?>