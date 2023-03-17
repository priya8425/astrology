<?php 
     session_start();
     include_once 'model/BlogDetailsModel.php';
     include_once 'model/CommentDetailsModel.php';
     $blog_id=$_GET['id'];
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
        .scrolling-wrapper {
            overflow-y: scroll;
            overflow-x: hidden;
            height: 400px;

        }

        .navbar.scrolled {
            background-color: black;
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
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg  navbar-light bg-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
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
                <a href="service.php" class="nav-item nav-link">Services</a>
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
                    <li class="breadcrumb-item text-primary active" aria-current="page">Blog-Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container-xxl py-5" style="margin-top:-50px;">
        <div class="container">


            <div class="row g-5">
                <?php
                $BlogDetails=$blogObj->getBlogDetailsAsPerId($blog_id);
                if ($BlogDetails==false){
                }else{   
                foreach ($BlogDetails as $key => $value) {
                ?>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="card" style="border:none;">
                        <?php if($value['file_type']=="image"){
                                    ?><img src="admin/<?=$value['image_file_path'];?>"
                            style="height:auto; width:100%;"><?php
                        }elseif($value['file_type']=="video"){
                            ?><video controls style="height:430px;">
                            <source src="admin/<?=$value['video_file_path'];?>"></video><?php
                        }else{
                            ?><img src="img/blank.png"><?php
                        }
                        ?>
                        <div class="card-body">

                            <i class="fas fa-user" style="color:#d96c06;"> By Astrologer</i>&emsp;<i
                                class="fas fa-clock" style="color:#d96c06;;">
                                <?=date("d/m/Y",strtotime($value['created_on']));?></i>&emsp;<i class="fas fa-comments"
                                style="color:#d96c06;;">
                                <?=$commentObj->countAllComments($blog_id)['total']?> Comments</i>
                            <h5 class="card-title">
                                <?=$value['blog_title'];?></h5>
                            <p class="card-text" style="color:black;"><?=$value['blog_description'];?></p>
                            <!-- <a href="#" class="btn btn-primary">Button</a> -->
                        </div>
                    </div><br>
                    <hr>
                </div>
                <?php
                    }
                    ?>
                <h3><?=$commentObj->countAllComments($blog_id)['total']?> Comments</h3>
                <?php
                    }
                ?>
            </div>
            <?php
                if ($BlogDetails==false){
                    echo "<center><h1 style='color:red'>Data Not Found</h1></center>";
                }else{ 
                    ?>
                    <?php
                                $CommentDetails=$commentObj->getAllActiveCommentDetailsById($blog_id);
                                // print_r($CommentDetails);
                                if ($CommentDetails==false){

                                }else{
                                    foreach ($CommentDetails as $key => $value) {
                                    ?><div class="row g-5">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="row">
                                                
                                                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s" style=" padding:20px;">
                                                    <h2 style="color:#d96c06;"><?=$value['comment_by'];?></h2>
                                                    <p style="color:black;"><?=$value['comment_message'];?>
                                                    </p>
                                                  
                                                </div>
                                                
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>  <?php             
                                
                    ?>
            
                    <?php
                        }
                        }
                    ?><br>
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mb-4">Leave A Reply</h2>
                    <form action="#" method="post" id="addcommentForm">
                        <input type="hidden" id="blog_id" value="<?=$blog_id;?>" name="blog_id">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="comment_by" name="comment_by"
                                        placeholder="Your Name">
                                    <label for="comment_by">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="comment"
                                        name="comment" style="height: 200px"></textarea>
                                    <label for="comment">Your Comment</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" id="addcommentBtn" name="addcommentBtn"
                                    type="submit">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
                }
                ?>



        </div>
    </div>
    <!-- Contact End -->
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

        $("#addcommentBtn").on("click", function () {
            var comment_by = $("#comment_by").val();
            var email = $("#email").val();
            var comment = $("#comment").val();
            if (comment_by == "" || comment_by == null) {
                alert("Please enter Your Name ");
            } else if (email == "" || email == null) {
                alert("Please Enter Email Id");
            } else if (comment == "" || comment == null) {
                alert("Please Type Something");
            }
            $.ajax({
                url: "controller/CommentDetailsController.php",
                type: 'POST',
                data: $("#addcommentForm").serialize() + '&action=savecommentDetailsAction',
                beforeSend: function () {
                    $("#addcommentBtn").html(
                        '<i class="fas fa-spinner fa-spin fa-fw fa-2x"></i>');
                    $('#addcommentBtn').prop('disabled', true);
                },
                success: function (response) {
                    //alert(response);
                    var dataRes = JSON.parse(response);
                    if (dataRes.statusCode == 201) {
                        alert(dataRes.message);
                    }
                    if (dataRes.statusCode == 200) {
                        alert(dataRes.message);
                        document.getElementById("addcommentForm").reset();
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                    $("#addcommentBtn").html('Submit');
                    $('#addcommentBtn').prop('disabled', false);
                }
            });


        });
    </script>
</body>

</html>