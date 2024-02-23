<?php
//koneksi ke DBMS
require 'functions.php';

//cek apakah tombol submit udah ditekan atau belum
if( isset($_POST['submit'])) {

//hubungkan ke function tambah

    //query insert data
    // $query = "INSERT INTO mahasiswa
    // VALUES
    // ('','$nip','$nama','$email','$jurusan','$gambar')";

    //cek apakah data berhasil ditambahkan atau tidak?

if(tambah($_POST)>0){
    echo "
    <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php'
    </script>";
}else{
    echo "
    <script>
    alert('data gagal ditambahkan!');
    document.location.href = 'index.php'
    </script>";
}

    // if(mysqli_affected_rows($conn)>0){
    //     echo"berhasil";
    // }else{
    //     echo"Gagal";
        
    // }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta nama="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nip">NIP :</label>
                <input type="text" name="nip" id="nip" required >
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required >
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Sign Up</button>
            </li>
        </ul>
    </form>
</body>
</html>