<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arkitektur - Architecture HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap"
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
    <link href="hover.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <style>
        .navbar.scrolled {
            background-color:black;
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

<body style="background-color:#eceff1 ">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status">
        </div>
        <!-- <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-1.png" alt="Icon"> -->
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s"
        style="height: 60px;">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-light m-0">Astrology</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"><img src="img/menu.png" style="height:40px;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link ">About</a>
                <a href="service.php" class="nav-item nav-link active">Services</a>
                <a href="blog.php" class="nav-item nav-link">Blog</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="appointment.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Appointment</a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Facts Start -->
    <div class="container-xxl py-5" style="margin-top:-50px;">
        <div class="container">
            <div class="text-center mx-auto mb-2 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h3 class="section-title">Astrology Classes</h3>
            </div>
            <p class="mb-5">Learning Astrology can be a fun and rewarding especially for those with a strong interest in
                learning more about themselves, others, and their lives.
                Beginner students of Astrology should take the learning process one step at a time, perhaps starting
                with the Sun Signs, moving on to a study of the Moon, and so forth. The wonderful reward for this
                step-by-step approach is the gradual unfolding of your own chart and the charts of those you love!
            </p>
            <br>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-white h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img/icons/icon-2.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Basic Astrology Course</h3>
                        <p class="mb-0" style="color: #000000;">Erat ipsum justo amet duo et elitr dolor, est duo duo
                            eos lorem sed diam stet diam sed stet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-white h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img/icons/icon-3.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Advance Astrology Course</h3>
                        <p class="mb-0" style="color: #000000;">Erat ipsum justo amet duo et elitr dolor, est duo duo
                            eos lorem sed diam stet diam sed stet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-white h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img/icons/icon-4.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">KP Astrology Course.</h3>
                        <p class="mb-0" style="color: #000000;">Erat ipsum justo amet duo et elitr dolor, est duo duo
                            eos lorem sed diam stet diam sed stet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
    <!-- Team Start -->
    <div class="container-xlg py-5" style="margin-top:-50px;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="section-title">Our Services</h2>
                <h4 class=" mb-4" style="color:#310144;">What do you get from ASTRO SIDDHIS</h4>
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
    <!-- Service Start -->
    <div class="container-xxl py-5" style="margin-top:-50px;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Erat ipsum justo amet duo</h4>
                <h1 class="display-5 mb-4">Lorem Ipsum is simply dummy</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/Aries.jpeg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/ariesicon.png" alt="Icon" style="height:50px;">
                            <h3 class="mb-3">Aries (Mesh)</h3>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                            <!-- <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/tauras.jpeg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/taurusicon.png" alt="Icon" style="height:50px;">
                            <h3 class="mb-3">Taurus (Vrushabh)</h3>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/gemini.jpeg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/geminiicon.png" alt="Icon" style="height:50px;">
                            <h3 class="mb-3">Gemini (Mithun)</h3>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/cancer.jpeg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/cancericon.png" alt="Icon" style="height:50px;">
                            <h3 class="mb-3">Cancer (Karka)</h3>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/leo.jpeg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/leoicon.png" alt="Icon" style="height:50px;">
                            <h3 class="mb-3">Leo (Sinh)</h3>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/virgo.jpeg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/virgoicon.png" alt="Icon" style="height:50px;">
                            <h3 class="mb-3">Virgo (Kanya)</h3>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/libra.jpeg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/libraicon.png" alt="Icon" style="height:50px;">
                            <h3 class="mb-3">Libra (Tula)</h3>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/scorpio.jpeg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/scorpianicon.jpg" alt="Icon" style="height:50px;">
                            <h3 class="mb-3">Scorpio (Vrushchik)</h3>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/Sagittarius.jpeg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/Sagittariusicon.png" alt="Icon" style="height:50px;">
                            <h3 class="mb-3">Sagittarius (Dhanu)</h3>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/capricorn.jpeg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/capricornicon.png" alt="Icon" style="height:50px;">
                            <h3 class="mb-3">Capricorn (Makar)</h3>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/aquaries.jpeg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/aquariusicon.png" alt="Icon" style="height:50px;">
                            <h3 class="mb-3">Aquarius (Kumbha)</h3>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="img/pisces.jpeg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="img/piscesicon.png" alt="Icon" style="height:50px;">
                            <h3 class="mb-3">Pisces (Meen)</h3>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                stet diam sed stet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Testimonial</h4>
                <h1 class="display-5 mb-4">Thousands Of Customers Who Trust Us And Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Client Name</h3>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Client Name</h3>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Client Name</h3>
                    <span class="text-primary">Profession</span>
                </div>
            </div>      
        </div>
    </div> -->
    <!-- Testimonial End -->
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
    </script>
    <script>
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
    </script>
</body>

</html>