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
			        	<form role="form" action="/suplier/edit" method="post">
			                <div class="card-body">
			                	<?= csrf_field(); ?>
			                	<input type="hidden" name="_method" value="PUT" />
			                	<div class="row">
				                  	<div class="form-group col-md-6">
				                    	<label for="kode_suplier">Kode Suplier</label>
				                    	<input type="text" name="kode_suplier" class="form-control" id="kode_suplier">
				                  	</div>
				                  	<div class="form-group col-md-6">
				                        <label for="nama_suplier">Nama Suplier</label>
				                        <input type="text" name="nama_suplier" class="form-control" id="nama_suplier" class="form-control">
				                    </div>
			                	</div>
				                  <div class="form-group">
				                    <label for="alamat">Alamat</label>
				                    <input type="text" name="alamat" class="form-control" id="alamat">
				                  </div>
				                  <div class="form-group">
				                    <label for="kota">Kota</label>
				                    <input type="text" name="kota" class="form-control" id="kota">
				                  </div>
				                  <div class="form-group">
				                    <label for="telp">Telp</label>
				                    <input type="text" name="telp" class="form-control" id="telp">
				                  </div>
			                </div>
			                <div class="card-footer">
			                  <button type="submit" class="btn btn-primary">Edit</button>
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
  



