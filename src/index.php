<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- favicon -->
  <link rel="icon" href="./assets/icons/favicon.png" type="image/png" sizes="16x16">
  <!-- Font family -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet"> -->
  <!-- Animate.Style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Tailwind css -->
  <link rel="stylesheet" href="./stylesheets/tailwindcss/tailwind.css" />
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <!-- Custom css -->
  <link rel="stylesheet" href="./stylesheets/main.css" />
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Toastr -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>
  <!-- HEADER -->
  <header class="sticky">
    <div class="container mx-auto bg-wrap">
      <nav class="alt-toolbar toolbar-bg">
        <div class="wrap-container">
          <!-- <div class="mx-auto max-w-screen-xl px-2 md:px-6 lg:px-8"> -->
          <div class="flex items-center justify-between">
            <!-- Brand logo -->
            <!-- <a class="navbar-brand" href="#">
              <img src="assets/images/brand-logo-white.png" loading="lazy"/>
            </a> -->
            <a class="navbar-brand" href="./" id="primary-img">
              <img src="./assets/images/brand-logo-white.png" alt="BIGAiD" loading="lazy">
            </a>
            <a class="navbar-brand hidden" href="./" id="secondary-img">
              <img src="./assets/images/brand-logo-primary.png" alt="BIGAiD" loading="lazy">
            </a>

            <!-- Mobile menu button-->
            <button type="button" class="navbar-toggler | relative inline-flex items-center justify-center rounded-md p-2 text-white" aria-controls="primary-navigation" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!--
                    Icon when menu is closed.
        
                    Menu open: "hidden", Menu closed: "block"
                  -->
              <svg class="menu h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!--
                    Icon when menu is open.
        
                    Menu open: "block", Menu closed: "hidden"
                  -->
              <svg class="close h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>

            <!-- <div class="flex items-center"> -->
            <ul class="nav-list nav-collapse drop-shadow-sm" id="primary-navigation">
              <li class="nav-item"><a href="./pages/contact-us.php" class="nav-link">Home</a></li>
              <li class="nav-item">
                <a href="./pages/about-us.php" class="nav-link">About Us</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Contact Us</a>
              </li>
              <li class="nav-item">
                <a href="./pages/volunteer-and-partnership-registration.php" class="nav-link">Volunteer</a>
              </li>
              <li class="nav-item">
                <a href="./#donate-now" class="nav-link btn primary-button">Donate</a>
              </li>
            </ul>

            <!-- <div class="profile-avatar">
                      <img src="./assets/icons/profile-avatar.svg" alt="profile avatar" loading="lazy"/>
                  </div>
                  <button type="button" class="relative p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                      <span class="absolute -inset-1.5"></span>
                      <span class="sr-only">View profile</span>
                      <svg class="h-6 w-6" width="22" height="23" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.23987 1.65752C8.24896 0.598507 9.65837 0.0153198 11.214 0.0153198C12.7779 0.0153198 14.192 0.594979 15.1964 1.64744C16.2118 2.71149 16.7064 4.15761 16.5903 5.71916C16.3601 8.79992 13.9483 11.3061 11.214 11.3061C8.47971 11.3061 6.0721 8.80043 5.83824 5.72017C5.72053 4.17273 6.21833 2.72964 7.23987 1.65752Z" fill="white" />
                          <path d="M2.08759 22.5968H20.3404C20.5793 22.5998 20.8159 22.5511 21.033 22.454C21.2501 22.357 21.4422 22.2141 21.5953 22.0358C21.9324 21.6442 22.0682 21.1094 21.9676 20.5685C21.53 18.2085 20.1641 16.2261 18.0173 14.8344C16.1101 13.599 13.6942 12.919 11.214 12.919C8.7338 12.919 6.31789 13.5995 4.41068 14.8344C2.2639 16.2256 0.89805 18.208 0.460398 20.568C0.359798 21.1089 0.495657 21.6437 0.832712 22.0353C0.98579 22.2137 1.17786 22.3566 1.39494 22.4538C1.61201 22.5509 1.84864 22.5998 2.08759 22.5968Z" fill="white" />
                      </svg>
                  </button> -->
            <!-- </div> -->
          </div>
          <!-- </div> -->
        </div>
      </nav>
    </div>
  </header>

  <!-- MAIN -->
  <main class="home">
    <!-- HERO -->
    <section>
      <div class="container mx-auto">
        <div class="hero | bg-secondary relative">
          <div class="wrap-container">
            <div class="content-columns">
              <div class="text-wrap">
                <h1 class="animate__animated animate__fadeIn">
                  Goal<br>Mission
                </h1>
                <p class="tagline">Saving Lives…</p>
                <p>
                  Unleashing The Power to Health & Wellness through the BIGAiD
                  Web & Mobile App, transforming lives.
                </p>
                <div class="py-2 lg:py-4"></div>
                <div class="flex">
                  <button class="call-to-action animate__animated animate__fadeInLeft">
                    Donate
                  </button>
                  <div class="mx-1 md:px-2"></div>
                  <button class="call-to-action animate__animated animate__fadeInRight" data-type="inverted">
                    Partner With Us
                  </button>
                </div>
              </div>
              <div class="featured-image">
                <!-- <img src=" ./assets/images/Smiley-medic.svg" alt="" loading="lazy"/> -->
                <div class="img-static">
                  <img src="./assets/images/beautiful-african-american-doctor-couple-white.png" alt="Hero featured image" class="animate__animated animate__fadeInUp" loading="lazy">
                </div>
                <div class="img-absolute cursor-pointer">
                  <img src="./assets/images/phone.png" alt="Phone image" class="animate__animated animate__fadeInRight" loading="lazy">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="hidden container mx-auto">
          <div class="hero-alt">
            <div class="wrap-container">
              <div class="text-wrap">
                <h1 class="animate__animated animate__fadeIn">Goal<br>Mission</h1>
                <p>Saving Lives…</p>
                <p>Unleashing The Power to Health & <br>Wellness through the BIGAiD Web & <br>Mobile App, transforming lives.</p>
                <div class="py-2 lg:py-4"></div>
                <div class="flex">
                  <button class="call-to-action animate__animated animate__fadeInLeft">Donate</button>
                  <div class="px-2"></div>
                  <button class="call-to-action animate__animated animate__fadeInRight" data-type="inverted">Partner With Us</button>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </section>

    <section>
      <div class="bg-primary container mx-auto pseudo-after-bottom-white-tape">
        <div class="wrap-container fade-in">
          <div class="video-container">
            <div class="video thumbnail">
              <video id="video1" width="100" height="100">
                <source src="./assets/videos/sample-video.mp4" type="video/mp4" />
                <source src="mov_bbb.ogg" type="video/ogg" />
                Your browser does not support HTML video.
              </video>
              <button class="play-button">
                <!-- <img src="./assets/icons/icon-video-play-button.svg" alt="video play button icon"  loading="lazy"/>
            <img src="./assets/icons/icon-video-pause-button.svg" alt="video pause button icon" loading="lazy"/> -->
                <img src="./assets/icons/icon-play-solid.svg" alt="video play button icon" loading="lazy" />
                <img src="./assets/icons/icon-pause-solid.svg" alt="video pause button icon" loading="lazy" />
              </button>
            </div>
          </div>

          <div class="min-full-width flex fade-in">
            <div class="">
              <img src="./assets/images/lady-holding-a-phone-arrow.png" alt="" loading="lazy" />
            </div>
            <!-- <div class="bga-mt-50" style="margin-left: -70px;"> -->
            <div class="" style="margin-top: 9%; margin-left: -3.5%">
              <img src="./assets/images/we-understand-the-challenges.png" alt="" loading="lazy" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <article class="overflow-hidden">
      <div class="container mx-auto">
        <div class="wrap-container overflow-hidden w-100">
          <h2 class="section-title text-primary mb-4">The Mission</h2>

          <div class="grid md:grid-cols-12">
            <div class="md:col-span-6 order-2 md:order-1 fade-in">
              <p class="md-text-size">
                BIGAiD Foundation, a non-governmental organization, is
                committed to revolutionizing healthcare access for individuals
                across rural and urban areas, low- & mid-income earners,
                especially in Nigeria and Africa. In the face of inadequate
                healthcare systems, our mission is clear - to provide
                essential healthcare knowledge, education, and professional
                intervention through a user-friendly web & mobile app. Our
                goal is to make healthcare accessible, communication
                effortless, and instant intervention to help SAVE LIVES.
              </p>
            </div>
            <div class="md:col-span-6 order-1 md:order-2 relative fade-in">
              <div class="featured-image">
                <img src="./assets/images/space-traveller.png" alt="" loading="lazy" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article class="overflow-hidden">
      <div class="container mx-auto">
        <div class="wrap-container py-8">
          <h2 class="section-title text-primary text-center mb-4 fade-in">
            Our Advocacy & Community<br>Projects In Pictures
          </h2>
          <ul role="list" class="gallery-type-1 | grid grid-cols-12 gap-2 md:gap-4 fade-in">
            <li class="col-span-6 md:col-span-3">
              <img src="./assets/images/Rectangle-45.png" alt="" loading="lazy" />
            </li>
            <li class="col-span-6 md:col-span-3">
              <img src="./assets/images/Rectangle-46.png" alt="" loading="lazy" />
            </li>
            <li class="col-span-6 md:col-span-3">
              <img src="./assets/images/Rectangle-47.png" alt="" loading="lazy" />
            </li>
            <li class="col-span-6 md:col-span-3">
              <img src="./assets/images/Rectangle-48.png" alt="" loading="lazy" />
            </li>
          </ul>
        </div>
      </div>
    </article>

    <article class="">
      <div class="bg-light container mx-auto">
        <div class="wrap-container py-8 md:py-16">
          <div class="grid grid-cols-12 gap-4 md:gap-8">
            <div class="col-span-12 md:col-span-6">
              <h2 class="section-title text-primary mb-4 fade-in">
                Your Donation Equals <br>Many Lives Saved
              </h2>
              <div class="featured-image | mb-6 fade-in" style="
                    max-height: 300px;
                    overflow: hidden;
                    border-radius: 34px;
                    background-image: url(./assets/images/donation-featured-image.png);
                    height: 300px;
                    background-position: center;
                  ">
                <!-- <img
                    src="./assets/images/donation-featured-image.png"
                    alt="" loading="lazy"
                  /> -->
              </div>
              <p class="md-text-size fade-in">
                Donating to the BIGAiD App & Health Education project gives
                you the opportunity to save a life, help millions with the
                opportunity to good healthcare access, contribute to community
                social good, and help meet the UNSDGs #Envision2030 Goal 3 of
                global health & well-being vision. The state of healthcare in
                Nigeria and most African Countries has always been of pressing
                concern.
              </p>
            </div>
            <div class="col-span-12 md:col-span-6">
              <p class="md-text-size fade-in">
                The avoidable loss of lives and the breakdown of citizens’
                health and well-being due to the several factors associated
                with the worsening healthcare system, lack of adequate health
                education, poverty, and the brain drain syndrome of our
                medical professionals to the West for reasons linked to lack
                or inadequate economic and social amenities, is now the story
                of millions of families today. BIGAiD recognizes the dire need
                for prompt intervention and intensive advocacy for all to
                access.
              </p>
              <br class="hidden md:block" />
              <br>
              <p class="md-text-size fade-in">
                Through our innovative app and creative education programs, we
                aim to bridge the gap between individuals and quality
                healthcare. Our platform enables easy connectivity with
                healthcare providers, hospitals, and doctors, empowering users
                to access medical assistance promptly.
              </p>
            </div>
          </div>
        </div>
      </div>
    </article>

    <section class="blob-list-wrapper">
      <div class="container mx-auto mb-8">
        <div class="wrap-container pt-8 md:pt-16">
          <h2 class="section-title text-primary text-center mb-4 fade-in">
            5 Key Features Of The App
          </h2>

          <div class="blog-highlights | flex">
            <ul class="blob-list | grid grid-flow-row-dense grid-cols-3 grid-rows-5 gap-4">
              <li class="blob-item"></li>
              <li class="blob-item">
                <div class="blob fade-in" style="left: -15%">
                  <img src="./assets/images/blob-1.png" alt="" loading="lazy" />
                </div>
              </li>
              <li class="blob-item"></li>
              <li class="blob-item row-span-2 fade-in">
                <img src="./assets/images/phone-2.png" alt="" loading="lazy" />
              </li>
              <li class="blob-item col-span-2 fade-in">
                <div class="blob" style="top: -45%; left: 8%">
                  <img src="./assets/images/blob-2.png" alt="" loading="lazy" />
                </div>
              </li>
              <li class="blob-item fade-in">
                <div class="blob" style="top: -60%; right: -15%">
                  <img src="./assets/images/blob-3.png" alt="" loading="lazy" />
                </div>
              </li>
              <li class="blob-item"></li>
              <li class="blob-item"></li>
              <li class="blob-item col-span-2 fade-in">
                <div class="blob" style="top: -80%; right: -10%">
                  <img src="./assets/images/blob-4.png" alt="" loading="lazy" />
                </div>
              </li>
              <li class="blob-item"></li>
              <li class="blob-item fade-in">
                <div class="blob" style="top: -125%; left: -15%">
                  <img src="./assets/images/blob-5.png" alt="" loading="lazy" />
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <article>
      <div class="bg-light container mx-auto negative-top-margin-500">
        <div class="skew-bg-article">
          <div class="wrap-container">
            <h2 class="section-title text-primary mb-4 fade-in">
              Your Wellness Power Through <br>Health Education
            </h2>
            <div class="grid md:grid-cols-12 md:gap-4">
              <div class="col-span-5">
                <p class="md-text-size fade-in">
                  We empower communities to prioritize health through. a
                  variety of wellness Programs and initiatives BIGAiD’s
                  upcoming projects extend beyond immediate medical
                  intervention.
                </p>
                <br>
                <p class="md-text-size fade-in">
                  Our initiatives like the BIGAiD Walk4Wellness Campaign
                  Project and the monthly H&W Media Chat are advocacy that
                  focuses on spreading awareness and empowering individuals
                  with accurate health management information through
                  platforms like the Media Convert podcast.
                </p>
              </div>
              <div class="col-span-7 relative">
                <!-- <div class="float-featured-image">
                    <img src="./assets/images/man-carry-child.png" alt="" loading="lazy">
                  </div> -->
                <div class="float-featured-image fade-in">
                  <img src="./assets/images/man-carry-child.png" alt="" loading="lazy" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <section>
      <div class="container mx-auto">
        <div class="wrap-container">
          <h2 class="section-title text-primary text-center mb-4 fade-in">
            Empower & Save Lives with BIGAiD
          </h2>

          <div class="donation-info | min-full-width">
            <div class="donation-card">
              <h3 class="fw-bolder fade-in">How to Donate</h3>
              <p class="fw-semi-bold fade-in">
                Click the "Donate Now" button below to make a secure online
                contribution.<br>Together, we can make a substantial impact
                and raise funds to transform healthcare in Nigeria and Africa.
              </p>
            </div>
            <div class="featured-image-container">
              <div class="featured-image fade-in">
                <img src="./assets/images/lady-card-transaction-alt.png" alt="" loading="lazy" />
              </div>
            </div>
          </div>

          <div id="donate-now">
            <form action="" class="py-8">
              <div class="form-group mb-4 md:mb-8 fade-in">
                <input type="text" id="Name" placeholder="Name" class="init-control block w-full" />
              </div>
              <div class="form-group mb-4 md:mb-8 fade-in">
                <input type="text" id="Email" placeholder="Email" class="init-control block w-full" />
              </div>

              <div class="text-center">
                <button class="call-to-action fade-in">Donate Now</button>
              </div>
            </form>

            <p class="text-center md-text-size fw-light fade-in">
              BIGAiD Foundation is a registered non-profit organization.
              <br class="hidden md:block" />Your donation is tax-deductible,
              and you'll receive a receipt for your contribution. Together,
              let's create a healthier, brighter future through accessible
              healthcare.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container mx-auto min-full-width">
        <div class="wrap-container pt-8 md:py-16">
          <h2 class="section-title text-primary mb-4 text-center fade-in">
            Donation Milestone
          </h2>

          <ul class="milestones-graph">
            <li class="milestone fade-in">
              <!-- A -->
              <div class="label">
                <div class="amount-target">Target $100,000</div>
                <div class="amount-raised">$5000 Raised</div>
              </div>
              <div class="guage africa">
                <input class="donation-raised" type="text" hidden readonly value="6" />
              </div>
            </li>
            <li class="milestone fade-in">
              <!-- B -->
              <div class="label">
                <div class="amount-target">Target $100</div>
                <div class="amount-raised">%10</div>
              </div>
              <div class="guage europe">
                <input class="donation-raised" type="text" hidden readonly value="20" />
              </div>
            </li>
            <li class="milestone fade-in">
              <!-- C -->
              <div class="label">
                <div class="amount-target">No of Persons</div>
                <div class="amount-raised">2,124 Donated</div>
              </div>
              <div class="guage america">
                <input class="donation-raised" type="text" hidden readonly value="90" />
              </div>
            </li>
          </ul>

          <!-- PIE CHART -->

          <div class="pie-chart | mx-auto text-center">
            <canvas id="myChart" class="fade-in"></canvas>
            <p class="mx-auto fw-bolder text-primary fs-250 mt-4 fade-in">
              Donation by Region/Country
            </p>
          </div>
        </div>
      </div>
    </section>

    <article>
      <div class="bg-light container mx-auto">
        <div class="skew-bg-article">
          <div class="wrap-container">
            <div class="donation-article">
              <div class="article-card">
                <h2 class="section-title text-primary mb-4 fade-in">
                  Changing Lives
                </h2>
                <h3 class="text-secondary section-tagline fade-in">
                  Your Donation, <br>Many Lives Saved
                </h3>
                <p class="md-text-size fade-in">
                  Every contribution you make directly impacts the lives of
                  those in need. By donating, you're actively participating in
                  reshaping healthcare access for the undeserved and saving
                  lives
                </p>
              </div>
              <div class="featured-image-container">
                <div class="featured-image fade-in" style="
                      max-height: 400px;
                      overflow: hidden;
                      border-radius: 34px;
                      background-image: url(./assets/images/man-woman-laughs.png);
                      height: 400px;
                      background-position: center;
                    ">
                  <!-- <img src="./assets/images/man-woman-laughs.png" alt="" loading="lazy" /> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article>
      <!-- min-full-width -->
      <div class="container mx-auto">
        <div class="wrap-container">
          <div class="stay-updated-article">
            <div>
              <div class="featured-image fade-in">
                <img src="./assets/images/illustration-one.png" alt="" loading="lazy" />
              </div>
            </div>
            <div>
              <h2 class="section-title text-secondary mb-4 fade-in">
                Stay<br>Updated
              </h2>
              <p class="md-text-size fade-in">
                Be the first to know when we go live.<br>Follow Exciting
                health tips & advice from our blog, Know what’s new about the
                App and Launch Date, Get insights on every stage of meeting
                the funding benchmark on donations.
              </p>
            </div>
          </div>
        </div>
      </div>
    </article>

    <section>
      <div class="container mx-auto min-full-width">
        <div class="wrap-container py-8 md:py-16">
          <div class="grid grid-cols-12 items-center">
            <div class="col-span-12 md:col-span-5">
              <h2 class="section-title mb-4 text-primary fade-in">
                Sign Up to our<br>Newsletter
              </h2>
              <!-- NEWSLETTER FORM -->
              <form action="">
                <div class="form-group mb-3 fade-in">
                  <input type="text" id="Name" placeholder="Name" class="form-control block w-full rounded" />
                </div>
                <div class="form-group mb-3 fade-in">
                  <input type="text" id="Email" placeholder="Email Address" class="form-control block w-full rounded" />
                </div>

                <div>
                  <button class="primary-button fade-in">Submit</button>
                </div>
              </form>
            </div>
            <div class="col-span-12 md:col-span-7">
              <div class="featured-image fade-in">
                <img src="./assets/images/illustration-email-messaging.png" alt="" loading="lazy" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <article>
      <div class="container mx-auto bg-primary">
        <div class="primary-bg-skew text-white">
          <div class="wrap-container">
            <h2 class="section-title mb-2 md:mb-16 text-center fade-in">
              Join Us in Transforming<br>Healthcare
            </h2>

            <div class="grid grid-cols-12 gap-4">
              <div class="col-span-12 md:col-span-6">
                <p class="md-text-size fade-in">
                  The BIGAiD Foundation, in partnership with individuals,
                  NGOs, organizations, governments, and businesses, is working
                  towards a healthier future. Your support is crucial in
                  making quality healthcare accessible to all.
                </p>
              </div>
              <div class="col-span-12 md:col-span-6">
                <div class="featured-image rounded-lg overflow-hidden fade-in" style="max-width: 400px; margin: 0 auto">
                  <img src="./assets/images/doctor-hand-gloves-alt.png" alt="" loading="lazy" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>

    <!-- SIGN UP -->
    <section>
      <div class="container mx-auto py-8 md:py-14">
        <div class="wrap-container">
          <div class="grid grid-cols-12 gap-2 md:gap-8">
            <div class="col-span-12 md:col-span-6">
              <div class="featured-image rounded-lg overflow-hidden fade-in">
                <img src="./assets/images/handshakes-alt.png" alt="" loading="lazy" />
              </div>
            </div>

            <!-- <div class="col-span-12 md:col-span-6 md:px-16"> -->
            <div class="col-span-12 md:col-span-6">
              <h2 class="section-title mb-2 text-primary fade-in">Sign Up Today</h2>
              <h3 class="section-tagline text-secondary mb-4 fade-in">
                Become a Volunteer or Partner
              </h3>
              <p class="md-text-size mb-4 fade-in">
                We invite you to be part of the change and social impact in
                the health & wellness Sector (This is strictly for Medical
                professionals, Institutions and health Emergency service
                providers)
              </p>

              <a href="./pages/volunteer-and-partnership-registration.php" class="inline-block primary-button fade-in">Join Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <!-- Toastr -->

  <div>
    <h1><b>Toastr</b></h1>
    <div>
      <h4>Popup Type</h4>
      <p>Toastr have 4 popup type and the different is icon and background</p>
      <button id="success">Success</button>
      <button id="info">Info</button>
      <button id="error">Error</button>
      <button id="warning">Warning</button>
    </div>
  </div>


  <!-- Go to top -->
  <button id="myBtn" title="Go to top">
    <img src="./assets/icons/arrow-up-solid.png" alt="" loading="lazy"/>
  </button>

  <!--  -->
  <!-- FOOTER -->
  <footer class="bg-primary">
    <div class="footer container mx-auto">
      <div class="wrap-container">
        <div class="grid grid-cols-12 gap-4">
          <div class="col-span-12 md:col-span-7">
            <p class="mb-4">
              BIGAiD Foundation is a non-profit organization that promotes the
              advancement of health, nutrition, well-being, and social good.
              Our goal is to enable individuals, families, and communities to
              meet the global UNSDGs 2030 by improving our world and ensuring
              health and well-being for all to enjoy healthy and satisfying
              lives via advocacy, education, and intervention.
            </p>
            <ul class="social-media-handles mb-4">
              <li class="social-icon">
                <a href="#">
                  <span class="sr-only">LinkedIn</span>
                  <img src="./assets/icons/icon-linkedIn.svg" alt="" loading="lazy" />
                </a>
              </li>
              <li class="social-icon">
                <a href="#">
                  <span class="sr-only">Facebook</span>
                  <img src="./assets/icons/icon-facebook.svg" alt="" loading="lazy" />
                </a>
              </li>
              <li class="social-icon">
                <a href="#">
                  <span class="sr-only">Twitter</span>
                  <img src="./assets/icons/icon-twitter.svg" alt="" loading="lazy" />
                </a>
              </li>
              <li class="social-icon">
                <a href="#">
                  <span class="sr-only">Instagram</span>
                  <img src="./assets/icons/icon-instagram.svg" alt="" loading="lazy" />
                </a>
              </li>
              <li class="social-icon">
                <a href="#">
                  <span class="sr-only">Youtube</span>
                  <img src="./assets/icons/icon-youtube.svg" alt="" loading="lazy" />
                </a>
              </li>
              <li class="social-icon">
                <a href="#">
                  <span class="sr-only">Tiktok</span>
                  <img src="./assets/icons/icon-tiktok.svg" alt="" loading="lazy" />
                </a>
              </li>
              <li class="social-icon">
                <a href="#">
                  <span class="sr-only">Gmail</span>
                  <img src="./assets/icons/icon-gmail.svg" alt="" loading="lazy" />
                </a>
              </li>
            </ul>

            <div class="copyright-and-policy">
              <div>
                Copyright © 2023, BIGAiD Foundation. All Rights Reserved
              </div>
              <div>Privacy Policy | Terms & Condition</div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-5 flex items-end">
            <ul class="partners-logos">
              <li>
                <img src="./assets/images/BIGAID-foundation-logo.png" alt="" loading="lazy" />
              </li>
              <li>
                <img src="./assets/images/SDG-logo.png" alt="" loading="lazy" />
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- COOKIES NOTIFICATION BANNER -->
    <div>
      <?php include_once("./components/cookies-notification-banner.php"); ?>
    </div>
  </footer>

  <!-- jquery-3.7.0 -->
  <script src="./libs/jquery-3.7.0.min.js"></script>
  <script src="./scripts/main.js"></script>
  <script src="./scripts/main.jquery.js"></script>
  <!-- Pie Chart -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById("myChart");

    new Chart(ctx, {
      type: "pie",
      data: {
        labels: ["Africa", "Europe", "America"],
        datasets: [{
          label: " % Donation",
          data: [15, 5, 80].map((num) => {
            return num / 100;
          }),
          backgroundColor: ["#FF00E7", "#48CBFF", "#0A0559"],
          borderWidth: 5,
        }, ],
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
    });
  </script>
</body>

</html>