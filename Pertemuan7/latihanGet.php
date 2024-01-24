<?php 
//cek apakah tidak ada di $_GET
if(!isset($_GET["Nama"]) || 
!isset($_GET["Nim"])||
!isset($_GET["Email"])||
!isset($_GET["Tugas"])
){
    header("Location: latihanGetPost.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>

        <li><img src="../img/<?=$_GET["Gambar"]; ?>"></li>
        <li><?php echo $_GET["Nama"]; ?></li>
        <li><?php echo $_GET["Nim"]; ?></li>
        <li><?php echo $_GET["Email"]; ?></li>
        <li><?php echo $_GET["Tugas"]; ?></li>
    </ul>

    <a href="latihanGetPost.php">Kembali ke daftar Mahasiswa</a>

</body>

</html>