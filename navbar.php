<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ARCHIEXPO 2024</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/LOGO ARCHIEXPO.png" />

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        @font-face {
            font-family: Baskerville;
            src: url('assets/fonts/Baskerville Old Face.ttf');
        }

        .navbar {
            box-shadow: 0px 2px 16px 0px rgba(0,0,0,0.75);
            -webkit-box-shadow: 0px 2px 16px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 2px 16px 0px rgba(0,0,0,0.75);
        }

        .nav-link {
            font-family: Baskerville;
        }

        .dropdown-item {
            font-family: Baskerville;
        }

        .dropdown-menu {
            animation: showdropdown .5s linear;
        }

        @media screen and (min-width: 992px) {

            .navdrop {
                background-color: #fff;
                border-radius: 5px;
            }

            .dropdown-menu {
                background-color: white;
                color: #fff;
            }

            a.dropdown-item {
                color: black;
            }

            a.dropdown-item:hover {
                background-color: #c785ec;
            }
        }

        @media screen and (max-width: 991.9px) {
            .dropdown-toggle {
                color: #fff;
            }

            .navbar-nav .nav-link.active,
            .navbar-nav .nav-link.show {
                color: white;
            }

            .nav-link:focus,
            .nav-link:hover {
                color: white;
            }
        }

        @keyframes showdropdown {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .navbar-toggler {
            border: 1px solid #fff;
        }

        .navbar-toggler span {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgb(255, 255, 255)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .navbar-toggler:focus {
            outline: none !important;
            box-shadow: none !important;
        }

        /* .header {
            margin-bottom: 10000px;
        } */
    </style>
</head>

<body>

    <div class="header">
        <nav id="navTrap" class="navbar navbar-expand-lg fixed-top" style="background: transparent; backdrop-filter: blur(30px);">
            <div class="container-fluid">
                <div>
                    <a href="https://www.instagram.com/lifeatpcu?igsh=MTU5OGRlNHJpYmJpNg==" target="_blank" ><img class="navImg" src="assets/ukp outline.png" alt="ukpLogo" width="150px" href="youtube.com" style="padding-left: 5px;"></a>
                    <a href="https://www.instagram.com/himaartra?igsh=MWZ5MzczY2xpcm10Zw==" target="_blank" ><img class="navImg" src="assets/LOGO HIMAARTRA PUTIH.png" alt="hima" width="70px" style="padding-left: 0px;"></a>
                    <a href="https://www.instagram.com/archiexpo.pcu?igsh=emplcXBsemhlZTlh" target="_blank" ><img class="navImg pt-1 pb-1 pe-1" src="assets/LOGO ARCHIEXPO.png" alt="archieLogo" width="50">
                    <a href="#navTrap"><img class="navImg pt-1 pb-1" src="assets/LOGO ARCHIEXPO.png" style="opacity: 0;" alt="archieLogo" width="1px">
                </div>
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ms-3">
                            <a class="nav-link text-white" aria-current="page" href="#home">HOME</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-white" href="#about">ABOUT US</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link text-white" href="#timeline">TIMELINE</a>
                        </li>
                        <li class="nav-item ms-3">
                            <!-- <a class="nav-link text-white" href="#merchs">MERCH</a> -->
                        </li>
                        <li class="nav-item dropdown navdrop ms-3" style="padding-left: 1px">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                OUR EVENTS
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mt-lg-3">
                                <li><a class="dropdown-item" href="#expo">SAYEMBARA ARCHIEXPO 24</a></li>
                                <li><a class="dropdown-item" href="#sanLKTI">SANxLKTI</a></li>
                                <li><a class="dropdown-item" href="#archifest">ARCHFEST</a></li>
                                <li><a class="dropdown-item" href="#gada">GADA</a></li>
                                <li><a class="dropdown-item" href="#asf">ASF</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</body>

</html>