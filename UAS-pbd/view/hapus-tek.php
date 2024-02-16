<?php

require_once '../koneksi/koneksi.php';
require '../function/functions.php';
    
$id = $_GET['id'];

if( hapusTek($id) > 0 ){
    echo "<script>
        alert('Data Berhasil Dihapus!');
        document.location.href='teknisi.php';
    </script>";
}else{
    echo "<script>
        alert('Data Gagal Dihapus!');
        document.location.href='teknisi.php';
    </script>";
}

?>