<?= $this->extend('templates/auth') ?>
<?= $this->section('content') ?>
<div class="login-box">
  <!-- /.login-logo -->
  <?php if (session()->getFlashdata('pesan')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('pesan'); ?>
  </div>
  <?php elseif (session()->getFlashdata('kesalahan')) : ?>
    <div class="alert alert-danger" role="alert">
      <?= session()->getFlashdata('kesalahan'); ?>
    </div>
  <?php elseif (session()->has('logout')) : ?>
    <div class="alert alert-success" role="alert">
      <?= session()->get('logout'); ?>
    </div>
  <?php endif; ?>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login to start your session</p>
      <form action="/login" method="post">
        <?= csrf_field(); ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control <?= ($validation->hasError('username') ? 'is-invalid' : ''); ?>" name="username" placeholder="Enter username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <div class="invalid-feedback">
            <?= $validation->getError('username'); ?>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control <?= ($validation->hasError('password') ? 'is-invalid' : ''); ?>" name="password" placeholder="Enter password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="invalid-feedback">
            <?= $validation->getError('password'); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<?= $this->endSection() ?>

