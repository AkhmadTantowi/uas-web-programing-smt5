<?php
    try {
        $koneksi = new PDO("mysql:host=localhost;dbname=pendaftaran_siswa","root","");

        $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // $result = $koneksi->query("SELECT * FROM data_masuk");

        // while($row = $result->fetch(PDO::FETCH_ASSOC)){
        //     echo $row['nama']. '<br>';
        // }

        // $koneksi = null;
    } catch (PDOException $e) {
        print "Koneksi atau query bermasalah : ".$e->getMessage()."<br/>";
        die();
    }
    
?>