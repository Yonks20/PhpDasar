$(document).ready(function () {
  $("#tombol-cari").hide();
  // Buat event ketika keyword ditulis
  $("#keyword").on("keyup", function () {
    // Tampilkan loader sebelum request AJAX
    $(".loader").show();

    // Lakukan request AJAX
    $.get("ajax/mahasiswa.php?keyword=" + $("#keyword").val(), function (data) {
      // Masukkan data ke dalam container
      $("#container").html(data);
      // Sembunyikan loader setelah request selesai
      $(".loader").hide();
    });
  });
});
