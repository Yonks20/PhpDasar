<?php

//koneksi ke database
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

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

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    

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
<?php foreach ($mahasiswa as $row) : ?>
      <tr>
        <td><?= $i?></td>
        <td>
          <a href="">Edit</a>
          <a href="hapus.php?id=<?= $row["id"]; ?>;" onclick="return confirm('yakin ingin menghapus?')" >Delete</a>
        </td>
        <td><img src="../img/<?= $row["gambar"]; ?>" width="50" height="50" /></td>
        <td><?= $row["name"]; ?></td>
        <td><?= $row["nip"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td> 
      </tr>
        <?php $i++?>
      <?php endforeach; ?>

    </table>
  </body>
</html>

