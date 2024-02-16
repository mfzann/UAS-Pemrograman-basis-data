
<?php

require_once '../koneksi/koneksi.php';
require '../function/functions.php';

$administrasi = query("SELECT * FROM administrasi");
$teknisi = query("SELECT * FROM teknisi");
$pengajar = query("SELECT * FROM pengajar");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Home</title>
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

    <h1 class='text-center'>Tampilan Semua Tabel</h1>

    <h1>Data Staf Administrasi</h1>    

    <div id="tabel">
        <table class="table">
            <tr class="table-primary">
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Bagian</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach(array_slice($administrasi, 0, 5) as $row): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['nama_adm']; ?></td>
                <td><?= $row['nip_adm']; ?></td>
                <td><?= $row['bagian_adm']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

    <h1>Data Staf Pengajar</h1>    

<div id="tabel">
    <table class="table">
        <tr  class="table-primary">
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach(array_slice($pengajar, 0, 5) as $row): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row['nama_peng']; ?></td>
            <td><?= $row['nip_peng']; ?></td>
            <td><?= $row['jurusan_peng']; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</div>



    <h1>Data Staf Teknisi</h1>    

    <div id="tabel">
        <table class="table">
            <tr  class="table-primary">
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Bagian</th>

            </tr>
            <?php $i = 1; ?>
            <?php foreach(array_slice($teknisi, 0, 5) as $row): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['nama_tek']; ?></td>
                <td><?= $row['nip_tek']; ?></td>
                <td><?= $row['bagian_tek']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    </div>
</div>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>