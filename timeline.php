<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCHIEXPO 2024</title>
    <script>
        function twodigit(intt){
            if(intt >= 10)
                return intt;
            return "0"+intt;
        }
        function setDate(dateString){
            // Jan 5, 2024 15:37:25
            // Set the date we're counting down to
            var countDownDate = new Date(dateString).getTime();
            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();
            
                // Find the distance between now and the count down date
                var distance = countDownDate - now;
            
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
            
                // If the count down is finished, write some text
                if (distance < 0) {
                clearInterval(x);
                document.getElementsByClassName("countdownn").innerHTML = "";
                document.getElementsByClassName("day").innerHTML = "EXPIRED";
                }
            }, 1000);
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
    
        <script>
            setDate("Jan 15, 2024 23:59:59");
        </script>
</body>
</html>