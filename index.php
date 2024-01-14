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

    @font-face {
        font-family: Aurora;
        src: url('assets/fonts/Aurora.otf');
    }

    .title {
        font-family: JustCosmic;
        margin-left: 50px;
    }

    .judul {
        font-family: JustComic;
    }

    .subJudul {
        font-family: Aurora;
    }

    .keterangan {
        font-family: Baskerville;
    }

    .tw {
        color: white;
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

    .about {
        margin-bottom: 400px;
    }

    body {
        overflow-x: hidden;
    }

    @media screen and (min-width: 992px) {
        .home {
            margin-bottom: 850px;
        }

        body {
            background: url('assets/bgwebsite_archiexpo.png');
            background-size: cover;
            background-repeat: no-repeat;
            overflow-x: hidden !important;
        }
    }

    @media screen and (max-width: 991.9px) {
        body {
            background: url('assets/bgwebsite_archiexpo.png');
            background-position: top;
        }
    }
    </style>
</head>

<body>
    <section class="home">
        <div>
            <h1 class="title tw">
                <div class="col lg-12 md-4 sm-4">
                    The Journey to
                </div>
                <div class="oasis col lg-12 md-4 sm-4">
                    Oasis
                </div>
                <div class="col lg-12 md-4 sm-4">
                    - Archiexpo 24 -
                </div>
            </h1>
        </div>
    </section>

    <section class="about d-flex align-items-center justify-content-center">
        <div class="row d-flex align-items-center justify-content-center w-75">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <h1 class="desc">
                    <span class="subJudul tw">About Us</span>
                </h1>
            </div>

            <img src="assets/LOGO ARCHIEXPO.png" alt="LogoIc" class="col-lg-6 md-4" style="width: 300px; ">
            <div class="col-lg-6 ms-3 md-8 d-flex align-items-center justify-content-center ms-2">
                <span class="keterangan tw">
                    The Architecture Expo 2024 Design Competition is a competition held by Architecture Expo to produce
                    unique,
                    interesting and fascinating exhibition designs. This national level competition has been held year
                    after
                    year by HIMAARTRA. With the theme of this year's contest, "Human Needs in Dynamic Building: The
                    Quest to
                    Oasis”, the participants were invited to be aware of the importance of human-centered architecture
                    in
                    dynamic building design. In addition to the participants designing the exhibition, we want them to
                    take
                    home some important lessons that they can apply in each of their designs
                </span>
            </div>
        </div>
    </section>

    <section class="merch">
        <?php include "san_lkti_archifest.php" ?>
    </section>

    <section class="merch">
        <?php include "merch.php" ?>
    </section>

</body>

</html>