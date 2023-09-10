<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- Font family -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet"> -->
  <!-- Animate.Style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Tailwind css -->
  <!-- <link rel="stylesheet" href="./stylesheets/tailwindcss/tailwind.css" /> -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Custom css -->
  <link rel="stylesheet" href="./stylesheets/main.css" />
</head>

<body>
  <header class="sticky">
    <?php
    // include_once("./components/toolbar.php");
    ?>
    <?php include_once("./components/toolbar-alt.php") ?>
  </header>

  <main>
    <section class="hero | bg-secondary">
      <div class="wrap-container">
        <div class="content-columns">
          <div class="text-wrap">
            <h1 class="animate__animated animate__fadeIn">Goal<br />Mission</h1>
            <p>Saving Lives…</p>
            <p>Unleashing The Power to Health & Wellness through the BIGAiD Web & Mobile App, transforming lives.</p>
            <div class="py-2 lg:py-4"></div>
            <div class="flex">
              <button class="call-to-action animate__animated animate__fadeInLeft">Donate</button>
              <div class="px-2"></div>
              <button class="call-to-action animate__animated animate__fadeInRight" data-type="inverted">Partner With Us</button>
            </div>
          </div>
          <div class="featured-image">
            <!-- <img src=" ./assets/images/Smiley-medic.svg" alt=""> -->
            <div class="img-static">
              <img src="./assets/images/beautiful-african-american-doctor-couple-white.svg" alt="" class=" animate__animated animate__fadeInUp">
            </div>
            <div class="img-absolute cursor-pointer">
              <img src="./assets/images/phone.svg" alt="" class="animate__animated animate__fadeInRight">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-primary">
      <div class="wrap-container">
        <div class="video-container">
          <div class="video">
            <video id="video1" width="100%" height="100%">
              <source src="./assets/videos/yt1s.com - Nature Beautiful short video 720p HD_480p.mp4" type="video/mp4">
              <source src="mov_bbb.ogg" type="video/ogg">
              Your browser does not support HTML video.
            </video>
          </div>
          <button class="play-button">
            <img src="./assets/icons/icon-video-play-button.svg" alt="video play button icon">
            <img src="./assets/icons/icon-video-pause-button.svg" alt="video pause button icon">
          </button>
        </div>
      </div>
    </section>
  </main>

  <!-- <div class="skew-design wrapper">
      <section class="first-section">
        <div class="container">
          <h2>First Section</h2>
        </div>
      </section>

      <section class="second-section">
        <div class="container">
          <h2>Second Section</h2>
        </div>
      </section>
    </div> -->




    <!-- jquery-3.7.0 -->
    <script src="./libs/jquery-3.7.0.min.js"></script>
  <script src="./scripts/main.js"></script>
  <script src="./scripts/main.jquery.js"></script>
</body>

</html>