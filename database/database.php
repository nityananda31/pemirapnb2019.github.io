<?php
    class Database {
        protected $conn ;
        public function __construct(){
            $this->conn = new PDO("mysql:dbhost=localhost;dbname=db_mahasiswa","root","");
        }
    }
?>