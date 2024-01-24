<?php 

//array
//variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memi9liki tipe data yang berbeda
//pasangan antara key dan value
//key-nya adalah index yang dimulai dari 0

//membuat arrray cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat");

//membuat arrray cara baru
$bulan = ["Januari", "Februari", "Maretan", "April"];
$arr1= [123, "januari", false];

// //menampilkan array 
// var_dump($bulan);
// echo "<br>";
// print_r($bulan);

// //menampilkan 1 elemn pada array
// echo $arr1[1];
// echo "<br>";

// echo $bulan[1];

var_dump($hari);
$hari[] = "sabtu";
echo "<br>";

var_dump($hari);



?>