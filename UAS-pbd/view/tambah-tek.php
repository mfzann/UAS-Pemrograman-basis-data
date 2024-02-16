<?php

require_once '../koneksi/koneksi.php';
require '../function/functions.php';

if(isset($_POST['submit'])){
    if( tambahTek($_POST) > 0){
        echo "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href='teknisi.php';
        </script>";
    }else{
        echo "
            <script>
                alert ('Gagal Menambahkan Data!');
                document.location.href = 'teknisi.php';
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
    <title>Tambah Data Teknisi</title>
    <style>
        .nav-link{
            color: white;
        }
    </style>
</head>
<body>
<div>
    <h1>Tambah Data Teknisi</h1>    
    <form class="row g-3" action="" method="post">
        <div class="col-md-12">
            <label for="nama_tek" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_tek" name="nama_tek">
        </div>
        <div class="col-md-12">
            <label for="nip_tek" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip_tek" name="nip_tek">
        </div>
        <div class="col-md-12">
            <label for="bagian_tek" class="form-label">Bagian</label>
            <input type="text" class="form-control" id="bagian_tek" name="bagian_tek">
        </div>
        <div class="d-grid col-md-12">
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </div>
    </form>
</div>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>