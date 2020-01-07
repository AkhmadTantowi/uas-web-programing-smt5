<?php 
    // session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container col-md-8">
        <div class="py-5 text-center">
            <h2>Informasi Pendaftaran</h2>
        </div>
        <div class="card">
            <div class="card-header py-3 bg-dark">
                <h5 class="card-title text-light">Informasi Pendaftaran dan Akun Login</h3>
            </div>
            <div class="card-body">
                <?php
                $p = $_SESSION['no_daftar'];

                // $result = $koneksi->query("SELECT * FROM data_masuk WHERE no_daftar = 06112019055113");
                $sql = "SELECT * FROM data_masuk WHERE no_daftar = ?";
                $stmt = $koneksi->prepare($sql);
                $stmt->execute([$p]);
                // $result = $koneksi->query();

                while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
                    
                ?>
                <div>
                    No. Pendaftaran
                    <p class="text-muted">
                        <?php echo $data['no_daftar']; ?>
                    </p>
                </div>
                <div>
                    Akun Login Anda
                    <p class="text-muted">
                        <?php
                            echo "Username: " . $data['no_daftar'] . "<br>";
                            echo "Password: " . $data['password'];

                }
                        ?>
                    </p>
                </div>
                <hr class="md-12">
                <div>
                    NB:
                    <p  class="text-danger">
                        Simpan dengan baik informasi ini, gunakan Username dan password untuk  
                            <a class="badge badge-primary" href="login.php">Login</a>
                    </p> 
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header py-3 bg-dark">
                <h5 class="card-title text-light">
                    Informasi Penting
                </h5>
            </div>    
            <div class="card-body">
                Petunjuk Pembayaran dan Login
                <ul>
                    <li>Membayar biaya pendaftaran sebesar Rp. xxxxxx.</li>
                    <li>Jika sudah membayar, silahkan login ke alamat <a class="badge badge-primary" href="login.php">login</a> untuk kemudian mengirimkan bukti pembayaran.</li>
                    <li>Setelah berhasil login, silahkan lengkapi data anda.</li>
                    <li>Selanjutnya, sistem akan mengabari anda melalui email/sms.</li>
                </ul>
            </div>
        </div>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">2019 - SMK Bakti Praja Dukuhwaru</p>
        </footer>
    </div>
</body>
</html>