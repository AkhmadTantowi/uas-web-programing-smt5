<?php
session_start();

include '../koneksi.php';

try {
    if (isset($_POST["login"])) {
        if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM data_masuk WHERE no_daftar = :username AND password = :password";  
                $query_admin ="SELECT * FROM users WHERE username = :username AND password = :password";
                $statement = $koneksi->prepare($query);  
                $statement1 = $koneksi->prepare($query_admin);
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );
                $statement1->execute(
                     array(
                         'username'     =>     $_POST["username"],  
                         'password'     =>     $_POST["password"] 
                     )
               );
               $count1 = $statement1->rowCount();  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"]; 
                     $proses = "Login";
                     $nama_user1 = $_POST['username'];
                     $sql = "INSERT INTO log_ativitas (proses, nama_user) VALUES (:proses, :nama_user)";
                     $query = $koneksi->prepare($sql);
                     $query->execute(
                         array(
                              'proses' => $proses,
                              'nama_user' => $nama_user1
                         )
                     );
               //  $_SESSION["id"] = $query["id"];
                     header("location:profil.php");  
                }  
                else if ($count1 > 0)
                {  
                    
                    $_SESSION["username"] = $_POST["username"];  
                    $proses = "Login";
                    $nama_user = 'Administrator';
                    $sql = "INSERT INTO log_ativitas (proses, nama_user) VALUES (:proses, :nama_user)";
                    $query = $koneksi->prepare($sql);
                    // $query = BindParam(':proses', $proses);
                    // $query = BindParam(':nama_user', $nama_user);
                    $query->execute(
                         array(
                              'proses' => $proses,
                              'nama_user' => $nama_user
                         )
                    );
                    header("location:admin/index.php");  
                }  else {
                    $message = '<label>Username atau password salah!</label>';  
                }
           }
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
}