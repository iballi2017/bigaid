$(document).ready(function () {
  // Sticky Navbar
  var isALtNav = false;
  var imgSrc = "./assets/images/brand-logo-white.png";
  var imgAltSrc = "./assets/images/brand-logo-primary.png";
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".sticky").css("top", "0px");
      // $(".sticky").addClass("hello");
      isALtNav = true;
    } else {
      $(".sticky").css("top", "-100px");
      // $(".sticky").removeClass("hello");
      isALtNav = false;
    }

    if (isALtNav) {
      $(".navbar-brand img").attr("src", imgAltSrc);
      //   $(".sticky").css("background-color", "white");
      $(".sticky .toolbar-bg").addClass("alt");
    } else {
      $(".navbar-brand img").attr("src", imgSrc);
      $(".sticky .toolbar-bg").removeClass("alt");
    }
  });
});
