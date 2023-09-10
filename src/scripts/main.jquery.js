$(document).ready(function () {

    // Sticky Navbar
    $(window).scroll(function () {
        console.log("$('.sticky'): ", $('.sticky'))
        if ($(this).scrollTop() > 300) {
            $(".sticky").css("top", "0px");
        } else {
            $(".sticky").css("top", "-100px");
        }
    });
})