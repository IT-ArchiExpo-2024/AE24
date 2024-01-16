<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCHIEXPO 2024</title>
    <!-- w3css -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
                this.datess = ["Jan 19, 2024 0:00:00", "Jan 23, 2024 0:00:00", "Jan 31, 2024 0:00:00", "Feb 1, 2024 0:00:00", "Feb 28, 2024 0:00:00", "Feb 29, 2024 0:00:00", "Mar 3, 2024 0:00:00", "Mar 7, 2024 0:00:00", "Mar 8, 2024 0:00:00", "Mar 12, 2024 0:00:00", "Mar 15, 2024 0:00:00", "Mar 19, 2024 0:00:00", "Mar 21, 2024 0:00:00", "Mar 23, 2024 0:00:00", "Mar 30, 2024 0:00:00", "Apr 5, 2024 0:00:00", "Apr 8, 2024 0:00:00", "May 3, 2024 0:00:00", "May 17, 2024 0:00:00", "May 18, 2024 0:00:00", "May 19, 2024 0:00:00"];
                this.eventss = ["Early Bird Registration of SANxLKTI, ArchFest, ASF, and GADA", "Abstract Online Submission of SANxLKTI", "Early Bird Registration Closing of SANxLKTI, ArchFest, ASF, and GADA", "Normal Registration of SANxLKTI, ArchFest, ASF, and GADA", "Normal Registration Closing and Abstract Online Submission Closing of SANxLKTI ", "Normal Registration Closing of 17th ArchFest and GADA", "Normal Architectural Sketch Fair Registration Closing", "Abstract Round Passing Announcement of SANxLKTI", "Full Paper Online Submission of SANxLKTI and Close Assessment  17th ArchFest", "Top 15 Announcement 17th Architecture Festival", "Top 5  Announcement 17th ArchFest and Closed Assessment GADA 2024", "Top 20 Announcement Geest Van De Architectuur 2024", "Top 5 Announcement Geest Van De Architectuur 2024", "Final Presentation 17th Architecture Festival", "Final Presentation GADA 2024 and Full Paper Online Submission Closing of SANxLKTI", "Top 3 Announcement Geest Van De Architectuur 2024", "Top 5 Announcement of SANxLKTI", "Final Presentation of SANxLKTI", "Winner Announcement of SANxLKTI and 17th ArchFest", "Winner Announcement of SANxLKTI and 17th ArchFest", "Winner Announcement of SANxLKTI and 17th ArchFest"];
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
        .timeline {
            text-align: center;
            font-family: JustCosmic; 
            margin: 10px 10px;
            display: flex;
            flex-direction: column;
            align-items: space-between;
            justify-content: center;
            height: 100vh;
        }
        .timeline_title{
            font-size: 80px;
        }
        .countdownn{
            width: 500px;
            font-family: Aurora;
            font-size: 90px;
            display: flex;
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
            background-color: grey;
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
            margin: 10px 10px;
        }
        .bgbgbg{
            background-color: white;
            display: flex;
            justify-content: center;
            align-self: center;
        }
        .biru_gelap{
            background-color: #00243D;
            color: white;
        }
        .biru_muda{
            background-color: #68A7C5;
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
                font-size: 45px;
            }
            .contact_title{
                font-size: 45px;

            }
        }
        @media screen and (max-width: 400px) {
            .w3-bar *{
                height: 60px;
                min-width: 20%;
                text-align: center;
            }
            .smol_logo{
                max-height: 50px;
                max-width: 40px;
                /* transform: scale(1.3, 1.3); */
            }
        }
    </style>
</head>
<body>


    <div class="timeline">
        <h1 class="timeline_title">Timeline</h1>
        <div class="countdown" >
            <span class="countdownn day" class="col">
                <p class="row" id="day">dddd</p>
                <p class="row row2">Days</p>
            </span>
            <span class="countdownn"><p>:</p>
                <p class="row row2"></p></span>
            <span class="countdownn hour" class="col">
                <p class="row" id="hour">hhhh</p>
                <p class="row row2">Hours</p>
            </span>
            <span class="countdownn"><p>:</p>
                <p class="row row2"></p></span>
            <span class="countdownn minute" class="col">
                <p class="row" id="minute">mmmm</p>
                <p class="row row2">Minutes</p>
            </span>
            <span class="countdownn"><p>:</p>
                <p class="row row2"></p></span>
            <span class="countdownn second" class="col">
                <p class="row" id="second">ssss</p>
                <p class="row row2">Seconds</p>
            </span>
        </div>

        <div class="event_placeholder">
            <div class="bgbgbg">
                <p id="eventss">testo</p> 
            </div>
        </div>
    
        <script>
            dettt = new Detos();
            setDate(dettt);

            // w3
            function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
            }
        </script>

            <div class="w3-bar">
            <button class="w3-bar-item w3-button biru_gelap" onclick="openCity('xAE24')">
                <img class="smol_logo" src="assets/logo/LOGO ARCHIEXPO.png" alt=""></button>
            <button class="w3-bar-item w3-button biru_muda" onclick="openCity('xLKTI')">
                <img class="smol_logo" src="assets/logo/LOGO SANXLKTI.png" alt=""></button>
            <button class="w3-bar-item w3-button biru_gelap" onclick="openCity('xFEST')">
                <img class="smol_logo" src="assets/logo/LOGO ARCHFEST.png" alt=""></button>
            <button class="w3-bar-item w3-button biru_muda" onclick="openCity('xGADA')">
                <img class="smol_logo" style="transform: scale(2, 2);" src="assets/logo/LOGO GADA.png" alt=""></button>
            <button class="w3-bar-item w3-button biru_gelap" onclick="openCity('xASF')">
                <img class="smol_logo" src="assets/logo/LOGO ASF.png" alt=""></button>
            </div>

            <div id="xAE24" class="city biru_gelap">
            <h2>xAE24</h2>
            <p>To Be Announced</p>
            </div>

            <div id="xLKTI" class="city biru_muda" style="display:none">
            <h2>xLKTI</h2>
            <p>To Be Announced</p>
            </div>

            <div id="xFEST" class="city biru_gelap" style="display:none">
            <h2>xFEST</h2>
            <p>To Be Announced</p>
            </div>

            <div id="xGADA" class="city biru_muda" style="display:none">
            <h2>xGADA</h2>
            <p>To Be Announced</p>
            </div>

            <div id="xASF" class="city biru_gelap" style="display:none">
            <h2>xASF</h2>
            <p>To Be Announced</p>
            </div>

</body>
</html>