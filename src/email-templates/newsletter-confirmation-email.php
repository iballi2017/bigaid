<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter confirmation</title>


    <style>
        /**Font family*/
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap");

        :root {
            --fw-light: 400;
            --fw-semibold: 500;
            --fw-bold: 600;

            --ff-body: "Poppins", sans-serif;
        }

        *::after {
            box-sizing: border-box;
        }

        /* Remove default margin */
        * {
            margin: 0;
            padding: 0;
            font: inherit;
        }


        body {
            font-size: 15px;
            font-family: var(--ff-body)
        }

        .fw-bold {
            font-weight: var(--fw-bold);
        }

        .template-wrapper {
            max-width: 500px;
            margin: 0 auto;
        }

        .table {
            width: 100%;

        }

        .table .head {
            border: 1px solid #ccc;
            padding: 1em .4em;
            text-align: center;
        }

        .table .head .brand-logo {
            max-width: 90px;
            margin: 0 auto;
        }

        .table .head .brand-logo img {
            width: 100%;
        }

        .table th {
            font-weight: 400;
        }

        .table th,
        .table td {
            text-align: left;
            padding: .4em;
        }
    </style>

</head>

<body>


    <div class="template-wrapper">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <div class="head">
                            <div class="brand-logo">
                                <img src="./assets/images/brand-logo-primary.png" alt="">
                            </div>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                        <p class="fw-bold">
                            Congratulations ….!
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <p>Thanks for taking out time to subscribe to the BIGAiD Newsletter!<br /><br />
                            We look forward to keeping you updated regularly as events unfold. In the meantime, you can check out what events are coming up on the BIGAiD website and follow us on our social media platforms so you don’t miss out on activities.
                        </p>
                    </th>
                </tr>
                <tr>
                    <th>
                        <p>

                            Sincerely,<br/><br/>
                            Signed:<br/>
                            President<br/>
                            BIGAiD Foundation<br/><br/>
                            <strong class="fw-bold">One Goal, One Mission, Saving Lives</strong>
                        </p>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>