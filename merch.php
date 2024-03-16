<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ARCHIEXPO 2024</title>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <link href="merchsponsor.css" rel="stylesheet">

</head>

<body>
    <section class="merch" id="merch">
        <div class="container header-container text-center text-white p-4">
            <h1 class="display-3 merch-header">OUR MERCH!</h1>
        </div>
        <img class="soon" src="assets/img/COMING_SOON.png" style="" alt="">


        <!-- <div class="swiper-container container mt-4">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card card-merch">
                            <div class="card-content">
                                <div class="card-image"><img src="assets/img/dress.png" alt=""></div>
                                <div class="card-price display-6">Rp15.000</div>
                            </div>
                        </div>
                        <div class="order-container">
                            <button class="order-button btn btn-primary">ORDER NOW!</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card-merch">
                            <div class="card-content">
                                <div class="card-image"><img src="assets/img/baju.webp" alt=""></div>
                                <div class="card-price display-6">Rp12.000</div>
                            </div>
                        </div>
                        <div class="order-container">
                            <button class="order-button btn btn-primary">ORDER NOW!</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card-merch">
                            <div class="card-content">
                                <div class="card-image"><img src="assets/img/batman.png" alt=""></div>
                                <div class="card-price display-6">Rp18.000</div>
                            </div>
                        </div>
                        <div class="order-container">
                            <button class="order-button btn btn-primary">ORDER NOW!</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card card-merch">
                            <div class="card-content">
                                <div class="card-image"><img src="assets/img/kuning.png" alt=""></div>
                                <div class="card-price display-6">Rp24.000</div>
                            </div>
                        </div>
                        <div class="order-container">
                            <button class="order-button btn btn-primary">ORDER NOW!</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div> -->


    </section>

    <script>
        const swiper = new Swiper(".swiper", {
            loop: true,
            slidesPerView: 1,
            centeredSlides: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            scrollbar: {
                el: ".swiper-scrollbar"
            },
            breakpoints: {
                1048: {
                    slidesPerView: 3,
                    spaceBetween: -100,
                }
            }
        });
    </script>

</body>

</html>