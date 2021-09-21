<?php

    include_once "../../autoload.php";
    include_once $BASE_URL . "tables/pemilih.php";

    if(isset($_POST['submit'])){

        if(!empty($_POST['nim']) && !empty($_POST['nama'])){
            
            
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $prodi = $_POST['prodi'];
            $password = password_hash($nim,PASSWORD_DEFAULT,['cost' => 12]);

            $queryCheck = $pemilih->where('nim',$nim);
            if(count($queryCheck) == 0){
            

                $query = $pemilih->insert([
                    'nama' => $nama,
                    'nim' => $nim,
                    'prodi' => $prodi,
                    'pass' => $password,
                    'status' => 0,
                    'pilihan' => 0,
                ]);

                if($query){
                    alert('Data Berhasil di Inputkan','../');
                }
                else {
                    alert('Data Gagal di Inputkan','../');
                }

            }
            else{
                alert('Data Sudah Ada !','../');
            }

        }
    }
    else {
        alert('Data tidak dapat di Inputkan','../');
    }


?>