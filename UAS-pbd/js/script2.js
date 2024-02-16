$(document).ready(function () {
  $("#btn-cari").hide();

  $("#keyword").keyup(function () {
    $("#tabel").load("../ajax/adm-ajax.php?keyword=" + $("#keyword").val());
  });
});
