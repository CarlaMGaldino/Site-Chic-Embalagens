$(document).ready(function () {
  $("#menu-mobile__toggle").click(function (e) {
    e.preventDefault();
    $(".menu-scroll__nav").toggleClass("menu-ativo");
    $(".menu-mobile__scroll").toggleClass("menu-ativo");
  });
});
