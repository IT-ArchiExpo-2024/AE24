<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <title>ARCHIEXPO 2024</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/LOGO ARCHIEXPO.png" />
</head>

<style>
    body {
        overflow-x: hidden;
    }

    .end {
        text-align: end;
    }

    @font-face {
        font-family: JustCosmic;
        src: url('assets/fonts/Just Cosmic.otf');
    }

    @font-face {
        font-family: Aurora;
        src: url('assets/fonts/Aurora.otf');
    }

    @font-face {
        font-family: Mermaid;
        src: url('assets/fonts/Mermaid1001.ttf');
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
        font-family: Mermaid;
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

    /* .transblur {
        background: transparent;
        backdrop-filter: blur(10px);
        border: 1px solid white;
        border-radius: 10px;
        position: relative;
        z-index: 1;
    } */

    .swiper-pagination {
        visibility: hidden;
    }

    /* besar */
    @media screen and (min-width: 1921px) {



        .archieAbout {
            transform: translateY(10em);
        }

        .logoBlur {
            border-radius: 10px;
            border: 1px solid white;
            background: transparent;
            backdrop-filter: blur(10px);
        }

        .soon {
            width: 800px;
        }

        body {
            background: rgb(55, 150, 141);
            background: linear-gradient(142deg, rgba(55, 150, 141, 1) 100%, rgba(70, 171, 153, 1) 100%);
        }

        .journey {
            background-repeat: no-repeat;
            padding-top: 100px;
        }

        .home {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_Home.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
            background-size: cover;
        }

        .maskot {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_Maskot.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
            background-size: cover;
            text-align: center;


        }

        .mid {
            text-align: center;
        }

        .about {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_About.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
            background-size: cover;


        }

        .expo {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_Expo.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
            background-size: cover;
            padding-top: 20vh;
            !important
        }

        .sanLKTI {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_sanLKTI.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
            background-size: cover;
        }

        .archifest {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_Archifest.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
            background-size: cover;
        }

        .gada {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/Artboard_2_copy_8.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
            background-size: cover;
        }

        .asf {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_ASF.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
            background-size: cover;
        }

        .timeline {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_Timeline2.png");
            background-position: top;
            background-size: cover;
        }

        .kontak {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_Kontak.png");
            min-height: 290px;
            background-position: top;
            background-size: cover;
        }

        .contact_title {
            color: white;
            font-family: JustCosmic;
            font-size: 80px;
            font-weight: 800px;
        }

        .merchs {
            background-repeat: no-repeat;
            max-height: 829px;
            background-image: url("assets/bg/architectsheet/AE_Sponsor.png");
            min-height: 600px;
            background-position: top;
            background-size: cover;
        }

        .endsponsor {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_Sponsor.png");
            min-height: 600px;
            background-position: top;
            background-size: cover;
        }
    }

    /* sedang */
    @media screen and (min-width: 992px) and (max-width: 1920px) {

        .imgCountdown{
            width: 500px;
        }



        .timelinePhone {
            width: 500px;
        }

        .sanSoon {
            width: 300px;
            padding-top: 10px;
        }

        .growGlow {
            transition: all .2s ease-in-out;
        }

        .growGlow:hover {
            /* transform: scale(1.1);  */
            box-shadow: 0 10px 15px rgba(255, 255, 255, 0.4);
            border-radius: 10px;
            border: 1px solid white;
            background: transparent;
            /* -webkit-filter: blur(1px);
         filter: blur(1px); */
        }

        .archieAbout {
            transform: translateY(10em);
        }

        .logoBlur {
            border-radius: 10px;
            border: 1px solid white;
            background: transparent;
            backdrop-filter: blur(10px);
        }

        .soon {
            width: 800px;
        }

        .imageJ {
            width: 1000px;
        }

        .journey {
            padding-top: 80px;
        }

        .oasis {
            font-size: 90px;
        }

        .archie {
            font-size: 75px;
        }

        .home {
            background-image: url("assets/bg/architectsheet/AE_Home.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
        }

        .maskot {
            background-image: url("assets/bg/architectsheet/AE_Maskot.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
            text-align: end;


        }

        .about {
            background-image: url("assets/bg/architectsheet/AE_About.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
        }

        .expo {
            background-image: url("assets/bg/architectsheet/AE_Expo.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
            padding-top: 30vh;
            !important
        }

        .sanLKTI {
            background-image: url("assets/bg/architectsheet/AE_sanLKTI.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
        }

        .archifest {
            background-image: url("assets/bg/architectsheet/AE_Archifest.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
        }

        .gada {
            background-image: url("assets/bg/architectsheet/Artboard_2_copy_8.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
        }

        .asf {
            background-image: url("assets/bg/architectsheet/AE_ASF.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
        }

        .timeline {
            background-image: url("assets/bg/architectsheet/AE_Timeline2.png");
            background-position: top;
        }

        .kontak {
            background-image: url("assets/bg/architectsheet/AE_Kontak.png");
            min-height: 290px;
            background-position: top;
        }

        .contact_title {
            color: white;
            font-family: JustCosmic;
            font-size: 80px;
            font-weight: 800px;
        }

        .merchs {
            max-height: 829px;
            background-image: url("assets/bg/architectsheet/AE_Sponsor.png");
            min-height: 600px;
            background-position: top;
        }

        .endsponsor {
            background-image: url("assets/bg/architectsheet/AE_Sponsor.png");
            min-height: 600px;
            background-position: top;
        }
    }


    /* kecil */
    @media screen and (max-width: 991.9px) {

        .imgCountdown{
            width: 200px;
        }

        .imgDescAbout {
            padding-left: 60px;
            padding-right: 60px;
        }

        .imgDesc {
            padding-left: 90px;
            padding-right: 100px;
        }

        .hideMaskot {
            opacity: 0.6;
        }

        .timelinePhone {
            width: 300px;
        }

        .sanSoon {
            width: 300px;
            padding-top: 10px;
        }

        #ull li:nth-child(even) {
            display: none;
        }


        .navImg {
            width: 60px;
        }



        .soon {
            width: 300px;
        }

        .imageJ {
            width: 400px;
        }

        .LogoIC {
            padding-bottom: 5vh;
        }

        .journey {
            padding-top: 150px;
        }

        .title {
            margin-left: 0px;
            text-align: center;
        }

        /* .transblur {
            background: transparent;
            backdrop-filter: blur(10px);
            border: 1px solid white;
            border-radius: 10px;
            position: relative;
            z-index: 1;
        } */

        .home {
            background-image: url("assets/bg/architectsheet/AE_Home.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
        }

        .maskot {
            background-image: url("assets/bg/architectsheet/AE_Maskot.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
            text-align: center;
            !important
        }

        .about {
            background-image: url("assets/bg/architectsheet/AE_About.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;


        }

        .expo {
            background-image: url("assets/bg/architectsheet/AE_Expo.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
            padding-top: 30vh;
            !important
        }

        .sanLKTI {
            background-image: url("assets/bg/architectsheet/AE_sanLKTI.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
        }

        .archifest {
            background-image: url("assets/bg/architectsheet/AE_Archifest.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
        }

        .gada {
            background-image: url("assets/bg/architectsheet/Artboard_2_copy_8.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
        }

        .asf {
            background-image: url("assets/bg/architectsheet/AE_ASF.png");
            min-height: 829px;
            max-height: 829px;
            background-position: top;
        }

        .timeline {
            background-image: url("assets/bg/architectsheet/AE_Timeline2.png");
            background-position: top;
        }

        .kontak {
            background-image: url("assets/bg/architectsheet/AE_Kontak.png");
            min-height: 100px;
            background-position: top;
        }

        .merchs {
            max-height: 829px;
            background-image: url("assets/bg/architectsheet/AE_Sponsor.png");
            min-height: 500px;
            background-position: top;
        }

        .endsponsor {
            background-image: url("assets/bg/architectsheet/AE_Sponsor.png");
            min-height: 600px;
            background-position: top;
        }
    }

    @media screen and (min-width: 653px) {
        .title {
            font-size: 50px;
        }
    }

    @media screen and (max-width: 652.9px) {
        .title {
            font-size: 40px;
        }
    }

    ::-webkit-scrollbar {
        width: 15px;
    }

    ::-webkit-scrollbar-track {
        /* background: #d1e5ff; */
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(#8877ec, #4b429f);
        border-radius: 5px;
        height: 100px;
    }

    #posterAutoplaying {
        background-color: rgba(255, 255, 255, 0.3);
        width: 420px !important;
        border-radius: 15px;
        margin: 0.5rem auto;
        padding-top: 10px;
        padding-bottom: 10px;
    }
</style>

<body>

    <?php include "navbar.php" ?>

    <section class="home" id="home" style="padding-top: 100px;">
        <div class="d-flex justify-content-center" style="margin-bottom: 200px">
            <img src="assets/Judul.png" alt="" style="" class="imageJ title">
        </div>

        <div class="d-flex justify-content-center">
            <img src="assets/checkOut.png" alt="" style="width: 300px" class="">
        </div>

        <div class="row">
        <div id="posterAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="#asf"><img class="growGlow" src="assets/poster/ASF.jpg" style="width: 270px" alt=""></a>
        </div>
        <div class="carousel-item">
            <a href="#archifest">
                <img class="growGlow" src="assets/poster/archfest.png" style="width: 270px" alt="">
            </a>
        </div>
        <div class="carousel-item">
            <a href="#sanLKTI">
                <img class="growGlow" src="assets/poster/lkti.png" style="width: 270px" alt="">
            </a>
        </div>
        <div class="carousel-item">
            <a href="#gada">
                <img class="growGlow" src="assets/poster/gada.jpg" style="width: 270px" alt="">
            </a>
        </div>
        <div class="carousel-item">
            <a href="#gada">
                <img class="growGlow" src="assets/poster/expo.png" style="width: 270px" alt="">
            </a>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#posterAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#posterAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
        </div>
        <!-- <div class="row" style="">
            <div id="posterCar" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#asf"><img class="growGlow" src="assets/poster/ASF.jpg" style="width: 270px"
                                alt=""></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#archifest">
                            <img class="growGlow" src="assets/poster/archfest.png" style="width: 270px" alt="">
                        </a>

                    </div>
                    <div class="carousel-item">
                        <a href="#sanLKTI">
                            <img class="growGlow" src="assets/poster/lkti.png" style="width: 270px" alt="">
                        </a>

                    </div>
                    <div class="carousel-item">
                        <a href="#gada">
                            <img class="growGlow" src="assets/poster/gada.jpg" style="width: 270px" alt="">
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#posterCar" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#posterCar" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->
            <!-- <div class="col-lg-3">
                <img class="growGlow" src="assets/poster/ASF.jpg" style="width: 270px" alt="">
            </div>
            <div class="col-lg-3">
                <img class="growGlow" src="assets/poster/ASF.jpg" style="width: 270px" alt="">
            </div>
            <div class="col-lg-3">
                <img class="growGlow" src="assets/poster/ASF.jpg" style="width: 270px" alt="">
            </div>
            <div class="col-lg-3">
                <img class="growGlow" src="assets/poster/ASF.jpg" style="width: 270px" alt="">
            </div> -->
        </div>
    </section>

    <section class="maskot">
        <div class="sponsorUtama">
        </div>
        <div class="gambarMaskot">
            <img src="assets/maskot/MASCOT WEBAsset 1.png" alt="" style="width: 450px;">
        </div>
    </section>

    <section class="about d-flex align-items-center justify-content-center" id="about">
        <div class="row">

            <div class="col-lg-6 col-12">
                <img class="archieAbout" src="assets/LOGO ARCHIEXPO.png" alt="logo archie" style="width: 300px;">
            </div>
            <div class="col-lg-6 col-12">
                <img class="imgDesc" src="assets/texts/ABOUT.png" alt=""
                    style="width: 550px; transform: translateY(-3em);">
            </div>
        </div>
        <!-- <div class="row d-flex align-items-center justify-content-center w-75 transblur pb-3">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <h1 class="desc">
                    <span class="subJudul tw">About Us</span>
                </h1>
            </div>

            <div class="col-lg-6 ms-3 md-8 d-flex align-items-center ms-2">
                <span class="keterangan tw">
                    The Architecture Expo 2024 Design Competition is a competition held by Architecture Expo to
                    produce
                    unique,
                    interesting and fascinating exhibition designs. This national level competition has been held
                    year
                    after
                    year by HIMAARTRA. With the theme of this year's contest, "Human Needs in Dynamic Building: The
                    Quest to
                    Oasis”, the participants were invited to be aware of the importance of human-centered
                    architecture
                    in
                    dynamic building design. In addition to the participants designing the exhibition, we want them
                    to
                    take
                    home some important lessons that they can apply in each of their designs
                </span>
            </div>
        </div> -->
    </section>

    <section class="expo position-relative" id="expo">

        <!-- <div class="row transblur d-flex align-items-center justify-content-lg-start justify-content-center w-75 mx-auto">
            <img class="logoBlur ms-4" src="assets/logo/LOGO ARCHIEXPO.png" alt=""
                style="width: 150px;">
            <div class="col-12 d-flex align-items-center justify-content-start text-start ms-3" style="z-index: 1;">
                <h1 class="desc">
                    <span class="subJudul tw">ArchiExpo Exhibition</span>
                    <br>
                    <span class="subJudul tw">Space Design Competition</span>
                </h1>
            </div> -->

        <div class="col-lg-6 ms-3 md-8 d-flex flex-column align-items-center justify-content-start ms-2 text-start"
            style="z-index: 1;">

            <img class="imgDesc aboutUs" src="assets/texts/AboutUs.png" alt=""
                style="width: 600px; z-index: 1; transform: translateY(-7em);  ">
            <span class="keterangan tw">
                <!-- The Architecture Expo 2024 Design Competition is a competition held by Architecture Expo to produce
                    unique, interesting and fascinating exhibition designs. This national level competition has been
                    held
                    year
                    after year by HIMAARTRA. With the theme of this year's contest, "Human Needs in Dynamic Building:
                    The
                    Quest to Oasis”, the participants were invited to be aware of the importance of human-centered
                    architecture
                    in dynamic building design. In addition to the participants designing the exhibition, we want them
                    to
                    take home some important lessons that they can apply in each of their designs -->
            </span>
            <div class="dropdown pb-3" style="z-index: 1; transform: translateY(-7em);">
                <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    MORE INFO
                </button>
                <ul class="dropdown-menu dropdown-menu-secondary">
                    <li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSd1sK0Bb5K6q4znqbyihLilRcCq7xUvGYxuUkf5_EWhOTTKUQ/viewform?usp=sf_link" target="_blank">REGISTER NOW</a></li>
                    <li><a class="dropdown-item" href="#timeline" onclick="openCity('xAE24', 1)">TIMELINE & CONTACT</a></li>
                    <li><a class="dropdown-item" href="https://drive.google.com/file/d/1icOzQ637tfimHwmK2y27VA-6WbBItArZ/view" target="_blank">TERMS OF REFERENCE</a></li> 
                    <li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSe83CEn-fql540OzPhQdNcz89MH7-NH9FqZOucFi2JldYKqTg/viewform?usp=sf_link" target="_blank">SUBMISSION</a></li> 
                </ul>
            </div>
        </div>
        </div>
        <img class="hideMaskot position-absolute bottom-0 end-0 mb-3 me-3" src="assets/maskot/MASCOT WEBAsset 2.png"
            alt="" style="width: 500px; z-index: 0">
    </section>

    <section class="sanLKTI position-relative" id="sanLKTI" style="padding-top: 10vh;">
        <?php include "san_lkti.php" ?>
    </section>

    <section class="archifest position-relative" id="archifest" style="padding-top: 10vh;">
        <?php include "archifest.php" ?>
    </section>

    <section class="gada position-relative" id="gada" style="padding-top: 20vh;">
        <?php include "gada.php" ?>
    </section>

    <section class="asf position-relative" id="asf" style="padding-top: 20vh;">
        <?php include "asf.php" ?>
    </section>

    <section class="timeline" id="timeline">
        <?php include "timeline.php" ?>
    </section>

    <section class="kontak d-flex align-items-center justify-content-center" id="kontak">
        <div class="row">

            <div class="d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center">
                    <?php include "contact.php" ?>
                </div>
            </div>
            <div class="text-center py-4" style="background ">
                <h5 class="subJudul" style="letter-spacing: 1px;font-size: 10px; color: white;">© IT ARCHIEXPO 2024</h5>
            </div>
        </div>
    </section>

    <!-- <section class="merchs" id="merchs" style="padding-top: 10vh">
        <?php // include "merch.php" ?>
    </section> -->

    <!-- <section class="endsponsor" id="endsponsor">
        <?php //include "sponsor.php" ?>
    </section> -->
</body>
</div>
</html>