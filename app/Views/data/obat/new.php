<?= $this->extend('templates/app') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      	<div class="container">
        	<form action="/obat/create" method="post" enctype="multipart/form-data">
        		<?=  csrf_field(); ?>
	        	<div class="form-group">
				    <input type="text" class="form-control" placeholder="Masukkan kode obat">
				</div>
        	</form>
      	</div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>
  



