<?= $this->extend('templates/app') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <a href="/transaksi/new" class="btn btn-primary">Tambah Data Transaksi</a>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('created')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('created'); ?>
                    </div>
                    <?php elseif (session()->getFlashdata('deleted')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('deleted'); ?>
                    </div>
                    <?php endif; ?>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Admin</th>
                            <th>Nama Pembeli</th>
                            <th>Obat terjual</th>
                            <th>Subtotal</th>
                            <th>Total</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($transaksi as $transaksi) : ?>
                            <tr>
                                <td><?= $transaksi['tgl_transaksi']; ?></td>
                                <td><?= $transaksi['username']; ?></td>
                                <td><?= $transaksi['nama_pembeli']; ?></td>
                                <td><?= $transaksi['nama_obat']; ?></td>
                                <td><?= $transaksi['sub_total']; ?></td>
                                <td><?= $transaksi['total']; ?></td>
                                <td>
                                    <form action="/transaksi/delete/<?= $transaksi['kode_transaksi']; ?>" method="post" class="d-inline">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <?= csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">delete</button>
                                    </form>
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




