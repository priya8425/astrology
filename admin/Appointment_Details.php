<?php
session_start();
include_once '../model/AppointmentDetailsModel.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Astrology | Appointment Details</title>

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
              <h1>Appointment Details</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">Appointment Details</li>
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
                  <h3 class="card-title">Appointment Details</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Sr.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Service</th>
                        <th>Date & Time</th>
                        <th>Message</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $AppointmentDetails=$appointmentObj->getAllAppointmentDetails();
                        if ($AppointmentDetails==false){

                        }else{
                            $i=1;
                        foreach ($AppointmentDetails as $key => $value) {
                      ?>
                      <tr>
                        <td><?=$i;?>.</td>
                        <td><?=$value['name'];?></td>
                        <td><?=$value['email'];?></td>
                        <td><?=$value['service'];?></td>
                        <td><?=$value['appointment_time'];?></td>
                        <td><?=$value['message'];?></td>
                        <td><button class="btn btn-xs btn-danger mt-1" data-Id="<?=$value['id'];?>"
                            title="Delete Appointment Details" onclick="deleteAppointmentDetails(this);"><i
                              class="fas fa-trash-alt"></i></button></td>
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

    function deleteAppointmentDetails(id) {
      var id = $(id).attr("data-Id");
      //alert(oldImg);
      var cnfrm = confirm(
        "Are you sure you want to delete this Details..?\nNote:- After deleting you can not retrive this Appointment details."
      );
      if (cnfrm) {
        $.ajax({
          url: "controller/AppointmentDetailsController.php",
          type: 'POST',
          data: {
            id: id,
            action: "deleteAppointmentDetails"
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