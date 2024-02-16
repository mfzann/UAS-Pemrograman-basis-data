<?php

require_once '../koneksi/koneksi.php';
require '../function/functions.php';
    
$id = $_GET['id'];

if( hapusAdm($id) > 0 ){
    echo "<script>
        alert('Data Berhasil Dihapus!');
        document.location.href='administrasi.php';
    </script>";
}else{
    echo "<script>
        alert('Data Gagal Dihapus!');
        document.location.href='administrasi.php';
    </script>";
}


?>