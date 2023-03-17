<?php 
    session_start();
    include_once 'model/AppointmentDetailsModel.php';
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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="hover.css" rel="stylesheet">
    <style>
        .navbar.scrolled {
            background-color:black;
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
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
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
            <h1 class="display-1 text-white animated slideInDown">Appointment</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container-xxl py-5 mt-5" style="margin-top:-50px;">
        <div class="container" id="contact">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Appointment</h4>
                    <h1 class="display-5 mb-4" style="color:#af0945;">Make An Appointment To Start Your Dream Project
                    </h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                    style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Call Us Now</p>
                                    <h3 class="mb-0">+91 7021006714/+91 9004346326</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                    style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Mail Us Now</p>
                                    <h3 class="mb-0">astrosiddhi23@gmail.com</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="post" action="#" method="post" id="addappointmentForm">
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
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" style="height: 55px;" name="service" id="service">
                                        <option selected>Choose Service</option>
                                        <option value="Your Deatailed Horoscope Analysis">Your Deatailed Horoscope Analysis</option>
                                        <option value="Marriage and married life issues.">Marriage and married life issues.</option>
                                        <option value="Match Making">Match Making</option>
                                        <option value="Career Guidance">Career Guidance</option>
                                        <option value="Health">Health</option>
                                        <option value="Education">Education</option>
                                        <option value="Job / Business Possibilities">Job / Business Possibilities</option>
                                        <option value="Effective Remedies and Gem stone Guidance.">Effective Remedies and Gem stone Guidance.</option>
                                        <option value="Horary astrology.">Horary astrology.</option>
                                        <option value="Birth Time Rectification">Birth Time Rectification</option>
                                        <option value="Astro Siddhis Library">Astro Siddhis Library</option>
                                        <option value="Astrology Classes">Astrology Classes</option>
                                    </select>
                                    <label for="subject"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="datetime-local" class="form-control" name="appointment_time" id="appointment_time"
                                        placeholder="Please select Date & Time">
                                    <label for="appointment_time">Date/Time</label>
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
                                <button class="btn btn-primary w-100 py-3" name="addappointmentBtn"
                                    id="addappointmentBtn" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <!-- Google Map Start -->

    <!-- Google Map End -->
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

        $("#addappointmentBtn").on("click", function () {
            var name = $("#name").val();
            var email = $("#email").val();
            var service = $("#service").val();
            var appointment_time = $("#appointment_time").val();
            var message = $("#message").val();
            if (name == "" || name == null) {
                alert("Please enter name ");
            } else if (email == "" || email == null) {
                alert("Please enter email");
            } else if (service == "" || service == null) {
                alert("Please select service");
            } else if (appointment_time == "" || appointment_time == null) {
                alert("Please Select Date & Time");
            }else if (message == "" || message == null) {
                alert("Please enter message");
            } else {
                $.ajax({
                    url: "controller/AppointmentDetailsController.php",
                    type: 'POST',
                    data: $("#addappointmentForm").serialize() + '&action=saveappointmentDetailsAction',
                    beforeSend: function () {
                        $("#addappointmentBtn").html(
                            '<i class="fas fa-spinner fa-spin fa-fw fa-2x"></i>');
                        $('#addappointmentBtn').prop('disabled', true);
                    },
                    success: function (response) {
                        // alert(response);
                        var dataRes = JSON.parse(response);
                        if (dataRes.statusCode == 201) {
                            alert(dataRes.message);
                        }
                        if (dataRes.statusCode == 200) {
                            alert(dataRes.message);
                            document.getElementById("addappointmentForm").reset();
                            setTimeout(function () {
                                location.reload();
                            }, 3000);
                        }
                        $("#addappointmentBtn").html('Submit');
                        $('#addappointmentBtn').prop('disabled', false);
                    }
                });
            }

        });
    </script>
</body>

</html>