<?php
session_start();
include_once '../model/TestimonialDetailsModel.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Astrology | Testimonial Details</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition ">
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
                            <h1>Testimonials Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Testimonials Details</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Testimonials Details</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Name</th>
                                                <th>Message</th>
                                                <th>email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $TestimonialDetails=$testimonialObj->getAllTestimonialDetails();
                                                if ($TestimonialDetails==false){

                                                }else{
                                                    $i=1;
                                                foreach ($TestimonialDetails as $key => $value) {
                                            ?>
                                            <tr>
                                                <td><?=$i;?>.</td>
                                                <td><?=$value['testimonial_name'];?></td>
                                                <td><?=$value['testimonial_message'];?></td>
                                                <td><?=$value['testimonial_email'];?></td>
                                                <td>
                                                    <?php
                                                    if($value['testimonial_status']=="Active"){
                                                    ?>
                                                    <div class="form-group">
                                                        <div
                                                            class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger">
                                                            <input type="checkbox" data-id="<?=$value['id'];?>"
                                                                data-status="InActive"
                                                                onclick="changeStatus(this); return false;"
                                                                class="custom-control-input" id="customSwitch<?=$key;?>"
                                                                checked>
                                                            <label class="custom-control-label"
                                                                style="cursor:pointer !important;font-size:11px;"
                                                                title="De-Activate This Course"
                                                                for="customSwitch<?=$key;?>"></label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    }else{
                                                    ?>
                                                    <div class="form-group">
                                                        <div
                                                            class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger">
                                                            <input type="checkbox" data-id="<?=$value['id'];?>"
                                                                data-status="Active"
                                                                onclick="changeStatus(this);return false;"
                                                                class="custom-control-input"
                                                                id="customSwitch<?=$key;?>">
                                                            <label class="custom-control-label"
                                                                style="cursor:pointer !important;"
                                                                title="Activate This Course"
                                                                for="customSwitch<?=$key;?>"></label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <button class="btn btn-xs btn-danger mt-1"
                                                        data-Id="<?=$value['id'];?>" title="Delete Testimonial Details"
                                                        onclick="deleteTestimonialDetails(this);"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                            <?php
                                                $i++;
                                                 }
                                                }
                                            ?>

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>


        <!-- /.content-wrapper -->
        <?php 
            include("footer.php");
        ?>

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function () {
      $("#example2").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });

        function deleteTestimonialDetails(id) {
            var id = $(id).attr("data-Id");
            //alert(oldImg);
            var cnfrm = confirm(
                "Are you sure you want to delete this Details..?\nNote:- After deleting you can not retrive this testimonial details."
            );
            if (cnfrm) {
                $.ajax({
                    url: "controller/TestimonialDetailsController.php",
                    type: 'POST',
                    data: {
                        id: id,
                        action: "deleteTestimonialDetails"
                    },
                    success: function (response) {
                        //alert(response);
                        var dataRes = JSON.parse(response);
                        alert(dataRes.message);
                        if (dataRes.statusCode == 200) {
                            location.reload();
                        }
                    }
                });
            }
        }

        function changeStatus(id) {
            var testimonialid = $(id).attr("data-id");
            var status = $(id).attr("data-status");
            //(status);
            if (confirm("Are change the status of this testimonial.?")) {
                $.ajax({
                    url: "controller/TestimonialDetailsController.php",
                    type: 'POST',
                    data: {
                        id: testimonialid,
                        status: status,
                        action: "changeStatus"
                    },
                    success: function (response) {
                        // alert(response);
                        var dataRes = JSON.parse(response);
                        alert(dataRes.message);
                        if (dataRes.statusCode == 200) {
                            location.reload();
                        }
                    }
                });
            }
        }
    </script>
</body>

</html>