<?php 

$mahasiswa = [
["Yonkie Yudha", "201931172", "Teknik Informatika", "yonkieyudha@gmail.com"],
["Yonkie Yudha", "201931172", "Teknik Mesin", "yonkie@gmail.com"],
["Yonkie Yudha", "201931172", "Teknik Sipil", "yudha@gmail.com"]];

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

    <!-- <ul>

        <?php foreach ($mahasiswa as $mhs): ?>
        <li>
            <?php echo $mhs; ?>
        </li>
        <?php endforeach ;?>

    </ul> -->

    <?php foreach ($mahasiswa as $mhs):?>

    <ul>
        <li><?php echo $mhs[0] ?></li>
        <li><?php echo $mhs[1] ?></li>
        <li><?php echo $mhs[2] ?></li>
        <li><?php echo $mhs[3] ?></li>

    </ul>

    <?php endforeach; ?>

</body>

</html>