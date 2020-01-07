<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <script src="./assets/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container col-md-10">
            <!-- header -->
        <?php
        session_start();
        include './views/layouts/header.php' 
        
        ?>
        <!-- content -->
        <div class="jumbotron jumbotron-fluid p-3 p-md-5 text-white bg-dark">
            <div class="container">
                <div class="col-md-8 px-0">
                    <h1 class="display-4 font-italic">Life as if you were to die tomorrow. Learn as if you were to live forever.</h1>
                    <p class="lead py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ipsum error illo blanditiis, mollitia, dignissimos nisi excepturi totam quod ea dolore officiis, laboriosam corrupti qui hic accusantium aliquid deserunt earum!</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="card flex-md-row mb-4 box-shadow">
                        <div class="card-body d-flex flex-column align-items-center">
                            <strong class="d-inline-block mb-2 text-dark">Panduan Pendaftaran</strong>
                            <a href="./views/panduan.php" class="btn btn-danger btn-sm">Panduan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card flex-md-row mb-4 box-shadow">
                        <div class="card-body d-flex flex-column align-items-center">
                            <strong class="d-inline-block mb-2 text-dark">Mulai Pendaftaran</strong>
                            <a href="views/daftar.php" class="btn btn-danger btn-sm">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card flex-md-row mb-4 box-shadow">
                        <div class="card-body d-flex flex-column align-items-center">
                            <strong class="d-inline-block mb-2 text-dark">Pengumuman Pendaftaran</strong>
                            <a href="#" class="btn btn-danger btn-sm">Pengumuman</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <?php include './views/layouts/footer.php' ?>
    </div>
</body>
</html>