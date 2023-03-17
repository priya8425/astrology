<?php
session_start();
include_once '../model/BlogDetailsModel.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | General Form Elements</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <i class="fas fa-spinner fa-spin fa-5x"></i>
        </div>

        <!-- Navbar -->
        <?php
            include("topnavbar.php");
        ?>
        <!-- /.navbar -->

        <?php
            include("sidenavbar.php");
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blog Form</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Blog Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Quick Example</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="addNewBlogFrm" name="addNewBlogFrm" method="post"
                                    enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="blog_title">Title</label>
                                                    <input type="text" class="form-control" name="blog_title"
                                                        id="blog_title" placeholder="Enter blog title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>&emsp;Select For Upload:</label>&emsp;
                                                    <input type="radio" id="image" name="file_type" value="image"
                                                        checked>
                                                    <label for="image">Image</label>&emsp;
                                                    <input type="radio" id="video" name="file_type" value="video">
                                                    <label for="video">Video</label><br>
                                                    <div class="input-group" id="input_image">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                name="image_file" id="image_file">
                                                            <label class="custom-file-label" for="image_file">Choose
                                                                Image</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>
                                                    <div class="input-group d-none" id="input_video">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                name="video_file" id="video_file">
                                                            <label class="custom-file-label" for="video_file">Choose
                                                                Video</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Description</label>
                                                    <textarea rows="5" name="blog_description" class="summernote"
                                                        id="blog_description">
                                                            Place <em>some</em> <u>text</u> <strong>here</strong>
                                                        </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div> -->
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" id="addNewBlogBtn" name="addNewBlogBtn"
                                            class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php 
            include("footer.php");
        ?>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            bsCustomFileInput.init();
            $('.summernote').summernote();
        });

        $('input[type=radio][name=file_type]').change(function () {
            if (this.value == 'image') {
                // alert("image");
                $("#input_image").removeClass("d-none");
                $("#input_video").addClass("d-none");
            } else if (this.value == 'video') {
                // alert("video");
                $("#input_video").removeClass("d-none");
                $("#input_image").addClass("d-none");
            }
        });

        $("#addNewBlogBtn").bind('click', function () {
            $("form#addNewBlogFrm").on("submit", function (e) {
                e.preventDefault();
                if (validateNewFrmField()) {
                    var formData = new FormData(this);
                    formData.append("action", "saveblogDetailsAction");
                    // alert("success");
                    $.ajax({
                        url: "controller/BlogDetailsController.php",
                        type: 'POST',
                        data: formData,
                        beforeSend: function () {
                            $("#addNewBlogFrm").html(
                                '<i class="fas fa-spinner fa-spin fa-fw fa-2x"></i>');
                            $('#addNewBlogBtn').prop('disabled', true);
                        },
                        success: function (response) {
                            //alert(response);
                            var dataRes = JSON.parse(response);
                            if (dataRes.statusCode == 201) {
                                alert(dataRes.message);
                            }
                            if (dataRes.statusCode == 200) {
                                alert(dataRes.message);
                                document.getElementById("addNewBlogFrm").reset();
                                setTimeout(function () {
                                    window.location="blog_details.php";
                                }, 1000);
                            }
                            $("#addNewBlogBtn").html('Submit');
                            $('#addNewBlogBtn').prop('disabled', false);
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                }
            })
        })

        function validateNewFrmField() {
            var blog_title = $("#blog_title").val();
            var blog_description = $("textarea#blog_description").val();
            var file_type_image = $("#image").val();
            var file_type_video = $("#video").val();
            var image_file = $("#image_file").val();
            var video_file = $("#video_file").val();
            //alert(file_type_image);
            if (blog_title == "" || blog_title == null) {
                alert("Please enter Blog Title name.");
                return false;
            } else if (blog_description == "" || blog_description == null) {
                alert("Please enter blog description.");
                return false;
            } else if (file_type_image != "" || file_type_image != null || file_type_video != "" || file_type_video !=
                null) {
                if ($('input[type=radio][name=file_type]:checked').val() == "image") {
                    if (image_file == "" || image_file == null) {
                        alert("Please upload image.");
                        return false;
                    } else {
                        return true;
                    }
                } else if ($('input[type=radio][name=file_type]:checked').val() == "video") {
                    if (video_file == "" || video_file == null) {
                        alert("Please Upload video.");
                        return false;
                    } else {
                        return true;
                    }
                }
            } else {
                alert("please select upload type");

                return false;
            }
        }
    </script>
</body>

</html>