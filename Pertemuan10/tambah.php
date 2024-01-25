<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if(isset($_POST["submit"])){
//ambil data dari elemen dalam fotm
$nip = $_POST["nip"];
$name = $_POST["name"];
$email = $_POST["email"];
$jurusan = $_POST["jurusan"];
$gambar = $_POST["gambar"];

//query insert data

$query = "INSERT INTO mahasiswa VALUES (
    '','$nip', '$name', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query); //eksekusi query

//cek apakah data berhasil di tambahkan atau tidak
if(mysqli_affected_rows($conn)>0){
    echo "berhasil";
}else{
    echo"Gagal";
}

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body></body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah data mahasiswa</title>
  </head>
  <body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
      <ul>
        <li>
          <label for="nip">Nip :</label>
          <input type="text" name="nip" id="nip" />
        </li>

        <li>
          <label for="name">Nama :</label>
          <input type="text" name="name" id="name" />
        </li>

        <li>
          <label for="email">Email :</label>
          <input type="text" name="email" id="email" />
        </li>

        <li>
          <label for="jurusan">Jurusan :</label>
          <input type="text" name="jurusan" id="jurusan" />
        </li>

        <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar" />
        </li>

        <li>
          <button type="submit" name="submit">Tambah Data</button>
        </li>
      </ul>
    </form>
  </body>
</html>
