<?= $this->extend('templates/master') ?> 
<?= $this->section('content') ?>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-2">Login</h3></div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input class="form-control py-4" id="username" name="username" type="text" placeholder="Enter username" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control py-4" id="password" name="password" type="password" placeholder="Enter password" />
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="btn btn-primary btn-block" href="index.html">Login</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?= $this->endSection() ?>
