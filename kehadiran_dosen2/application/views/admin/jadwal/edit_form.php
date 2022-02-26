<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/jadwals/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/jadwals/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Pengajar*</label>
								<input class="form-control <?php echo form_error('id_pengajar') ? 'is-invalid':'' ?>"
								 type="text" name="id_pengajar" placeholder="Pengajar" />
								<div class="invalid-feedback">
									<?php echo form_error('id_pengajar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_matkul">Matkul*</label>
								<input class="form-control <?php echo form_error('id_matkul') ? 'is-invalid':'' ?>"
								 type="text" name="id_matkul" placeholder="Matkul" />
								<div class="invalid-feedback">
									<?php echo form_error('id_matkul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_ruang">Ruang*</label>
								<input class="form-control <?php echo form_error('id_ruang') ? 'is-invalid':'' ?>"
								 type="text" name="id_ruang" placeholder="Ruang" />
								<div class="invalid-feedback">
									<?php echo form_error('id_ruang') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_hari">Hari*</label>
								<input class="form-control <?php echo form_error('id_hari') ? 'is-invalid':'' ?>"
								 type="text" name="id_hari" placeholder="Hari" />
								<div class="invalid-feedback">
									<?php echo form_error('id_hari') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jam">Jam*</label>
								<input class="form-control <?php echo form_error('jam') ? 'is-invalid':'' ?>"
								 type="time" name="jam" placeholder="Jam" />
								<div class="invalid-feedback">
									<?php echo form_error('jam') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="status">Status*</label>
								<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
								 type="text" name="status" placeholder="Status" />
								<div class="invalid-feedback">
									<?php echo form_error('status') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alasan">Alasan*</label>
								<textarea class="form-control <?php echo form_error('alasan') ? 'is-invalid':'' ?>"
								 type="text" name="alasan" placeholder="Alasan"> </textarea>
								<div class="invalid-feedback">
									<?php echo form_error('alasan') ?>
								</div>
							</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>