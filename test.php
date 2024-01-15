<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        overflow-x: hidden;
    }

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

    /* besar */
    @media screen and (min-width: 1921px) { 
        body {
            background: url('assets/bgwebsite_archiexpo.png');
            background-size: cover;
            background-repeat: no-repeat;
            overflow-x: hidden !important;
        }

        .header {
            margin-bottom: 100px;
        }

        .home {
            min-height: 829px;
        }

        .maskot {
            min-height: 829px;
            text-align: end;


        }

        .about {
            min-height: 829px;
        }

        .expo {
            min-height: 829px;
        }

        .sanLKTI {
            min-height: 829px;
        }

        .archifest {
            min-height: 829px;
        }

        .gada {
            min-height: 829px;
        }

        .asf {
            min-height: 829px;
        }

        .countdown {
            min-height: 829px;
        }

        .timeline {
            min-height: 829px;
        }

        .kontak {
            min-height: 829px;
        }

        .endsponsor {
            min-height: 829px;
        }
    }

    /* sedang */
    @media screen and (min-width: 992px) and (max-width: 1920px) {
        .journey {
            padding-top: 100px;
        }

        .home {
            background-image: url("assets/bg/AE_Home.png");
            min-height: 829px;
            background-position: top;
        }

        .maskot {
            background-image: url("assets/bg/AE_Maskot.png");
            min-height: 829px;
            background-position: top;
            text-align: end;


        }

        .about {
            background-image: url("assets/bg/AE_About.png");
            min-height: 829px;
            background-position: top;


        }

        .expo {
            background-image: url("assets/bg/AE_Expo.png");
            min-height: 829px;
            background-position: top;
        }

        .sanLKTI {
            background-image: url("assets/bg/AE_sanLKTI.png");
            min-height: 829px;
            background-position: top;
        }

        .archifest {
            background-image: url("assets/bg/AE_ArchiFest.png");
            min-height: 829px;
            background-position: top;
        }

        .gada {
            background-image: url("assets/bg/AE_Gada.png");
            min-height: 829px;
            background-position: top;
        }

        .asf {
            background-image: url("assets/bg/AE_ASF.png");
            min-height: 829px;
            background-position: top;
        }

        .countdown {
            background-image: url("assets/bg/AE_Timeline.png");
            min-height: 829px;
            background-position: top;
        }

        .timeline {
            background-image: url("assets/bg/AE_Timeline2.png");
            min-height: 829px;
            background-position: top;
        }

        .kontak {
            background-image: url("assets/bg/AE_Kontak.png");
            min-height: 829px;
            background-position: top;
        }

        .endsponsor {
            background-image: url("assets/bg/AE_Sponsor.png");
            min-height: 829px;
            background-position: top;
        }
    }

    
    /* kecil */
    @media screen and (max-width: 991.9px) {

        .journey {
            padding-top: 150px;
        }

        .home {
            background-image: url("assets/bg/AE_Home.png");
            min-height: 829px;
            background-position: top;
        }

        .maskot {
            background-image: url("assets/bg/AE_Maskot.png");
            min-height: 829px;
            background-position: top;
            text-align: center; !important
        }

        .about {
            background-image: url("assets/bg/AE_About.png");
            min-height: 829px;
            background-position: top;


        }

        .expo {
            background-image: url("assets/bg/AE_Expo.png");
            min-height: 829px;
            background-position: top;
        }

        .sanLKTI {
            background-image: url("assets/bg/AE_sanLKTI.png");
            min-height: 829px;
            background-position: top;
        }

        .archifest {
            background-image: url("assets/bg/AE_ArchiFest.png");
            min-height: 829px;
            background-position: top;
        }

        .gada {
            background-image: url("assets/bg/AE_Gada.png");
            min-height: 829px;
            background-position: top;
        }

        .asf {
            background-image: url("assets/bg/AE_ASF.png");
            min-height: 829px;
            background-position: top;
        }

        .countdown {
            background-image: url("assets/bg/AE_Timeline.png");
            min-height: 829px;
            background-position: top;
        }

        .timeline {
            background-image: url("assets/bg/AE_Timeline2.png");
            min-height: 829px;
            background-position: top;
        }

        .kontak {
            background-image: url("assets/bg/AE_Kontak.png");
            min-height: 829px;
            background-position: top;
        }

        .endsponsor {
            background-image: url("assets/bg/AE_Sponsor.png");
            min-height: 829px;
            background-position: top;
        }
    }

    @media screen and (min-width: 549px) {
        .title{
            font-size: 75px;
        }
    }

    @media screen and (max-width: 548.9px) {
        .title{
            font-size: 40px;
        }
    }

</style>

<body>

    <?php include "navbar.php" ?>

    <section class="home">
        <div>
            <h1 class="title tw">
                <div class="journey col">
                    The Journey to
                </div>
                <div class="oasis col">
                    Oasis
                </div>
                <div class="col">
                    - Archiexpo 24 -
                </div>
            </h1>
        </div>
    </section>

    <section class="maskot">
        <div class="sponsorUtama">
        </div>
        <div class="gambarMaskot">
            <img src="assets/maskot.png" alt="" style="width: 250px;">
        </div>
    </section>

    <section class="about d-flex align-items-center  justify-content-center">
        <div class="row d-flex align-items-center justify-content-center w-75">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <h1 class="desc">
                    <span class="subJudul tw">About Us</span>
                </h1>
            </div>

            <img src="assets/LOGO ARCHIEXPO.png" alt="LogoIc" class="col-lg-6 md-4" style="width: 300px;">
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

    <section class="expo">

    </section>

    <section class="sanLKTI">

    </section>

    <section class="archifest">

    </section>

    <section class="gada">

    </section>

    <section class="asf">

    </section>

    <section class="timeline">

    </section>

    <section class="kontak">

    </section>

    <section class="endsponsor">

    </section>
</body>

</html>