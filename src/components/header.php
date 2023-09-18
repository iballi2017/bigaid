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
  <link rel="stylesheet" href="../stylesheets/tailwindcss/tailwind.css" />
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <!-- Custom css -->
  <link rel="stylesheet" href="../stylesheets/main.css" />
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
            <a class="navbar-brand" href="#" id="primary-img">
              <img src="../assets/images/brand-logo-white.png">
            </a>
            <a class="navbar-brand hidden" href="#" id="secondary-img">
              <img src="../assets/images/brand-logo-primary.png">
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
              <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Volunteer</a></li>
              <li class="nav-item"><a href="../#donate-now" class="nav-link btn primary-button">Donate</a></li>
            </ul>

            <!-- <div class="profile-avatar">
                    <img src="./assets/icons/profile-avatar.svg" alt="profile avatar">
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
  <main>