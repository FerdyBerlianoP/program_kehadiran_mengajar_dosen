<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("dosen/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("dosen/_partials/navbar.php") ?>

<div id="wrapper">

  <?php $this->load->view("dosen/_partials/sidebar.php") ?>

  <div id="content-wrapper">

    <div class="container-fluid">

    <?php //$this->load->view("dosen/_partials/breadcrumb.php") ?>
    <!-- 
        Selamat Datang anda disini sebagai dosen <?php echo $_SESSION['npm']; ?>!
        -->

    <!-- Icon Cards-->
    
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("dosen/_partials/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("dosen/_partials/scrolltop.php") ?>
<?php $this->load->view("dosen/_partials/modal.php") ?>
<?php $this->load->view("dosen/_partials/js.php") ?>
    
</body>
</html>