<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;

    //ambil data dari elemen dalam fotm
$nip = $data["nip"];
$name = $data["name"];
$email = $data["email"];
$jurusan = $data["jurusan"];
$gambar = $data["gambar"];

$query = "INSERT INTO mahasiswa VALUES 
('0','$nip', '$name', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query); //eksekusi query

return mysqli_affected_rows($conn);


}

?>