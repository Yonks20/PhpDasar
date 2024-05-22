// Ambil elemen yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// Tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // Buat object Ajax
  var xhr = new XMLHttpRequest();

  // Cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      //artinya udah ok sumbernya sudah ready
      // Status sudah ready 200 sumbernya ada
      container.innerHTML = xhr.responseText;
    }
  };

  //eksekusi ajax
  xhr.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, true);
  // Parameter (Rekuest method, Sumbernya apa, Synchronus atau asynchronus)

  xhr.send();
});
