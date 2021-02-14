<?= $this->extend('templates/app') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="card">
        	<div class="card-header">
        		<a href="/data/transaksi/new" class="btn btn-primary">Tambah Data Transaksi</a>
        	</div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  	<thead>
	                  	<tr>
		                    <th>Nama Pembeli</th>
		                    <th>Tanggal</th>
                            <th>Obat terjual</th>
		                    <th>Total</th>
		                    <th>Opsi</th>
	                  	</tr>
                  	</thead>
                  	<tbody>
                  		<?php foreach($transaksi as $transaksi) : ?>
	                  	<tr>
                            <td><?= $transaksi['nama_pembeli']; ?></td>
                            <td><?= $transaksi['tgl_transaksi']; ?></td>
                            <td></td>
                            <td><?= $transaksi['total']; ?></td>
                            <td>
                              <a href="" class="btn btn-success">edit</a>
                              <a href="" class="btn btn-danger">delete</a>
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
  



