<?php 
$mahasiswa  = [
    [
    "Nama"=>"Yonkie Yudha", 
    "Umur"=>"21", 
    "Nim"=>"201931172",
    "Email"=>"yonkieyudha@gmail.com",
    "Tugas"=>"[90,90,90]",
    "Gambar"=>"FotoContoh.jpg"
    ],


    [
        "Nama"=>"Yudha Yudha", 
        "Umur"=>"22", 
        "Nim"=>"201931173",
        "Email"=>"yudha@gmail.com",
        "Tugas"=>"[90,80,100]",
        "Gambar"=>"FotoContoh1.jpg"
    ]
];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs):?>
        <li>
            <a href="latihanGet.php?
            Nama=<?= $mhs["Nama"] ;?>
            &Nim=<?= $mhs["Nim"] ;?>
            &Email=<?= $mhs["Email"] ;?>
            &Tugas=<?= $mhs["Tugas"] ;?>
            &Gambar=<?= $mhs["Gambar"] ;?>
                    ">
                <?= $mhs["Nama"];  ?> </a>
        </li>
        <?php endforeach;?>
    </ul>

</body>

</html>