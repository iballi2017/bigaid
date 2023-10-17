document.addEventListener("DOMContentLoaded", (event) => {
  function Init() {
    mainToolbarStateToggle();
    playPauseVideo();
    removeModalWidget();
    showCookiesSettingsPopup();
    toggleForms();
    donationMileStoneGraph();
    doDataCount();
    handlePieChart();
    controlDonationCurrency();
    toggleDonationAmountSelect();
    controlCurrentlyWorkHere();
    toggleCookiesNotificationBanner();
    cookiesSettingOptions();
    handleScrollToTop();
    handleAnimateOnViewportIntercept();
    handleAccordion();
    loadMedicalProfessional();
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

  var chart;

  if (ctx) {
    // remove any instance of ctx
    const chart_init = Chart.getChart("myChart");
    if (chart_init != undefined) {
      chart_init.destroy();
    }
    chart = new Chart(ctx, chartOptions);
  }

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
      ?.querySelector(".amount-raised")
      .querySelector(".count")
      .getAttribute("src-data");
    var donationTargetResult = donationResult
      ?.querySelector(".amount-target")
      .querySelector(".count")
      .getAttribute("src-data");

    /**For percentage */

    // var donationResultAmountRaise = document.querySelector(".donation-result");

    var percentageIncrease =
      (donationRaisedResult * 100) / donationTargetResult;

    const x = percentageIncrease ? percentageIncrease + "%" : "0%";

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
            if (0 < percentageIncrease < 100) {
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
      display();
    });

    function display() {
      var milestonesPieChart = document.querySelector(".pie-chart");
      var topElem = milestonesPieChart?.offsetTop;
      var bottomElem =
        milestonesPieChart?.offsetTop + milestonesPieChart?.clientHeight;
      var topScreen = window.pageYOffset;
      var bottomScreen = window.pageYOffset + window.innerHeight;
      if (bottomScreen > topElem && topScreen < bottomElem) {
        chart?.show(0, 2);
      } else {
        chart?.hide(0, 2);
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
  var overlay = document.querySelector(".overlay");
  var overlayContent = document.querySelectorAll(".overlay-content");

  function showCookiesSettingsPopup() {
    var cookiesSettingsButton = document.getElementById(
      "cookiesSettingsButton"
    );
    var cookiesSettings = document.getElementById("cookiesSettings");

    cookiesSettingsButton?.addEventListener("click", () => {
      overlay?.classList.add("show");
      cookiesSettings?.classList.add("show");
    });
  }

  function removeModalWidget() {
    var cancelNotification = document.querySelectorAll(".cancel-notification");
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
  }

  function toggleDonationAmountSelect() {
    const Curr = {
      USD: "USD",
      Naira: "Naira",
    };

    var ele = document.getElementsByName("Currency");
    // console.log("ele: ", ele)
    const nairaSelect = document.getElementById("nairaSelect");
    const usdSelect = document.getElementById("usdSelect");

    for (i = 0; i < ele.length; i++) {
      if (ele[i].checked) {
        switch (ele[i].value) {
          case Curr.USD:
            nairaSelect?.classList.add("hidden");
            usdSelect?.classList.remove("hidden");
            break;

          case Curr.Naira:
            nairaSelect?.classList.remove("hidden");
            usdSelect?.classList.add("hidden");
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

  function toggleCookiesNotificationBanner() {
    const cookiesNotificationBanner = document.querySelector(
      "#cookiesNotificationBanner"
    );
    const cookiesSettingsButton = document.querySelector(
      "#cookiesSettingsButton"
    );
    const acceptCookiesButton = document.querySelector("#acceptCookiesButton");

    /**SHOW COOKIES NOTIFICATION BANNER */
    function showCookiesNotificationBanner() {
      cookiesNotificationBanner
        ? cookiesNotificationBanner.classList.remove("hidden")
        : null;
    }
    showCookiesNotificationBanner();

    /**REJECT COOKIES NOTIFICATION BANNER */
    cookiesSettingsButton
      ? cookiesSettingsButton.addEventListener("click", () => {
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
      rootMargin: "0px 0px -100px 0px",
    };
    const appearOnScroll = new IntersectionObserver(
      (entries, appearOnScroll) => {
        entries.forEach((entry) => {
          // console.log("entry: ", entry.target)
          let dataDelay = entry.target.getAttribute("data-delay");
          // console.log("dataDelay: ", dataDelay)
          if (!entry.isIntersecting) return;

          if (dataDelay) {
            setTimeout(() => {
              entry.target.classList.add("appear");
              appearOnScroll.unobserve(entry.target);
            }, parseInt(dataDelay));
          } else {
            entry.target.classList.add("appear");
            appearOnScroll.unobserve(entry.target);
          }
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
    // var data = [
    //   {

    //   }
    // ]

    var accordionItems = document.getElementsByClassName("accordion-item");

    for (let i = 0; i < accordionItems.length; i++) {
      const accordionItem = accordionItems[i];
      var btn = accordionItem?.querySelector(".accordion-button");

      btn?.addEventListener("click", (e) => {
        var accordionBtn = e.target;
        var accordionList =
          accordionBtn.parentElement.parentElement.parentElement;
        var accordionItems = accordionList.children;

        console.log("accordionBtn: ", accordionBtn);

        for (let i = 0; i < accordionItems.length; i++) {
          const element = accordionItems[i];
          if (element == accordionBtn.parentElement.parentElement) {
            accordionBtn.getAttribute("aria-expanded") == "false"
              ? accordionBtn.setAttribute("aria-expanded", true)
              : accordionBtn.setAttribute("aria-expanded", false);

            !element.lastElementChild.classList.contains("show")
              ? element.lastElementChild.classList.add("show")
              : element.lastElementChild.classList.remove("show");

            element.lastElementChild.classList.contains("collapse")
              ? element.lastElementChild.classList.remove("collapse")
              : null;
            !element.lastElementChild.classList.contains("collapsing")
              ? element.lastElementChild.classList.add("collapsing")
              : null;

            setTimeout(() => {
              !element.lastElementChild.classList.contains("collapse")
                ? element.lastElementChild.classList.add("collapse")
                : element.lastElementChild.classList.remove("collapse");
              element.lastElementChild.classList.contains("collapsing")
                ? element.lastElementChild.classList.remove("collapsing")
                : null;
            }, 200);
          } else {
            element.firstElementChild.firstElementChild.setAttribute(
              "aria-expanded",
              false
            );
            element.lastElementChild.classList.contains("show")
              ? element.lastElementChild.classList.remove("show")
              : null;

            element.lastElementChild.classList.contains("collapse")
              ? element.lastElementChild.classList.remove("collapse")
              : element.lastElementChild.classList.add("collapse");
            !element.lastElementChild.classList.contains("collapsing")
              ? element.lastElementChild.classList.add("collapsing")
              : null;

            setTimeout(() => {
              !element.lastElementChild.classList.contains("collapse")
                ? element.lastElementChild.classList.add("collapse")
                : element.lastElementChild.classList.remove("collapse");
              element.lastElementChild.classList.contains("collapsing")
                ? element.lastElementChild.classList.remove("collapsing")
                : element.lastElementChild.classList.add("collapsing");
            }, 200);
          }
        }
      });
    }
  }

  /**LOAD MEDICAL PROFESSIONAL LIST */
  function loadMedicalProfessional() {
    var area_of_specializations = [];

    const medicalPros = {
      DOCTOR: {
        title: "Doctor",
        value: "doctor",
        area_of_specializations: [
          "Chiropractor",
          "Surgeon",
          "Internal medicine",
          "Pediatrician",
          "Neurologist",
          "Family medicine",
          "Urologist",
          "Obstetrics and gynecology",
          "Pathologist",
          "Dermatologist",
          "Ophthalmology",
          "Neurology",
          "Anesthesiologist",
          "Gastroenterologist",
          "Oncologist",
          "Anesthesiology",
          "Cardiologist",
          "Endocrinologist",
        ],
      },
      NURSE: {
        title: "Nurse",
        value: "nurse",
        area_of_specializations: [
          "Registered nurse",
          "Nurse",
          "Nurse Practitioner",
          "Nurse anaesthetist",
          "Nurse midwife",
          "Licensed Practical Nurse",
        ],
      },
      LAB_SCIENTIST: {
        title: "Lab Scientist",
        value: "lab_scientist",
        area_of_specializations: [
          "Surgical technologist",
          "Cardiologist",
          "Medical laboratory scientist",
          "Radiographer",
          "Medical physicist",
        ],
      },
      SPECIALIST: {
        title: "Specialist",
        value: "specialist",
        area_of_specializations: [
          "Dentist",
          "Optometrist",
          "Occupational Therapist",
          "Psychiatrist",
          "Anaesthesiologist",
          "Dietitian",
          "Pharmacy Technician",
          "Radiologist",
          "Neonatologist",
          "Geriatrician",
          "Intensivist",
          "Oncologist",
          "Sonographer",
          "Neurologist",
          "Dermatologist",
          "Pulmonologist",
          "Otorhinolaryngologist",
          "Nephrologist",
          "orthoptist",
          "Perfusionist",
          "Pathologist",
          "Endocrinologist",
          "Gastroenterologist",
          "Veterinarian",
          "Pediatrics",
          "Radiologist",
          "Dermatology",
          "Psychiatrist",
        ],
      },
      EMERGENCY_RESPONSE: {
        title: "Emergency Response",
        value: "emergency_response",
        area_of_specializations: [
          "Emergency physician",
          "Athletic Trainer",
          "Paramedic",
          "Medical assistant",
          "Physical Therapist Assistants and Aides",
        ],
      },
      CONSULTANT: {
        title: "Consultant",
        value: "consultant",
        area_of_specializations: [
          "General practitioner",
          "Respiratory therapist",
          "Radiation therapist",
          "Genetic counselor",
          "General practitioner",
        ],
      },
      OTHERS: {
        title: "Others",
        value: "others",
        area_of_specializations: [
          "Health professional",
          "Pharmacist",
          "Physician Associate",
          "Dentist",
          "Physician",
          "Optometrist",
          "Registered nurse",
          "Occupational Therapist",
          "Psychiatrist",
          "Anaesthesiologist",
          "Dietitian",
          "Pharmacy Technician",
          "General practitioner",
          "Nurse",
          "Radiologist",
          "Neonatologist",
          "Respiratory therapist",
          "Geriatrician",
          "Emergency physician",
          "Intensivist",
          "Oncologist",
          "Nurse Practitioner",
          "Athletic Trainer",
          "Sonographer",
          "Radiation therapist",
          "Nurse anaesthetist",
          "Surgical technologist",
          "Cardiologist",
          "Genetic counselor",
          "Medical laboratory scientist",
          "Neurologist",
          "Radiographer",
          "Paramedic",
          "Dermatologist",
          "Pulmonologist",
          "Otorhinolaryngologist",
          "Nephrologist",
          "Nurse midwife",
          "Urologist",
          "Medical physicist",
          "orthoptist",
          "Perfusionist",
          "Pathologist",
          "Endocrinologist",
          "Gastroenterologist",
          "Veterinarian",
          "Medical assistant",
          "Licensed Practical Nurse",
          "Chiropractor",
          "Physical Therapist Assistants and Aides",
          "General practitioner",
          "Internal medicine",
          "Pediatrician",
          "Surgeon",
          "Neurologist",
          "Family medicine",
          "Pediatrics",
          "Urologist",
          "Radiologist",
          "Obstetrics and gynecology",
          "Pathologist",
          "Dermatologist",
          "Psychiatrist",
          "Ophthalmology",
          "Neurology",
          "Anesthesiologist",
          "Gastroenterologist",
          "Oncologist",
          "Urology",
          "Anesthesiology",
          "Cardiologist",
          "Endocrinologist",
          "Gastroenterology",
          "Dermatology",
        ],
      },
    };

    function LoadProfessionals(
      profession,
      specializations,
      medical_profession_select,
      specialization
    ) {
      this.medical_profession = [
        medicalPros.DOCTOR,
        medicalPros.NURSE,
        medicalPros.LAB_SCIENTIST,
        medicalPros.SPECIALIST,
        medicalPros.EMERGENCY_RESPONSE,
        medicalPros.OTHERS,
      ];

      this.medicalPros = {
        DOCTOR: {
          title: "Doctor",
          value: "doctor",
          area_of_specializations: [
            "Chiropractor",
            "Surgeon",
            "Internal medicine",
            "Pediatrician",
            "Neurologist",
            "Family medicine",
            "Urologist",
            "Obstetrics and gynecology",
            "Pathologist",
            "Dermatologist",
            "Ophthalmology",
            "Neurology",
            "Anesthesiologist",
            "Gastroenterologist",
            "Oncologist",
            "Anesthesiology",
            "Cardiologist",
            "Endocrinologist",
          ],
        },
        NURSE: {
          title: "Nurse",
          value: "nurse",
          area_of_specializations: [
            "Registered nurse",
            "Nurse",
            "Nurse Practitioner",
            "Nurse anaesthetist",
            "Nurse midwife",
            "Licensed Practical Nurse",
          ],
        },
        LAB_SCIENTIST: {
          title: "Lab Scientist",
          value: "lab_scientist",
          area_of_specializations: [
            "Surgical technologist",
            "Cardiologist",
            "Medical laboratory scientist",
            "Radiographer",
            "Medical physicist",
          ],
        },
        SPECIALIST: {
          title: "Specialist",
          value: "specialist",
          area_of_specializations: [
            "Dentist",
            "Optometrist",
            "Occupational Therapist",
            "Psychiatrist",
            "Anaesthesiologist",
            "Dietitian",
            "Pharmacy Technician",
            "Radiologist",
            "Neonatologist",
            "Geriatrician",
            "Intensivist",
            "Oncologist",
            "Sonographer",
            "Neurologist",
            "Dermatologist",
            "Pulmonologist",
            "Otorhinolaryngologist",
            "Nephrologist",
            "orthoptist",
            "Perfusionist",
            "Pathologist",
            "Endocrinologist",
            "Gastroenterologist",
            "Veterinarian",
            "Pediatrics",
            "Radiologist",
            "Dermatology",
            "Psychiatrist",
          ],
        },
        EMERGENCY_RESPONSE: {
          title: "Emergency Response",
          value: "emergency_response",
          area_of_specializations: [
            "Emergency physician",
            "Athletic Trainer",
            "Paramedic",
            "Medical assistant",
            "Physical Therapist Assistants and Aides",
          ],
        },
        CONSULTANT: {
          title: "Consultant",
          value: "consultant",
          area_of_specializations: [
            "General practitioner",
            "Respiratory therapist",
            "Radiation therapist",
            "Genetic counselor",
            "General practitioner",
          ],
        },
        OTHERS: {
          title: "Others",
          value: "others",
          area_of_specializations: [
            "Health professional",
            "Pharmacist",
            "Physician Associate",
            "Dentist",
            "Physician",
            "Optometrist",
            "Registered nurse",
            "Occupational Therapist",
            "Psychiatrist",
            "Anaesthesiologist",
            "Dietitian",
            "Pharmacy Technician",
            "General practitioner",
            "Nurse",
            "Radiologist",
            "Neonatologist",
            "Respiratory therapist",
            "Geriatrician",
            "Emergency physician",
            "Intensivist",
            "Oncologist",
            "Nurse Practitioner",
            "Athletic Trainer",
            "Sonographer",
            "Radiation therapist",
            "Nurse anaesthetist",
            "Surgical technologist",
            "Cardiologist",
            "Genetic counselor",
            "Medical laboratory scientist",
            "Neurologist",
            "Radiographer",
            "Paramedic",
            "Dermatologist",
            "Pulmonologist",
            "Otorhinolaryngologist",
            "Nephrologist",
            "Nurse midwife",
            "Urologist",
            "Medical physicist",
            "orthoptist",
            "Perfusionist",
            "Pathologist",
            "Endocrinologist",
            "Gastroenterologist",
            "Veterinarian",
            "Medical assistant",
            "Licensed Practical Nurse",
            "Chiropractor",
            "Physical Therapist Assistants and Aides",
            "General practitioner",
            "Internal medicine",
            "Pediatrician",
            "Surgeon",
            "Neurologist",
            "Family medicine",
            "Pediatrics",
            "Urologist",
            "Radiologist",
            "Obstetrics and gynecology",
            "Pathologist",
            "Dermatologist",
            "Psychiatrist",
            "Ophthalmology",
            "Neurology",
            "Anesthesiologist",
            "Gastroenterologist",
            "Oncologist",
            "Urology",
            "Anesthesiology",
            "Cardiologist",
            "Endocrinologist",
            "Gastroenterology",
            "Dermatology",
          ],
        },
      };

      this.profession = profession;
      this.medical_profession_select = medical_profession_select;
      this.specializations = specializations;
      this.specialization = specialization;

      let medical_profession_content = ``;
      for (let i = 0; i < this.medical_profession.sort().length; i++) {
        const profession = this.medical_profession[i];
        medical_profession_content += ` <option value="${profession.value}">${profession.title}</option>`;
      }
      if (profession) {
        profession.innerHTML = medical_profession_content;
      }

      this.handle_specialization = () => {
        var content = "";
        for (let i = 0; i < area_of_specializations.sort().length; i++) {
          const profession = area_of_specializations[i];
          content += ` <option value="${profession}" />`;
        }
        if (specializations) {
          specializations.innerHTML = content;
        }
      };
      this.handle_specialization();

      this.selectProfessional = () => {
        this.medical_profession_select?.addEventListener("change", (e) => {
          let selectedProfession = e.target.value;
          let specializations = this.medical_profession.findIndex((item) => {
            return item.value === selectedProfession;
          });
          area_of_specializations =
            this.medical_profession[specializations].area_of_specializations;

          specialization.value = "";
          this.handle_specialization();
        });
      };
      this.selectProfessional();
    }

    /**Volunteers control feeds for medical professionals */
    const handle_volunteer_medical_profession = () => {
      var volunteer_medical_profession = document.getElementById(
        "volunteer_medical_profession"
      );
      var volunteer_specializations = document.getElementById(
        "volunteer_specializations"
      );
      let volunteer_specialization = document.getElementById(
        "volunteer_specialization"
      );
      const TypeOfMedicalProfession = document.querySelector(
        "#volunteer_medical_profession"
      );
      new LoadProfessionals(
        volunteer_medical_profession,
        volunteer_specializations,
        TypeOfMedicalProfession,
        volunteer_specialization
      );
    };
    handle_volunteer_medical_profession();

    /**Partners control feeds for medical professionals */
    const handle_partner_medical_profession = () => {
      var partner_medical_profession = document.getElementById(
        "partner_medical_profession"
      );
      var partner_specializations = document.getElementById(
        "partner_specializations"
      );
      let partner_specialization = document.getElementById(
        "partner_specialization"
      );
      const medical_profession = document.querySelector(
        "#partner_medical_profession"
      );
      new LoadProfessionals(
        partner_medical_profession,
        partner_specializations,
        medical_profession,
        partner_specialization
      );
    };
    handle_partner_medical_profession();
  }

  /**COOKIES SETTING OPTIONS */
  function cookiesSettingOptions() {
    var cookiesSettingOptions = document.querySelectorAll(
      ".cookies-setting-option"
    );
    for (let i = 0; i < cookiesSettingOptions.length; i++) {
      const element = cookiesSettingOptions[i];
      let control = element.querySelector("input");
      control.addEventListener("change", (e) => {
        if (e.target.getAttribute("id") == "all") {
          if (e.target.checked) {
            for (let j = 0; j < cookiesSettingOptions.length; j++) {
              let _element = cookiesSettingOptions[j];
              _element.querySelector("input").checked = true;
            }
          } else {
            for (let j = 0; j < cookiesSettingOptions.length; j++) {
              let _element = cookiesSettingOptions[j];
              let _control = _element.querySelector("input");
              if (_control.getAttribute("id") != "functional") {
                _control.checked = false;
              }
            }
          }
        } else {
          if (!e.target.checked) {
            for (let i = 0; i < cookiesSettingOptions.length; i++) {
              if (
                cookiesSettingOptions[i]
                  .querySelector("input")
                  .getAttribute("id") == "all"
              ) {
                cookiesSettingOptions[i].querySelector("input").checked = false;
              }
            }
          }
        }
      });
    }
  }

  function listOfCountries() {
    var countries = [
      { name: "Afghanistan", code: "AF" },
      { name: "Aland Islands", code: "AX" },
      { name: "Albania", code: "AL" },
      { name: "Algeria", code: "DZ" },
      { name: "American Samoa", code: "AS" },
      { name: "AndorrA", code: "AD" },
      { name: "Angola", code: "AO" },
      { name: "Anguilla", code: "AI" },
      { name: "Antarctica", code: "AQ" },
      { name: "Antigua and Barbuda", code: "AG" },
      { name: "Argentina", code: "AR" },
      { name: "Armenia", code: "AM" },
      { name: "Aruba", code: "AW" },
      { name: "Australia", code: "AU" },
      { name: "Austria", code: "AT" },
      { name: "Azerbaijan", code: "AZ" },
      { name: "Bahamas", code: "BS" },
      { name: "Bahrain", code: "BH" },
      { name: "Bangladesh", code: "BD" },
      { name: "Barbados", code: "BB" },
      { name: "Belarus", code: "BY" },
      { name: "Belgium", code: "BE" },
      { name: "Belize", code: "BZ" },
      { name: "Benin", code: "BJ" },
      { name: "Bermuda", code: "BM" },
      { name: "Bhutan", code: "BT" },
      { name: "Bolivia", code: "BO" },
      { name: "Bosnia and Herzegovina", code: "BA" },
      { name: "Botswana", code: "BW" },
      { name: "Bouvet Island", code: "BV" },
      { name: "Brazil", code: "BR" },
      { name: "British Indian Ocean Territory", code: "IO" },
      { name: "Brunei Darussalam", code: "BN" },
      { name: "Bulgaria", code: "BG" },
      { name: "Burkina Faso", code: "BF" },
      { name: "Burundi", code: "BI" },
      { name: "Cambodia", code: "KH" },
      { name: "Cameroon", code: "CM" },
      { name: "Canada", code: "CA" },
      { name: "Cape Verde", code: "CV" },
      { name: "Cayman Islands", code: "KY" },
      { name: "Central African Republic", code: "CF" },
      { name: "Chad", code: "TD" },
      { name: "Chile", code: "CL" },
      { name: "China", code: "CN" },
      { name: "Christmas Island", code: "CX" },
      { name: "Cocos (Keeling) Islands", code: "CC" },
      { name: "Colombia", code: "CO" },
      { name: "Comoros", code: "KM" },
      { name: "Congo", code: "CG" },
      { name: "Congo, The Democratic Republic of the", code: "CD" },
      { name: "Cook Islands", code: "CK" },
      { name: "Costa Rica", code: "CR" },
      { name: 'Cote D"Ivoire', code: "CI" },
      { name: "Croatia", code: "HR" },
      { name: "Cuba", code: "CU" },
      { name: "Cyprus", code: "CY" },
      { name: "Czech Republic", code: "CZ" },
      { name: "Denmark", code: "DK" },
      { name: "Djibouti", code: "DJ" },
      { name: "Dominica", code: "DM" },
      { name: "Dominican Republic", code: "DO" },
      { name: "Ecuador", code: "EC" },
      { name: "Egypt", code: "EG" },
      { name: "El Salvador", code: "SV" },
      { name: "Equatorial Guinea", code: "GQ" },
      { name: "Eritrea", code: "ER" },
      { name: "Estonia", code: "EE" },
      { name: "Ethiopia", code: "ET" },
      { name: "Falkland Islands (Malvinas)", code: "FK" },
      { name: "Faroe Islands", code: "FO" },
      { name: "Fiji", code: "FJ" },
      { name: "Finland", code: "FI" },
      { name: "France", code: "FR" },
      { name: "French Guiana", code: "GF" },
      { name: "French Polynesia", code: "PF" },
      { name: "French Southern Territories", code: "TF" },
      { name: "Gabon", code: "GA" },
      { name: "Gambia", code: "GM" },
      { name: "Georgia", code: "GE" },
      { name: "Germany", code: "DE" },
      { name: "Ghana", code: "GH" },
      { name: "Gibraltar", code: "GI" },
      { name: "Greece", code: "GR" },
      { name: "Greenland", code: "GL" },
      { name: "Grenada", code: "GD" },
      { name: "Guadeloupe", code: "GP" },
      { name: "Guam", code: "GU" },
      { name: "Guatemala", code: "GT" },
      { name: "Guernsey", code: "GG" },
      { name: "Guinea", code: "GN" },
      { name: "Guinea-Bissau", code: "GW" },
      { name: "Guyana", code: "GY" },
      { name: "Haiti", code: "HT" },
      { name: "Heard Island and Mcdonald Islands", code: "HM" },
      { name: "Holy See (Vatican City State)", code: "VA" },
      { name: "Honduras", code: "HN" },
      { name: "Hong Kong", code: "HK" },
      { name: "Hungary", code: "HU" },
      { name: "Iceland", code: "IS" },
      { name: "India", code: "IN" },
      { name: "Indonesia", code: "ID" },
      { name: "Iran, Islamic Republic Of", code: "IR" },
      { name: "Iraq", code: "IQ" },
      { name: "Ireland", code: "IE" },
      { name: "Isle of Man", code: "IM" },
      { name: "Israel", code: "IL" },
      { name: "Italy", code: "IT" },
      { name: "Jamaica", code: "JM" },
      { name: "Japan", code: "JP" },
      { name: "Jersey", code: "JE" },
      { name: "Jordan", code: "JO" },
      { name: "Kazakhstan", code: "KZ" },
      { name: "Kenya", code: "KE" },
      { name: "Kiribati", code: "KI" },
      { name: 'Korea, Democratic People"S Republic of', code: "KP" },
      { name: "Korea, Republic of", code: "KR" },
      { name: "Kuwait", code: "KW" },
      { name: "Kyrgyzstan", code: "KG" },
      { name: 'Lao People"S Democratic Republic', code: "LA" },
      { name: "Latvia", code: "LV" },
      { name: "Lebanon", code: "LB" },
      { name: "Lesotho", code: "LS" },
      { name: "Liberia", code: "LR" },
      { name: "Libyan Arab Jamahiriya", code: "LY" },
      { name: "Liechtenstein", code: "LI" },
      { name: "Lithuania", code: "LT" },
      { name: "Luxembourg", code: "LU" },
      { name: "Macao", code: "MO" },
      { name: "Macedonia, The Former Yugoslav Republic of", code: "MK" },
      { name: "Madagascar", code: "MG" },
      { name: "Malawi", code: "MW" },
      { name: "Malaysia", code: "MY" },
      { name: "Maldives", code: "MV" },
      { name: "Mali", code: "ML" },
      { name: "Malta", code: "MT" },
      { name: "Marshall Islands", code: "MH" },
      { name: "Martinique", code: "MQ" },
      { name: "Mauritania", code: "MR" },
      { name: "Mauritius", code: "MU" },
      { name: "Mayotte", code: "YT" },
      { name: "Mexico", code: "MX" },
      { name: "Micronesia, Federated States of", code: "FM" },
      { name: "Moldova, Republic of", code: "MD" },
      { name: "Monaco", code: "MC" },
      { name: "Mongolia", code: "MN" },
      { name: "Montenegro", code: "ME" },
      { name: "Montserrat", code: "MS" },
      { name: "Morocco", code: "MA" },
      { name: "Mozambique", code: "MZ" },
      { name: "Myanmar", code: "MM" },
      { name: "Namibia", code: "NA" },
      { name: "Nauru", code: "NR" },
      { name: "Nepal", code: "NP" },
      { name: "Netherlands", code: "NL" },
      { name: "Netherlands Antilles", code: "AN" },
      { name: "New Caledonia", code: "NC" },
      { name: "New Zealand", code: "NZ" },
      { name: "Nicaragua", code: "NI" },
      { name: "Niger", code: "NE" },
      { name: "Nigeria", code: "NG" },
      { name: "Niue", code: "NU" },
      { name: "Norfolk Island", code: "NF" },
      { name: "Northern Mariana Islands", code: "MP" },
      { name: "Norway", code: "NO" },
      { name: "Oman", code: "OM" },
      { name: "Pakistan", code: "PK" },
      { name: "Palau", code: "PW" },
      { name: "Palestinian Territory, Occupied", code: "PS" },
      { name: "Panama", code: "PA" },
      { name: "Papua New Guinea", code: "PG" },
      { name: "Paraguay", code: "PY" },
      { name: "Peru", code: "PE" },
      { name: "Philippines", code: "PH" },
      { name: "Pitcairn", code: "PN" },
      { name: "Poland", code: "PL" },
      { name: "Portugal", code: "PT" },
      { name: "Puerto Rico", code: "PR" },
      { name: "Qatar", code: "QA" },
      { name: "Reunion", code: "RE" },
      { name: "Romania", code: "RO" },
      { name: "Russian Federation", code: "RU" },
      { name: "RWANDA", code: "RW" },
      { name: "Saint Helena", code: "SH" },
      { name: "Saint Kitts and Nevis", code: "KN" },
      { name: "Saint Lucia", code: "LC" },
      { name: "Saint Pierre and Miquelon", code: "PM" },
      { name: "Saint Vincent and the Grenadines", code: "VC" },
      { name: "Samoa", code: "WS" },
      { name: "San Marino", code: "SM" },
      { name: "Sao Tome and Principe", code: "ST" },
      { name: "Saudi Arabia", code: "SA" },
      { name: "Senegal", code: "SN" },
      { name: "Serbia", code: "RS" },
      { name: "Seychelles", code: "SC" },
      { name: "Sierra Leone", code: "SL" },
      { name: "Singapore", code: "SG" },
      { name: "Slovakia", code: "SK" },
      { name: "Slovenia", code: "SI" },
      { name: "Solomon Islands", code: "SB" },
      { name: "Somalia", code: "SO" },
      { name: "South Africa", code: "ZA" },
      { name: "South Georgia and the South Sandwich Islands", code: "GS" },
      { name: "Spain", code: "ES" },
      { name: "Sri Lanka", code: "LK" },
      { name: "Sudan", code: "SD" },
      { name: "Suriname", code: "SR" },
      { name: "Svalbard and Jan Mayen", code: "SJ" },
      { name: "Swaziland", code: "SZ" },
      { name: "Sweden", code: "SE" },
      { name: "Switzerland", code: "CH" },
      { name: "Syrian Arab Republic", code: "SY" },
      { name: "Taiwan, Province of China", code: "TW" },
      { name: "Tajikistan", code: "TJ" },
      { name: "Tanzania, United Republic of", code: "TZ" },
      { name: "Thailand", code: "TH" },
      { name: "Timor-Leste", code: "TL" },
      { name: "Togo", code: "TG" },
      { name: "Tokelau", code: "TK" },
      { name: "Tonga", code: "TO" },
      { name: "Trinidad and Tobago", code: "TT" },
      { name: "Tunisia", code: "TN" },
      { name: "Turkey", code: "TR" },
      { name: "Turkmenistan", code: "TM" },
      { name: "Turks and Caicos Islands", code: "TC" },
      { name: "Tuvalu", code: "TV" },
      { name: "Uganda", code: "UG" },
      { name: "Ukraine", code: "UA" },
      { name: "United Arab Emirates", code: "AE" },
      { name: "United Kingdom", code: "GB" },
      { name: "United States", code: "US" },
      { name: "United States Minor Outlying Islands", code: "UM" },
      { name: "Uruguay", code: "UY" },
      { name: "Uzbekistan", code: "UZ" },
      { name: "Vanuatu", code: "VU" },
      { name: "Venezuela", code: "VE" },
      { name: "Viet Nam", code: "VN" },
      { name: "Virgin Islands, British", code: "VG" },
      { name: "Virgin Islands, U.S.", code: "VI" },
      { name: "Wallis and Futuna", code: "WF" },
      { name: "Western Sahara", code: "EH" },
      { name: "Yemen", code: "YE" },
      { name: "Zambia", code: "ZM" },
      { name: "Zimbabwe", code: "ZW" },
    ];

    var countrySelects = document.querySelectorAll("select.Country");
    let x = countries.sort((a, b) => {
      if (a.name > b.name) return;
      if (a.name < b.name) return -1;
      return 0;
    });

    for (let i = 0; i < countrySelects.length; i++) {
      let content = `<option value="" selected="selected">--Select Country--</option>`;
      for (let i = 0; i < x.length; i++) {
        content += `<option value="${x[i].name}">${x[i].name}</option>`;
      }
      // content += `</select>`;
      countrySelects[i].innerHTML = content;
    }
  }


  function handle_version_2_donation() {
    const donation_types = {
      SELF: "donating-for-self",
      THIRD_PARTY: "donating-on-behalf-of-third-party",
      ORGANISATION: "donation-for-or-as-an-organization"
    }

    const select_options = [{
      label: "--Select who is donating--",
      value: ""
    },
    {
      label: "Donating for Yourself",
      value: donation_types.SELF
    }, {
      label: "Donating on Behalf of Third Party",
      value: donation_types.THIRD_PARTY
    }, {
      label: "Donation for Or as An Organization",
      value: donation_types.ORGANISATION
    }
    ]
    var version_2_donation = document.querySelector("#version-2-donation #WhoIsDonating");
    let content = "";
    for (let i = 0; i < select_options.length; i++) {
      content += `<option value="${select_options[i].value}">${select_options[i].label}</option>`
    }
    version_2_donation ? version_2_donation.innerHTML = content : null

    var donation_forms = document.querySelector("#version-2-donation .donation-forms");
    var self_donation = document.getElementById("self_donation");
    var third_party_donation = document.getElementById("third_party_donation");
    var organisation_donation = document.getElementById("organisation_donation");

    
    version_2_donation?.addEventListener("change", (e) => {
      switch (e.target.value) {
        case donation_types.SELF:
          self_donation?.classList.remove("hidden")
          third_party_donation?.classList.add("hidden")
          organisation_donation?.classList.add("hidden")
          break;
        case donation_types.THIRD_PARTY:
          self_donation?.classList.add("hidden")
          third_party_donation?.classList.remove("hidden")
          organisation_donation?.classList.add("hidden")
          break;
        case donation_types.ORGANISATION:
          self_donation?.classList.add("hidden")
          third_party_donation?.classList.add("hidden")
          organisation_donation?.classList.remove("hidden")
          break;
        default:
          return
      }
    });


    function toggleDonationAmountSelect() {
      const Curr = {
        USD: "USD",
        Naira: "Naira",
      };

      var currencyRadios = document.getElementsByName("Currency");
      const nairaSelects = document.querySelectorAll(".nairaSelect");
      const usdSelects = document.querySelectorAll(".usdSelect");

      for (i = 0; i < currencyRadios.length; i++) {

        currencyRadios[i].addEventListener("change", ($event)=>{
          if ($event.target.checked) {
            switch ($event.target.value) {
              case Curr.USD:
                for(let i = 0; i<nairaSelects.length;i++){
                  nairaSelects[i]?.classList.add("hidden");
                }
                for(let i = 0; i<usdSelects.length;i++){
                  usdSelects[i]?.classList.remove("hidden");
                }
                break;  
              case Curr.Naira:
                for(let i = 0; i<nairaSelects.length;i++){
                  nairaSelects[i]?.classList.remove("hidden");
                }
                for(let i = 0; i<usdSelects.length;i++){
                  usdSelects[i]?.classList.add("hidden");
                }
                break;
  
              default:
                break;
            }
          }
        })
      }
    }
    toggleDonationAmountSelect();

  }
  handle_version_2_donation()




  listOfCountries();

  Init();
});
