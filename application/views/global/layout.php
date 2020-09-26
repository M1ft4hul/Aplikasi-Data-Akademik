<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/login/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/layout/dist/css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets3/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets3/css/plugins.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets3/style.css">

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/assets4/css/jquery-ui.css' ?>">

    <!-- Cusom css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets3/css/custom.css">

    <!-- Modernizer js -->
    <script src="<?php echo base_url(); ?>assets/assets3/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <div class="wrapper" id="wrapper">
        <div class="body-wrap boxed-container">
            <div class="background">
                <main>
                    <section class="hero text-center">
                        <div class="container-sm">
                            <div class="hero-inner">
                                <img src="<?php echo base_url(); ?>assets/login/logo_frontend.png" width="100" height="100" alt="logo smk perpus" class="tengah">
                                <h1 class="hero-title h2-mobile mt-0 is-revealing tulisan">LIBRARY MANAGEMENT SYSTEM <br> SMKN 4 KENDARI</h1>
                                <br>
                                <form action="<?= base_url('buku/data'); ?>" method="post">
                                    <div class="container">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="pencarianbuku" autocomplete="off" autofocus class="form-control" placeholder="Tulis Nama Buku Yang Akan Di Cari">
                                                <input class="btn btn-primary" type="submit" id="button-addon2" value="Cari Buku" name="submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div style="clear:both"></div>
                                <div><br>
                                    <div style="text-align: center;">&copy; <?= date('Y'); ?> <a href="">Miftahul Jannah</a>, Library Management System <br>SMKN 4 KENDARI</div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>

            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/layout/dist/js/main.min.js"></script>
    <!-- JS Files -->
    <script src="<?php echo base_url(); ?>assets/assets3/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets3/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets3/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets3/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets3/js/active.js"></script>
    <script src="<?php echo base_url() . 'assets/assets4/js/jquery-3.3.1.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url() . 'assets/assets4/js/jquery-ui.js' ?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/sweetalert/sweetalert.all.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/sweetalert/sweetku.js"); ?>"></script>
</body>

</html>