// Ambil elemen yang dibutuhkan
var keyword = document.getElementById("keyword");
// Artinya Js carikan saya elemen yang punya ID Keyword yang ada di document

var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// Trigger, sebuah aksi yang kita lakukan untuk menarik ajaxnya
// event
// Menjalankan ajax pada event tertentu dilakukan

// Tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  //   Lakukan ajax

  // Buat object Ajax
  var xhr = new XMLHttpRequest();

  // Cek kesiapan ajax
  xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status ==200)[]

  }
});
