<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCHIEXPO 2024</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      
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
            font-size: 80px;
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

        #ull li:nth-child(2):before {
            background: #E1306C;
        }

        #ull li:nth-child(3):before {
            background: #EEEEEE;
        }

        #ull li:hover:before {
            filter: blur(3px);
            transform: scale(1.2);
            /* box-shadow: 0 0 15px #d35400; */
        }

        #ull li:nth-child(1):hover:before {
            box-shadow: 0 0 15px #27ff3d;
        }

        #ull li:nth-child(2):hover:before {
            box-shadow: 0 0 15px #E1306C;
        }

        #ull li:nth-child(3):hover:before {
            box-shadow: 0 0 15px #EEEEEE;
        }

        #ull li:nth-child(1):hover {
            color: #00ff1a;
            box-shadow: 0 0 15px #27ff3d;
            text-shadow: 0 0 15px #27ff3d;
        }

        #ull li:nth-child(2):hover {
            color: #e23670;
            box-shadow: 0 0 15px #E1306C;
            text-shadow: 0 0 15px #E1306C;
        }

        #ull li:nth-child(3):hover {
            color: #EFEFEF;
            box-shadow: 0 0 15px #EEEEEE;
            text-shadow: 0 0 15px #EEEEEE;
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
        <script
            src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous">
        </script>

        <script>
            $(document).ready(function() {
                $("#ull .fa-line").parent().click(function() {
                    window.open('https://line.me/R/ti/p/@469wztcb', '_blank');
                });
                $("#ull .fa-instagram").parent().click(function() {
                    window.open('https://www.instagram.com/archiexpo.ukp', '_blank');
                });
                $("#ull .fa-tiktok").parent().click(function() {
                    window.open('https://www.tiktok.com/@archiexpo.ukp', '_blank');
                });
            });
        </script>
   </head>
   <body>
    <div class="contactt">
        <h1 class="contact_title">Contact Us</h1>
        <ul id="ull">
            <li><i class="fab fa-line"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-tiktok"></i></li>
        </ul>
    </div>
   </body>
</html>


