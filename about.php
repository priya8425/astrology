<?php 
     session_start();
?>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap"
        rel="stylesheet">
    
    <!-- Modal -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

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
    <style>
        .navbar.scrolled {
            background-color:black;
        }
    </style>
</head>
<body style="background-color:#eceff1 ">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show  position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                <a href="about.php" class="nav-item nav-link active">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
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
            <h1 class="display-1 text-white animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5" style="margin-top:-50px;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                    <img class="img-fluid" src="img/space.jpg" alt="">
                        <img class="img-fluid" src="img/space2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h2 class="section-title">Know About us</h2>
                    <!-- <h1 class="display-5 mb-4">A Creative Architecture Agency For Your Dream Home</h1> -->
                    <p>For centuries, humans have looked to the heavens, the position of stars and planets for their
                        guidance. Astrology is the study of the correlation between the astronomical positions of the
                        planets and events on earth.</p>
                    <p class="mb-4">Astrologers believe that the positions of the Sun, Moon, and planets at the time of
                        a person`s birth have a direct influence on that person`s overall character and affect a
                        person`s destiny too. Although we are blessed with free will also which plays a very important
                        role in any individual`s life.
                    </p>
                    <p>We, Astro Siddhis, feel that Astrology can be used as a powerful tool for understanding our true
                        selves, and the world around us. With the help of Astrology we can understand the basic nature
                        and core desire of any person. With the proper use of this science we can predict the events of
                        not only our lives but the society as a whole too.
                        Whether this year will bring good harvest or draught, earthquake or flood will come all these
                        can be predicted well in advance by this unique technique of Astrology.</p>
                    <p class="mb-4">Hi, I am astrologist, Palm reader, and Numerologer Anju Ranjan. Astrology is my
                        passion and I have done extensive research in Vedic Astrology.
                        Studies of Nakshatras and its impact on human mind makes me curious to understand their nature
                        more and more. After doing research on Vedic Astrology I come across KrishnaMurty Paddhati. KP
                        Astrology helped me to become more accurate. Later I learn Gemini Astrology too.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-xlg py-5" style="background-color: #d96c06;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title" style="color: white;">Why Choose Us!</h4>
                    <!-- <h1 class="display-5 mb-4">Why You Should Trust Us? Learn More About Us!</h1> -->
                    <p>Hi, I am astrologist, Palm reader, and Numerologer Anju Ranjan. Astrology is my
                        passion and I have done extensive research in Vedic Astrology.
                        Studies of Nakshatras and its impact on human mind makes me curious to understand their nature
                        more and more. After doing research on Vedic Astrology I come across KrishnaMurty Paddhati. KP
                        Astrology helped me to become more accurate. Later I learn Gemini Astrology too.
                    </p>
                    <p>I have clients from all over the world. They are connected with me because of my “Accurate
                        prediction” My clients visit to me again and again because of my highly accurate and
                        consultative coaching style of reading.
                        Sometime life offers us a road with two direction, now which way to go.. we get confused, with
                        the help of their horoscope I guide them to their best option. At a time I feel when people come
                        to me they are not aware of their potential Astrology helps them to know their best and when we
                        work on that we are more successful than others.</p>
                    <p class="mb-4">
                        My Aim is to guide people towards better future and become a good human.
                        I help them in aligning their own soul`s energy in harmony with the pulse of the universe. To do
                        so I utilise the anicient art of vedic Astrology.
                        As a counselling Astrologer with more than 10 years of experience I have been a source of
                        happiness for thousands of clients worldwide.
                        My Goal is to create balanced mind,vibrating mind so they can become their Best Version…</p>

                    <!-- <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/icon-2.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Design Approach</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed
                                        diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/icon-3.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Innovative Solutions</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed
                                        diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/icon-4.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Project Management</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed
                                        diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-md-1"></div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/anju_ranjan.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
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
</body>

</html>