<?= $this->extend('templates/app') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Main content -->
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="card card-primary">
						<form role="form" action="/suplier/create" method="post">
							<div class="card-body">
								<?= csrf_field(); ?>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="kode_suplier">Kode Suplier</label>
										<input type="text" name="kode_suplier" class="form-control <?= $validation->hasError('kode_suplier') ? 'is-invalid' : '' ?>" id="kode_suplier">
										<div class="invalid-feedback">
											<?= $validation->getError('kode_suplier') ?>
										</div>
									</div>
									<div class="form-group col-md-6">
										<label for="nama_suplier">Nama Suplier</label>
										<input type="text" name="nama_suplier" class="form-control <?= $validation->hasError('nama_suplier') ? 'is-invalid' : '' ?>" id="nama_suplier" class="form-control">
										<div class="invalid-feedback">
											<?= $validation->getError('nama_suplier') ?>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" name="alamat" class="form-control <?= $validation->hasError('alamat') ? 'is-invalid' : '' ?>" id="alamat">
									<div class="invalid-feedback">
										<?= $validation->getError('alamat') ?>
									</div>
								</div>
								<div class="form-group">
									<label for="kota">Kota</label>
									<input type="text" name="kota" class="form-control <?= $validation->hasError('kota') ? 'is-invalid' : '' ?>" id="kota">
									<div class="invalid-feedback">
										<?= $validation->getError('kota') ?>
									</div>
								</div>
								<div class="form-group">
									<label for="telp">Telp</label>
									<input type="text" name="telp" class="form-control <?= $validation->hasError('telp') ? 'is-invalid' : '' ?>" id="telp">
									<div class="invalid-feedback"> 
										<?= $validation->getError('telp') ?>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Tambah</button>
								<a href="/data/suplier" class="btn btn-secondary">Batal</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>




