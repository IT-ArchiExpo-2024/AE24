<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AE24</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
    body {
        background: #e8eeff;
        }
        #app {
        padding: 50px 0;
        }
        .timelinee {
        margin: 50px 0;
        list-style-type: none;
        display: flex;
        padding: 0;
        text-align: center;
        }
        .timelinee li {
        transition: all 200ms ease-in;
        }
        .timestamp {
        width: 200px;
        margin-bottom: 20px;
        padding: 0px 40px;
        display: flex;
        justify-content: center;
        font-weight: 100; 
        }
        .status {
        padding: 0px 40px;
        display: flex;
        justify-content: center;
        border-top: 4px solid #3e70ff;
        position: relative;
        transition: all 200ms ease-in ;
        }
        
        .status span {
        font-weight: 600;
        padding-top: 20px;
        }
        .status span:before {
        content: '';
        width: 25px;
        height: 25px;
        background-color: #e8eeff;
        border-radius: 25px;
        border: 4px solid #3e70ff;
        position: absolute;
        top: -15px;
        left: 42%;
        transition: all 200ms ease-in;
        }
        .swiper-control {
        text-align: right;
        }

        .swiper-container {
        width: 100%;
        height: 250px;
        margin: 50px 0;
        overflow: hidden;
        padding: 0 20px 30px 20px;
        }
        .swiper-slide {
        width: 200px;
        text-align: center;
        font-size: 18px;
        }
        .swiper-slide:nth-child(2n) {
        width: 40%;
        }
        .swiper-slide:nth-child(3n) {
        width: 20%;
        }
        .buttons{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div id="app" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="swiper-container">
                    <p class="swiper-control">
                        <!-- <div class="buttonss"> -->
                        <button type="button" class="btn btn-default btn-sm prev-slide">Prev</button>
                        <button type="button" class="btn btn-default btn-sm next-slide">Next</button>
                        <!-- </div> -->
                    </p>
                    <div class="swiper-wrapper timelinee">
                        <div class="swiper-slide" v-for="item in steps">
                            <div class="timestamp">
                                <div class="date">{{item.dateLabel}}</div>
                            </div>
                            <div class="status">
                                <!-- <div class="date date2">{{item.dateLabel}}</div> -->
                                <span>{{item.title}}</span>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
    <script>
    
        
    const data = [
    { dateLabel: 'January 2017', title: 'Gathering Information' },
    { dateLabel: 'February 2017', title: 'Planning' },
    { dateLabel: 'March 2017', title: 'Design' },
    { dateLabel: 'April 2017', title: 'Content Writing and Assembly' },
    { dateLabel: 'May 2017', title: 'Coding' },
    { dateLabel: 'June 2017', title: 'Testing, Review & Launch' },
    { dateLabel: 'July 2017', title: 'Maintenance' }];

var clientsTestimonialsPages = 1;
    new Vue({
    el: '#app',
    data: {
        steps: data },

    
    mounted() {
        console.log(clientsTestimonialsPages);
        var swiper = new Swiper('.swiper-container', {
        //pagination: '.swiper-pagination',
        
        slidesPerView: window.innerWidth/450,
        paginationClickable: true,
        grabCursor: true,
        paginationClickable: true,
        nextButton: '.next-slide',
        prevButton: '.prev-slide' });

    } });
    //# sourceURL=pen.js
        
    </script>


<h1>
test bootsy
</h1>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
</body>

</html>