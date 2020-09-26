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
<!-- Modal hasil cari -->

<body>
    <div class="wrapper" id="wrapper">
        <div class="body-wrap boxed-container">
            <div class="background">
                <!-- modal -->
                <br>
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" onclick="window.location.href='<?= base_url('buku'); ?>'" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel"><span class="fa fa-book"></span>&nbsp;Data Buku</h4>
                            <div class="alert alert-success alert-dismissible">
                                <h4><i class="icon fa fa-check"></i> Hasil Pencarian Anda!</h4>
                                <?= $total_rows; ?>
                            </div>
                            <table class="tabel">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>judul</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($pages)) : ?>
                                        <tr>
                                            <td colspan="4">
                                                <div class="alert alert-danger alert-dismissible">
                                                    <h4><i class="icon fa fa-ban"></i> Maaf, Data Kosong!</h4>
                                                    data pencarian anda tidak ditemukan
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php
                                    foreach ($pages as $page) : ?>
                                        <tr>
                                            <th><?= ++$start; ?></th>
                                            <td><?= $page['judul']; ?></td>
                                            <td>
                                                <a data-toggle="modal" data-target="#myModal<?= $page['id_buku']; ?>" class="btn btn-outline-success"><i class="fa fa-search"></i> Lihat</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="card-footer">
                                <?= $this->pagination->create_links(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir kode modal dialog -->
            <?php
            foreach ($pages as $op) {
                ?>
                <div id="myModal<?= $op['id_buku']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel"><span class="fa fa-book"></span>&nbsp;Detail Buku</h4>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            </div>
                            <div class="modal-body">
                                <!-- <div id="phone_result"></div> -->
                                <table width="100%" style="font-size:14px">
                                    <tr>
                                        <td rowspan="7"><img src="<?php echo base_url(); ?>gambar_petugas/<?php echo $op['img']; ?>" width="200" height="100" class="rounded"></td>
                                    </tr>
                                    <tr>
                                        <td width="150">Judul</td>
                                        <td width="10">:</td>
                                        <td><?php echo $op['judul']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>ISBN</td>
                                        <td>:</td>
                                        <td><?php echo $op['ISBN']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tahun Terbit</td>
                                        <td>:</td>
                                        <td><?php echo $op['thn_terbit']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No.Rak</td>
                                        <td>:</td>
                                        <td><?php echo $op['no_rak']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Stok Buku</td>
                                        <td>:</td>
                                        <td><?php echo $op['stok']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>:</td>
                                        <td><?php echo $op['ket']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="fa fa-close"></span> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <!-- akhir kode modal dialog -->
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
</body>

</html>