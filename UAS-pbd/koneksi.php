<?php

$conn = mysqli_connect("localhost","root","","fakultas");

if(!$conn){
    die("Koneksi Gagal!". mysqli_connect_error);
}

// fungsi ambil
// function query($query){
//     global $conn;
//     $result = mysqli_query($conn,$query);
//     $rows = [];
//     while($row = mysqli_fetch_assoc($result)){
//         $rows[] = $row;
//     }
//     return $rows;
// }

// fungsi tambah
// function tambahPeng($data){
//     global $conn;
//     $nama = $data['nama_peng'];
//     $nip = $data['nip_peng'];
//     $jurusan = $data['jurusan_peng'];

//     $query = "INSERT INTO pengajar
//                     VALUES
//             ('','$nama','$nip','$jurusan')";
//     mysqli_query($conn,$query);

//     return mysqli_affected_rows($conn);
// }

// fungsi cari
// function cariPeng($keyword){
//     $query = "SELECT * FROM pengajar 
//                 WHERE
//             nama_peng LIKE '%$keyword%' OR
//             nip_peng LIKE '%$keyword%' OR
//             jurusan_peng LIKE '%$keyword'
//             ";
//     return query($query);
// }

// fungsi ubah 
// function ubahPeng($data){
//     global $conn;
//     $id = $data['id'];
//     $nama = $data['nama_peng'];
//     $nip = $data['nip_peng'];
//     $jurusan = $data['jurusan_peng'];
//     $query = "UPDATE pengajar SET nama_peng='$nama',nip_peng='$nip',jurusan_peng='$jurusan' WHERE id_peng=$id";
//     mysqli_query($conn,$query);

//     return mysqli_affected_rows($conn);
// }

// fungsi hapus
// function hapusPeng($id){
//     global $conn;
//     mysqli_query($conn,"DELETE FROM pengajar WHERE id_peng=$id");

//     return mysqli_affected_rows($conn);
// }

?>