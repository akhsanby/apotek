<?= $this->extend('templates/app') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      	<div class="container">
    		<div class="row">
	          <div class="col-lg-3 col-6">
	            <!-- small card -->
	            <div class="small-box bg-info">
	              <div class="inner">
	                <h3><?= $totalObat; ?></h3>

	                <h5>Data Obat</h5>
	              </div>
	              <div class="icon">
	                <i class="fas fa-pills"></i>
	              </div>
	              <a href="/data/obat" class="small-box-footer">
	                More info <i class="fas fa-arrow-circle-right"></i>
	              </a>
	            </div>
	          </div>

          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $totalSuplier; ?></h3>

                <h5>Data Suplier</h5>
              </div>
              <div class="icon">
                <i class="fas fa-truck"></i>
              </div>
              <a href="/data/suplier" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $totalTransaksi; ?></h3>

                <h5>Data Transaksi</h5>
              </div>
              <div class="icon">
                <i class="fas fa-hand-holding-usd"></i>
              </div>
              <a href="/data/transaksi" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $totalUsers; ?></h3>

                <h5>Data User</h5>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                <br>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      	</div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>
  



