<?php

require_once '../koneksi/koneksi.php';
require '../function/functions.php';

$keyword = $_GET['keyword'];
$query = "SELECT * FROM teknisi 
                WHERE
            nama_tek LIKE '%$keyword%' OR
            nip_tek LIKE '%$keyword%' OR
            bagian_tek LIKE '%$keyword%' 
        ";
$teknisi = query($query);

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
    <?php foreach($teknisi as $row): ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row['nama_tek']; ?></td>
        <td><?= $row['nip_tek']; ?></td>
        <td><?= $row['bagian_tek']; ?></td>
        <td>
            <a href="edit-tek.php?id=<?= $row["id_tek"]; ?>" class="btn btn-success">Edit</a>
            <a href="hapus-tek.php?id=<?= $row["id_tek"]; ?>" onclick="return confirm('Yakin Mau Hapus?');" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>