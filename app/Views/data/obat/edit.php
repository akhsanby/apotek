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
						<form role="form" action="/obat/update/<?= $obat['kode_obat']; ?>" method="post" enctype="multipart/form-data">
							<div class="card-body">
								<input type="hidden" name="_method" value="PUT">
								<input type="hidden" name="iconLama" value="<?= $obat['icon'] ?>">
								<?= csrf_field(); ?>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="kode_obat">Kode Obat</label>
										<input type="text" name="kode_obat" class="form-control <?= $validation->hasError('kode_obat') ? 'is-invalid' : '' ?>" id="kode_obat" value="<?= $obat['kode_obat'] ?>" readonly>
										<div class="invalid-feedback">
											<?= $validation->getError('kode_obat') ?>
										</div>
									</div>
									<div class="form-group col-md-6">
										<label for="kode_suplier">Kode Suplier</label>
										<?= form_dropdown('kode_suplier', $kode_suplier, $obat['kode_suplier'], ['class' => 'form-control', 'id' => 'kode_suplier']); ?>
									</div>
								</div>
								<div class="form-group">
									<label for="nama_obat">Nama Obat</label>
									<input type="text" name="nama_obat" class="form-control <?= $validation->hasError('nama_obat') ? 'is-invalid' : '' ?>" id="nama_obat" value="<?= (old('nama_obat')) ? old('nama_obat') : $obat['nama_obat'] ?>">
									<div class="invalid-feedback">
										<?= $validation->getError('nama_obat') ?>
									</div>
								</div>
								<div class="form-group">
									<label for="produsen">Produsen</label>
									<input type="text" name="produsen" class="form-control <?= $validation->hasError('produsen') ? 'is-invalid' : '' ?>" id="produsen" value="<?= (old('produsen')) ? old('produsen') : $obat['produsen'] ?>">
									<div class="invalid-feedback">
										<?= $validation->getError('produsen') ?>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="harga">Harga</label>
										<input type="text" name="harga" class="form-control <?= $validation->hasError('harga') ? 'is-invalid' : '' ?>" id="harga" value="<?= (old('harga')) ? old('harga') : $obat['harga'] ?>">
										<div class="invalid-feedback">
											<?= $validation->getError('harga') ?>
										</div>
									</div>
									<div class="form-group col-md-6">
										<label for="jml_stok">Stok</label>
										<input type="text" name="jml_stok" class="form-control <?= $validation->hasError('jml_stok') ? 'is-invalid' : '' ?>" id="jml_stok" value="<?= (old('jml_stok')) ? old('jml_stok') : $obat['jml_stok'] ?>">
										<div class="invalid-feedback">
											<?= $validation->getError('jml_stok') ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md">
										<img width="100" height="100" src="/img/obat/<?= $obat['icon'] ?>" class="d-inline">
										<input type="file" name="icon">
										<?php if ($validation->hasError('icon')): ?>
											<div class="invalid-feedback">
												<?= $validation->getError('icon') ?>
											</div>	
										<?php endif ?>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Update</button>
								<a href="/data/obat" class="btn btn-secondary">Batal</a>
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




