<?php 
     session_start();
     include_once 'model/BlogDetailsModel.php';
     include_once 'model/TestimonialDetailsModel.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Astrology</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="hover.css" rel="stylesheet">
    <!-- Modal -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <style>
        .navbar.scrolled {
            background-color: black;
        }

        .rotate {
            width: 100%;

            max-width: 400px;

            height: auto;
        }

        @media (min-width: 768px) {
            .rotate {
                max-width: none;
                /* remove the maximum width constraint */
                width: 5px;
                /* set the width to auto to allow the image to scale */
                height: 100%;
                margin-top: -350px;

                margin-left: 200%;
                /* set the height to 100% to fill the container */
                transform-origin: center center;
                /* set the origin of the rotation to the center of the image */
                animation-name: spin;
                animation-duration: 60s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }
        }

        @media (max-width: 768px) {
            .rotate {
                max-width: none;
                /* remove the maximum width constraint */
                width: auto;
                /* set the width to auto to allow the image to scale */
                height: 100%;

                /* set the height to 100% to fill the container */
                transform-origin: center center;
                /* set the origin of the rotation to the center of the image */
                animation-name: spin;
                animation-duration: 60s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .swastik {
            width: 100%;

            max-width: 400px;

            height: auto;

        }

        @media (min-width: 768px) {
            .swastik {
                max-width: none;
                /* remove the maximum width constraint */
                width: 5px;
                /* set the width to auto to allow the image to scale */
                height: 100%;
                margin-top: -170px;
                margin-left: -70px;

            }
        }

        @media (max-width: 992px) {
            .swastik {
                max-width: none;
                /* remove the maximum width constraint */
                width: auto;
                /* set the width to auto to allow the image to scale */
                height: 20%;

                /* set the height to 100% to fill the container */
                transform-origin: center center;
                /* set the origin of the rotation to the center of the image */
            }
        }

        .om {
            width: 100%;

            max-width: 400px;

            height: auto;
        }

        @media (min-width: 768px) {
            .om {

                /* remove the maximum width constraint */

                /* set the width to auto to allow the image to scale */
                display: block;
                margin-top: -500px;
                margin-left: 100%;
                margin-right: 100%;
            }
        }

        @media (max-width: 992px) {
            .om {
                max-width: none;
                /* remove the maximum width constraint */
                width: auto;
                /* set the width to auto to allow the image to scale */
                height: 100%;

                /* set the height to 100% to fill the container */
                transform-origin: center center;
                /* set the origin of the rotation to the center of the image */
            }
        }

        @media (min-width: 768px) {
            .bg {
                margin-top: -50px;
            }
        }
        /* body {

            background-image: linear-gradient(to right, #190034, #310144);

        } */
        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container1 {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        .stext {
            margin-top: 100px;
        }

        .mob {
            font-size: 95px;

        }

        .mob1 {
            font-size: 55px;
        }
        .mob2 {
            font-size: 23px;
        }

        @media only screen and (max-width: 768px) {
            .stext {
                margin-top: 20px;
                margin-left: 15px;
            }
        }

        @media only screen and (max-width: 768px) {

            .mob {
                width: 100%;
                font-size: 20px;
            }

            .mob1 {
                font-size: 15px;
            }

            .mob2 {
                font-size: 13px;
            }
        }

        .slider {
            width: 100%;
            height: 100%;
        }

        @media (min-width: 768px) {
            .sliders {
                height: 940px;
            }
        }

        @media (max-width: 992px) {
            .sliders {
                height: 440px;
            }
        }

        @media only screen and (min-width: 992px) {
            .wrapper .owl-dots {
                text-align: center;
                margin-top: 40px;
                display: flex;
                margin-left: 580px;
            }
            .wrapper .owl-dot {
                height: 10px;
                width: 35px;
                margin: 0 5px;
                outline: none;
                border-radius: 14px;
                border: 2px solid white !important;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                transition: all 0.3s ease;
            }
            .wrapper .owl-dot.active,
            .wrapper .owl-dot:hover {
                background: white !important;
            }
        }
    </style>
</head>

<body style="background-color:#eceff1">
    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status">
        </div>
    </div> -->
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+0123456789"><i
                            class="fa fa-phone-alt text-primary me-2"></i>+012 345 6789</a>
                    <a class="text-body px-2" href="mailto:info@example.com"><i
                            class="fa fa-envelope-open text-primary me-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <a class="text-body px-2" href="">Terms</a>
                    <a class="text-body px-2" href="">Privacy</a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn " data-wow-delay="0.1s"
        style="height: 60px;">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-light m-0">Astrology</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"><img src="img/menu.png" style="height:40px;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link ">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <a href="blog.php" class="nav-item nav-link">Blog</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="appointment.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Appointment</a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0  wow fadeIn " data-wow-delay="0.1s" style="margin-top:-60px;">
        <div class="owl-carousel header-carousel position-relative ">
            <div class="owl-carousel-ite position-relative sliders" data-dot="<img src='img/solar-system.jpg'>">
                <img class="img-fluid bg sliders d-none d-sm-block" src="img/solar-system.jpg" alt="">
                <img class="img-fluid bg sliders d-lg-none d-xl-none" src="img/solar-system-mobile.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-md-5 col-lg-5 col-sm-3">
                                <img class="img-fluid position-relative rotate d-none d-sm-block" src="img/PngItem.png"
                                    style="height:300px; width:300px; opacity:0.4;" alt="">
                                <img class="img-fluid position-relative rotate d-lg-none d-xl-none"
                                    src="img/PngItem.png"
                                    style="height:200px; width:200px; opacity:0.4; margin-left:90px; margin-top:-50px;"
                                    alt="">
                                <img class="img-fluid position-relative swastik d-none d-sm-block" src="img/ganesha.png"
                                    style="height:300px; width:300px; opacity:0.4;" alt="">
                                <img class="img-fluid position-relative om d-none d-sm-block" src="img/om.png"
                                    style="height:300px; width:300px; opacity:0.5;" alt="">
                            </div>
                            <div class="col-md-1 col-lg-1"></div>
                            <div class="col-md-6 col-lg-6 col-sm-3 stext  d-lg-none d-xl-none " style="">
                                <h3 class="mob" style=" color:white;">Worried about your future?</h3>
                                <h5 class="mob1" style="color:#d96c06">Know your future in 30 seconds.</h5>
                                <h6 class="mob2" style="color:white;"><b>Astrology is an ancient concept and an
                                        important aspect of our
                                        lives, our past, present and future.</b></h6>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-3 stext d-none d-sm-block"
                                style="background-color:rgba(0,0,0,0.3);margin-top:-150px; margin-left:-250px;">
                                <h3 class="" style=" color:white;">Worried about your future?</h3>
                                <h4 class="" style="color:#d96c06">Know your future in 30 seconds.</h4>
                                <h5 class="" style="color:white;"><b>Astrology is an ancient concept and an
                                        important aspect of our
                                        lives, our past, present and future.</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-xxl py-5" style="margin-top:-10px;">
        <div class="container">
            <div class="row g-5">
                <h1 class="section-title" align="center"><span style="color: #af0945;">WELCOME TO ASTRO SIDDHIS..</span>
                </h1>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/space.jpg" alt="">
                        <img class="img-fluid" src="img/space2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h2 class="section-title">Know <span>About us</span></h2>
                    <p>For centuries, humans have looked to the heavens, the position of stars and planets for their
                        guidance. Astrology is the study of the correlation between the astronomical positions of the
                        planets and events on earth.</p>
                    <p class="mb-4">Astrologers believe that the positions of the Sun, Moon, and planets at the time of
                        a person`s birth have a direct influence on that person`s overall character and affect a
                        person`s destiny too. Although we are blessed with free will also which plays a very important
                        role in any individual`s life.
                    </p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary"
                            style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">15</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Years</h3>
                            <h3>Of</h3>
                            <h3 class="mb-0">Experience</h3>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="about.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Team Start -->
    <div class="container-xlg py-5" style="margin-top:-20px;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="section-title">Our Services</h2>
                <h4 class=" mb-4" style="color:#af0945">What do you get from ASTRO SIDDHIS</h4>
            </div>
            <div class="wrapper">
                <div class="carousel owl-carousel">
                    <div class="card card-1" style="height:55vh; width:auto;"> <img class="img-fluid"
                            src="img/service.jpg" style="height:40vh; width:auto;" alt="">
                        <h3 style="padding:10px;">Your Deatailed Horoscope Analysis</h3>
                    </div>
                    <div class="card card-2" style="height:55vh; width:auto;"> <img class="img-fluid"
                            src="img/marriage.jpg" style="height:40vh;" alt="">
                        <h3 style="padding:10px;">Marriage and married life issues.</h3>
                    </div>
                    <div class="card card-3" style="height:55vh; width:auto;"> <img class="img-fluid"
                            src="img/match.jpg" style="height:40vh;" alt="">
                        <h3 style="padding:10px;">Match Making</h3>
                    </div>
                    <div class="card card-4" style="height:55vh; width:auto;"> <img class="img-fluid" src="img/hand.jpg"
                            style="height:40vh;" alt="">
                        <h3 style="padding:10px;">Career Guidance</h3>
                    </div>
                    <div class="card card-5" style="height:55vh; width:auto;"> <img class="img-fluid"
                            src="img/healthastro.jpg" style="height:40vh;" alt="">
                        <h3 style="padding:10px;">Health</h3>
                    </div>
                    <div class="card card-6" style="height:55vh; width:auto;"> <img class="img-fluid"
                            src="img/education-astro.jpg" style="height:40vh;" alt="">
                        <h3 style="padding:10px;">Education</h3>
                    </div>
                    <div class="card card-7" style="height:55vh; width:auto;"> <img class="img-fluid"
                            src="img/job-astro.jpg" style="height:40vh;" alt="">
                        <h3 style="padding:10px;">Job / Business Possibilities</h3>
                    </div>
                    <div class="card card-8" style="height:55vh; width:auto;"> <img class="img-fluid"
                            src="img/gemstone.jpg" style="height:40vh;" alt="">
                        <h3 style="padding:10px;">Effective Remedies and Gem stone Guidance.</h3>
                    </div>
                    <div class="card card-9" style="height:55vh; width:auto;"> <img class="img-fluid" src="img/palm.jpg"
                            style="height:40vh;" alt="">
                        <h3 style="padding:10px;">Horary astrology.</h3>
                    </div>
                    <div class="card card-10" style="height:55vh; width:auto;"> <img class="img-fluid"
                            src="img/birthtime.jpg" style="height:40vh;" alt="">
                        <h3 style="padding:10px;">Birth Time Rectification</h3>
                    </div>
                    <div class="card card-11" style="height:55vh; width:auto;"> <img class="img-fluid"
                            src="img/education-astro.jpg" style="height:40vh;" alt="">
                        <h3 style="padding:10px;">Astro Siddhis Library</h3>
                    </div>
                    <div class="card card-12" style="height:55vh; width:auto;"> <img class="img-fluid"
                            src="img/pexel8.jpg" style="height:40vh;" alt="">
                        <h3 style="padding:10px;">Astrology Classes</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- blog Start -->
    <div class="container-xxl py-5" style="margin-top:-20px;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Latest Blogs</h4>
                <h1 class="display-5 mb-4" style="color:#af0945">We Focused On Modern Design</h1>
            </div>

            <div class="row g-5">
                <?php
                $BlogDetails=$blogObj->getBlogDetails();
                if ($BlogDetails==false){

                }else{
                                      
                foreach ($BlogDetails as $key => $value) {
            ?>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="card" style="border:none; overflow-wrap:auto;">
                        <?php if($value['file_type']=="image"){
                                    ?><img src="admin/<?=$value['image_file_path'];?>" style="height:230px;"><?php
                        }elseif($value['file_type']=="video"){
                            ?><video controls style="height:230px;">
                            <source src="admin/<?=$value['video_file_path'];?>"></video><?php
                        }else{
                            ?><img src="img/blank.png"><?php
                        }
                        ?>
                        <div class="card-body">

                            <i class="fas fa-user" style="color:#d96c06;"> By Astrologer</i>&emsp;<i
                                class="fas fa-clock" style="color:#d96c06;;">
                                <?=date("d/m/Y",strtotime($value['created_on']));?></i>&emsp;
                            <h5 class="card-title"><a href="blog_details.php?id=<?=$value['blog_id']; ?>"
                                    style="color:black;"><?=$value['blog_title'];?></a></h5>
                            <p class="card-text" style="color:black;"><?=$value['blog_description'];?></p>
                            <!-- <a href="#" class="btn btn-primary">Button</a> -->
                        </div>
                    </div>
                </div>

                <?php
                    }
                    }
                ?>
            </div>

        </div>
    </div>
    <!-- blog End -->

    <!-- Project Start -->
    <div class="container-xlg project py-5" style="margin-top:-20px;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 100%;">
                <h1 style="color:#310144;">ASTRO SIDDHIS..</h1>
                <h4 class="mb-4">I wish you benefit from every bit of information I share here on my website,
                    I Pray that you make the best out of the one of part of God that reside in you
                    Know yourself to become a better version of you,Transform your life,Astrology never limits you or
                    leave you at the whims of Fate!Astrology should be approached in a way that empower you as a
                    conscious co-creator of your own experience of consciousness.My motive is to guide my clients in the
                    best possible way so they utilise the opportunites and happiness and can face challenges which come
                    to their way.
                </h4>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-5">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-2 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0" style="color:black;font-size:16px;">Astrology is one of the oldest science
                                discovered by
                                our Rishi-Munis. It basically deals with different Planets, Stars, and Zodiac Signs.
                                Each individual is born with a unique combination of stars, zodiac signs, and Planets,
                                which influences our thought patterns, likes and dislikes, and ultimately our
                                personality.
                                Astrology decodes the messages of Stars.</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-2"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0" style="color:black;font-size:16px;">Matchmaking is a unique method in Vedic
                                astrology. It
                                helps us find a life partner who is compatible with our nature so the family can grow
                                together peacefully. It is based on Lunar Constellation, Ahstkoot Milan, or Gun Milan.
                                It is a handy tool given to us by Vedic Astrology.
                            </h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-2"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0" style="color:black;font-size:16px;">Palmistry or Chiromancy is the science
                                of
                                fortune-telling by studying different lines in the palm. This is also known as Palm
                                reading or Chirology. This is practiced all over the world.</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0" style="color:black;font-size:16px;">Planets give both good and bad results.
                                The results
                                mainly depend on the position of the planet in the horoscope.
                                Remedies mean finding a solution to the problem of an individual. These problems can be
                                related to Health, Wealth, disease, marriage, love life problems, career, etc. Remedies
                                are Chart specific and problem specific. </h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-2"></div>
                                <div class="col-md-9" style="min-height: 420px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid h-100 w-100" src="img/sign.jpeg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-1"></div>
                                <div class="col-md-9" style="min-height: 420px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100 " src="img/mathmaking.jpeg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-1"></div>
                                <div class="col-md-9" style="min-height: 420px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100  h-100" src="img/palms.jpeg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-1"></div>
                                <div class="col-md-9" style="min-height: 420px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/bstone.jpeg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->

    <!-- Testimonial Start -->
    <div class="container-xlg py-5" style="background-image:url('img/astrology-wallpaper4.jpg');background-color:#d96c06; height:auto; width:100%;opacity: 1.9; margin-top:-10px;">
        <div class="container mt-2" style="background-color:rgba(0,0,0,0.2);">
            <div class="text-center mx-auto  wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title" style="color:#fffffb">Testimonial</h4>
                <h1 class="display-5 mb-4" style="color:#d96c06;">What Our Customers Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s"
                style="background-color:transparent;">
                    <?php
                        $TestimonialDetails=$testimonialObj->getAllActiveTestimonialDetailsById();
                        if ($TestimonialDetails==false){

                        }else{
                                            
                        foreach ($TestimonialDetails as $key => $value) {
                    ?>
                <div class="testimonial-item text-center" data-dot="">
                    <!-- <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>"> --><br><br>
                    <p class="fs-5" style="color:#fffffb;"><?=$value['testimonial_message'];?></p>
                    <h3 style="color:#fffffb;"><?=$value['testimonial_name'];?></h3><br>
                </div>
                <?php
                    }
                    }
                ?>
                <!-- <div class="testimonial-item text-center" data-dot="">
                    <p class="fs-5" style="color:#fffffb;">Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                        duo duo labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                        justo sea clita.</p>
                    <h3 style="color:#fffffb;">Client Name</h3>
                </div>
                <div class="testimonial-item text-center" data-dot="">
                    <p class="fs-5" style="color:#fffffb;">Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                        duo duo labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                        justo sea clita.</p>
                    <h3 style="color:#fffffb;">Client Name</h3>
                </div> -->

            </div>

            <center><button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo">
                    Add Yours
                </button></center>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Testimonial modal start-->

    <div id="demo" class="collapse">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 style="color:#d96c06;">Testimonial Form</h2>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="#" method="POST" name="addtestimonialForm" id="addtestimonialForm">
                        <div class="row ">
                            <div class="col-md-6">
                                <label for="testimonial_name">Name</label>
                                <input type="text" id="testimonial_name" name="testimonial_name"
                                    placeholder="Enter Your name..">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="text" id="testimonial_email" name="testimonial_email"
                                    placeholder="Enter Your Email..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="testimonial_message">Message</label>
                                <textarea id="testimonial_message" name="testimonial_message"
                                    placeholder="Write something.." style="height:100px"></textarea>
                            </div>
                        </div>
                        <br>
                        <center><button type="button" name="addtestimonialBtn" id="addtestimonialBtn" class="btn"
                                style="background-color:#d96c06; color:white;" data-dismiss="modal">Submit</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial modal End -->
    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Contact Us</h4>
                <h1 class="display-5 mb-4">If You Have Any Query, Please Feel Free Contact Us</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark"
                                style="width: 55px; height: 55px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Address</p>
                                <h3 class="mb-0">Flat No: 803 Bldg. 57, Seawoods Estate Phase - 2, Seawoods west, Navi
                                    Mumbai.</h3>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark"
                                style="width: 55px; height: 55px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Call Us Now</p>
                                <h3 class="mb-0">+91 7021006714/+91 9004346326</h3>
                            </div>
                        </div>
                        <!-- <div class="bg-light d-flex align-items-center w-100 p-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark"
                                style="width: 55px; height: 55px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Mail Us Now</p>
                                <h3 class="mb-0"><a href="mailto:astrosiddhi23@gmail.com" style="color:#d96c06;">astrosiddhi23@gmail.com</a></h3>
                            </div>  
                        </div> -->
                        <div class="bg-light d-flex align-items-center w-100 p-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark"
                                style="width: 55px; height: 55px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-1">
                                <p class="mb-2">Mail Us Now</p>
                                <h3 class="mb-0"><a href="mailto:astrosiddhi23@gmail.com"
                                        style="color:#d96c06;">astrosiddhi23@gmail.com</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    <form action="#" method="post" id="addcontactForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Leave a message here"
                                        id="message" style="height: 200px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="addcontactBtn" id="addcontactBtn"
                                    type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <!-- Google Map Start -->
    <div class="container-xlg pt-5 px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-top:-50px;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.323797218638!2d73.01331851469632!3d19.005448387128432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c39fc3d2d8f7%3A0xb8793fc0e73b55d9!2sNRI%20Complex%20Phase%20II%20Building%20no%2051!5e0!3m2!1sen!2sin!4v1678954367620!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Appointment End -->
    <!-- Footer Start -->
    <?php include('footer.php'); ?>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        $(window).scroll(function () {
            if ($(window).scrollTop() > 0) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });

        $(".carousel").owlCarousel({
            margin: 20,
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: false
                },
            },
        });


        $("#addtestimonialBtn").on("click", function () {
            var testimonial_name = $("#testimonial_name").val();
            var testimonial_email = $("#testimonial_email").val();
            var testimonial_message = $("#testimonial_message").val();
            if (testimonial_name == "" || testimonial_name == null) {
                alert("Please enter Your Name ");
            } else if (testimonial_email == "" || testimonial_email == null) {
                alert("Please Enter Email Id");
            } else if (testimonial_message == "" || testimonial_message == null) {
                alert("Please Type Something");
            }
            $.ajax({
                url: "controller/TestimonialDetailsController.php",
                type: 'POST',
                data: $("#addtestimonialForm").serialize() + '&action=savetestimonialDetailsAction',
                beforeSend: function () {
                    $("#addtestimonialBtn").html(
                        '<i class="fas fa-spinner fa-spin fa-fw fa-2x"></i>');
                    $('#addtestimonialBtn').prop('disabled', true);
                },
                success: function (response) {
                    //alert(response);
                    var dataRes = JSON.parse(response);
                    if (dataRes.statusCode == 201) {
                        alert(dataRes.message);
                    }
                    if (dataRes.statusCode == 200) {
                        alert(dataRes.message);
                        document.getElementById("addtestimonialForm").reset();
                        setTimeout(function () {
                            location.reload();
                        }, 3000);
                    }
                    $("#addtestimonialBtn").html('Submit');
                    $('#addtestimonialBtn').prop('disabled', false);
                }
            });


        });


        $("#addcontactBtn").on("click", function () {
            var name = $("#name").val();
            var email = $("#email").val();
            var subject = $("#subject").val();
            var message = $("#message").val();
            if (name == "" || name == null) {
                alert("Please enter name ");
            } else if (email == "" || email == null) {
                alert("Please enter email");
            } else if (subject == "" || subject == null) {
                alert("Please enter subject");
            } else if (message == "" || message == null) {
                alert("Please enter message");
            } else {
                $.ajax({
                    url: "controller/ContactDetailsController.php",
                    type: 'POST',
                    data: $("#addcontactForm").serialize() + '&action=savecontactDetailsAction',
                    beforeSend: function () {
                        $("#addcontactBtn").html(
                            '<i class="fas fa-spinner fa-spin fa-fw fa-2x"></i>');
                        $('#addcontactBtn').prop('disabled', true);
                    },
                    success: function (response) {
                        // alert(response);
                        var dataRes = JSON.parse(response);
                        if (dataRes.statusCode == 201) {
                            alert(dataRes.message);
                        }
                        if (dataRes.statusCode == 200) {
                            alert(dataRes.message);
                            document.getElementById("addcontactForm").reset();
                            setTimeout(function () {
                                location.reload();
                            }, 3000);
                        }
                        $("#addcontactBtn").html('Submit');
                        $('#addcontactBtn').prop('disabled', false);
                    }
                });
            }

        });
    </script>
</body>

</html>