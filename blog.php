<?php 
     session_start();
     include_once 'model/BlogDetailsModel.php';
     include_once 'model/CommentDetailsModel.php';
    
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
            background-color: black;
        }
    </style>
</head>

<body style="background-color:#eceff1 ">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status">
        </div>
        <!-- <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-2.png" alt="Icon"> -->
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s" style="height: 60px;">
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
                <a href="service.php" class="nav-item nav-link ">Services</a>
                <a href="blog.php" class="nav-item nav-link active">Blog</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="appointment.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Appointment</a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid blog-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- blog Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Latest Blogs</h4>
                <h1 class="display-5 mb-4">Lorem Ipsum is simply dummy</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="card" style="border:none;">
                        <img class="card-img-top" src="img/astrologer-blog1.jpg" alt="Image">
                        <div class="card-body">
                            <i class="fas fa-user" style="color:#d96c06;"> By Astrologer</i>&emsp;<i
                                class="fas fa-clock" style="color:#d96c06;;"> 11/Jan</i>&emsp;<i class="fas fa-comments"
                                style="color:#d96c06;;">
                                10 Comments</i>
                            <h5 class="card-title"><a href="blog_details.php" style="color:black;">Consectetur
                                    Adipiscing Elit
                                    Sedeiusmod Tempor Incididunt</a></h5>
                            <p class="card-text" style="color:black;">Lorem Ipsum is simply dummy text of the printing
                                and typesetting
                                industry.like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div> -->
    <div class="container-xxl py-5" style="margin-top:-50px;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Latest Blogs</h4>
                <h1 class="display-5 mb-4" style="color:#af0945">We Focused On Modern Design</h1>
            </div>

            <div class="row g-5">
                <?php
                $BlogDetails=$blogObj->getAllBlogDetails();
                if ($BlogDetails==false){

                }else{
                                      
                foreach ($BlogDetails as $key => $value) {
                ?>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="card" style="border:none;">
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

                            <i class="fas fa-user" style="color:#d96c06;"> By Astrologer</i>&emsp;&emsp;<i
                                class="fas fa-clock" style="color:#d96c06;;">
                                <?=date("d/m/Y",strtotime($value['created_on']));?></i>
                            <h5 class="card-title">
                                <a href="blog_details.php?id=<?=$value['blog_id']; ?>"
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