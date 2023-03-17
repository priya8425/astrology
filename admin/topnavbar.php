<?php
  if (!isset($_SESSION['adm_uid'])) {
    header("location:errorPage.php");   
  }
  ?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="dashboard.php" class="nav-link">Dashboard</a>
    </li>
    <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Notifications Dropdown Menu -->
    <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
      </li> -->
    <!-- Messages Dropdown Menu for Logout ANd Profile -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" style="font-weight:700;font-size:18px;" href="#"
        title="Go To Settings">
        <i class="fas fa-user-cog"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="profile.php" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/avatar3.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body mt-3">
              <h3 class="dropdown-item-title"><?=(isset($_SESSION['adm_name']))? $_SESSION['adm_name'] : "N A" ;?></h3>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" onclick="logout()" class="dropdown-item dropdown-footer text-danger"><b><i
              class="fas fa-sign-out-alt"></i> Sign Out</b></a>
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->
<script type="text/javascript">
  function logout() {
    /*if (confirm("Are you want to Logout....?")){
      window.location.href="logout.php";
    }*/
    $("#modal-logout").modal("show");
  }
</script>

<div class="modal fade" id="modal-logout">
  <div class="modal-dialog modal-sm" style="margin-top:100px;">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h6 class="modal-title" style="margin-top:-12px;margin-bottom:-40px;">Confirm LogOut</h6>
        <button type="button" style="margin-top:-25px !important;margin-bottom:-30px !important;" class="close"
          data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Are you sure, You want to Logout..?</h6>
      </div>
      <div class="modal-footer" style="margin-top:-10px;">
        <a href="logout.php" type="button" class="btn btn-primary btn-xs"
          style="margin-top:-6px;margin-bottom:-6px">&emsp;Yes&emsp;</a>
        <a href="#" type="button" class="btn btn-danger btn-xs" data-dismiss="modal"
          style="margin-top:-6px;margin-bottom:-6px">&emsp;No&emsp;</a>
      </div>
    </div>
  </div>
</div>