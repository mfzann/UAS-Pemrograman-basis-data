<?php

// fungsi-fungsi staf pengajar
// fungsi query
function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// fungsi tambah
function tambahPeng($data){
    global $conn;
    $nama = $data['nama_peng'];
    $nip = $data['nip_peng'];
    $jurusan = $data['jurusan_peng'];

    $query = "INSERT INTO pengajar
                    VALUES
            ('','$nama','$nip','$jurusan')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

// fungsi ubah
function ubahPeng($data){
    global $conn;
    $id = $data['id'];
    $nama = $data['nama_peng'];
    $nip = $data['nip_peng'];
    $jurusan = $data['jurusan_peng'];
    $query = "UPDATE pengajar SET nama_peng='$nama',nip_peng='$nip',jurusan_peng='$jurusan' WHERE id_peng=$id";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

// fungsi hapus
function hapusPeng($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM pengajar WHERE id_peng=$id");

    return mysqli_affected_rows($conn);
}

// fungsi cari
function cariPeng($keyword){
    $query = "SELECT * FROM pengajar 
                WHERE
            nama_peng LIKE '%$keyword%' OR
            nip_peng LIKE '%$keyword%' OR
            jurusan_peng LIKE '%$keyword'
            ";
    return query($query);
}

// fungsi cari
function getPeng($query){
    $query = "SELECT * FROM pengajar";
    return query($query);
}


// fungsi-fungsi administrasi
// fungsi tambah
function tambahAdm($data){
    global $conn;
    $nama = $data['nama_adm'];
    $nip = $data['nip_adm'];
    $bagian = $data['bagian_adm'];

    $query = "INSERT INTO administrasi
                    VALUES
            ('','$nama','$nip','$bagian')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}



// fungsi ubah
function ubahAdm($data){
    global $conn;
    $id = $data['id'];
    $nama = $data['nama_adm'];
    $nip = $data['nip_adm'];
    $bagian = $data['bagian_adm'];
    $query = "UPDATE administrasi SET nama_adm='$nama',nip_adm='$nip',bagian_adm='$bagian' WHERE id_adm=$id";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

// fungsi hapus
function hapusAdm($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM administrasi WHERE id_adm=$id");

    return mysqli_affected_rows($conn);
}

// fungsi cari
function cariAdm($keyword){
    $query = "SELECT * FROM administrasi
                WHERE
            nama_adm LIKE '%$keyword%' OR
            nip_adm LIKE '%$keyword%' OR
            bagian_adm LIKE '%$keyword'
            ";
    return query($query);
}

// fungsi-fungsi teknisi
// fungsi teknisi
function tambahTek($data){
    global $conn;
    $nama = $data['nama_tek'];
    $nip = $data['nip_tek'];
    $bagian = $data['bagian_tek'];

    $query = "INSERT INTO teknisi
                    VALUES
            ('','$nama','$nip','$bagian')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

// fungsi ubah
function ubahTek($data){
    global $conn;
    $id = $data['id'];
    $nama = $data['nama_tek'];
    $nip = $data['nip_tek'];
    $bagian = $data['bagian_tek'];
    $query = "UPDATE teknisi SET nama_tek='$nama',nip_tek='$nip',bagian_tek='$bagian' WHERE id_tek=$id";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

// fungsi hapus
function hapusTek($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM teknisi WHERE id_tek=$id");

    return mysqli_affected_rows($conn);
}

// fungsi cari
function cariTek($keyword){
    $query = "SELECT * FROM teknisi
                WHERE
            nama_tek LIKE '%$keyword%' OR
            nip_tek LIKE '%$keyword%' OR
            bagian_tek LIKE '%$keyword'
            ";
    return query($query);
}

?>