<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $titlehead ?></title>

    <link rel="shortcut icon" href="<?= base_url(); ?>/img/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url(); ?>/img/logo.png" type="image/png">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/fonts/flag-icons.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= base_url(); ?>/mazer/assets/css/main/app.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/mazer/assets/css/main/app-dark.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/libs/sweetalert2/sweetalert2.css">


</head>
<style type="text/css">
    .bg-login {
        background-image: url('<?= base_url(); ?>/img/bg.JPG');
        background-size: cover;
        /*height: 100%;*/
        /*background-position: center;*/
    }
</style>

<body class="bg-login">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg" style="margin-top: 120px;background-color: #2c2c2c;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-4">
                                    <div style="display: flex;justify-content:center;align-items:center">
                                        <img style="height: 15%; width:35%;margin-bottom: 7px;" class="img-profile" src="<?= base_url(); ?>/img/logo.png">
                                    </div>
                                    <div class="text-center mb-3 mt-2">
                                        <h2 class="h5 text-gray-900 mb-1" style="font-size: 25px;font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"><strong>LOGIN ADMIN</i></strong></h2>
                                        <!-- <h3 class="text-gray-900 mb-4" style="font-size: 15px;"><strong>BALITBANGREN POLMAN</strong></h3> -->
                                    </div>

                                    <?php
                                    //pesan validasi error
                                    $errors = session()->getFlashdata('errors');
                                    if (!empty($errors)) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <ul>
                                                <?php foreach ($errors as $error) : ?>
                                                    <li><?= esc($error) ?></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    <?php } ?>

                                    <form class="user" action="<?= base_url('auth/cek_login') ?>" method="post">
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control form-control-user " name="username" id="username" placeholder="Username">
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user" style="margin-left:25%;width:50%">
                                            Login
                                        </button>
                                    </form>
                                    <br>
                                    <hr>
                                    <div class="copyright text-center small" style="padding-bottom: -1px;">
                                        <strong>&copy; <?php echo date('Y') ?> Kota Tua Majene</a>.</strong>
                                    </div>
                                    <?php
                                    $errors = session()->getFlashdata('errors');
                                    if (!empty($errors)) { ?>
                                        <div id="error" style="display: none;">
                                            <?php foreach ($errors as $key => $value) { ?>
                                                <?= esc($value) ?>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var errorElement = document.getElementById('pesan');
            if (errorElement) {
                var error = errorElement.innerText.trim();
                if (error !== '') {
                    setTimeout(function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            html: error,
                        });
                    }, 700);
                }
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var errorElement = document.getElementById('error');
            if (errorElement) {
                var error = errorElement.innerText.trim();
                if (error !== '') {
                    setTimeout(function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            html: error,
                        });
                    }, 700);
                }
            }
        });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/mazer/assets/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>/mazer/assets/js/app.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

</body>

</html>