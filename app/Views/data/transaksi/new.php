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
						<form role="form" action="/transaksi/create" method="post">
							<div class="card-body">
								<?= csrf_field(); ?>
								<input type="hidden" name="_method" value="PUT">
								<div class="row">
									<div class="form-group col-md-6">
										<label for="kode_transaksi">Kode Transaksi</label>
										<input type="text" name="kode_transaksi" class="form-control" id="kode_transaksi" value="<?= rand(100,1000000); ?>" readonly>
									</div>
									<div class="form-group col-md-6">
										<label for="nama_pembeli">Nama Pembeli</label>
										<input type="text" name="nama_pembeli" class="form-control" id="nama_pembeli">
									</div>
								</div>
								<div class="form-group">
									<label for="tgl_transaksi">Tanggal</label>
									<input type="text" name="tgl_transaksi" class="form-control" id="tgl_transaksi" value="<?= date('Y-m-d') ?>" readonly>
								</div>
								<div class="form-group">
									<label for="tgl_transaksi">Pilih Obat</label>
									<select class="form-control select2 pilih-obat" style="width: 100%;" name="nama_obat">
										<option selected disabled>Cari Obat</option>
										<?php foreach($obat as $obat) : ?>
											<option value="<?= $obat['harga'] ?>"><?= $obat['nama_obat'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="sub_total">Subtotal</label>
										<input type="number" name="sub_total" class="form-control jml-obat" id="sub_total" value="1">
									</div>
									<div class="form-group col-md-6">
										<label for="total">Total</label>
										<input type="text" name="total" class="form-control total-harga" id="total" readonly>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Tambah</button>
								<a href="/data/transaksi" class="btn btn-secondary">Batal</a>
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




