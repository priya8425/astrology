<footer class="main-footer text-center">
  <small style="font-size:12px;">Copyright &copy;
    <?=date("Y");?>-<?=date('y',strtotime(date("Y", time()) . " + 1 year"));?> <a href="#">Astrology</a>
    &reg;All rights reserved. Created By <a href="https://marcksitservices.com/" target="_blanck">Marcks Training & IT
      Services</a>.</small>

  <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div> -->
</footer>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>

</html>