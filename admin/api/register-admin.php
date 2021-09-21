<?php

    include_once "../../autoload.php";
    include_once $BASE_URL . "tables/admin.php";

    if(isset($_POST['submit'])){

        if(!empty($_POST['username']) && !empty($_POST['password'])){
        
            $username = $_POST['username'];
            $nama = $_POST['nama'];
            $password = $_POST['password'];
            $code = random(5);
            $passwordSecure = password_hash($password,PASSWORD_DEFAULT,['cost' => 12]);

            $queryCheck = $admin->where('username',$username);
            
            

                $query = $admin->insert([
                    'nama_admin' => $nama,
                    'username' => $username,
                    'password' => $passwordSecure,
                    'code' => $code
                ]);

                if($query){
                    return header('Location: ../code-view.php');
                    
                }
                else {
                    
                    alert('Data Gagal di Inputkan','../');
                }

        }
        else {
            
            alert('Form Kosong !','../');
        }
    }
    else {
        
        alert('Data tidak dapat di Inputkan','../');
    }


?>