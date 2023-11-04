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

        .bg-plate {
            /* background-color: red; */
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;

        }

        .skew::before {
            content: "";
            display: block;
            background-color: #00034b;
            color: #ffffff;
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            transform: skew(0deg, -5deg);
            transform-origin: left;
            z-index: 1;
        }

        .content {
            position: inherit;
            z-index: 5;
            color: white;
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;
            font-size: 4rem;
            font-weight: bold;
            padding-top: .5em;
            padding-bottom: 1.5em;
        }
    </style>
</head>

<body>

    <header class="sticky">
        <!-- HEADER -->
        <?php
        include_once("./components/header.php")
        ?>
    </header>

    <main>
        <div>
            <div class="container mx-auto mt-16">
                <div class="wrap-container relative">
                    <div class="bg-plate skew"></div>
                    <div class="content">SECTION</div>
                </div>
            </div>
        </div>


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