<?php
session_start();
include_once '../model/ContactDetailsModel.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Astrology | Contact Details</title>

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
              <h1>Contact Details</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">Contact Details</li>
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
                  <h3 class="card-title">Contact Details</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Sr.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $ContactDetails=$contactObj->getAllContactDetails();
                        if ($ContactDetails==false){

                        }else{
                            $i=1;
                        foreach ($ContactDetails as $key => $value) {
                    ?>
                      <tr>
                        <td><?=$i;?>.</td>
                        <td><?=$value['name'];?></td>
                        <td><?=$value['email'];?></td>
                        <td><?=$value['subject'];?></td>
                        <td><?=$value['message'];?></td>
                        <td><button class="btn btn-xs btn-danger mt-1" data-Id="<?=$value['id'];?>"
                            data-contactTitle="<?=$value['name'];?>" email="<?=$value['email'];?>"
                            subject="<?=$value['subject'];?>" message="<?=$value['message'];?>"
                            title="Delete Contact Details" onclick="deleteContactDetails(this);"><i
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
 
  <!-- Bootstrap 4 -->
  <!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>

  <script>
    $(function () {
      $("#example2").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });

    function deleteContactDetails(id) {
      var id = $(id).attr("data-Id");
      var name = $(id).attr("data-contactTitle");
      var email = $(id).attr("email");
      var subject = $(id).attr("subject");
      var message = $(id).attr("message");
      //alert(oldImg);
      var cnfrm = confirm(
        "Are you sure you want to delete this Details..?\nNote:- After deleting you can not retrive this Contact details."
      );
      if (cnfrm) {
        $.ajax({
          url: "controller/ContactDetailsController.php",
          type: 'POST',
          data: {
            id: id,
            name: name,
            email: email,
            subject: subject,
            message: message,
            action: "deleteContactDetails"
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
  </script>
</body>

</html>