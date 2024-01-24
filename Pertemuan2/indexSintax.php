<?php
// Ini Komentar
/*
Komentar banyak baris
*/

//Sintaks PHP

// Standard Output
// echo, print
// print_r (Mencetak isi array)
// var dump (melihat isi dari variabel) (debugging)

echo "Ini komentar";
print "Yonkie Yudha";
echo true;
echo 2112;
var_dump("Yonkie Yudha");

// Penulisan sintaks PHP
// 1. PHP di dlam HTML
// 2. HTML di dalam PHP

// Variabel dan tipe data
// Variable
// 
$nama = "Yonkie";

echo "Halo, nama saya $nama";


//Operator
// Aritmatika
// + - * / %

$x = 20;
$y = 90;

echo $x*$y;


//Penggabungan String / Concation

$nama_depan = "Yonkie";
$nama_belakang = "Yudha";
echo $nama_depan . " " . $nama_belakang ;


// Assignment
// =, +=, -=, /=, &-, .=


$x = 100;
$x += 100;

echo $x;


$nama = "Yonkie";
$nama .= " ";
$nama .= "Yudha";

echo $nama;

//Operator Perbandingan
// <,>,<=,>=,==,!=

var_dump(1<5);

// Operator indentitas
// ===, !==

var_dump (1 ==="1");


//logika
// &&, ||, !

$x = 30;
var_dump($x < 20 || $x % 2 == 0 )
//apakah 30 lebih kecil dari 20? False
//apakah 30 bilangan genap? True

// kalo && jadi false
// kalo || jadi true

?>




<!-- 
<!DOCTYPE html>
<head>
    <title> Belajar PHP</title>
</head>

<body>
    <h1>Halo, Selamat Datang <?php echo $nama?></h1>
</body> -->

