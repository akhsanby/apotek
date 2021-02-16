<?= $this->extend('templates/app') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Main content -->
	<div class="content">
		<div class="container">
			<div class="card">
				<div class="card-header">
					<a href="/suplier/new" class="btn btn-primary">Tambah Data Suplier</a>
				</div>
				<div class="card-body">
					<?php if (session()->getFlashdata('created')) : ?>
					<div class="alert alert-success" role="alert">
						<?= session()->getFlashdata('created'); ?>
					</div>
					<?php elseif (session()->getFlashdata('updated')) : ?>
					<div class="alert alert-success" role="alert">
						<?= session()->getFlashdata('updated'); ?>
					</div>
					<?php elseif (session()->getFlashdata('deleted')) : ?>
					<div class="alert alert-success" role="alert">
						<?= session()->getFlashdata('deleted'); ?>
					</div>
				<?php endif; ?>
				<table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Kode Suplier</th>
							<th>Nama Suplier</th>
							<th>Alamat</th>
							<th>Kota</th>
							<th>Telp</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($suplier as $suplier) : ?>
							<tr>
								<td><?= $suplier['kode_suplier'] ?></td>
								<td><?= $suplier['nama_suplier'] ?></td>
								<td><?= $suplier['alamat'] ?></td>
								<td><?= $suplier['kota'] ?></td>
								<td><?= $suplier['telp'] ?></td>
								<td>
									<a href="/suplier/edit/<?= $suplier['kode_suplier'] ?>" class="btn btn-success">edit</a>
									<form action="/suplier/delete/<?= $suplier['kode_suplier'] ?>" method="post" class="d-inline">
										<input type="hidden" name="_method" value="DELETE">
										<?= csrf_field(); ?>
										<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">delete</button>
									</form>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>




