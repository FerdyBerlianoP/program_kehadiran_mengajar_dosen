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

				<!-- DataTables -->
				<div class="card mb-3">
					
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Pengajar</th>
										<th>Matkul</th>
										<th>Ruangan</th>
										<th>Hari</th>
										<th>Jam</th>
										<th>Kelas</th>
										<th>Tanggal Mengajar</th>
										<th>Status</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($genap1819s as $jadwalaja): ?>
									<tr>
										<td width="150">
											<?php echo $jadwalaja->pengajar ?>
										</td>
										<td width="150">
											<?php echo $jadwalaja->matkul ?>
										</td>
										<td width="150">
											<?php echo $jadwalaja->ruang ?>
										</td>
										<td width="150">
											<?php echo $jadwalaja->hari ?>
										</td>
										<td width="150">
											<?php echo $jadwalaja->jam ?>
										</td>
										<td width="150">
											<?php echo $jadwalaja->kelas ?>
										</td>
										<td width="150">
											<?php echo $jadwalaja->tanggal ?>
										</td>
										<td width="150">
											<?php echo $jadwalaja->status ?>
										</td>
										<td width="150">
											<?php echo $jadwalaja->alasan ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('dosen/genap1819s/edit/'.$jadwalaja->id_jadwal) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('dosen/genap1819s/delete/'.$jadwalaja->id_jadwal) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("dosen/_partials/modal.php") ?>

	<?php $this->load->view("dosen/_partials/js.php") ?>

<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
</body>

</html>