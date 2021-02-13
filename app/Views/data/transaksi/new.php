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
			                	<input type="hidden" name="_method" value="PUT" />
			                	<div class="row">
				                  	<div class="form-group col-md-6">
				                    	<label for="kode_transaksi">Kode Transaksi</label>
				                    	<input type="text" name="kode_transaksi" class="form-control" id="kode_transaksi">
				                  	</div>
				                  	<div class="form-group col-md-6">
				                        <label for="nama_pembeli">Nama Pembeli</label>
				                        <input type="text" name="nama_pembeli" class="form-control" id="nama_pembeli" class="form-control">
				                    </div>
			                	</div>
				                  <div class="form-group">
				                    <label for="tgl_transaksi">Tanggal</label>
				                    <input type="text" name="tgl_transaksi" class="form-control" id="tgl_transaksi">
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
			</div>
      	</div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>
  



