<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
     <!-- Tailwind css -->
  <link rel="stylesheet" href="./stylesheets/tailwindcss/tailwind.css" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <!-- Custom css -->
  <link rel="stylesheet" href="./stylesheets/main.css" />


    <style>
        section:nth-child(odd) {
            min-height: 700px;
            background-color: lawngreen;
        }

        section:nth-child(even) {
            min-height: 700px;
        }
    </style>
</head>

<body>

    <header class="sticky">
        <!-- HEADER -->
        <?php
        include_once("./components/toolbar-alt.php")
        ?>
    </header>

    <main>
        <section>SECTION</section>
        <section>SECTION</section>
        <section>SECTION</section>
        <section>SECTION</section>
        <section>SECTION</section>
    </main>



    <!-- jquery-3.7.0 -->
    <script src="./libs/jquery-3.7.0.min.js"></script>
    <script src="./scripts/main.js"></script>
    <script src="./scripts/main.jquery.js"></script>
</body>

</html>