<header class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a href="#" class="navbar-brand">SMK Bakti Praja Dukuhwaru</a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/uts">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="views/daftar.php">Pendaftaran</a>
            </li>
            <li class="nav-item">
                <?php if(isset($_SESSION['username'])){ ?>
                        <a class="nav-link font-weight-bold" href="views/logout.php">Logout</a>
                    <?php } else { ?>                    
                        <a class="nav-link font-weight-bold" href="views/login.php">Login</a>
                <?php } ?>
            </li>
        </ul>
    </div>
</header>