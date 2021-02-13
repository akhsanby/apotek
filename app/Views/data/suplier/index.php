<?= $this->extend('templates/app') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="card">
        	<div class="card-header">
        		<a href="/data/suplier/new" class="btn btn-primary">Tambah Data Suplier</a>
        	</div>
            <div class="card-body">
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
                          <a href="">edit</a>
                          <a href="">delete</a>
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
  



