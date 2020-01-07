<?php
    $koneksi = new PDO('mysql:host=localhost;dbname=pendaftaran_siswa', "root", "");

    if(isset($_POST['terima'])){
        $query = "UPDATE data_masuk SET status = '1' WHERE id='".$_POST['terima']."'";
        $data = $koneksi->query($query);
    }

?>