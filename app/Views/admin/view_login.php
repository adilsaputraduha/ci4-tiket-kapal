<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sistem Informasi Pemesanan Tiket Kapal</title>
        <link href="<?= base_url(); ?>/assets/assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-center p-5">
                        <h4>Pelabuhan Sikakap Mentawai</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        <form class="pt-3" action="<?= base_url('admin/login/ceklogin'); ?>" method="POST">
                            <?= csrf_field(); ?>   
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="email" placeholder="Username" autofocus name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" autocomplete="off" name="password">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium">SIGN IN</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
        <!-- page-body-wrapper ends -->
        </div>
    </body>
</html>