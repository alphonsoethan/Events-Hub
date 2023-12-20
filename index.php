<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Events Hub</title>
    <style>
        .introduction-form{
            margin-top:-50px;
            z-index: 2;
            position: relative;
        }  
        @media screen and (max-width:575px) {
            .introduction-form{
                margin-top:25px;
                padding:0 35px;
            }
        }
    </style>
</head>
<body class="bg-light">

    <?php require('inc/header.php');?>

    <!--Carousel-->
    <div class="container-fluid px-lg-3 mt-2">
        <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/carousel/1.png" width="1000" height="500" padding-top="20px" class="bg-gradient rounded mx-auto d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/enlarge_2.jpg" width="1000" height="500" class=" d-block bg-gradient rounded mx-auto d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/enlarge_3.jpg" width="1000" height="500" class=" d-block bg-gradient rounded mx-auto d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/enlarge_4.jpg" width="1000" height="500" class=" d-block bg-gradient rounded mx-auto d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/enlarge_5.jpg" width="1000" height="500" class=" d-block bg-gradient rounded mx-auto d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/enlarge_6.jpg" width="1000" height="500" class=" d-block bg-gradient rounded mx-auto d-block">
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/enlarge_7.jpg" width="1000" height="500" class=" d-block bg-gradient rounded mx-auto d-block">
            </div>
        </div>
    </div>

    <!-- Intro -->
    <div class="container introduction-form">
        <div class="row">
            <div class="col-lg-7 bg-white shadow p-4 rounded">
                <h4 class="h-font"><center>
                    Unlock unforgettable events at your dream venues!
                </h4>
                <p><center>
                Book your ideal space here hassle-free.
                </p>
                <p><center>
                Your perfect event space is just a click away! 
                </p>
            
            </div>
            
        </div>
    </div> 
    <br><br>

    <!-- Search -->
    <div class="container -form">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Find Venues Perfect For You!</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-4 mb-3">
                            <label class="form-label" style="font-weight:500";>From:</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label class="form-label" style="font-weight:500";>Till:</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500";>Guests</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Choose</option>
                                <option value="1">Less than 100</option>
                                <option value="2">100-200</option>
                                <option value="3">200-300</option>
                                <option value="4">More than 300</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2 butt-search">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>    
       

    <!-- Venues -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Venues</h2>
    <div class="container">
        <div class="row">
            <!-- first -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/hotels/1/1.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5>Harmony Hall</h5>
                        <h6 class="mb-4">₹85,000 per day</h6>
                        <div class="features mb-4">
                            <h6>Capacity 50-150</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms  
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free Parking  
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Internet Connection
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Audio Equipment 
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>           
                </div>
            </div>
           
            <!-- Second -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/hotels/2/2.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5>Majestic Meadows</h5>
                        <h6 class="mb-4">₹1,00,000 per day</h6>
                        <div class="features mb-4">
                            <h6>Capacity 150-250</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Air-conditioned
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms  
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free Parking  
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Internet Connection
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Audio Equipment 
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>           
                </div>
            </div>   
                      
            <!-- Third -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/hotels/4/5.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5>Opulent Oasis</h5>
                        <h6 class="mb-4">₹1,30,000 per day</h6>
                        <div class="features mb-4">
                            <h6>Capacity 250-350</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Air-conditioned
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Ball Room
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Chauffer Service
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Audio Equipment 
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Internet Connection
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>           
                </div>
            </div> 
       
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Venues</a>
                
            </div>

        </div>
    </div>
    

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="svg/star1.svg" width="30px">
                        <h6 class="m-0 ms-2">User</h6>
                    </div>
                    <p> Events Hub exceeded expectations!
                        Amazing venue choices, easy booking,
                        and fantastic support. Our event 
                        was a hit, thanks to them!</p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center ">
                        <img src="svg/star1.svg" width="30px">
                        <h6 class="m-0 ms-2">User</h6>
                    </div>
                    <p> Events Hub is a gem! The website's 
                        user-friendly interface and the hall's
                         elegance made our celebration a huge success.
                          Highly satisfied!"</p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="svg/star1.svg" width="30px">
                        <h6 class="m-0 ms-2">User</h6>
                    </div>
                    <p> Events Hub made finding the perfect space 
                        a breeze! From booking to the event, seamless 
                        and stress-free. Highly recommend!!</p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More</a>
        </div>

    </div>

    <?php require('inc/footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            centeredSlides: true,
            effect:"fade",
            autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        }
        });

        var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        // breakpoints: {
        //     320:{
        //         slidesPerView: 1;
        //     },
        //     640:{
        //         slidesPerView: 1;
        //     },
        //     768:{
        //         slidesPerView: 2;
        //     },
        //     1024:{
        //         slidesPerView: 3;
        //     },
        // }
        });
    </script>

</body>
</html>