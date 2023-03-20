<?php
session_start();
include_once '../model/BlogDetailsModel.php';
include_once '../model/CommentDetailsModel.php';
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
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
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
              <h1>Blog Details</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">Blog Details</li>
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
                  <h3 class="card-title">Blog Details</h3>
                  <a href="blog.php"><button class="btn btn-primary btn-sm" style="float:right"><i
                        class="fas fa-plus-circle"></i>&emsp;Add Blog Details</button></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Sr.No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image/Video</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $BlogDetails=$blogObj->getAllBlogDetails();
                          if ($BlogDetails==false){
                          }else{
                            $i=1;
                          foreach ($BlogDetails as $key => $value) {
                      ?>
                      <tr>
                        <td><?=$i;?>.</td>
                        <td><?=$value['blog_title'];?></td>
                        <td><?=$value['blog_description'];?></td>
                        <td><?php if($value['file_type']=="image"){
                                    ?><img src="<?=$value['image_file_path'];?>" style="height:10vh;"><?php
                        }elseif($value['file_type']=="video"){
                            ?><video style="height:10vh;" controls>
                            <source src="<?=$value['video_file_path'];?>"></video><?php
                        }else{
                            echo "N/A";
                        }
                        ?></td>
                        <td>
                        <button class="btn btn-xs btn-primary mt-1" data-Id="<?=$value['blog_id'];?>"
                            title="View Comment Details" onclick="viewCommentDetails(this);"><i
                              class="fas fa-eye"></i></button>
                          <button class="btn btn-xs btn-warning mt-1" data-Id="<?=$value['blog_id'];?>"
                            title="Update Course Details" onclick="updateBlogDetails(this);"><i
                              class="fas fa-edit"></i></button>
                          <button class="btn btn-xs btn-danger mt-1" data-Id="<?=$value['blog_id'];?>"
                            title="Delete Blog Details" onclick="deleteBlogDetails(this);"><i
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
    <div class="modal fade" id="modal-updateBlogDetail">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title" style="">Update Blog Details</h5>
            <button type="button" style="" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="dataToUpdate">
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-viewCommentDetail">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title" style="">View Comment Details</h5>
            <button type="button" style="" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="dataToView">
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <!-- /.content-wrapper -->
    <?php 
            include("footer.php");
        ?>

    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="plugins/summernote/summernote-bs4.min.js"></script>

  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });

    function deleteBlogDetails(id) {
      var id = $(id).attr("data-Id");
      var cnfrm = confirm(
        "Are you sure you want to delete this Details..?\nNote:- After deleting you can not retrive this blog details."
      );
      if (cnfrm) {
        $.ajax({
          url: "controller/BlogDetailsController.php",
          type: 'POST',
          data: {
            id: id,
            action: "deleteBlogDetails"
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

    function updateBlogDetails(id){
      var id=$(id).attr("data-Id");
      $.ajax({
        url:"controller/BlogDetailsController.php",
        type:"POST",
        data:{bid:id,action:"loadDataForUpdate"},
        success:function(response){
          $("#dataToUpdate").html(response);
          $("#modal-updateBlogDetail").modal("show");
        }
      });
    }
    function UpdateBlogDetailAction(){
      $("form#addUpdateBlogFrm").on("submit", function (e) {
          e.preventDefault();
          if (validateUpdateFrmField()) {
                    var formData = new FormData(this);
                    formData.append("action", "updateblogDetailsAction");
                    // alert("success");
                    $.ajax({
                        url: "controller/BlogDetailsController.php",
                        type: 'POST',
                        data: formData,
                        beforeSend: function () {
                            $("#addUpdateBlogBtn").html(
                                '<i class="fas fa-spinner fa-spin fa-fw fa-2x"></i>');
                            $('#addUpdateBlogBtn').prop('disabled', true);
                        },
                        success: function (response) {
                            //alert(response);
                            var dataRes = JSON.parse(response);
                            if (dataRes.statusCode == 201) {
                                alert(dataRes.message);
                            }
                            if (dataRes.statusCode == 200) {
                                alert(dataRes.message);
                                document.getElementById("addUpdateBlogFrm").reset();
                                setTimeout(function () {
                                    location.reload();
                                }, 1000);
                            }
                            $("#addUpdateBlogBtn").html('Submit');
                            $('#addUpdateBlogBtn').prop('disabled', false);
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                }
      });
    }
    function validateUpdateFrmField() {
            var blog_title = $("#blog_title").val();
            var blog_description = $("textarea#blog_description").val();
            
            //alert(file_type_image);
            if (blog_title == "" || blog_title == null) {
                alert("Please enter Blog Title name.");
                return false;
            } else if (blog_description == "" || blog_description == null) {
                alert("Please enter blog description.");
                return false;
            } else{
                return true;
            }
        }

        function viewCommentDetails(id){
          var id=$(id).attr("data-Id");
          $.ajax({
            url:"controller/BlogDetailsController.php",
            type:"POST",
            data:{cid:id,action:"ViewommentData"},
            success:function(response){
              $("#dataToView").html(response);
              $("#modal-viewCommentDetail").modal("show");
            }
          });
        }

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
            if (confirm("Are change the status of this comment.?")) {
                $.ajax({
                    url: "controller/CommentDetailsController.php",
                    type: 'POST',
                    data: {
                        id: commentid,
                        status: status,
                        action: "changeStatus"
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