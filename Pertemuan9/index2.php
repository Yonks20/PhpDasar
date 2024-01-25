<?php

//koneksi ke database
$conn =  mysqli_connect("localhost", "root","","phpdasar");

//ambil data dari tabel mahasiswa
//parmeter pertama koneksinya
//parameter kedua querynya mau apa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa" );
if(!$result){
    echo mysqli_error($conn);
}

//ambil data mahasiswa dari object result
//mysqli_fetch_row() // mengembalikan array numerik (angka)
//mysqli_fetch_assoc() // mengembalikan array associative
//mysqli_fetch_array() // mengembalikan array numerik&associative
//mysqli_fetch_object()

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[3]);

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs["name"])

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs -> name);

// Ambil isi dari database
// while(
// $mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);

// };







?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>

  <body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>

    <?php $i = 1?>
      <?php while($row = mysqli_fetch_assoc($result)): ?>

      <tr>
        <td><?= $i?></td>
        <td>
          <a href="">Edit</a>
          <a href="">Delete</a>
        </td>
        <td><img src="../img/<?= $row["gambar"]; ?>" width="50" height="50" /></td>
        <td><?= $row["name"]; ?></td>
        <td><?= $row["nip"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td> 
      </tr>
        <?php $i++?>
      <?php endwhile; ?>

    </table>
  </body>
</html>

