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
            background-position: top;
            background-size: cover;
        }

        .maskot {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_Maskot.png");
            min-height: 829px;
            background-position: top;
            background-size: cover;
            text-align: center;


        }

        .mid{
            text-align: center;
        }

        .about {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_About.png");
            min-height: 829px;
            background-position: top;
            background-size: cover;


        }

        .expo {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_Expo.png");
            min-height: 829px;
            background-position: top;
            background-size: cover;
            padding-top: 20vh;
            !important
        }

        .sanLKTI {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_sanLKTI.png");
            min-height: 829px;
            background-position: top;
            background-size: cover;
        }

        .archifest {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_Archifest.png");
            min-height: 829px;
            background-position: top;
            background-size: cover;
        }

        .gada {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/Artboard_2_copy_8.png");
            min-height: 829px;
            background-position: top;
            background-size: cover;
        }

        .asf {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_ASF.png");
            min-height: 829px;
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
            min-height: 829px;
            background-position: top;
            background-size: cover;
        }

        .endsponsor {
            background-repeat: no-repeat;
            background-image: url("assets/bg/architectsheet/AE_Sponsor.png");
            min-height: 829px;
            background-position: top;
            background-size: cover;
        }
    }

    /* sedang */
    @media screen and (min-width: 992px) and (max-width: 1920px) {
        .imageJ{
            width: 1000px;
        }
        .journey {
            padding-top: 80px;
        }

        .oasis{
            font-size: 90px;
        }

        .archie{
            font-size: 75px;
        }

        .home {
            background-image: url("assets/bg/architectsheet/AE_Home.png");
            min-height: 829px;
            background-position: top;
        }

        .maskot {
            background-image: url("assets/bg/architectsheet/AE_Maskot.png");
            min-height: 829px;
            background-position: top;
            text-align: end;


        }

        .about {
            background-image: url("assets/bg/architectsheet/AE_About.png");
            min-height: 829px;
            background-position: top;
        }

        .expo {
            background-image: url("assets/bg/architectsheet/AE_Expo.png");
            min-height: 829px;
            background-position: top;
            padding-top: 30vh;
            !important
        }

        .sanLKTI {
            background-image: url("assets/bg/architectsheet/AE_sanLKTI.png");
            min-height: 829px;
            background-position: top;
        }

        .archifest {
            background-image: url("assets/bg/architectsheet/AE_Archifest.png");
            min-height: 829px;
            background-position: top;
        }

        .gada {
            background-image: url("assets/bg/architectsheet/Artboard_2_copy_8.png");
            min-height: 829px;
            background-position: top;
        }

        .asf {
            background-image: url("assets/bg/architectsheet/AE_ASF.png");
            min-height: 829px;
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
            min-height: 829px;
            background-position: top;
        }

        .endsponsor {
            background-image: url("assets/bg/architectsheet/AE_Sponsor.png");
            min-height: 829px;
            background-position: top;
        }
    }


    /* kecil */
    @media screen and (max-width: 991.9px) {

        .imageJ{
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

            .transblur {
        background: transparent;
        backdrop-filter: blur(10px);
        border: 1px solid white;
        border-radius: 10px;
        position: relative;
        z-index: 1;
    }

        .home {
            background-image: url("assets/bg/architectsheet/AE_Home.png");
            min-height: 829px;
            background-position: top;
        }

        .maskot {
            background-image: url("assets/bg/architectsheet/AE_Maskot.png");
            min-height: 829px;
            background-position: top;
            text-align: center;
            !important
        }

        .about {
            background-image: url("assets/bg/architectsheet/AE_About.png");
            min-height: 829px;
            background-position: top;


        }

        .expo {
            background-image: url("assets/bg/architectsheet/AE_Expo.png");
            min-height: 829px;
            background-position: top;
            padding-top: 30vh;
            !important
        }

        .sanLKTI {
            background-image: url("assets/bg/architectsheet/AE_sanLKTI.png");
            min-height: 829px;
            background-position: top;
        }

        .archifest {
            background-image: url("assets/bg/architectsheet/AE_Archifest.png");
            min-height: 829px;
            background-position: top;
        }

        .gada {
            background-image: url("assets/bg/architectsheet/Artboard_2_copy_8.png");
            min-height: 829px;
            background-position: top;
        }

        .asf {
            background-image: url("assets/bg/architectsheet/AE_ASF.png");
            min-height: 829px;
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
            min-height: 829px;
            background-position: top;
        }

        .endsponsor {
            background-image: url("assets/bg/architectsheet/AE_Sponsor.png");
            min-height: 829px;
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
</style>

<body>

    <?php include "navbar.php" ?>

    <section class="home" id="home" style="padding-top: 100px;">
        <div class="d-flex justify-content-center">
            <!-- <h1 class="title tw">
                <div class="journey col d-flex align-items-center justify-content-center">
                    ARCHIEXPO '24
                </div>
                <div class="oasis col">
                    THE QUEST TO OASIS
                </div>
            </h1> -->
            <img src="assets/Judul.png" alt="" style="" class="imageJ">
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
        <div class="row d-flex align-items-center justify-content-center w-75 transblur pb-3"> 
            <div class="col-12 d-flex align-items-center justify-content-center">
                <h1 class="desc">
                    <span class="subJudul tw">About Us</span>
                </h1>
            </div>

            <img src="assets/LOGO ARCHIEXPO.png" alt="logo archie" style="width: 300px;">
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
        </div>
    </section>

    <section class="expo position-relative" id="expo">
        <div class="row transblur d-flex align-items-center justify-content-start w-75 mx-auto">
            <div class="col-12 d-flex align-items-center justify-content-start text-start ms-3" style="z-index: 1;">
                <h1 class="desc">
                    <span class="subJudul tw">ArchiExpo Exhibition</span>
                    <br>
                    <span class="subJudul tw">Space Design Competition</span>
                </h1>
            </div>

            <div class="col-lg-6 ms-3 md-8 d-flex flex-column align-items-center justify-content-start ms-2 text-start"
                style="z-index: 1;">
                <span class="keterangan tw">
                    The Architecture Expo 2024 Design Competition is a competition held by Architecture Expo to produce
                    unique, interesting and fascinating exhibition designs. This national level competition has been
                    held
                    year
                    after year by HIMAARTRA. With the theme of this year's contest, "Human Needs in Dynamic Building:
                    The
                    Quest to Oasis”, the participants were invited to be aware of the importance of human-centered
                    architecture
                    in dynamic building design. In addition to the participants designing the exhibition, we want them
                    to
                    take home some important lessons that they can apply in each of their designs
                </span>
                <div class="dropdown pt-3 pb-3" style="z-index: 1;">
                    <button class="btn btn-outline-light " type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        COMING SOON
                    </button>
                </div>
            </div>
        </div>
        <img class="position-absolute bottom-0 end-0 mb-3 me-3" src="assets/maskot/MASCOT WEBAsset 2.png" alt=""
            style="width: 500px; z-index: 0">
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
        <div class="row d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center">
                <?php include "contact.php" ?>
            </div>
        </div>
    </section>

    <section class="merchs" id="merchs" style="padding-top: 10vh">
        <?php  include "merch.php" ?>
    </section>

    <section class="endsponsor" id="endsponsor">
        <?php include "sponsor.php" ?>
    </section>
</body>

</html>