<?php

require_once '../koneksi/koneksi.php';
require '../function/functions.php';

$pengajar = query("SELECT * FROM pengajar");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Pengajar</title>
    <script src="../js/jquery-3.7.0.min.js"></script>
    <script src="../js/script1.js"></script>
    <style>
        .nav-link{
            color: white;
        }
    </style>
</head>
<body>
<div>
    
<nav class="navbar navbar-expand-lg" style="background-color: #3f51b5">
        <div class="container-fluid">
            <a class="navbar-brand text-white h1" href="../index.php">FakTek</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="pengajar.php">Staff Pengajar</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="administrasi.php">Staff Administrasi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="teknisi.php">Staff Teknisi</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    
    <h1>Data Staf Pengajar</h1>    
    <form class="d-flex flex-row mb-3" method="post">
        <div class="col-auto flex-grow-1">
            <a class="btn btn-outline-primary" href="tambah-peng.php">(+)Tambah Data</a>
        </div>
        <div class="col-4 me-1">
            <input type="text" class="form-control" name="keyword" placeholder="" id="keyword" autocomplete="off" >
        </div>
        <div class="col-auto">
            <button type="submit" name="btn-cari" class="btn btn-primary mb-3" id="btn-cari">Cari</button>
        </div>
    </form>
    <div id="tabel">
        <table class="table">
            <tr  class="table-primary">
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($pengajar as $row): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['nama_peng']; ?></td>
                <td><?= $row['nip_peng']; ?></td>
                <td><?= $row['jurusan_peng']; ?></td>
                <td>
                    <a href="edit-peng.php?id=<?= $row["id_peng"]; ?>" class="btn btn-success">Edit</a>
                    <a href="hapus-peng.php?id=<?= $row["id_peng"]; ?>" onclick="return confirm('Yakin Mau Hapus?');" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

</div>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>    
</body>
</html>