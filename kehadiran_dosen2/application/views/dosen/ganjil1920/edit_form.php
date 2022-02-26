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

				<?php $this->load->view("dosen/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('dosen/ganjil1920s/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" dosen/ganjil1920/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $ganjil1920->id_jadwal?>" />

							<div class="form-group">
								<label for="pengajar">Pengajar*</label>
								<input class="form-control <?php echo form_error('pengajar') ? 'is-invalid':'' ?>"
								 type="text" name="pengajar" placeholder="Pengajar" value="<?php echo $ganjil1920->pengajar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pengajar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="matkul">Matkul*</label>
								<input class="form-control <?php echo form_error('matkul') ? 'is-invalid':'' ?>"
								 type="text" name="matkul" placeholder="Matkul" value="<?php echo $ganjil1920->matkul ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('matkul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="ruang">Ruang*</label>
								<input class="form-control <?php echo form_error('ruang') ? 'is-invalid':'' ?>"
								 type="text" name="ruang" placeholder="Ruang" value="<?php echo $ganjil1920->ruang ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('ruang') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="hari">Hari*</label>
								<input class="form-control <?php echo form_error('hari') ? 'is-invalid':'' ?>"
								 type="text" name="hari" placeholder="Hari" value="<?php echo $ganjil1920->hari ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('hari') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jam">Jam*</label>
								<input class="form-control <?php echo form_error('jam') ? 'is-invalid':'' ?>"
								 type="text" name="jam" placeholder="Jam" value="<?php echo $ganjil1920->jam ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jam') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kelas">Kelas*</label>
								<input class="form-control <?php echo form_error('kelas') ? 'is-invalid':'' ?>"
								 type="text" name="kelas" placeholder="Kelas" value="<?php echo $ganjil1920->kelas ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kelas') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal">Tanggal*</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal" placeholder="Tanggal" value="<?php echo $ganjil1920->tanggal ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="status">Status*</label>
								<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
								 type="text" name="status" placeholder="Status" value="<?php echo $ganjil1920->status ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('status') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alasan">Keterangan*</label>
								<input class="form-control <?php echo form_error('alasan') ? 'is-invalid':'' ?>"
								 type="text" name="alasan" placeholder="Keterangan" value="<?php echo $ganjil1920->alasan ?>" />
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
				<?php $this->load->view("dosen/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("dosen/_partials/scrolltop.php") ?>

		<?php $this->load->view("dosen/_partials/js.php") ?>

</body>

</html>