<?php

session_start();

include '../koneksi.php';

$no = $_SESSION["username"];

$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];

try {
    if (isset($_POST["update"])) {
        # code...
        
        // $sql = "UPDATE data_masuk SET nama = :nama, tempat_lahir = :tempat_lahir, tanggal_lahir = :tanggal_lahir, agama = :agama, gender = :gender, email = :email, alamat = :alamat, telepon = :telepon  WHERE no_daftar = :no_daftar";
        $sql = "UPDATE data_masuk SET nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', agama = '$agama', gender = '$gender', email = '$email', alamat = '$alamat', telpon = '$telpon'  WHERE no_daftar = '$no'";
        $stmt = $koneksi->prepare($sql);
        $stmt->execute();
        // $stmt->execute([
        //     'nama' => $nama, 
        //     'tempat_lahir' => $tempat_lahir,
        //     'tanggal_lahir' => $tanggal_lahir,
        //     'agama' => $agama, 
        //     'gender' => $gender, 
        //     'email' => $email, 
        //     'alamat' => $alamat, 
        //     'telpon' => $telpon,
        //     'no_daftar' => $no
        //     ]);

        $i = $stmt->rowCount();
        if ($i > 0) {
            header("location:profil.php");
        }
    }
} catch (PDOException $e) {
    //throw $th;
    echo $sql. "<br>" . $e->getMessage();
} 

