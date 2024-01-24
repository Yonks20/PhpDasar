<?php 

//pengulangan pada array
// for / foreach
$angka = [1,2,3,4,5,6,7,8,12123];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: aqua;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }

    .clear {
        clear: both;
    }
    </style>

</head>

<body>

    <!-- Bisa pakai ini -->

    <?php for ($i=0; $i<count($angka); $i++){ ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>


    <div class=" clear"></div>

    <!-- Bisa pakai ini -->

    <?php foreach($angka as $a) {?>
    <div class="kotak"><?php echo $a ?></div>
    <?php } ?>

    <div class=" clear"></div>

    <!-- Bisa pakai ini -->

    <?php foreach ($angka as $a): ?>
    <div class="kotak"><?php echo  $a;?></div>
    <?php endforeach; ?>

</html>