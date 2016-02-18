$(document).ready(function () {
  $(".navbar-toggle").on("click", function () {
    $(this).toggleClass("active");
  });
});

var p = document.getElementById("burger");

function changerClass(); {
  p.className = ".activeD";
}