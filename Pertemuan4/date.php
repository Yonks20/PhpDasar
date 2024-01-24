<?php 


// Date
// Date untuk menampilkan tanggal dengan format tertentu
// echo date("l, d M Y");

// // Time
// //UNIX Timetamps / Epoch time
// // Detik yang sudah 


// // echo time(); 

// echo date("l", time()+60*60*24*100);
// echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik yang beralalu
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun

// echo date ("l",mktime(0,0,0,2,8,2002))


//strtotime
echo date("l", strtotime("08 February 2002"));

?>