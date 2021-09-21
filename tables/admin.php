<?php

    require_once $BASE_URL . "database/query.php";

    class Admin extends Query {

        protected $table = "tb_admin";

        // Costum Query Start Here

    }

    $admin = new Admin();


?>