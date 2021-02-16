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
						<form role="form" action="/obat/create" method="post" enctype="multipart/form-data">
							<div class="card-body">
								<?= csrf_field(); ?>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="kode_obat">Kode Obat</label>
										<input type="text" name="kode_obat" class="form-control <?= $validation->hasError('kode_obat') ? 'is-invalid' : '' ?>" id="kode_obat">
										<div class="invalid-feedback">
											<?= $validation->getError('kode_obat') ?>
										</div>
									</div>
									<div class="form-group col-md-6">
										<label for="kode_suplier">Kode Suplier</label>
										<select name="kode_suplier" class="form-control <?= $validation->hasError('kode_suplier') ? 'is-invalid' : '' ?>" id="kode_suplier">
											<option selected disabled>Pilih kode suplier</option>
											<?php foreach($suplier as $suplier) : ?>
												<option value="<?= $suplier['kode_suplier']; ?>"><?= $suplier['kode_suplier']; ?> - <?= $suplier['nama_suplier']; ?></option>
											<?php endforeach; ?>
										</select>
										<div class="invalid-feedback">
											<?= $validation->getError('kode_suplier') ?>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="nama_obat">Nama Obat</label>
									<input type="text" name="nama_obat" class="form-control <?= $validation->hasError('nama_obat') ? 'is-invalid' : '' ?>" id="nama_obat">
									<div class="invalid-feedback">
										<?= $validation->getError('nama_obat') ?>
									</div>
								</div>
								<div class="form-group">
									<label for="produsen">Produsen</label>
									<input type="text" name="produsen" class="form-control <?= $validation->hasError('produsen') ? 'is-invalid' : '' ?>" id="produsen">
									<div class="invalid-feedback">
										<?= $validation->getError('produsen') ?>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="harga">Harga</label>
										<input type="text" name="harga" class="form-control <?= $validation->hasError('harga') ? 'is-invalid' : '' ?>" id="harga">
										<div class="invalid-feedback">
											<?= $validation->getError('harga') ?>
										</div>
									</div>
									<div class="form-group col-md-6">
										<label for="jml_stok">Stok</label>
										<input type="text" name="jml_stok" class="form-control <?= $validation->hasError('jml_stok') ? 'is-invalid' : '' ?>" id="jml_stok">
										<div class="invalid-feedback">
											<?= $validation->getError('jml_stok') ?>
										</div>
									</div>
								</div>
								<label class="d-block">Icon obat</label>
								<input type="file" name="icon" class="<?= $validation->hasError('icon') ? 'is-invalid' : '' ?>">
								<div class="invalid-feedback">
									<?= $validation->getError('icon') ?>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Tambah</button>
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




