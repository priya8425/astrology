<?php
session_start();
include_once '../model/CommentDetailsModel.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Astrology | Comment Details</title>
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
                            <h1>Comment Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Comment Details</li>
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
                                    <h3 class="card-title">Comment Details</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Comment By</th>
                                                <th>email</th>
                                                <th>Comment</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $CommentDetails=$commentObj->getAllCommentDetails();
                                                if ($CommentDetails==false){

                                                }else{
                                                    $i=1;
                                                foreach ($CommentDetails as $key => $value) {
                                            ?>
                                            <tr>
                                                <td><?=$i;?>.</td>
                                                <td><?=$value['comment_by'];?></td>
                                                <td><?=$value['email'];?></td>
                                                <td><?=$value['comment_message'];?></td>
                                                <td>
                                                    <?php
                                                    if($value['comment_status']=="Active"){
                                                    ?>
                                                    <div class="form-group">
                                                        <div
                                                            class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger">
                                                            <input type="checkbox" data-id="<?=$value['comment_id'];?>"
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
                                                            <input type="checkbox" data-id="<?=$value['comment_id'];?>"
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
                                                        data-Id="<?=$value['comment_id'];?>" title="Delete Comment Details"
                                                        onclick="deleteCommentDetails(this);"><i
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

        function deleteCommentDetails(id) {
            var id = $(id).attr("data-Id");
            //alert(oldImg);
            var cnfrm = confirm(
                "Are you sure you want to delete this Details..?\nNote:- After deleting you can not retrive this Comment details."
            );
            if (cnfrm) {
                $.ajax({
                    url: "controller/CommentDetailsController.php",
                    type: 'POST',
                    data: {
                        id: id,
                        action: "deleteCommentDetails"
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
            var commentid = $(id).attr("data-id");
            var status = $(id).attr("data-status");
            //(status);
            if (confirm("Are change the status of this Comment.?")) {
                $.ajax({
                    url: "controller/CommentDetailsController.php",
                    type: 'POST',
                    data: {
                        id: commentid,
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