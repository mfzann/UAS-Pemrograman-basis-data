<?php

require_once '../koneksi/koneksi.php';
require '../function/functions.php';

$id = $_GET['id'];

$row = query("SELECT * FROM pengajar WHERE id_peng=$id")[0];

if(isset($_POST['submit'])){
    if( ubahPeng($_POST) > 0){
        echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href='pengajar.php';
        </script>";
    }else{
        echo "
            <script>
                alert ('Gagal Mengubah Data!');
                document.location.href = 'pengajar.php';
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
    <title>Edit Data Pengajar</title>
    <style>
        .nav-link{
            color: white;
        }
    </style>
</head>
<body>
<div>

    <h1>Edit Data Pengajar</h1>    
    <form class="row g-3" action="" method="post">
        <input type="hidden" name="id" value="<?= $row['id_peng']; ?>">
        <div class="col-md-12">
            <label for="nama_peng" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_peng" name="nama_peng" value="<?= $row['nama_peng']; ?>">
        </div>
        <div class="col-md-12">
            <label for="nip_peng" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip_peng" name="nip_peng" value="<?= $row['nip_peng']; ?>">
        </div>
        <div class="col-md-12">
            <label for="jurusan_peng" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan_peng" name="jurusan_peng" value="<?= $row['jurusan_peng']; ?>">
        </div>
        <div class="d-grid col-md-12">
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </div>
    </form>
            
</div>

    
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>