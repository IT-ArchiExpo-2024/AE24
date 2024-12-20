<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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

        .container {
            min-width: 100%;
            min-height: 100vh;
        }

        .card {
            background-color: rgba(0, 0, 0, 0);
            border-color: rgba(0, 0, 0, 0);
        }

        h5 {
            font-family: Aurora;
        }

        p,
        .dropdown {
            font-family: Baskerville;
        }
    </style>
</head>

<body>
    <div class="space"></div>
    <div class="row d-flex align-items-center justify-content-lg-start justify-content-center mx-auto transblur" style="z-index: 1;">
    <!-- <img class="logoBlur ms-4 pt-1 pb-2" src="assets/logo/LOGO_BARU_ASF.png" alt="" style="width: 150px;">
        <div class="col-12 d-flex align-items-center justify-content-lg-start justify-content-center text-start ms-3">
            <h1 class="desc">
                <span class="subJudul tw">Architectural Sketch Fair</span>
            </h1>
        </div> -->

        <div class="col-lg-6 ms-3 md-8 d-flex flex-column align-items-center justify-content-lg-start justify-content-center ms-2 text-start" style="z-index: 1;">
        <img class="imgDesc" src="assets/texts/ASF.png" alt="" style="width: 600px; transform: translateY(-7em); ">

            <!-- <span class="keterangan tw">
                Architectural Sketch Fair (ASF) is a sketch competition held annually by 
                HIMAARTRA of Petra Christian University. ASF is a nationwide competition in which 
                architecture students from all over Indonesia are welcome to compete. In order to encourage 
                participants to investigate harmony and unity in architectural designs, ASF is introducing the 
                theme "Unified Elegance: Exploring Architectural Harmony" this year. Students should gain the 
                ability to think critically and creatively about design harmony through this theme, as well as to 
                communicate their ideas through building sketches.
            </span> -->
            <div class="dropdown pb-3">
                <button class="btn btn-outline-light dropdown-toggle" style="transform: translateY(-7em);" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    MORE INFO
                </button>
                <ul class="dropdown-menu dropdown-menu-secondary">
                    <li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSc07L_l3Ni978L0qVC24DTYISIrZoYI4GeioaTY59kuj8-RGA/viewform" target="_blank">REGISTER NOW</a></li>
                    <li><a class="dropdown-item" href="#timeline" onclick="openCity('xASF', 5)">TIMELINE & CONTACT</a></li>
                    <li><a class="dropdown-item" href="https://drive.google.com/file/d/1fEmbnuydcNx-TkRqeAntYEVhrIBpOQ_k/view" target="_blank">TERMS OF REFERENCE</a></li>
                    <li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSdHv9KTnnQd3Xr3b6s8_sKpv7QtlOysfnGfUpdQezJKdLXVHg/viewform" target="_blank">SUBMISSION</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row col-12 col-md-4">
            <div class="card" style="width: 40vh;">
                <div class="card-body">
                    <h5 class="card-title">ASF</h5>
                    <p class="card-text">The Architecture Expo 2024 Design Competition is a competition held by Architecture Expo to produce unique, interesting and fascinating exhibition designs. This national level competition has been held year after year by HIMAARTRA. With the theme of this year's contest, "Human Needs in Dynamic Building: The Quest to Oasis", the participants were invited to be aware of the importance of human-centered architecture in dynamic building design. In addition to the participants designing the exhibiton. we want them to take home some important lessons that they can apply in each of their designs</p>
                    <div class="dropdown">
                        <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            MORE INFO
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">REGIST NOW</a></li>
                            <li><a class="dropdown-item" href="#">TIMELINE & CONTACT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <img class="hideMaskot position-absolute bottom-0 end-0 mb-3 me-3" src="assets/maskot/MASCOT WEBAsset 6.png" alt="" style="width: 450px; z-index: 0;;">
</body>

</html>