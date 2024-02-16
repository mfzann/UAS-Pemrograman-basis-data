// const keyword = document.getElementById("keyword");
// const btnCari = document.getElementById("btn-cari");
// const tabel = document.getElementById("tabel");

// keyword.addEventListener("keyup", function () {
//   let xhr = new XMLHttpRequest();

//   xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       tabel.innerHTML = xhr.responseText;
//     }
//   };
//   xhr.open("GET", "../ajax/peng-ajax.php?keyword=" + keyword.value, true);
//   xhr.send();
// });

$(document).ready(function () {
  $("#btn-cari").hide();

  $("#keyword").keyup(function () {
    $("#tabel").load("../ajax/peng-ajax.php?keyword=" + $("#keyword").val());
  });
});
