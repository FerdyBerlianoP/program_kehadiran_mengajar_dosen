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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/genap1819s/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/genap1819/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $genap1819->id_jadwal?>" />

							<div class="form-group">
								<label for="pengajar">Pengajar*</label>
								<input class="form-control <?php echo form_error('pengajar') ? 'is-invalid':'' ?>"
								 type="text" name="pengajar" placeholder="Pengajar" value="<?php echo $genap1819->pengajar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pengajar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="matkul">Matkul*</label>
								<input class="form-control <?php echo form_error('matkul') ? 'is-invalid':'' ?>"
								 type="text" name="matkul" placeholder="Matkul" value="<?php echo $genap1819->matkul ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('matkul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="ruang">Ruang*</label>
								<input class="form-control <?php echo form_error('ruang') ? 'is-invalid':'' ?>"
								 type="text" name="ruang" placeholder="Ruang" value="<?php echo $genap1819->ruang ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('ruang') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="hari">Hari*</label>
								<input class="form-control <?php echo form_error('hari') ? 'is-invalid':'' ?>"
								 type="text" name="hari" placeholder="Hari" value="<?php echo $genap1819->hari ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('hari') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jam">Jam*</label>
								<input class="form-control <?php echo form_error('jam') ? 'is-invalid':'' ?>"
								 type="text" name="jam" placeholder="Jam" value="<?php echo $genap1819->jam ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jam') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kelas">Kelas*</label>
								<input class="form-control <?php echo form_error('kelas') ? 'is-invalid':'' ?>"
								 type="text" name="kelas" placeholder="Kelas" value="<?php echo $genap1819->kelas ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kelas') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal">Tanggal*</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal" placeholder="Tanggal" value="<?php echo $genap1819->tanggal ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="status">Status*</label>
								<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
								 type="text" name="status" placeholder="Status" value="<?php echo $genap1819->status ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('status') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alasan">Keterangan*</label>
								<input class="form-control <?php echo form_error('alasan') ? 'is-invalid':'' ?>"
								 type="text" name="alasan" placeholder="Keterangan" value="<?php echo $genap1819->alasan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alasan') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>
						
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