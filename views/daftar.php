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
            <h3>
            <?php 
                $errors = array (
                    1 => "Email sudah terdaftar"
                );
                
                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;
                if ($error_id != 0 && in_array($error_id, $errors)) {
                    echo $errors[$error_id];
                }
            ?>
            </h3>
            <h2>Form Pendaftaran</h2>
        </div>
        <form action="daftar_insert.php" class="need-validation" method="post">
            <div class="card">
                <div class="card-header py-3 bg-primary">
                    <h5 class="card-title text-light">Pilihan</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row text-right">
                        <label for="jurusan" class="col-sm-3 col-form-label">Pilih Jurusan</label>
                        <div class="col-sm-8">
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option selected>Pilih Jurusan</option>
                                <option value="TKJ">TKJ</option>
                                <option value="TKR">TKR</option>
                                <option value="Elektronik">Elektronik</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header py-3 bg-primary">
                    <h5 class="card-title text-light">
                        Biodata dan Informasi Sekolah
                    </h5>
                </div>    
                <div class="card-body">
                    <h6 class="card-title">Biodata</h6>
                    <hr class="mb-12">
                    <div class="form-group row text-right">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama lengkap" required>
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="telpon" class="col-sm-3 col-form-label">No.Telpon</label>
                        <div class="col-sm-8">
                            <input type="text" name="telpon" class="form-control" id="telpon" placeholder="Telpon" required>
                        </div>
                    </div>
                    <br>
                    <h6 class="card-title">Informasi Sekolah Asal</h6>
                    <hr class="mb-12">
                    <div class="form-group row text-right">
                        <label for="sekolah" class="col-sm-3 col-form-label">Nama Sekolah</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama-sekolah" class="form-control" id="sekolah" placeholder="Nama sekolah" required>
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="alamat-sekolah" class="col-sm-3 col-form-label">Alamat Sekolah</label>
                        <div class="col-sm-8">
                            <input type="text" name="alamat-sekolah" class="form-control" id="alamat-sekolah" placeholder="Alamat sekolah" required>
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <label for="tahun-lulus" class="col-sm-3 col-form-label">Tahun Lulus</label>
                        <div class="col-sm-8">
                            <input type="text" name="tahun-lulus" class="form-control" id="tahun-lulus" placeholder="Tahun lulus" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <input type="hidden" name="no_daftar" value="<?php echo date('dmYHis'); ?>">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
        </form>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">2019 - SMK Bakti Praja Dukuhwaru</p>
        </footer>
    </div>
</body>
</html>