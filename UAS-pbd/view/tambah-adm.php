<?php

require_once '../koneksi/koneksi.php';
require '../function/functions.php';

if(isset($_POST['submit'])){
    if( tambahAdm($_POST) > 0){
        echo "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href='administrasi.php';
        </script>";
    }else{
        echo "
            <script>
                alert ('Gagal Menambahkan Data!');
                document.location.href = 'administrasi.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Tambah Data Administrasi</title>
    <style>
        .nav-link{
            color: white;
        }
    </style>
</head>
<body>
<div>

    <h1>Tambah Data Administrasi</h1>    
    <form class="row g-3" action="" method="post">
        <div class="col-md-12">
            <label for="nama_adm" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_adm" name="nama_adm">
        </div>
        <div class="col-md-12">
            <label for="nip_adm" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip_adm" name="nip_adm">
        </div>
        <div class="col-md-12">
            <label for="bagian_adm" class="form-label">Bagian</label>
            <input type="text" class="form-control" id="bagian_adm" name="bagian_adm">
        </div>
        <div class="d-grid col-md-12">
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </div>
    </form>
</div>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>