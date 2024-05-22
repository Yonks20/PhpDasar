<?php

// Logicnya jika tidak ada session login, maka tendang atau tidak login, jadi terbatas jika mau ke index.php maka harus melewati login.php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}


//koneksi ke database
require 'functions.php';

// Konfigurasi pagination, dalam satu halaman berapaa data
//pagination, tentukan berapa data
$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData/ $jumlahDataPerhalaman);
//ceil pembulatan keatas
//flooe pembulatan kebawah
//round pembulatan terdekat

// if(isset($_GET['halaman'])){
//   $halamanAktif = $_GET["halaman"];
//   // var_dump($jumlahHalaman);
// } else{
//   $halamanAktif = 1;
// }

// Pakai operator ternary
$halamanAktif = (isset($_GET["halaman"]))? $_GET["halaman"] : 1;
// Halaman aktif = 2, awalData = index ke 2
// Halaman aktif = 3, awalData = index ke 4
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;



// $mahasiswa = query("SELECT * FROM mahasiswa");
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman");
//tambahkan 2 nilai
// data dimulai dari data keberapa
// data kedua inde
//tombol cari ditekan
if(isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>

  <body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>


    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
<form action="" method="post">

  <input type="text" name="keyword" size = "30" autofocus
  placeholder="Cari data mahasiswa.." autocomplete="off" id="keyword" />
  <button type="submit" name= "cari" id="tombol-cari" >cari</button>

</form>

<!-- Navigasi -->

<!-- Tambah panah -->


<!-- Less then -->
<?php if($halamanAktif>1) :?>
<a href="?halaman=<?= $halamanAktif-1 ?>">&lt;</a>
<?php endif;?>


<?php for($i = 1; $i <=$jumlahHalaman; $i++) :?>
  <!-- CEK HALAMAN AKTIF -->
  <?php if($i == $halamanAktif):?>
  <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color:blue" ><?= $i; ?></a>
  <?php else:?>
    <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>

  <?php endif;?>
  <?php endfor;?>
  
<!-- Greater then -->
<?php if($halamanAktif < $jumlahHalaman) :?>
<a href="?halaman=<?= $halamanAktif+1 ?>">&gt;</a>
<?php endif;?>

<br>
<div id="container" >
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NIP</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>

    <?php $i = 1?>
<?php foreach ($mahasiswa as $row) : ?>
      <tr>
        <td><?= $i?></td>
        <td>
          <a href="ubah.php?id=<?= $row["id"] ?>">Edit</a>
          <a href="hapus.php?id=<?= $row["id"]; ?>;" onclick="return confirm('yakin ingin menghapus?')" >Delete</a>
        </td>
        <td><img src="../img/<?= $row["gambar"]; ?>" width="50" height="50" /></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nip"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td> 
      </tr>
        <?php $i++?>
      <?php endforeach; ?>

    </table>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>

