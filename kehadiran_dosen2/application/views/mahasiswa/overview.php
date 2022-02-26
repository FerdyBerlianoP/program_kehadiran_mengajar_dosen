<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("mahasiswa/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("mahasiswa/_partials/navbar.php") ?>

<div id="wrapper">

  <?php $this->load->view("mahasiswa/_partials/sidebar.php") ?>

  <div id="content-wrapper">

    <div class="container-fluid">

    <?php //$this->load->view("mahasiswa/_partials/breadcrumb.php") ?>
    <!-- 
        Selamat Datang anda disini sebagai mahasiswa <?php echo $_SESSION['npm']; ?>!
        -->

    <!-- Icon Cards-->
    
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <?php $this->load->view("mahasiswa/_partials/footer.php") ?>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("mahasiswa/_partials/scrolltop.php") ?>
<?php $this->load->view("mahasiswa/_partials/modal.php") ?>
<?php $this->load->view("mahasiswa/_partials/js.php") ?>
    
</body>
</html>