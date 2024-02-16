<?php

require_once '../koneksi/koneksi.php';
require '../function/functions.php';

$keyword = $_GET['keyword'];
$query = "SELECT * FROM pengajar 
                WHERE
            nama_peng LIKE '%$keyword%' OR
            nip_peng LIKE '%$keyword%' OR
            jurusan_peng LIKE '%$keyword%' 
        ";
$pengajar = query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>