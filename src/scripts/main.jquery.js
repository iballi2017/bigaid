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
      $(".sticky.toolbar-bg").addClass("alt");
    } else {
      // $(".navbar-brand img").attr("src", imgSrc);
      $("#primary-img").removeClass("hidden");
      $("#secondary-img").addClass("hidden");
      $(".sticky.toolbar-bg").removeClass("alt");
      $(".navbar-toggler").removeClass("scrolled-offset");
    }
  });



  // TOASTR
  toastr.options = {
    'closeButton': true,
    'debug': false,
    'newestOnTop': false,
    'progressBar': false,
    'positionClass': 'toast-top-right',
    'preventDuplicates': false,
    'showDuration': '1000',
    'hideDuration': '1000',
    'timeOut': '5000',
    'extendedTimeOut': '1000',
    'showEasing': 'swing',
    'hideEasing': 'linear',
    'showMethod': 'fadeIn',
    'hideMethod': 'fadeOut',
  }



  /**PROJECT SLIDER */
  var projectSlider = $(".project-slider")
<<<<<<< HEAD
  if (projectSlider) {
    projectSlider.owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      autoplay: true,
      // autoplayTimeout: 7000,
      lazyLoad: true,
      animateOut: 'fadeOut',
      // smartSpeed: 500,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
=======
  projectSlider.owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    autoplay: true,
    // autoplayTimeout: 7000,
    lazyLoad: true,
    animateOut: 'fadeOut',
    // smartSpeed: 500,
    responsive: {
      0: {
        items: 1,
>>>>>>> f1e66e56613ed85466ca555517e8dc94a48d8f69
      },
      onInitialize: callback
    });
  }

  function callback(event) {
    // console.log("start")
    /**Show custom nav controls when slider initialize */
    $(".slider-controls").removeClass("hidden")
  }

  $(".control.previous").click(function () {
    projectSlider.trigger('prev.owl.carousel', [300]);
  })
  $(".control.next").click(function () {
    projectSlider.trigger('next.owl.carousel', [300]);
  })


});




// Toast Type
$('#success').click(function (event) {
  toastr.success('You clicked Success toast');
});
$('#info').click(function (event) {
  toastr.info('You clicked Info toast')
});
$('#error').click(function (event) {
  toastr.error('You clicked Error Toast')
});
$('#warning').click(function (event) {
  toastr.options.progressBar = true,
    toastr.warning('You clicked Warning Toast')
});