<?php 

// $mahasiswa = [
// ["Yonkie Yudha", "201931172", "Teknik Informatika", "yonkieyudha@gmail.com"],
// ["Yonkie Yudha", "201931172", "Teknik Mesin", "yonkie@gmail.com"],
// ["Yonkie Yudha", "201931172", "Teknik Sipil", "yudha@gmail.com"]];

//Array Assosiative
//definisinya sama seperti array numerik
//key-nya adalah string yang kita buat sendiri

$mahasiswa  = [
    [
    "Nama"=>"Yonkie Yudha", 
    "Umur"=>"21", 
    "Nim"=>"201931172",
    "Email"=>"yonkieyudha@gmail.com",
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


    echo $mahasiswa [1]["Tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>
        Daftar Mahasiswa
    </h1>

    <?php foreach ($mahasiswa as $mhs):?>

    <ul>
        <li>
            <img src="../img/<?php echo $mhs["Gambar"] ?>">
        </li>
        <li>Nama : <?php echo $mhs["Nama"] ?></li>
        <li>Umur : <?php echo $mhs["Umur"] ?></li>
        <li>Nim : <?php echo $mhs["Nim"] ?></li>
        <li>Email : <?php echo $mhs["Email"] ?></li>

    </ul>

    <?php endforeach; ?>

</body>

</html>