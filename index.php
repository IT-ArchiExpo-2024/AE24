<!DOCTYPE html>
<html lang="en">
<?php include_once('navbar.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCHIEXPO 2024</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/LOGO ARCHIEXPO.png" />

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

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
            <h1 class="title pt-1 tw">
                <span>The Journey to</span>
                <br>
                <span class="oasis">Oasis</span>
                <br>
                <span>- Archiexpo 24 -</span>
            </h1>
        </div>
    </section>

    <section class="about">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <h1 class="desc">
                    <span class="subJudul tw">About Us</span>
                </h1>
            </div>

            <img src="assets/LOGO ARCHIEXPO.png" alt="LogoIc" class="col-7" style="width: 300px;">
            <div class="col-5 d-flex align-items-center justify-content-center ms-2">
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
    
    <section class="contact">
        <?php
        include('contact.php');
        ?>
    </section>
    <section class="timeline">
        <?php
        include('timeline.php');
        ?>
    </section>
    <div style="height: 9965px;"></div>

</body>

</html>