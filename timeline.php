<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCHIEXPO 2024</title>
    <!-- w3css -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="timeline.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>
    <script>
        var counter = 0;
        function twodigit(intt){
            if(intt >= 10)
                return intt;
            return "0"+intt;
        }
        class Detos {
            constructor() {
                // list tanggalnya timeline
                this.datess = ["Feb 15, 2024 0:00:00", "Feb 29, 2024 0:00:00", "Mar 1, 2024 0:00:00", "Mar 14, 2024 0:00:00", "Mar 15, 2024 0:00:00", "Mar 16, 2024 0:00:00", "Mar 20, 2024 0:00:00", "Mar 22, 2024 0:00:00", "Mar 23, 2024 0:00:00", "Mar 25, 2024 0:00:00", "Mar 26, 2024 0:00:00", "Mar 27, 2024 0:00:00", "Mar 28, 2024 0:00:00", "Mar 30, 2024 0:00:00", "Apr 4, 2024 0:00:00", "Apr 5, 2024 0:00:00", "Apr 6, 2024 0:00:00", "Apr 28, 2024 0:00:00", "May 5, 2024 0:00:00", "May 6, 2024 0:00:00", "May 18, 2024 0:00:00"];
                this.eventss = ["ARCHFEST, ASF, GADA, SANXLKTI Early Bird Registration and LKTI's Abstract Submission", "ARCHFEST, ASF, GADA, SANXLKTI Early Bird Registration Closing", "ARCHFEST, ASF, GADA, SANXLKTI Normal Registration", "ARCHFEST, ASF, GADA, SAN Normal Registration Closing", "GADA's Preliminary Judging", "ARCHFEST's Preliminary Judging and SAN's Seminar session", "ARCHFEST's Top 15 Announcement", "ARCHFEST's Top 5 Announcement and ASF's Preliminary Judging", "GADA's Top 20 Announcement", "ASF's Top 30 Announcement", "GADA's Top 5 Announcement", "ASF's Top 10 Announcement", "LKTI's Abstract Submission Closing and LKTI's Normal Registration Closing", "ARCHFEST's and GADA's Final Judging and LKTI's Preliminary Judging", "GADA's Top 3 Announcement", "LKTI's Preliminary Judging End", "ASF's Final Judging and SANXLKTI's Passing Abstract Announcement", "SANXLKTI's Full Paper Preliminary Judging", "SANXLKTI's Full Paper Preliminary Judging End", "SANXLKTI's Finalist announcement", "SANXLKTI's Final Judging"];
            }
            latest() {
                return this.datess[counter];
            }
            latest_event() {
                return this.eventss[counter];
            }
        }
        function setDate(dateString){
            // Jan 5, 2024 15:37:25
            // Set the date we're counting down to
            var countDownDate = new Date(dateString.latest()).getTime();
            document.getElementById("eventss").innerHTML = dateString.latest_event();
            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();
            
                // Find the distance between now and the count down date
                var distance = countDownDate - now;
                // If the count down is finished, write some text
                if (distance < 0) {
                    // clearInterval(x);
                    // document.getElementsByClassName("countdownn").innerHTML = "";
                    // document.getElementsByClassName("day").innerHTML = "EXPIRED";
                    counter++;
                    countDownDate = new Date(dateString.latest()).getTime();
                    document.getElementById("eventss").innerHTML = dateString.latest_event();
                }
            
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
                // Display the result in the element with id="countdown"
                document.getElementById("day").innerHTML = twodigit(days);
                document.getElementById("hour").innerHTML = twodigit(hours);
                document.getElementById("minute").innerHTML = twodigit(minutes);
                document.getElementById("second").innerHTML = twodigit(seconds);
            
            }, 200);
        }

    </script>
    <style>
        
        .timelineee {
            text-align: center;
            font-family: JustCosmic; 
            /* margin: 10px 10px; */
            display: flex;
            flex-direction: column;
            align-items: space-between;
            justify-content: center;
            width: 100%;
        }
        .timeline_title{
            color: white;
            font-size: 80px;
        }
        .countdownn{
            width: 500px;
            font-family: Aurora;
            font-size: 90px;
            display: flex;
            color: white;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }
        .countdown{
            display: flex;
        }
        .row{
            text-align: center;
        }
        .row2{
            text-align: center;
            font-size: 30px;
        }
        .w3-bar{
            display: flex;
            justify-content: space-between;
        }
        .w3-bar-item{
            min-width: 20%;
            height: 140px;
            border-top-right-radius: 20%;
            border-top-left-radius: 20%;
        }
        .smol_logo{
            max-height: 120px;
            max-width: 300px;
            object-fit: contain;
        }
        .w3-button{
            display: flex;
            justify-content: center;
        }
        .event_placeholder{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }
        #eventss{
            font-size: 30px;
            margin: 10px 0px;
        }
        .bgbgbg{
            background-color: transparent;
            display: flex;
            justify-content: center;
            align-self: center;
        }
        .biru_gelap{
            background-color: #584c9c;
            color: white;
        }
        .biru_muda{
            background-color: #9094d4;
        }
        .test{
            background-color: black;
            width: 1400px;
        }
        .timtimt{
            object-fit: contain;
            max-width: 100%;
        }
        
        @media screen and (max-width: 991.9px) {
            .w3-bar *{
                height: 80px;
                min-width: 20%;
                text-align: center;
            }
            .smol_logo{
                max-height: 70px;
                max-width: 100px;
                transform: translateX(-5px);
            }
            .row2{
                text-align: center;
                font-size: 10px;
            }
            .timeline_title{
                font-size: 40px;
            }
            .countdownn{
                font-size: 40px;
            }
            .contact_title{
                font-size: 45px;
            }
            /* .timtimt{
                width: 500px;
            } */
            .biru_gelap h1, .biru_muda h1{
                font-size: 30px;
            }
            #eventss{
                font-size: 20px;
            }
        }
        @media screen and (max-width: 400px) {
            .countdownn{
                font-size: 30px;
            }
            .w3-bar *{
                height: 60px;
                min-width: 20%;
                text-align: center;
            }
            .w3-bar-item {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .smol_logo{
                max-height: 50px;
                max-width: 40px;
                /* transform: scale(1.3, 1.3); */
            }.biru_gelap h1, .biru_muda h1{
                font-size: 20px;
            }#eventss{
                font-size: 10px;
            }
        }
    </style>

    <!-- Demo styles -->
  <style>
    /* html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    } */

    .swiper2 {
      width: 80%;
      height: 100%;
    }

    .swiper-slide2 {
      text-align: center;
      font-size: 18px;
      /* background: #fff; */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide2 img {
      display: block;
      height: 500px;
      object-fit: cover;
    }
    @media screen and (max-width: 400px) {
        .swiper-slide2 img {
            height: 300px;
        }
    }
  </style>
</head>
<body>


    <div class="timelineee">
        <h1 class="timeline_title judul">TIMELINE</h1>
        <div class="countdown" >
            <span class="countdownn day" class="col">
                <p class="row" id="day">dddd</p>
                <p class="row row2 subJudul">Days</p>
            </span>
            <span class="countdownn"><p>|</p>
                <p class="row row2">&#160</p></span>
            <span class="countdownn hour" class="col">
                <p class="row" id="hour">hhhh</p>
                <p class="row row2 subJudul">Hours</p>
            </span>
            <span class="countdownn"><p>|</p>
                <p class="row row2">&#160</p></span>
            <span class="countdownn minute" class="col">
                <p class="row" id="minute">mmmm</p>
                <p class="row row2 subJudul">Minutes</p>
            </span>
            <span class="countdownn"><p>|</p>
                <p class="row row2">&#160</p></span>
            <span class="countdownn second" class="col">
                <p class="row" id="second">ssss</p>
                <p class="row row2 subJudul">Seconds</p>
            </span>
        </div>

        <div class="event_placeholder">
            <div class="bgbgbg">
                <p id="eventss" style="color: white;">testo</p> 
            </div>
        </div>
    
        <script>
            dettt = new Detos();
            setDate(dettt);

        </script>

            <div class="w3-bar">
            <button class="w3-bar-item w3-button biru_gelap" onclick="openCity('xAE24', 1)">
                <img class="smol_logo" src="assets/logo/LOGO ARCHIEXPO.png" alt=""></button>
            <button class="w3-bar-item w3-button biru_muda" onclick="openCity('xLKTI', 2)">
                <img class="smol_logo" src="assets/logo/LOGO SANXLKTI.png" alt=""></button>
            <button class="w3-bar-item w3-button biru_gelap" onclick="openCity('xFEST', 3)">
                <img class="smol_logo" src="assets/logo/LOGO ARCHFEST.png" alt=""></button>
            <button class="w3-bar-item w3-button biru_muda" onclick="openCity('xGADA', 4)">
                <img class="smol_logo" style="transform: scale(2, 2);" src="assets/logo/LOGO GADA (1).png" alt=""></button>
            <button class="w3-bar-item w3-button biru_gelap" onclick="openCity('xASF', 5)">
                <img class="smol_logo" src="assets/logo/LOGO_BARU_ASF.png" alt=""></button>
            </div>

            <div id="xAE24" class="city biru_gelap">
            <h1 class="subJudul">AE24</h1>
            <!-- <p>To Be Announced</p> -->
            </div>

            <div id="xLKTI" class="city biru_muda" style="display:none">
            <h1 class="subJudul">SANxLKTI</h1>

            <!-- Swiper -->
  <div class="swiper2 mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="assets/timelines/TimelineLKTI.png" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
    </div>
  </div>

            </div>

            <div id="xFEST" class="city biru_gelap" style="display:none">
            <h1 class="subJudul">17th Architecture Festival (ArchFest)</h1><!-- Swiper -->
  <div class="swiper2 mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="assets/timelines/TimelineArchFest.png" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
            </div>

            <div id="xGADA" class="city biru_muda" style="display:none">
            <h1 class="subJudul">Geest Van De Architectuur 2024 (GADA)</h1>
            <!-- Swiper -->
  <div class="swiper2 mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="assets/timelines/TimelineGADA.png" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
            </div>

            <div id="xASF" class="city biru_gelap" style="display:none">
            <h1 class="subJudul">Architectural Sketch Fair (ASF)</h1><!-- Swiper -->
  <div class="swiper2 mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2" id="aassff"><img src="assets/timelines/TimelineASF.png" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
      <div class="swiper-slide swiper-slide2"><img src="" alt=""></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
            </div>
<script>
    console.log(document.getElementsByClassName('con1'))
</script>
</body>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
            
<!-- Initialize Swiper -->
<script>
  var myswiper = new Swiper(".mySwiper", {
    autoheight: true,
    slidesPerView: 4,
    spaceBetween: 0,
    freeMode: false,
    initialSlide: 5,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      },
    });
</script>

</html>