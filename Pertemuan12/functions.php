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
        //ambil data dari tiap elemen dalam form
        $nip = htmlspecialchars ($data['nip']);
        $nama =htmlspecialchars($data['nama']);
        $email = htmlspecialchars($data['email']);
        $jurusan = htmlspecialchars($data['jurusan']);
        $gambar =htmlspecialchars ($data['gambar']);

        $query = "INSERT INTO mahasiswa (nip, nama, email, jurusan, gambar)
        VALUES
        ('$nip','$nama','$email','$jurusan','$gambar')";
            
            mysqli_query($conn, $query);
        
return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data){
    global $conn;
            //ambil data dari tiap elemen dalam form
            $id = $data["id"];
            $nip = htmlspecialchars ($data['nip']);
            $nama =htmlspecialchars($data['nama']);
            $email = htmlspecialchars($data['email']);
            $jurusan = htmlspecialchars($data['jurusan']);
            $gambar =htmlspecialchars ($data['gambar']);
    
            $query = "UPDATE mahasiswa SET
            nip = '$nip',
            nama = '$nama',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
            WHERE id=  '$data[id]'
            ";
                mysqli_query($conn, $query);
            
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM mahasiswa
    WHERE
    nama LIKE '%$keyword%' OR 
    nip LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    Jurusan LIKE '%$keyword%'
    ";

return query($query);
}

?>