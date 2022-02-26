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
						<a href="<?php echo site_url('admin/jadwals/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/jadwals/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="pengajar">Pengajar*</label>
								<select required name="kode_bidang">
        							<option value="" disabled diselected>-- Pilih --</option>
        							<?php                                
        							foreach ($pengajar as $row) {  
									  echo "<option value='".$row->id_pengajar."'>".$row->nama."</option>";
									  }
									  echo"
								</select>"
								?>
								<div class="invalid-feedback">
									<?php echo form_error('id_pengajar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_matkul">Matkul*</label>
								<select name="id_matkul" id="id_matkul" class="custom-select">
                                <option value="" selected disabled>Pilih</option>
                                <?php foreach ($matkul as $m) : ?>
                                    <option <?= set_select('id_matkul', $m['id_matkul']) ?> value="<?= $m['id_matkul'] ?>"><?= $m['matkul'] ?></option>
                                <?php endforeach; ?>
                            	</select>
								<div class="invalid-feedback">
									<?php echo form_error('id_matkul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_ruang">Ruang*</label>
								<select name="id_ruang" id="id_ruang" class="custom-select">
                                <option value="" selected disabled>Pilih</option>
                                <?php foreach ($ruang as $r) : ?>
                                    <option <?= set_select('id_ruang', $r['id_ruang']) ?> value="<?= $r['id_ruang'] ?>"><?= $r['ruang'] ?></option>
                                <?php endforeach; ?>
                            	</select>
								<div class="invalid-feedback">
									<?php echo form_error('id_ruang') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_hari">Hari*</label>
								<select name="id_hari" id="id_hari" class="custom-select">
                                <option value="" selected disabled>Pilih</option>
                                <?php foreach ($hari as $h) : ?>
                                    <option <?= set_select('id_hari', $h['id_hari']) ?> value="<?= $h['id_hari'] ?>"><?= $h['hari'] ?></option>
                                <?php endforeach; ?>
                            	</select>
								<div class="invalid-feedback">
									<?php echo form_error('id_hari') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jam">Jam*</label>
								<select name="id_jam" id="id_jam" class="custom-select">
                                <option value="" selected disabled>Pilih</option>
                                <?php foreach ($jam as $j) : ?>
                                    <option <?= set_select('id_jam', $j['id_jam']) ?> value="<?= $j['id_jam'] ?>"><?= $j['jam'] ?></option>
                                <?php endforeach; ?>
                            	</select>
								<div class="invalid-feedback">
									<?php echo form_error('jam') ?>
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