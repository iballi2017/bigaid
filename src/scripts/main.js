

document.addEventListener("DOMContentLoaded", (event) => {
    const navbarToggler = document.querySelector(".navbar-toggler");
    const primaryNavigation = document.querySelector(".nav-list.nav-collapse");

    navbarToggler?.addEventListener("click", () => {
        primaryNavigation?.toggleAttribute("data-visible");
        primaryNavigation?.hasAttribute("data-visible") ? navbarToggler.setAttribute("aria-expanded", true)
            : navbarToggler.setAttribute("aria-expanded", false)
    });


    var myVideo = document.getElementById("video1");
    var playPauseBtn = document.querySelector(".play-button");

    function playPause() {
        if (myVideo.paused)
            playPauseBtn.addEventListener("click", () => {
                myVideo.play();
                console.log("myVideo: ", myVideo.currentTime)
            })
        else
            playPauseBtn.addEventListener("click", () => {
                myVideo.pause();
                console.log("myVideo: ", myVideo)
            })
    }

    playPause();

})