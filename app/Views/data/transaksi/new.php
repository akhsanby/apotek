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
										<input type="text" name="kode_transaksi" class="form-control" id="kode_transaksi">
									</div>
									<div class="form-group col-md-6">
										<label for="nama_pembeli">Nama Pembeli</label>
										<input type="text" name="nama_pembeli" class="form-control" id="nama_pembeli" value="">
									</div>
								</div>
								<div class="form-group">
									<label for="tgl_transaksi">Tanggal</label>
									<input type="text" name="tgl_transaksi" class="form-control" id="tgl_transaksi" value="<?= date('Y-m-d') ?>" readonly>
								</div>
								<div class="form-group d-flex">
									<select class="form-control select2" style="width: 100%;">
										<option selected disabled>Cari Obat</option>
										<?php foreach() : ?>
											<option>Alaska</option>
										<?php endforeach; ?>
									</select>
									<button type="button" class="btn btn-primary">Go!</button>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label for="sub_total">Subtotal</label>
										<input type="text" name="sub_total" class="form-control" id="sub_total">
									</div>
									<div class="form-group col-md-6">
										<label for="total">Total</label>
										<input type="text" name="total" class="form-control" id="total">
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
				<div class="col-md-6">
					<div class="card card-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Icon</th>
									<th>Kode Obat</th>
									<th>Nama Obat</th>
									<th>Harga</th>
									<th>Jumlah</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>




