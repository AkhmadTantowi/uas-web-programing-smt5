<?php
session_start();  
if(isset($_SESSION["username"]))  
 {  
    //   echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';
 }  
 else  {  
      header("location:login.php");  
 }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
<a href="logout.php" style="float:right; margin: 10px" class="btn btn-danger btn-sm">Logout</a>
    <div class="container col-md-8 py-5">
    <div class="card">
            <div class="card-header py-3 bg-primary">
                <h5 class="card-title text-light">Status</h5>
            </div>
            <div class="card-body text-center">
                <?php
                    $koneksi = new PDO("mysql:host=localhost;dbname=pendaftaran_siswa","root","");
                    
                    $p = $_SESSION['username'];
                    $query = "SELECT * FROM data_masuk WHERE no_daftar= ?";
                    $data = $koneksi->prepare($query);
                    $data->execute([$p]);
                    $status;
                    while($row = $data->fetch(PDO::FETCH_ASSOC)){
                        if($row['status']){
                            $status = "Diterima";
                        }else{
                            $status = "Belum diterima";
                        }
                        echo   $status;
                    }
                    
                ?>
            </div>
        </div>
        <!-- <div class="btn btn-danger btn-sm">Logout</div> -->
        
        <?php
            $p = $_SESSION['username'];

            include '../koneksi.php';

            $sql = "SELECT * FROM data_masuk WHERE no_daftar = ?";
            $stmt = $koneksi->prepare($sql);
            $stmt->execute([$p]);
            // $result = $koneksi->query();

            while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
        ?>

        <form action="update_profil.php" method="post" class="need-validation py-3">
            <div class="card">
                <div class="card-header py-3 bg-dark">
                    <h5 class="card-title text-light">Profil</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row text-right">
                        <label for="no_daftar" class="col-sm-3 col-form-label">Nomor Pendaftaran</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" disabled value="<?php echo $data['no_daftar']; ?>">
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="tmp_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $data['tempat_lahir']; ?>">
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $data['tanggal_lahir']; ?>">
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                        <div class="col-sm-8">
                            <select name="agama" id="agama" class="form-control">
                                <option selected>-- Agama --</option>
                                <option value="Islam" <?php if($data['agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option>
                                <option value="Katolik" <?php if($data['agama'] == 'Katolik'){ echo 'selected'; } ?>>Katolik</option>
                                <option value="Kristen" <?php if($data['agama'] == 'Kristen'){ echo 'selected'; } ?>>Kristen</option>
                                <option value="Hindu" <?php if($data['agama'] == 'Hindu'){ echo 'selected'; } ?>>Hindu</option>
                                <option value="Budha" <?php if($data['agama'] == 'Budha'){ echo 'selected'; } ?>>Budha</option>
                                <option value="Konghucu" <?php if($data['agama'] == 'Konghucu'){ echo 'selected'; } ?>>Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-8">
                            <select name="gender" id="gender" class="form-control">
                                <option selected>-- Gender --</option>
                                <option value="Laki-laki" <?php if($data['gender'] == 'Laki-laki'){ echo 'selected'; } ?>>Laki-laki</option>
                                <option value="Perempuan" <?php if($data['gender'] == 'Perempuan'){ echo 'selected'; } ?>>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>">
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="telpon" class="col-sm-3 col-form-label">Telpon</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="telpon" value="<?php echo $data['telpon']; ?>">
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <button class="btn btn-primary btn-lg btn-block" name="update" type="submit">Submit</button>
        </form>
        <?php } ?>
        <br>
        
    </div>
</body>
</html>