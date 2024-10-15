<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!$_SESSION ['nama']){
  header('Location: ../index.php?session=pageExpired');
}
include('../conf/config.php');
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
<!-- <?php include('preloader.php');?> -->

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<?php include('logo.php');?>
    <!-- Sidebar -->
    <?php include('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<!-- <?php include('content_header.php');?> -->
<?php 
include('header.php');
if (isset($_GET['page'])){
  if($_GET['page']=='dashboard'){
    include('content-header/content_header_dashboard.php');
  }elseif($_GET['page']=='user-app'){
    include('content-header/content_header_user_app.php');
  }elseif($_GET['page']=='data-pelanggan'){
    include('content-header/content_header_pelanggan.php');
  }elseif($_GET['page']=='pengajuan'){
    include('content-header/content_header_pengajuan.php');
  }else{
    include('content-header/content_header_dashboard.php');
  }
}else{
  include('content-header/content_header_dashboard.php');
}
?>
    <!-- /.content-header -->

    <!-- Main content -->

<?php
if (isset($_GET['page'])){
  if($_GET['page']=='dashboard'){
    include('dashboard.php');
  }else if($_GET['page']=='data-pelanggan'){
    include('data_pelanggan.php');
  }else if($_GET['page']=='data-paket'){
    include('data_paket.php');
  }else if($_GET['page']=='data-pengajuan'){
    include('data_pengajuan.php');
  }else if($_GET['page']=='user-app'){
    include('user_app.php');
  }else if($_GET['page']=='edit-data'){
    include('edit/edit_data.php');
  }else{
    include('not-found.php');
  }
}else{
  include('dashboard.php');
}
?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

</body>
</html>
