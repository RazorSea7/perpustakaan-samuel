<?php
session_start();
if ($_SESSION['jabatan']=="petugas") {
    include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Taruna Bangsa</title>
    <!-- fil css ini harus dihubungkan menggunakan tag link -->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <style>
        table{
            max-width: 100%;
            font-size : 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <h1><center>Perpustakaan SMK Taruna Bangsa</center></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/30_PASGANJIL2021_XIIRPL1_SAMUEL/home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=anggota">Anggota</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?page=buku">Buku</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Samuel</a></li>
                                    <li><a class="dropdown-item" href="#">Abednego</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Maukh</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <a href="?page=logout"></a><button class="btn btn-danger">Logout</button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                if(isset($_GET['page'])){
                    if ($_GET['page']=="anggota") {
                        include('anggota.php');
                    }elseif($_GET['page']=="anggota-hapus"){
                        include('hapus.php');
                    }elseif($_GET['page']=="anggota-simpan"){
                        include('simpan.php');
                    }elseif($_GET['page']=="anggota-edit"){
                        include('edit.php');
                    }elseif($_GET['page']=="anggota-edit-proses"){
                        include('edit-proses.php');
                    }elseif($_GET['page']=="buku"){
                        include('buku.php');
                    }elseif($_GET['page']=="logout"){
                        include('logout.php');
                    }else{
                        echo "<br><br><center><h1>Halaman Yang Anda Cari Tidak Di Temukan!</h1></center><br><br>"; 
                    }
                    }else{
                        echo "<br><br><center><h1>Selamat Datang Administrator</h1></center><br><br>";
                    }
                
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <center>@ Samuel Abednego Maukh 2022</center>
            </div>
        </div>
    </div>
<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
}
else
{
    ?>
    <script>
    window.location.href='login.php';
    </script>
    <?php
}

?>