<?php

$connection = mysqli_connect("localhost", "root", "", "ukmbasket");

function query($query) 
{
    global $connection;
    $result = mysqli_query($connection, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id) {
    global $connection;
    mysqli_query($connection, "DELETE FROM user WHERE id = $id");
    
    return mysqli_affected_rows($connection);
}

function ubah($data) {
    global $connection;
    
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $angkatan = htmlspecialchars($data["angkatan"]);
    $alasan = htmlspecialchars($data["alasan"]);
    $konfirmasi = htmlspecialchars($data["konfirmasi"]);
    
    $insert = "UPDATE user SET 
                nama = '$nama',
                email = '$email',
                angkatan = '$angkatan',
                alasan = '$alasan', 
                konfirmasi = '$konfirmasi' 
                WHERE id = $id
            ";
    
    mysqli_query($connection, $insert);
    
    return mysqli_affected_rows($connection);
    
}

?>