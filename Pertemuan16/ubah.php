<?php
session_start();

if( !isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

//koneksi ke DBMS
require 'functions.php';

//ambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//cek apakah tombol submit udah ditekan atau belum
if( isset($_POST['submit'])) {

//hubungkan ke function tambah


    //cek apakah data berhasil diubah atau tidak?

if(ubah($_POST)>0){
    echo "
    <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php'
    </script>";
}else{
    echo "
    <script>
    alert('data gagal diubah!');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data mahasiswa</title>
</head>
<body>
    <h1>Edit data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name= "id" value= "<?= $mhs["id"];?>">
        <input type="hidden" name= "gambarLama" value= "<?= $mhs["gambar"];?>">
        <ul>
            <li>
                <label for="nip">NIP :</label>
                <input type="text" name="nip" id="nip"
                required
                value= "<?= $mhs["nip"];?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" 
                required
                value= "<?= $mhs["nama"];?>" >
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email"
                required
                value= "<?= $mhs["email"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan"
                required
                value= "<?= $mhs["jurusan"];?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label><br>
                <img src="../img/<?=$mhs['gambar']?>" width="50" height="50"><br>
                <input type="file" name="gambar" id="gambar"
                >
            </li>
            <li>
                <button type="submit" name="submit">Edit Data</button>
            </li>
        </ul>
    </form>
</body>
</html>