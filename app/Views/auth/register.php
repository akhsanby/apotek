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
	<div class="card-body register-card-body">
		<p class="login-box-msg">Register a new membership</p>

		<form action="/registered" method="post">
			<div class="input-group mb-3">
				<input type="text" class="form-control <?= $validation->hasError('username') ? 'is-invalid' : '' ?>" name="username" value="<?= old('username') ? old('username') : '' ?>"placeholder="Enter username">
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
				<input type="password" class="form-control <?= $validation->hasError('password') ? 'is-invalid' : '' ?>" name="password" placeholder="Enter password">
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-lock"></span>
					</div>
				</div>
				<div class="invalid-feedback">
					<?= $validation->getError('password'); ?>
				</div>
			</div>
			<div class="input-group mb-3">
				<input type="password" class="form-control <?= $validation->hasError('password1') ? 'is-invalid' : '' ?>" name="password1" placeholder="Retype password">
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-lock"></span>
					</div>
				</div>
				<div class="invalid-feedback">
					<?= $validation->getError('password1'); ?>
				</div>
			</div>
			<div class="row">
				<!-- /.col -->
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary btn-md btn-block">Register</button>
				</div>
				<!-- /.col -->
			</div>
		</form>
		<p class="mb-0 mt-2">
			<a href="/login" class="text-center">Login Account</a>
		</p>
	</div>
	<!-- /.form-box -->
</div><!-- /.card -->
</div>
<!-- /.login-box -->
<?= $this->endSection() ?>

