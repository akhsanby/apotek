<?= $this->extend('templates/app') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="card">
        	<div class="card-header">
        		<a href="/data/obat/new" class="btn btn-primary">Tambah Data Obat</a>
        	</div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  	<thead>
	                  	<tr>
		                    <th>Icon</th>
		                    <th>Kode Obat</th>
		                    <th>Kode Supplier</th>
		                    <th>Nama Obat</th>
		                    <th>Produsen</th>
		                    <th>Harga</th>
		                    <th>Stok</th>
		                    <th>Opsi</th>
	                  	</tr>
                  	</thead>
                  	<tbody>
                  		<?php foreach($obat as $obat) : ?>
	                  	<tr>
		                    <td>
		                    	<img class="rounded" src="<?= $obat['foto']; ?>" alt="">
		                    </td>
		                    <td><?= $obat['kode_obat']; ?></td>
		                    <td><?= $obat['kode_supplier']; ?></td>
		                    <td><?= $obat['nama_obat']; ?></td>
		                    <td><?= $obat['produsen']; ?></td>
		                    <td>Rp. <?= $obat['harga']; ?></td>
		                    <td><?= $obat['jml_stok']; ?></td>
		                    <td>
		                    	<a href="/data/obat/edit/<?= $obat['kode_obat'] ?>" class="btn btn-success">edit</a>
		                    	<a href="/data/obat/delete/<?= $obat['kode_obat'] ?>" class="btn btn-danger">delete</a>
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
  



