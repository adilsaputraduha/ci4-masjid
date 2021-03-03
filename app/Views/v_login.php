<!DOCTYPE html>
<html lang="id">

<head>

    <title>Login - Site Administrator</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url(); ?>/assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body" style="margin-bottom : -20px">
                        <form action="<?= route_to('login') ?>" method="POST">
                            <?= csrf_field() ?>
                            <img src="<?= base_url(); ?>/assets/images/logo-dark.png" alt="" class="img-fluid mb-4">

                            <h4 class="mb-3 f-w-400">Login</h4>
                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <div class="form-group mb-3">
                                <label class="floating-label" for="Email">Username</label>
                                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" required name="login" id="login" placeholder="">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="Password">Password</label>
                                <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" required name="password" id="password" placeholder="">
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                            </div>

                            <?php if ($config->allowRemembering) : ?>
                                <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                    <input type="checkbox" class="custom-control-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                    <label class="custom-control-label" for="customCheck1">Ingat saya.</label>
                                </div>
                            <?php endif; ?>

                            <button type="submit" class="btn btn-block btn-primary mb-4">Masuk</button>
                            <?php if ($config->activeResetter) : ?>
                                <p class="text-muted">Lupa password? <a href="<?= route_to('forgot') ?>" class="f-w-400">Contact Admin</a></p>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="<?= base_url(); ?>/assets/js/vendor-all.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/ripple.js"></script>
<script src="<?= base_url(); ?>/assets/js/pcoded.min.js"></script>



</body>

</html>