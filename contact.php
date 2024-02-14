<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCHIEXPO 2024</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script>
        // w3
        function openCity(cityName, cho) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
            for (i = 1; i < 6;i++){
                document.getElementById("con"+i).style.display="none";
            }
            document.getElementById("con"+cho).style.display="flex";
            // console.log(document.getElementById("con"+cho))
        }
      </script>
      <style>
        * {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .contactt {
            /* height: 100vh; */
            text-align: center;
            align-items: center;
            justify-content: center;
            /* background: #262626; */
            flex-direction: column;
        }
        .contact_title{
            color: white;
            font-family: JustCosmic;
            /* font-size: 80px; */
            /* font-weight: 800px; */
        }

        /* #ull {
            display: flex;
        } */

        #ull{
            display: flex;
            justify-content: center;
        }
        #ull li{
            position: relative;
            display: block;
            color: #666;
            font-size: 30px;
            height: 60px;
            width: 60px;
            background: #171515;
            line-height: 60px;
            border-radius: 50%;
            /* margin: 0 15px; */
            cursor: pointer;
            transition: .5s;
        }
        #ull li:before{
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            height: inherit;
            width: inherit;
            /* background: #d35400; */
            border-radius: 50%;
            transform: scale(.9);
            z-index: -1;
            transition: .5s;
        }


        #ull li:nth-child(1):before {
            background: #27ff3d;
        }

        #ull li:nth-child(3):before {
            background: #E1306C;
        }

        #ull li:nth-child(5):before {
            background: #EEEEEE;
        }

        #ull li:nth-child(7):before {
            background: #DD0000;
        }

        #ull li:hover:before {
            filter: blur(3px);
            transform: scale(1.2);
            /* box-shadow: 0 0 15px #d35400; */
        }

        #ull li:nth-child(1):hover:before {
            box-shadow: 0 0 15px #27ff3d;
        }

        #ull li:nth-child(3):hover:before {
            box-shadow: 0 0 15px #E1306C;
        }

        #ull li:nth-child(5):hover:before {
            box-shadow: 0 0 15px #EEEEEE;
        }

        #ull li:nth-child(7):hover:before {
            box-shadow: 0 0 15px #DD0000;
        }

        #ull li:nth-child(1):hover {
            color: #00ff1a;
            box-shadow: 0 0 15px #27ff3d;
            text-shadow: 0 0 15px #27ff3d;
        }

        #ull li:nth-child(3):hover {
            color: #e23670;
            box-shadow: 0 0 15px #E1306C;
            text-shadow: 0 0 15px #E1306C;
        }

        #ull li:nth-child(5):hover {
            color: #EFEFEF;
            box-shadow: 0 0 15px #EEEEEE;
            text-shadow: 0 0 15px #EEEEEE;
        }
        #ull li:nth-child(7):hover {
            color: #CC0000;
            box-shadow: 0 0 15px #DD0000;
            text-shadow: 0 0 15px #DD0000;
        }
        @media screen and (max-width: 991.9px) {
            #ull{
                transform: translateX(-12px);
            }
        }

        #ull{
            margin-bottom: 0px;
        }

      </style>
      
        <!-- jQuery -->

        <script>
            $(document).ready(function() {
                $("#con1 #ull .fa-line").parent().click(function() {
                    window.open('https://line.me/R/ti/p/@469wztcb', '_blank');
                });
                $("#con1 #ull .fa-instagram").parent().click(function() {
                    window.open('https://www.instagram.com/archiexpo/?hl=en', '_blank');
                });
                $("#con1 #ull .fa-tiktok").parent().click(function() {
                    window.open('https://www.tiktok.com/@archiexpo.ukp', '_blank');
                });
                $("#con2 #ull .fa-google").parent().click(function() {
                    window.open('mailto:sanukpetra@gmail.com', '_blank');
                });
                $("#con2 #ull .fa-line").parent().click(function() {
                    window.open('https://lin.ee/e1UaNhZ', '_blank');
                });
                $("#con2 #ull .fa-instagram").parent().click(function() {
                    window.open('https://www.instagram.com/sanlkti.pcu?igsh=d2k3bWVpY2c5czEy', '_blank');
                });
                $("#con2 #ull .fa-whatsapp").parent().click(function() {
                    window.open('https://wa.me/6281363602211', '_blank');
                });
                $("#con3 #ull .fa-whatsapp").parent().click(function() {
                    window.open('https://wa.me/6281246792903', '_blank');
                });
                $("#con3 #ull .fa-instagram").parent().click(function() {
                    window.open('www.instagram.com/archfest.pcu/', '_blank');
                });
                $("#con3 #ull .fa-google").parent().click(function() {
                    window.open('mailto:architecturefest@gmail.com', '_blank');
                });
                $("#con4 #ull .fa-line").parent().click(function() {
                    window.open('https://line.me/R/ti/p/@008jdrhf', '_blank');
                });
                $("#con4 #ull .fa-instagram").parent().click(function() {
                    window.open('https://www.instagram.com/gada_pcu?igsh=MXZzZzM3bGVxY2toYQ==', '_blank');
                });
                $("#con4 #ull .fa-google").parent().click(function() {
                    window.open('mailto:gada.petra@gmail.com', '_blank');
                });
                $("#con5 #ull .fa-line").parent().click(function() {
                    window.open('https://line.me/ti/p/@496mfbmg', '_blank');
                });
                $("#con5 #ull .fa-instagram").parent().click(function() {
                    window.open('https://www.instagram.com/asf.pcu/', '_blank');
                });
                $("#con5 #ull .fa-whatsapp").parent().click(function() {
                    window.open('https://wa.me/628175059090', '_blank');
                });
                $("#con5 #ull .fa-google").parent().click(function() {
                    window.open('mailto:architecturalsketchfair@gmail.com', '_blank');
                });
                var i;
                for (i = 1; i < 6;i++){
                    document.getElementById("con"+i).style.display="none";
                }
                document.getElementById("con"+1).style.display="flex";

            });
            console.log(document.getElementById("xASF"))
        </script>
   </head>
   <body>
    <div class="contactt pb-2" id="con1">
        <h1 class="contact_title">CONTACT US</h1>
        <ul id="ull">
            <li><i class="fab fa-line"></i></li>
            <li style="opacity: 0;"></li>

            <li><i class="fab fa-instagram"></i></li>
            <li style="opacity: 0;"></li>

            <li><i class="fab fa-tiktok"></i></li>
        </ul>
    </div>

    
    <div class="contactt pb-2" id="con2">
        <h1 class="contact_title">CONTACT US</h1>
        <ul id="ull">
            <li><i class="fab fa-line"></i></li>
            <li style="opacity: 0;"></li>

            <li><i class="fab fa-instagram"></i></li>
            <li style="opacity: 0;"></li>

            <li><i class="fab fa-whatsapp"></i></li>
            <li style="opacity: 0;"></li>

            <li><i class="fab fa-google"></i></li>
        </ul>
    </div>

    
    <div class="contactt pb-2" id="con3">
        <h1 class="contact_title">CONTACT US</h1>
        <ul id="ull">
            <li><i class="fab fa-whatsapp"></i></li>
            <li style="opacity: 0;"></li>

            <li><i class="fab fa-instagram"></i></li>
            <li style="opacity: 0;"></li>

            <li><i class="fab fa-google"></i></li>
        </ul>
    </div>

    
    <div class="contactt pb-2" id="con4">
        <h1 class="contact_title">CONTACT US</h1>
        <ul id="ull">
            <li><i class="fab fa-line"></i></li>
            <li style="opacity: 0;"></li>

            <li><i class="fab fa-instagram"></i></li>
            <li style="opacity: 0;"></li>

            <li><i class="fab fa-google"></i></li>
        </ul>
    </div>

    
    <div class="contactt pb-2" id="con5">
        <h1 class="contact_title">CONTACT US</h1>
        <ul id="ull">
            <li><i class="fab fa-line"></i></li>
            <li style="opacity: 0;"></li>

            <li><i class="fab fa-instagram"></i></li>
            <li style="opacity: 0;"></li>
            
            <li><i class="fab fa-whatsapp"></i></li>
            <li style="opacity: 0;"></li>

            <li><i class="fab fa-google"></i></li>
        </ul>
    </div>
   </body>
</html>


