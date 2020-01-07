<?php
session_start();

include '../koneksi.php';

function randomPassword() {
    $alphabet = '1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}


$id = null;
$jurusan = $_POST['jurusan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telpon = $_POST['telpon'];
$nama_sekolah = $_POST['nama-sekolah'];
$alamat_sekolah = $_POST['alamat-sekolah'];
$tahun_lulus = $_POST['tahun-lulus'];
$no_daftar = $_POST['no_daftar'];
// $no_daftar = date('dmYHis');
// $no_daftar = $_POST('no_daftar');
$pass_user = randomPassword();


$_SESSION['no_daftar'] = $no_daftar;

if (isset($_SESSION['no_daftar'])) {
    $test = $koneksi->prepare("SELECT 1 FROM data_masuk WHERE email = ?");
    $test->execute([$email]);
    if ($test->rowCount() > 0) {
        header("Location: daftar.php?err=1");
    } else {
        try {
            $sql = "INSERT INTO data_masuk (id, jurusan, nama, alamat, email, telpon, nama_sekolah, alamat_sekolah, tahun_lulus, no_daftar, password) VALUES(:id, :jurusan, :nama, :alamat, :email, :telpon, :nama_sekolah, :alamat_sekolah, :tahun_lulus, :no_daftar, :passwd )";
            $stmt = $koneksi->prepare($sql);
            $stmt->execute([
                'id' => $id,
                'jurusan' => $jurusan, 
                'nama' => $nama, 
                'alamat' => $alamat, 
                'email' => $email, 
                'telpon' => $telpon,
                'nama_sekolah' => $nama_sekolah,
                'alamat_sekolah' => $alamat_sekolah,
                'tahun_lulus' => $tahun_lulus,
                'no_daftar' => $no_daftar,
                'passwd' => $pass_user]);

            // if ($stmt) {
            //     # code...
            //     // $_POST('no_daftar');
            //     // header("location: success_daftar.php");
            // } else {
            //     echo $stmt->errno;
            //     echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            // }
        } catch (PDOException $e) {
            //throw $th;
            echo $sql. "<br>" . $e->getMessage();
        } 
    }

} else {
    header("Location: ../index.php");
    exit;
}

include 'daftar_page.php';

$koneksi = null;