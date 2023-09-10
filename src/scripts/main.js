document.addEventListener("DOMContentLoaded", (event) => {
  const navbarToggler = document.querySelector(".navbar-toggler");
  const primaryNavigation = document.querySelector(".nav-list.nav-collapse");

  navbarToggler?.addEventListener("click", () => {
    primaryNavigation?.toggleAttribute("data-visible");
    primaryNavigation?.hasAttribute("data-visible")
      ? navbarToggler.setAttribute("aria-expanded", true)
      : navbarToggler.setAttribute("aria-expanded", false);
  });

  var myVideo = document.getElementById("video1");
  var playPauseBtn = document.querySelector(".play-button");
  var isPlay = false;

  function playPause() {
    if (playPauseBtn) {
      playPauseBtn.lastElementChild?.classList.add("hidden");
      playPauseBtn.firstElementChild?.classList.remove("hidden");
      playPauseBtn.addEventListener("click", async () => {
        // console.log("promise: ", myPromise);
        if (!isPlay) {
          myVideo.play();
          isPlay = true;
          playPauseBtn.lastElementChild?.classList.remove("hidden");
          playPauseBtn.firstElementChild?.classList.add("hidden");
          return;
        }
        if (isPlay) {
          myVideo.pause();
          isPlay = false;
          playPauseBtn.lastElementChild?.classList.add("hidden");
          playPauseBtn.firstElementChild?.classList.remove("hidden");
          return;
        }
      });
    }
    //   else
    //     playPauseBtn.addEventListener("click", () => {
    //       myVideo.pause();
    //       console.log("myVideo: ", myVideo);
    //     });

    // if (myVideo.paused)
    //   playPauseBtn.addEventListener("click", async () => {
    //     myVideo.play();
    //     // setTimeout(() => {
    //     // console.log("myVideo: ", myVideo.currentTime);
    //     // }, 3000);

    //     let myPromise = new Promise(function (myResolve, myReject) {
    //       // "Producing Code" (May take some time)
    //       let x = myVideo.currentTime;
    //       console.log("x: ", x);

    //       setTimeout(() => {
    //         myResolve(x > 0);
    //         myReject("Error");
    //       }, 2000);
    //     });

    //     await myPromise
    //       .then((resp) => {
    //         console.log("resp: ", resp);
    //         if (resp) {
    //           console.log("playPauseBtn: ", playPauseBtn);
    //         }
    //       })
    //       .catch((error) => {
    //         console.log("error: ", error);
    //       });

    //     // console.log("promise: ", myPromise);
    //   });
    // else
    //   playPauseBtn.addEventListener("click", () => {
    //     myVideo.pause();
    //     console.log("myVideo: ", myVideo);
    //   });
  }

  playPause();

  //   (() => {
  //     console.log("playPauseBtn: ", playPauseBtn.firstElementChild);
  //     console.log("playPauseBtn: ", playPauseBtn.lastElementChild);
  //     console.log("hello");

  //     // const video = document.querySelector("video");
  //     myVideo?.addEventListener("ended", isEnded, false);
  //     myVideo?.addEventListener("playing", isPlaying, false);
  //   })();

  //   function isEnded() {}
  //   function isPlaying() {
  //     playPauseBtn.lastElementChild?.classList.remove("hidden");
  //     playPauseBtn.firstElementChild?.classList.add("hidden");
  //   }

  //   function isEnded() {
  //     playPauseBtn.lastElementChild?.classList.add("hidden");
  //   }
  //   function isPlaying() {
  //     playPauseBtn.firstElementChild?.classList.remove("hidden");
  //   }
});
