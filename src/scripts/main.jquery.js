$(document).ready(function () {
  // alert("hello")
  // Sticky Navbar
  var isALtNav = false;
  // var imgSrc = "./assets/images/brand-logo-white.png";
  // var imgAltSrc = "./assets/images/brand-logo-primary.png";
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
      $("#primary-img").addClass("hidden");
      $("#secondary-img").removeClass("hidden");
      $(".navbar-toggler").addClass("scrolled-offset");

      // $(".navbar-brand img").attr("src", imgAltSrc);
      //   $(".sticky").css("background-color", "white");
      $(".sticky .toolbar-bg").addClass("alt");
    } else {
      // $(".navbar-brand img").attr("src", imgSrc);
      $("#primary-img").removeClass("hidden");
      $("#secondary-img").addClass("hidden");
      $(".sticky .toolbar-bg").removeClass("alt");
      $(".navbar-toggler").removeClass("scrolled-offset");
    }
  });

  
});
