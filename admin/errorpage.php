<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Error || e-Training</title>
  <?php include('lib.php');?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <section class="content" style="margin-top:220px;">
    <div class="error-page">
      <h2 class="headline text-danger"><i class="fas fa-exclamation-triangle text-danger"></i></h2>
      <div class="error-content text-justify">
        <h3 style="font-weight:bold;font-size:28px">Oops! Something went wrong.</h3>
        <p>
          <b class="text-danger">Your session has been destroyed.</b><br>
          <b>Meanwhile, you may <a href="index.php" style="font-size:16px;font-style:italic;">Login Again <i class="fas fa-sign-in-alt"></i></a> for start your session.</b>
        </p>
      </div>
    </div>
  </section>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>
</html>
