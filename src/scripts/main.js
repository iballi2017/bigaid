document.addEventListener("DOMContentLoaded", (event) => {

  function Init() {

    mainToolbarStateToggle();
    playPauseVideo();
    donationMileStoneGraph();
    controlDonationCurrency();
    toggleDonationAmountSelect();
    controlCurrentlyWorkHere();
  }


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
      // console.log("element: ", element.querySelector(".label"));
      const donationRaisedLength = element.querySelector(".guage");
      const inputControl = donationRaisedLength.querySelector(
        "input.donation-raised"
      );
      donationRaisedLength.style.width = inputControl?.value
        ? inputControl?.value + "%"
        : "0%";
    }
  }


  /**SIGNUP FORM TABS */
  const volunteerFormRadio = document.querySelector("#volunteer-form-radio");
  const partnerFormRadio = document.querySelector("#partner-form-radio");
  const volunteerForm = document.querySelector("#volunteer-form");
  const partnerForm = document.querySelector("#partner-form");

  partnerFormRadio?.addEventListener("click", () => {
    toggleForms();
  });

  volunteerFormRadio?.addEventListener("click", () => {
    toggleForms();
  });

  function toggleForms() {
    if (partnerFormRadio.checked) {
      volunteerForm?.classList?.remove("active");
      partnerForm?.classList?.add("active");
    } else {
      volunteerForm?.classList?.add("active");
      partnerForm?.classList?.remove("active");
    }
  }


  /* NOTIFICATION POPUPS */
  var cancelNotification = document.querySelectorAll(".cancel-notification");
  var overlay = document.querySelector(".overlay");
  var overlayContent = document.querySelectorAll(".overlay-content");

  for (let index = 0; index < cancelNotification.length; index++) {
    const element = cancelNotification[index];
    element.addEventListener("click", () => {
      if (overlay) {
        overlay.classList.remove("show");

        for (let index = 0; index < overlayContent.length; index++) {
          const element = overlayContent[index];
          element.addEventListener("click", () => {
            if (element) {
              element.classList.remove("show");
            }
          })

        }
      }
    })

  }


  function toggleDonationAmountSelect() {

    const Curr = {
      USD: "USD",
      Naira: "Naira",
    }

    var ele = document.getElementsByName('Currency');
    const nairaSelect = document.getElementById("nairaSelect");
    const usdSelect = document.getElementById("usdSelect");

    for (i = 0; i < ele.length; i++) {
      if (ele[i].checked) {
        switch (ele[i].value) {
          case Curr.USD:
            console.log("hi: ", ele[i].value)
            nairaSelect.classList.add("hidden")
            usdSelect.classList.remove("hidden")
            break;

          case Curr.Naira:
            console.log("hello: ", ele[i].value)
            nairaSelect.classList.remove("hidden")
            usdSelect.classList.add("hidden")
            break;

          default:
            break;
        }
      }
    }
  }

  function controlDonationCurrency() {
    const currencyRadio = document.querySelectorAll("input[name='Currency']");
    for (let i = 0; i < currencyRadio.length; i++) {
      const element = currencyRadio[i];
      element.addEventListener("click", () => {
        if (element.checked) {
          toggleDonationAmountSelect()
        }
      })
    }
  }


  function controlCurrentlyWorkHere() {
    const currentlyWorkHere = document.querySelector("#currentlyWorkHere");
    const endDateContainer = document.querySelector("#endDateContainer");
    const startDateContainer = document.querySelector("#startDateContainer");
    currentlyWorkHere.addEventListener("click", () => {
      if (currentlyWorkHere.checked) {
        if (!endDateContainer?.classList.contains("hidden"))
          endDateContainer?.classList.add("hidden");
        if (startDateContainer?.classList.contains("md:col-span-6"))
          startDateContainer?.classList.remove("md:col-span-6");
        return;
      }
      if (endDateContainer?.classList.contains("hidden"))
        endDateContainer?.classList.remove("hidden")
      if (!startDateContainer?.classList.contains("md:col-span-6"))
        startDateContainer?.classList.add("md:col-span-6");

    })
  }



  Init();
});
