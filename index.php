<!DOCTYPE html>
<html lang="en">
<?php include_once('navbar.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCHIEXPO 2024</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/LOGO ARCHIEXPO.png" />

    <style>
        @font-face {
            font-family: JustCosmic;
            src: url('assets/fonts/Just Cosmic.otf');
        }

        .title {
            font-family: JustCosmic;
            margin-left: 50px;
        }

        .title {
            animation: fadeInAnimation ease 3s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }

        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .oasis {
            font-size: 85px;
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <section class="home">
        <div>
            <h1 class="title">
                <span>The Journey to</span>
                <br>
                <span class="oasis">Oasis</span>
                <br>
                <span>- Archiexpo 24 -</span>
            </h1>
        </div>
    </section>
</body>

</html>