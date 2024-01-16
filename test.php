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
            background: rgb(55, 150, 141);
            background: linear-gradient(142deg, rgba(55, 150, 141, 1) 100%, rgba(70, 171, 153, 1) 100%);
        }

        .journey {
            background-repeat: no-repeat;
            padding-top: 100px;
        }

        .home {
            background-repeat: no-repeat;
            background-image: url("assets/bg/AE_Home.png");
            min-height: 829px;
            background-position: top;
        }

        .maskot {
            background-repeat: no-repeat;
            background-image: url("assets/bg/AE_Maskot.png");
            min-height: 829px;
            background-position: top;
            text-align: end;


        }

        .about {
            background-repeat: no-repeat;
            background-image: url("assets/bg/AE_About.png");
            min-height: 829px;
            background-position: top;


        }

        .expo {
            background-repeat: no-repeat;
            background-image: url("assets/bg/AE_Expo.png");
            min-height: 829px;
            background-position: top;
        }

        .sanLKTI {
            background-repeat: no-repeat;
            background-image: url("assets/bg/AE_sanLKTI.png");
            min-height: 829px;
            background-position: top;
        }

        .archifest {
            background-repeat: no-repeat;
            background-image: url("assets/bg/AE_ArchiFest.png");
            min-height: 829px;
            background-position: top;
        }

        .gada {
            background-repeat: no-repeat;
            background-image: url("assets/bg/AE_Gada.png");
            min-height: 829px;
            background-position: top;
        }

        .asf {
            background-repeat: no-repeat;
            background-image: url("assets/bg/AE_ASF.png");
            min-height: 829px;
            background-position: top;
        }

        .countdown {
            background-repeat: no-repeat;
            background-image: url("assets/bg/AE_Timeline.png");
            min-height: 829px;
            background-position: top;
        }

        .timeline {
            background-repeat: no-repeat;
            background-image: url("assets/bg/AE_Timeline2.png");
            min-height: 829px;
            background-position: top;
        }

        .kontak {
            background-repeat: no-repeat;
            background-image: url("assets/bg/AE_Kontak.png");
            min-height: 290px;
            background-position: top;
        }

        .merchs {
            background-repeat: no-repeat;
            max-height: 829px;
            background-image: url("assets/bg/AE_Kontak.png");
            min-height: 829px;
            background-position: top;
        }

        .endsponsor {
            background-repeat: no-repeat;
            background-image: url("assets/bg/AE_Sponsor.png");
            min-height: 829px;
            background-position: top;
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

        .timeline {
            background-image: url("assets/bg/AE_Timeline2.png");
            min-height: 829px;
            background-position: top;
        }

        .kontak {
            background-image: url("assets/bg/AE_Kontak.png");
            min-height: 290px;
            background-position: top;
        }

        .merchs {
            max-height: 829px;
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

        .title{
            margin-left: 0px;
            text-align: center;
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
            text-align: center;
            !important
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
            min-height: 100px;
            background-position: top;
        }

        .merchs {
            max-height: 829px;
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

    ::-webkit-scrollbar{
        width: 15px;
    }

    ::-webkit-scrollbar-track{
        /* background: #d1e5ff; */
    }

    ::-webkit-scrollbar-thumb{
        background: linear-gradient(#2B7870,#BAEDE4);
        border-radius: 10px;
        height: 100px;
    }
</style>

<body>

    <?php include "navbar.php" ?>

    <section class="home" id="home">
        <div>
            <h1 class="title tw">
                <div class="journey col">
                    THE JOURNEY TO
                </div>
                <div class="oasis col">
                    OASIS
                </div>
                <div class="col">
                    - ARCHIEXPO 24 -
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

    <section class="about d-flex align-items-center justify-content-center" id="about">
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

    <section class="expo" id="expo" style="padding-top: 30vh;">
        <div class="row d-flex align-items-center justify-content-start w-75 mx-auto">
            <div class="col-12 d-flex align-items-center justify-content-start text-start ms-3">
                <h1 class="desc">
                    <span class="subJudul tw">ArchiExpo Exhibition Competition</span>
                </h1>
            </div>

            <div class="col-lg-6 ms-3 md-8 d-flex flex-column align-items-center justify-content-start ms-2 text-start">
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
                <div class="dropdown pt-3">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        MORE INFO
                    </button>
                    <ul class="dropdown-menu dropdown-menu-secondary">
                        <li><a class="dropdown-item" href="#">REGIST NOW</a></li>
                        <li><a class="dropdown-item" href="#">TIMELINE & CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sanLKTI" id="sanLKTI" style="padding-top: 10vh;">
        <?php include "san_lkti.php" ?>
    </section>

    <section class="archifest" id="archifest" style="padding-top: 20vh;">
        <?php include "archifest.php" ?>
    </section>

    <section class="gada" id="gada" style="padding-top: 20vh;">
        <?php include "gada.php" ?>
    </section>

    <section class="asf" id="asf" style="padding-top: 20vh;">
        <?php include "asf.php" ?>
    </section>

    <section class="timeline" id="timeline">
        <?php include "timeline.php" ?>
    </section>

    <section class="kontak" id="kontak" style="padding-top: 12vh">
        <?php include "contact.php" ?>
    </section>

    <section class="merchs" id="merchs" style="padding-top: 10vh">
        <?php include "merch.php" ?>
    </section>

    <section class="endsponsor" id="endsponsor">
        <?php include "sponsor.php" ?>
    </section>
</body>

</html>