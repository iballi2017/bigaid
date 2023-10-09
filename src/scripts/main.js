document.addEventListener("DOMContentLoaded", (event) => {
  function Init() {
    mainToolbarStateToggle();
    playPauseVideo();
    toggleForms();
    donationMileStoneGraph();
    doDataCount();
    handlePieChart();
    controlDonationCurrency();
    toggleDonationAmountSelect();
    controlCurrentlyWorkHere();
    dismissCookiesNotificationBanner();
    handleScrollToTop();
    handleAnimateOnViewportIntercept();
    handleAccordion();
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
          myVideo.parentElement.classList.remove("thumbnail");
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
          myVideo.parentElement.classList.add("thumbnail");
          return;
        }
      });
    }
  }

  /**DONATION MILESTONES GRAPH */
  function donationMileStoneGraph() {
    const milestones = document.querySelectorAll(
      ".milestones-graph .milestone"
    );
    for (let index = 0; index < milestones.length; index++) {
      const element = milestones[index];

      const donationRaisedLength = element.querySelector(".guage");
      const inputControl = donationRaisedLength.querySelector(
        "input.donation-raised"
      );

      donationRaisedLength.style.width = inputControl?.value
        ? inputControl?.value + "%"
        : "0%";
    }
  }

  /**DONATION PIE-CHART DATASET */
  var continentDataList = [
    {
      title: "Africa",
      data: 15,
      color: "#FF00E7",
    },
    {
      title: "Europe",
      data: 5,
      color: "#48CBFF",
    },
    {
      title: "America",
      data: 80,
      color: "#0A0559",
    },
    {
      title: "Asia",
      data: 30,
      color: "#FF00aa",
    },
  ];

  const ctx = document.getElementById("myChart");
  var continentTitles = [];
  var continentData = [];
  var continentColor = [];
  continentDataList.forEach((continent) => {
    continentTitles.push(continent.title);
    continentData.push(continent.data);
    continentColor.push(continent.color);
  });

  var chartOptions = {
    type: "pie",
    data: {
      // labels: ["Africa", "Europe", "America"],
      labels: continentTitles,
      datasets: [
        {
          label: " % Donation",
          data: continentData.map((num) => {
            return num / 100;
          }),
          backgroundColor: continentColor,
          borderWidth: 5,
        },
      ],
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: "bottom",
        },
        title: {
          display: false,
          text: "Donation by Region/Country",
        },
      },
    },
  };
  var chart = new Chart(ctx, chartOptions);

  var _promise = new Promise((resolve, reject) => {
    if (loadPercentageGuage()) {
      resolve(true);
    } else {
      reject("Error");
    }
  });

  function loadPercentageGuage() {
    var donationResult = document.querySelector(".donation-result");
    var donationPercentage = document.querySelector(".donation-percentage");

    /**For result */
    var donationRaisedResult = donationResult
      .querySelector(".amount-raised")
      .querySelector(".count")
      .getAttribute("src-data");
    var donationTargetResult = donationResult
      .querySelector(".amount-target")
      .querySelector(".count")
      .getAttribute("src-data");

    /**For percentage */

    // var donationResultAmountRaise = document.querySelector(".donation-result");

    var percentageIncrease =
      (donationRaisedResult * 100) / donationTargetResult;

    const x = percentageIncrease ? percentageIncrease + "%" : "0%";

    // console.log("data: ", {
    //   donationRaisedResult: donationRaisedResult,
    //   donationTargetResult: donationTargetResult,
    // });
    // console.log("x: ", x);

    if (percentageIncrease < 100 || percentageIncrease === 100) {
      // console.log("x!!!!: ", x);
      if (x < 0) return false;
      donationPercentage
        .querySelector(".amount-raised")
        .querySelector(".count")
        .setAttribute("src-data", parseInt(x).toFixed(0));
      donationPercentage
        .querySelector(".amount-target")
        .querySelector(".count")
        .setAttribute("src-data", 100);

      donationPercentage
        .querySelector(".amount-target")
        .querySelector(".count").innerHTML = 100;

      return true;
    }
    return false;
  }
  loadPercentageGuage();

  /**DONATION DATA COUNTERS */

  function doDataCount() {
    _promise
      .then((response) => {
        if (response) {
          counters();
        }
      })
      .catch((err) => {
        throw new Error("There was Donation milestone data error!");
      });
  }

  function counters() {
    var milestones = document.getElementsByClassName("milestone");
    var inc = [];
    var milestonesGraph = document.querySelector(".milestones-graph");

    window.addEventListener("scroll", () => {
      /**Handle Pie-chart Data Update On Scroll */

      var timer = setInterval(() => {
        var topElem = milestonesGraph.offsetTop;
        var bottomElem =
          milestonesGraph.offsetTop + milestonesGraph.clientHeight;

        var topScreen = window.pageYOffset;
        var bottomScreen = window.pageYOffset + window.innerHeight;

        if (bottomScreen > topElem && topScreen < bottomElem) {
          intervalFunc();
        } else {
          clearInterval(timer);
          milestones[i]
            .querySelector(".amount-raised")
            .querySelector(".count").innerHTML = 1;
          inc = [];
        }
      }, 100);
    });

    function intervalFunc() {
      for (let i = 0; i < milestones.length; i++) {
        const raisedCount = milestones[i]
          .querySelector(".amount-raised")
          .querySelector(".count");
        const target = milestones[i]
          .querySelector(".amount-target")
          .querySelector(".count");

        inc.push(1);

        const donationRaisedLength = milestones[i].querySelector(".guage");

        if (raisedCount.getAttribute("src-data") > 0) {
          if (inc[i] != raisedCount.getAttribute("src-data")) {
            var percentageIncrease =
              (inc[i] * 100) / target.getAttribute("src-data");

            if (percentageIncrease < 100 && percentageIncrease === 100) {
              donationRaisedLength.style.width = percentageIncrease
                ? percentageIncrease + "%"
                : "0%";
            }
            inc[i]++;
          }
        }

        raisedCount.innerHTML = inc[i];
      }
    }
  }

  function handlePieChart() {

    /**Handle Pie-chart Data Update On Scroll */
    window.addEventListener("scroll", () => {
      display()
    })

    function display() {
      var milestonesPieChart = document.querySelector(".pie-chart");
      var topElem = milestonesPieChart.offsetTop;
      var bottomElem =
        milestonesPieChart.offsetTop + milestonesPieChart.clientHeight;
      var topScreen = window.pageYOffset;
      var bottomScreen = window.pageYOffset + window.innerHeight;
      if (bottomScreen > topElem && topScreen < bottomElem) {
        chart.show(0, 2);
      } else {
        chart.hide(0, 2);
      }
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
    if (partnerFormRadio) {
      if (partnerFormRadio.checked) {
        volunteerForm?.classList?.remove("active");
        partnerForm?.classList?.add("active");
      }
    }
    if (volunteerFormRadio) {
      if (volunteerFormRadio.checked) {
        volunteerForm?.classList?.add("active");
        partnerForm?.classList?.remove("active");
      }
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
          });
        }
      }
    });
  }

  function toggleDonationAmountSelect() {
    const Curr = {
      USD: "USD",
      Naira: "Naira",
    };

    var ele = document.getElementsByName("Currency");
    const nairaSelect = document.getElementById("nairaSelect");
    const usdSelect = document.getElementById("usdSelect");

    for (i = 0; i < ele.length; i++) {
      if (ele[i].checked) {
        switch (ele[i].value) {
          case Curr.USD:
            console.log("hi: ", ele[i].value);
            nairaSelect.classList.add("hidden");
            usdSelect.classList.remove("hidden");
            break;

          case Curr.Naira:
            console.log("hello: ", ele[i].value);
            nairaSelect.classList.remove("hidden");
            usdSelect.classList.add("hidden");
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
          toggleDonationAmountSelect();
        }
      });
    }
  }

  function controlCurrentlyWorkHere() {
    const currentlyWorkHere = document.querySelector("#currentlyWorkHere");
    const endDateContainer = document.querySelector("#endDateContainer");
    const startDateContainer = document.querySelector("#startDateContainer");
    currentlyWorkHere?.addEventListener("click", () => {
      if (currentlyWorkHere.checked) {
        if (!endDateContainer?.classList.contains("hidden"))
          endDateContainer?.classList.add("hidden");
        if (startDateContainer?.classList.contains("md:col-span-6"))
          startDateContainer?.classList.remove("md:col-span-6");
        return;
      }
      if (endDateContainer?.classList.contains("hidden"))
        endDateContainer?.classList.remove("hidden");
      if (!startDateContainer?.classList.contains("md:col-span-6"))
        startDateContainer?.classList.add("md:col-span-6");
    });
  }

  function dismissCookiesNotificationBanner() {
    // alert("hello")
    const cookiesNotificationBanner = document.querySelector(
      "#cookiesNotificationBanner"
    );
    const rejectCookiesButton = document.querySelector("#rejectCookiesButton");
    const acceptCookiesButton = document.querySelector("#acceptCookiesButton");

    /**SHOW COOKIES NOTIFICATION BANNER */
    function showCookiesNotificationBanner() {
      cookiesNotificationBanner
        ? cookiesNotificationBanner.classList.remove("hidden")
        : null;
    }
    showCookiesNotificationBanner();

    /**REJECT COOKIES NOTIFICATION BANNER */
    rejectCookiesButton
      ? rejectCookiesButton.addEventListener("click", () => {
        if (cookiesNotificationBanner) {
          cookiesNotificationBanner.classList.add("hidden");
          // more codes...
        }
      })
      : null;

    /**ACCEPT COOKIES NOTIFICATION BANNER */
    acceptCookiesButton
      ? acceptCookiesButton.addEventListener("click", () => {
        if (cookiesNotificationBanner) {
          cookiesNotificationBanner.classList.add("hidden");
          // more codes...
        }
      })
      : null;
  }

  /**SCROLL TOP */
  function handleScrollToTop() {
    let mybutton = document.getElementById("myBtn");
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
      ) {
        if (mybutton) {
          mybutton.style.display = "block";
        }
      } else {
        if (mybutton) {
          mybutton.style.display = "none";
        }
      }
    }

    if (mybutton) {
      mybutton.addEventListener("click", () => {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      });
    }
  }

  /**Animate content on viewport intercept */

  function handleAnimateOnViewportIntercept() {
    /* Page Content Intersection Observer */
    const faders = document.querySelectorAll(".fade-in");
    const fromLeft = document.querySelectorAll(".from-left");
    const fromRight = document.querySelectorAll(".from-right");
    const fromBottom = document.querySelectorAll(".from-bottom");
    const fromTop = document.querySelectorAll(".from-top");
    const sliders = document.querySelectorAll(".slide-in");

    const appearOptions = {
      threshold: 0,
      rootMargin: "0px 0px -200px 0px",
    };
    const appearOnScroll = new IntersectionObserver(
      (entries, appearOnScroll) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          entry.target.classList.add("appear");
          appearOnScroll.unobserve(entry.target);
        });
      },
      appearOptions
    );

    faders.forEach((fader) => {
      appearOnScroll.observe(fader);
    });
    fromLeft.forEach((fader) => {
      appearOnScroll.observe(fader);
    });
    fromRight.forEach((fader) => {
      appearOnScroll.observe(fader);
    });
    fromTop.forEach((fader) => {
      appearOnScroll.observe(fader);
    });
    fromBottom.forEach((fader) => {
      appearOnScroll.observe(fader);
    });

    sliders.forEach((slider) => {
      appearOnScroll.observe(slider);
    });
  }

  /**RESIZE SCREEN */

  function reportWindowSize() {
    // console.log(" window.innerHeight: ", window.innerHeight);
    // console.log(" window.innerWidth: ", window.innerWidth);

    /**RESET NAVIGATION LOOK */
    const navbarToggler = document.querySelector(".navbar-toggler");
    const primaryNavigation = document.querySelector(".nav-list.nav-collapse");

    primaryNavigation?.removeAttribute("data-visible");
    !primaryNavigation?.hasAttribute("data-visible")
      ? navbarToggler.setAttribute("aria-expanded", false)
      : null;
  }
  window.onresize = reportWindowSize;




  /**ACCORDION */
  function handleAccordion() {
    var accordionItems = document.getElementsByClassName("accordion-item")
    console.log("accordionItems: ", accordionItems);

    for (let i = 0; i < accordionItems.length; i++) {
      const accordionItem = accordionItems[i];
      console.log("accordionItem: ", accordionItem);
      var btn = accordionItem.querySelector(".accordion-button")
      console.log("btn: ", btn);
    }
  }

  Init();
});
