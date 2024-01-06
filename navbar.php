<!DOCTYPE html>
<html lang="en">

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
        .dropdown-menu {
            animation: showdropdown .5s linear;
        }

        @media screen and (min-width: 992px) {

            .navdrop {
                background-color: #BAEDE4;
            }

            .dropdown-menu {
                background-color: #2B7870;
                color: #fff;
            }

            a.dropdown-item {
                color: white;
            }

            a.dropdown-item:hover {
                background-color: #BAEDE4;
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

        .header{
            margin-bottom: 100px ;
        }
    </style>
</head>

<body>

    <div class="header">
        <nav class="navbar navbar-expand-lg fixed-top" style="background: #2B7870;">
            <div class="container-fluid">
                <div>
                    <img class="pt-1 pb-1" src="assets/LOGO ARCHIEXPO.png" alt="archieLogo" width="50">
                    <img src="assets/ukp outline.png" alt="ukpLogo" width="50">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">TIMELINE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">MERCH</a>
                        </li>
                        <li class="nav-item dropdown navdrop">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                OUR EVENTS
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mt-lg-3">
                                <li><a class="dropdown-item" href="#">Sayembara Archiexpo 23</a></li>
                                <li><a class="dropdown-item" href="#">SAN xLKTI</a></li>
                                <li><a class="dropdown-item" href="#">ArchFest</a></li>
                                <li><a class="dropdown-item" href="#">GADA</a></li>
                                <li><a class="dropdown-item" href="#">ASF</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</body>

</html>