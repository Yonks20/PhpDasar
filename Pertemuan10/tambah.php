<?php
require 'functions.php'
if(isset($_POST["submit"])){
//query insert data
//cek apakah data berhasil di tambahkan atau tidak



if(mysqli_affected_rows($conn)>0){
    echo "<script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'index.php';
    </script
    ";
}else{
    echo "<script>
    alert('data gagal ditambahkan!');
    document.location.href = 'index.php';
    </script
    ";}
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
          <input type="text" name="nip" id="nip" required />
        </li>

        <li>
          <label for="name">Nama :</label>
          <input type="text" name="name" id="name" required />
        </li>

        <li>
          <label for="email">Email :</label>
          <input type="text" name="email" id="email" required/>
        </li>

        <li>
          <label for="jurusan">Jurusan :</label>
          <input type="text" name="jurusan" id="jurusan" required />
        </li>

        <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar" required/>
        </li>

        <li>
          <button type="submit" name="submit">Tambah Data</button>
        </li>
      </ul>
    </form>
  </body>
</html>
