<?php

require_once '../koneksi/koneksi.php';
require '../function/functions.php';

$keyword = $_GET['keyword'];
$query = "SELECT * FROM administrasi 
                WHERE
            nama_adm LIKE '%$keyword%' OR
            nip_adm LIKE '%$keyword%' OR
            bagian_adm LIKE '%$keyword%' 
        ";
$administrasi = query($query);

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
        <th>Bagian</th>
        <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach($administrasi as $row): ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row['nama_adm']; ?></td>
        <td><?= $row['nip_adm']; ?></td>
        <td><?= $row['bagian_adm']; ?></td>
        <td>
            <a href="edit-adm.php?id=<?= $row["id_adm"]; ?>" class="btn btn-success">Edit</a>
            <a href="hapus-adm.php?id=<?= $row["id_adm"]; ?>" onclick="return confirm('Yakin Mau Hapus?');" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>