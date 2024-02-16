$(document).ready(function () {
  $("#btn-cari").hide();

  $("#keyword").keyup(function () {
    $("#tabel").load("../ajax/tek-ajax.php?keyword=" + $("#keyword").val());
  });
});
