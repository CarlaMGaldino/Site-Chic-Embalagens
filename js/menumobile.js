$(document).ready(function () {
  $("#menu-mobile__toggle").click(function (e) {
    e.preventDefault();
    $(".menu-scroll__nav").toggleClass("menu-ativo");
    $(".menu-mobile__scroll").toggleClass("menu-ativo");
  });

  $(window).scroll(function () {
    if ($(document).scrollTop() > 70) {
      $(".menu-scroll").addClass("scroll-ativo");
      $("#logo-chic__img-branco").addClass("logo-ativa");
      $("#logo-chic__img-vermelho").removeClass("logo-ativa");
    } else {
      $(".menu-scroll").removeClass("scroll-ativo");
      $("#logo-chic__img-branco").removeClass("logo-ativa");
      $("#logo-chic__img-vermelho").addClass("logo-ativa");
    }
  });

  $(window).scroll(function () {
    if ($(document).scrollTop() > 300) {
      $("#contato-fixo__opacity").addClass("opacity-ativo");
      $("#scroll-to-top").addClass("opacity-ativo");
    } else {
      $("#contato-fixo__opacity").removeClass("opacity-ativo");
      $("#scroll-to-top").removeClass("opacity-ativo");
    }
  });
});
