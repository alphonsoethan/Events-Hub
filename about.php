<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Events Hub - About</title>
    <style>
        .box{
            border-top-color: var(--teal) !important;
        }
    </style>
</head>
<body class="bg-light">
    <?php require('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">About Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        Welcome to Events Hub, where your event dreams come to life! We are passionate about 
        simplifying the event planning process and providing you with a seamless platform to find 
        the perfect venue. Whether it's a wedding, corporate function, or a casual get-together, 
        Events Hub offers a diverse selection of venues tailored to your needs. Our user-friendly 
        interface ensures a hassle-free experience, allowing you to explore, compare, and book with
         confidence. Backed by detailed venue information, amenities, and real customer reviews, Events 
         Hub is your trusted partner in creating memorable moments. Join us on this exciting journey
          of event planning, where every celebration is a success. Your vision, our platform—let's
           make magic happen together at Events Hub!
        </p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <div>
                        <img src="svg/hotel.svg" width="70px">
                        <h4 class="mt-3">100+ Venues</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <div>
                        <img src="svg/customer.svg" width="70px">
                        <h4 class="mt-3">10000+ Customers</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <div>
                        <img src="svg/rating.svg" width="70px">
                        <h4 class="mt-3">Good Feedback</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <div>
                        <img src="svg/staff.svg" width="70px">
                        <h4 class="mt-3">Helpful Staff</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php');?>
</body>
</html>