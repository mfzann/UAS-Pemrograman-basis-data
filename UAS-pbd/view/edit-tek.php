<?php

require_once '../koneksi/koneksi.php';
require '../function/functions.php';

$id = $_GET['id'];

$row = query("SELECT * FROM teknisi WHERE id_tek=$id")[0];

if(isset($_POST['submit'])){
    if( ubahTek($_POST) > 0){
        echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href='teknisi.php';
        </script>";
    }else{
        echo "
            <script>
                alert ('Gagal Mengubah Data!');
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
    <title>Edit Data Teknisi</title>
    <style>
        .nav-link{
            color: white;
        }
    </style>
</head>
<body>
<div>
    <h1>Edit Data Teknisi</h1>    
    <form class="row g-3" action="" method="post">
        <input type="hidden" name="id" value="<?= $row['id_tek']; ?>">
        <div class="col-md-12">
            <label for="nama_tek" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_tek" name="nama_tek" value="<?= $row['nama_tek']; ?>">
        </div>
        <div class="col-md-12">
            <label for="nip_tek" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip_tek" name="nip_tek" value="<?= $row['nip_tek']; ?>">
        </div>
        <div class="col-md-12">
            <label for="bagian_tek" class="form-label">Bagian</label>
            <input type="text" class="form-control" id="bagian_tek" name="bagian_tek" value="<?= $row['bagian_tek']; ?>">
        </div>
        <div class="d-grid col-md-12">
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </div>
    </form>
</div>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>