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
				                    	<input type="text" name="kode_obat" class="form-control" id="kode_obat">
				                  	</div>
				                  	<div class="form-group col-md-6">
				                        <label for="kode_suplier">Kode Suplier</label>
				                        <select name="kode_suplier" class="form-control" id="kode_suplier" class="form-control">
				                          	<option selected disabled>Pilih kode suplier</option>
				                          	<option>2010</option>
				                          	<option>2011</option>
				                          	<option>2012</option>
				                          	<option>2013</option>
				                        </select>
				                    </div>
			                	</div>
				                  <div class="form-group">
				                    <label for="nama_obat">Nama Obat</label>
				                    <input type="text" name="nama_obat" class="form-control" id="nama_obat">
				                  </div>
				                  <div class="form-group">
				                    <label for="produsen">Produsen</label>
				                    <input type="text" name="produsen" class="form-control" id="produsen">
				                  </div>
				                <div class="row">
				                  <div class="form-group col-md-6">
				                    <label for="harga">Harga</label>
				                    <input type="text" name="harga" class="form-control" id="harga">
				                  </div>
				                  <div class="form-group col-md-6">
				                    <label for="jml_stok">Stok</label>
				                    <input type="text" name="jml_stok" class="form-control" id="jml_stok">
				                  </div>
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
  



