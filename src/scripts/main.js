document.addEventListener("DOMContentLoaded", (event) => {
  /**main Toolbar State Toggle */
  function mainToolbarStateToggle() {
    const navbarToggler = document.querySelector(".navbar-toggler");
    const primaryNavigation = document.querySelector(".nav-list.nav-collapse");

    navbarToggler?.addEventListener("click", () => {
      primaryNavigation?.toggleAttribute("data-visible");
      primaryNavigation?.hasAttribute("data-visible")
        ? navbarToggler.setAttribute("aria-expanded", true)
        : navbarToggler.setAttribute("aria-expanded", false);
    });
  }

  /**play Pause Video */
  function playPauseVideo() {
    var myVideo = document.getElementById("video1");
    var playPauseBtn = document.querySelector(".play-button");
    var isPlay = false;
    if (playPauseBtn) {
      playPauseBtn.lastElementChild?.classList?.add("hidden");
      playPauseBtn.firstElementChild?.classList?.remove("hidden");
      playPauseBtn.addEventListener("click", async () => {
        // console.log("promise: ", myPromise);
        if (!isPlay) {
          myVideo.play();
          isPlay = true;
          playPauseBtn.lastElementChild?.classList?.remove("hidden");
          playPauseBtn.firstElementChild?.classList?.add("hidden");
          return;
        }
        if (isPlay) {
          myVideo.pause();
          isPlay = false;
          playPauseBtn.lastElementChild?.classList?.add("hidden");
          playPauseBtn.firstElementChild?.classList?.remove("hidden");
          return;
        }
      });
    }
  }

  /**donationMileStoneGraph */
  function donationMileStoneGraph() {
    const milestones = document.querySelectorAll(
      ".milestones-graph .milestone"
    );
    for (let index = 0; index < milestones.length; index++) {
      const element = milestones[index];
      console.log("element: ", element.querySelector(".label"));
      const donationRaisedLength = element.querySelector(".guage");
      const inputControl = donationRaisedLength.querySelector(
        "input.donation-raised"
      );
      donationRaisedLength.style.width = inputControl?.value
        ? inputControl?.value + "%"
        : "0%";
    }
  }

  donationMileStoneGraph();

  const volunteerFormRadio = document.querySelector("#volunteer-form-radio");
  const partnerFormRadio = document.querySelector("#partner-form-radio");
  const volunteerForm = document.querySelector("#volunteer-form");
  const partnerForm = document.querySelector("#partner-form");

  partnerFormRadio.addEventListener("click", () => {
    console.log("partnerFormRadio.checked: ", partnerFormRadio.checked);
    console.log("partnerFormRadio: ", partnerForm.classList);
    // toggleForms()
    if (partnerFormRadio.checked) {
      volunteerForm?.classList?.remove("active");
      partnerForm?.classList?.add("active");
    }
  });

  volunteerFormRadio.addEventListener("click", () => {
    console.log("volunteerFormRadio.checked: ", volunteerFormRadio.checked);
    console.log("volunteerFormRadio: ", volunteerForm.classList);
    // toggleForms()
    volunteerForm?.classList?.add("active");
    partnerForm?.classList?.remove("active");
  });

  function toggleForms() {
    if (partnerFormRadio.checked) {
      // if (volunteerForm?.classList.contains("hidden")) {
      volunteerForm?.classList?.remove("active");
      partnerForm?.classList?.add("active");
      // }
    } else {
      // if (volunteerForm?.classList.contains("active")) {
      volunteerForm?.classList?.add("active");
      partnerForm?.classList?.remove("active");
      // }
    }
  }
  console.log("test: ", volunteerFormRadio.checked);


  // Cancel Notification
  var cancelNotification = document.querySelectorAll(".cancel-notification");
  var overlay = document.querySelector(".overlay");
  var overlayContent = document.querySelectorAll(".overlay-content");

  for (let index = 0; index < cancelNotification.length; index++) {
    const element = cancelNotification[index];
    element.addEventListener("click", () => {
      // alert("hi")
      if (overlay) {
        overlay.classList.remove("show")
      }
    })

  }

  mainToolbarStateToggle();
  playPauseVideo();
});
