<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Astrology | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <linl rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Astrology Admin</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="#" method="post" name="loginForm" id="loginForm">
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="uname" id="uname" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <div class="input-group-append password">
              <div class="input-group-text password">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-7"></div>
            <div class="col-5 text-right">
              <p class="mb-1">
                <a href="#" data-toggle="modal" data-target="#modal-default">forget password</a>
              </p>
            </div>
          </div>
          <!-- /.col -->
          <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
              <button type="button" id="loginBtn" class="btn btn-primary btn-block">Sign In</button>
            </div>
          </div>

          <!-- /.col -->

        </form>

      </div>
      <div class="card-footer text-center">
        <small>Copyright &copy; <?=date("Y");?>-<?=date('y',strtotime(date("Y", time()) . " + 1 year"));?> <a
            href="#">e-Training</a>
          &reg;. Created By <a href="https://marcksitservices.com/" target="_blanck">Marcks Training & IT
            Services</a></small>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h4 class="modal-title" style="margin-top:-15px;margin-bottom:-10px;">Reset Password</h4>
          <button type="button" style="margin-top:-25px;" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="text-center mb-5" style="text-decoration:underline;">
              <h5>An OTP Will Be Sent On Your Registered Email Id</h5>
            </div>
            <div class="row sendOTP">
              <div class="col-sm-4">
                <label>Login Id <span class="text-red">*</span></label>
                <center><input type="text" name="otpLoginId" id="otpLoginId" class="form-control"
                    placeholder="Enter your Login Id"></center>
              </div>
              <div class="col-sm-4">
                <label>E-mail Id <span class="text-red">*</span></label>
                <center><input type="text" name="otpEmail" id="otpEmail" class="form-control"
                    placeholder="Enter your registered email"></center>
              </div>
              <div class="col-sm-2 sentotpBtn">
                <label>&emsp;&emsp;&emsp;</label>
                <center><button type="button" id="sentotpBtn" class="btn btn-danger btn-sm mt-1">Send OTP</button>
                </center>
              </div>
            </div>
            <div class="row mt-5 resetNewPass" style="display:none;">
              <div class="col-sm-4">
                <label>Enter Web OTP <span class="text-red">*</span></label>
                <input type="text" class="form-control" id="webOtp" name="webOtp" placeholder="Enter OTP">
              </div>
              <div class="col-sm-5">
                <label>New Password <span class="text-red">*</span></label>
                <input type="password" class="form-control" id="newPassword" name="newPassword"
                  placeholder="Enter new password">
              </div>
              <div class="col-sm-3 mt-4">
                <center><button type="button" id="resetPasswordBtn" class="btn btn-danger btn-sm "
                    style="margin-top:8px;">Reset Password</button></center>
              </div>
            </div>
            <center>
              <div class="mt-5">
                <img src="../assets/dist/img/loader.svg" class="loader" style="height:5vh;display:none;">
              </div>
            </center>
            <div class="alert alert-light text-center mt-5" role="alert" style="background-color: #DBE9FA">
              If you have not a registered user. You can create an account for accessing this panel.
            </div>
          </div>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script>
    // alert(hhhh);
    $("#loginBtn").on("click", function () {
      var uname = $("#uname").val();
      var pass = $("#password").val();
      if (uname == "" || uname == null) {
        alert("Please enter the username.");
        $(".uname").attr("style", "border-color:red");
        $(".fa-envelope").attr("style", "color:red");
        $("#uname").focus();
      } else if (pass == "" || pass == null) {
        alert("Please enter the password.");
        $(".uname").attr("style", "");
        $(".password").attr("style", "border-color:red");
        $(".fa-lock").attr("style", "color:red");
        $("#password").focus();
      } else {
        $.ajax({
          url: "controller/AdminController.php",
          type: "post",
          data: {
            uname: uname,
            password: pass,
            action: "loginAction"
          },
          beforeSend: function () {
            $('#loginBtn').append('<i class="fas fa-spinner fa-spin"></i>');
            $('#loginBtn').prop('disabled', true);
          },
          success: function (response) {
            // alert(response);
            var dataRes = JSON.parse(response);
            alert(dataRes.message);
            if (dataRes.statusCode == 201) {
              alert(dataRes.message);
            }
            if (dataRes.statusCode == 200) {
              setTimeout(function () {
                window.location = "dashboard.php";
              }, 2000);
            }
            $('#loginBtn').html('Sign In');
            $('#loginBtn').prop('disabled', false);
          }
        });
      }
    });
    $("#sentotpBtn").on("click", function (e) {
      e.preventDefault();
      // alert("Send otp")
      var loginId = $("#otpLoginId").val();
      var email = $("#otpEmail").val();
      if (loginId == "" || loginId == null) {
        alert("Please enter your login id.");
        $("#otpLoginId").attr("style", "border-color:red;");
        $("#otpLoginId").focus();
      } else if (email == "" || email == null) {
        alert("Please enter your registered email id.");
        $("#otpEmail").attr("style", "border-color:red;");
        $("#otpEmail").focus();
      } else {
        $.ajax({
          url: "controller/AdminController.php",
          type: "post",
          data: {
            loginId: loginId,
            email: email,
            action: "sendOTPAction"
          },
          beforeSend: function () {
            $('#sentotpBtn').append('<i class="fas fa-spinner fa-spin"></i>');
            $('#sentotpBtn').prop('disabled', true);
          },
          success: function (response) {
            //alert(response);
            var dataRes = JSON.parse(response);

            if (dataRes.statusCode == 201) {
              alert(dataRes.message);
              $('#sentotpBtn').prop('disabled', false);
              $(".sentotpBtn").attr("style", "");
              $("#sentotpBtn").html('Resend OTP');
            }
            if (dataRes.statusCode == 200) {
              $("#otpEmail").attr("readonly", true);
              $("#otpLoginId").attr("readonly", true);
              $(".sentotpBtn").attr("style", "display:none;");
              $(".resetNewPass").attr("style", "");
            }
            // $(".loader").attr("style","display:none");
            $('#sentotpBtn').html('Send OTP');
            $('#sentotpBtn').prop('disabled', false);
          }
        });
      }
    });
    $("#resetPasswordBtn").on("click", function (e) {
      e.preventDefault();
      var loginId = $("#otpLoginId").val();
      var email = $("#otpEmail").val();
      var webotp = $("#webOtp").val();
      var newPassword = $("#newPassword").val();
      if (webotp == "" || webotp == null) {
        alert("Please enter your OTP.");
        $("#webOtp").attr("style", "border-color:red");
        $("#webOtp").focus();
      } else if (newPassword == "" || newPassword == null) {
        alert("Please enter your new password.");
        $("#newPassword").attr("style", "border-color:red");
        $("#newPassword").focus();
      } else {
        $.ajax({
          url: "controller/AdminController.php",
          type: "post",
          data: {
            loginId: loginId,
            email: email,
            webotp: webotp,
            newPassword: newPassword,
            action: "resetPasswordAction"
          },
          beforeSend: function () {
            $('#resetPasswordBtn').append('<i class="fas fa-spinner fa-spin"></i>');
            $('#resetPasswordBtn').prop('disabled', true);
          },
          success: function (response) {
            // alert(response);
            var dataRes = JSON.parse(response);
            alert(dataRes.message);
            if (dataRes.statusCode == 200) {
              location.reload();
            }
            $('#resetPasswordBtn').html('Send OTP');
            $('#resetPasswordBtn').prop('disabled', false);
          }
        });
      }
    });
  </script>
</body>

</html>