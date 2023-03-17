<?php
    session_start();
    include_once '../model/AdminModel.php';

    $admUid=isset($_SESSION['adm_uid'])? $_SESSION['adm_uid'] :"NA";
    $admId=isset($_SESSION['adm_id'])? $_SESSION['adm_id'] :"0";
    $admData=$AdmObj->getAdminDetailsAsPerId($admId);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Astrology | My Profile</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <i class="fas fa-spinner fa-spin fa-5x"></i>
        </div>
        <!-- Navbar -->
        <?php
            include("topnavbar.php");
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
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
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">My Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="dist/img/avatar3.png"
                                            alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center"><?=$admData[0]['admin_name'];?></h3>

                                    <p class="text-muted text-center">Admin</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>User ID </b> <a
                                                class="float-right"><?=$admData[0]['admin_unique_id'];?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>E-mail ID</b> <a
                                                class="float-right"><?=$admData[0]['admin_email_id'];?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Status</b> <a class="float-right"><?=$admData[0]['admin_status'];?></a>
                                        </li>
                                    </ul>
                                    <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-8">
                            <div class="card card-warning card-outline">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active"
                                                style="padding-top:5px;padding-bottom:5px;" href="#activity"
                                                data-toggle="tab"><i class="fas fa-edit"></i> Basic Info</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                style="padding-top:5px;margin-left:15px;padding-bottom:5px;"
                                                href="#settings" data-toggle="tab"><span class="fas fa-lock"></span>
                                                Change Password</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">
                                            <form action="#" name="basicInfoFrm" id="basicInfoFrm" method="post"
                                                class="form-horizontal">
                                                <input type="hidden" name="inputadmId" id="inputadmId"
                                                    value="<?=$admData[0]['admin_id'];?>">
                                                <div class="form-group row mt-4">
                                                    <div class="col-sm-1"></div>
                                                    <label for="inputName" class="col-sm-2 col-form-label">Name :
                                                        <span>*</span></label>
                                                    <div class="input-group col-sm-8">
                                                        <input type="text" class="form-control" id="inputName"
                                                            value="<?=$admData[0]['admin_name'];?>"
                                                            placeholder="Enter Your Name .">
                                                        <div class="input-group-append email">
                                                            <div class="input-group-text name">
                                                                <i class="fas fa-file-signature"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-4">
                                                    <div class="col-sm-1"></div>
                                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email :
                                                        <span>*</span></label>
                                                    <div class=" input-group col-sm-8">
                                                        <input type="email" class="form-control"
                                                            value="<?=$admData[0]['admin_email_id'];?>" id="inputEmail"
                                                            placeholder="Enter Your Email.">
                                                        <div class="input-group-append email">
                                                            <div class="input-group-text email">
                                                                <span class="fas fa-envelope"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-4">
                                                    <div class="col-sm-1"></div>
                                                    <label for="status" class="col-sm-2 col-form-label">Status :
                                                        <span>*</span></label>
                                                    <div class="input-group col-sm-8">
                                                        <input type="text" class="form-control"
                                                            value="<?=$admData[0]['admin_status'];?>" id="status"
                                                            placeholder="Status" disabled>
                                                        <div class="input-group-append email">
                                                            <div class="input-group-text status">
                                                                <i class="fas fa-info-circle"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-5">
                                                    <div class="col-sm-2"></div>
                                                    <div class="offset-sm-2 col-sm-4">
                                                        <button type="button" id="basicInfoUpdateBtn"
                                                            class="btn btn-danger btn-sm btn-block"><i
                                                                class="fas fa-paper-plane"></i> Update</button>
                                                    </div>
                                                    <div class="col-sm-4"></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-4"></div>
                                                    <div class="col-4">
                                                        <center><img src="../assets/dist/img/loader.svg" class="loader"
                                                                style="height:4vh;display:none;"></center>
                                                    </div>
                                                    <div class="col-4"></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            <form action="#" name="changePasswordFrm" id="changePasswordFrm"
                                                method="post" class="form-horizontal">
                                                <input type="hidden" name="cpassadmId" id="cpassadmId"
                                                    value="<?=$admData[0]['admin_id'];?>">
                                                <input type="hidden" name="cpassuniqueId" id="cpassuniqueId"
                                                    value="<?=$admData[0]['admin_unique_id'];?>">
                                                <div class="form-group row mt-4">
                                                    <div class="col-sm-1"></div>
                                                    <label for="cpassEmail" class="col-sm-3 col-form-label">E-mail :
                                                        <span>*</span></label>
                                                    <div class="input-group col-sm-7">
                                                        <input type="email" class="form-control"
                                                            value="<?=$admData[0]['admin_email_id'];?>" id="cpassEmail"
                                                            placeholder="Enter Your Email ." readonly>
                                                        <div class="input-group-append email">
                                                            <div class="input-group-text email">
                                                                <span class="fas fa-envelope"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-4">
                                                    <div class="col-sm-1"></div>
                                                    <label for="oldPassword" class="col-sm-3 col-form-label">Old
                                                        Password : <span>*</span></label>
                                                    <div class=" input-group col-sm-7">
                                                        <input type="password" class="form-control" id="oldPassword"
                                                            placeholder="Enter Your Current Password.">
                                                        <div class="input-group-append password">
                                                            <div class="input-group-text password">
                                                                <span class="fas fa-key"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-4">
                                                    <div class="col-sm-1"></div>
                                                    <label for="newPassword" class="col-sm-3 col-form-label">New
                                                        Password : <span>*</span></label>
                                                    <div class="input-group col-sm-7">
                                                        <input type="password" class="form-control" id="newPassword"
                                                            placeholder="Enter Your New Password.">
                                                        <div class="input-group-append password">
                                                            <div class="input-group-text password">
                                                                <span class="fas fa-lock"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-5">
                                                    <div class="col-sm-3"></div>
                                                    <div class="offset-sm-2 col-sm-4">
                                                        <button type="button" id="changePassBtn"
                                                            class="btn btn-danger btn-sm btn-block"><i
                                                                class="fas fa-key"></i> Change Password</button>
                                                    </div>
                                                    <div class="col-sm-4"></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-4"></div>
                                                    <div class="col-4">
                                                        <center><img src="../assets/dist/img/loader.svg" class="loader"
                                                                style="height:4vh;display:none;"></center>
                                                    </div>
                                                    <div class="col-4"></div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
            include("footer.php");
        ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <script>
        $(function () {
            $("#basicInfoUpdateBtn").on("click", function (e) {
                e.preventDefault();
                var admId = $("#inputadmId").val();
                var name = $("#inputName").val();
                var email = $("#inputEmail").val();
                if (name == "" || name == null) {
                    //alert("Please enter your name.");
                    toastr.error('Please enter your name.');
                    $("#inputName").focus();
                } else if (email == "" || email == null) {
                    //alert("Enter your email.");
                    toastr.error('Enter your email.');
                    $("#inputEmail").focus();
                } else {
                    $.ajax({
                        url: "controller/AdminController.php",
                        type: "post",
                        data: {
                            admId: admId,
                            name: name,
                            email: email,
                            action: "updateBasicInfoAction"
                        },
                        beforeSend: function () {
                            $('#basicInfoUpdateBtn').append(
                                '<i class="fas fa-spinner fa-spin"></i>');
                            $('#basicInfoUpdateBtn').prop('disabled', true);
                        },

                        success: function (response) {
                            // alert(response);
                            var dataRes = JSON.parse(response);
                            alert(dataRes.message);
                            if (dataRes.statusCode == 200) {
                                location.reload();
                            }
                            $('#resetPasswordBtn').html('Update');
                            $('#resetPasswordBtn').prop('disabled', false);
                        }
                    });
                }
            });
            $("#changePassBtn").on("click", function (e) {
                e.preventDefault();
                var admId = $("#cpassadmId").val();
                var uniqueId = $("#cpassuniqueId").val();
                var email = $("#cpassEmail").val();
                var oldPassword = $("#oldPassword").val();
                var newPassword = $("#newPassword").val();
                if (email == "" || email == null) {
                    toastr.error('Please enter your email.');
                    $("#cpassEmail").focus();
                } else if (oldPassword == "" || oldPassword == null) {
                    toastr.error('Please enter your current password.');
                    $("#oldPassword").focus();
                } else if (newPassword == "" || newPassword == null) {
                    toastr.error('Please enter your new password.');
                    $("#newPassword").focus();
                } else {
                    $.ajax({
                        url: "controller/AdminController.php",
                        type: "post",
                        data: {
                            admId: admId,
                            uniqueId: uniqueId,
                            oldPassword: oldPassword,
                            newPassword: newPassword,
                            email: email,
                            action: "changePasswordAction"
                        },
                        beforeSend: function () {
                            $('#changePassBtn').append(
                                '<i class="fas fa-spinner fa-spin"></i>');
                            $('#changePassBtn').prop('disabled', true);
                        },
                        success: function (response) {
                            //alert(response);
                            var dataRes = JSON.parse(response);
                            alert(dataRes.message);

                            if (dataRes.statusCode == 200) {
                                $("#newPassword").val("");
                                $("#oldPassword").val("");
                                $("#oldPassword").focus();
                                location.reload();
                            }
                            $('#changePassBtn').html('Change Password');
                            $('#changePassBtn').prop('disabled', false);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>