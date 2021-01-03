<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bunda Fitry Salon | Wedding Organizer</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <style>
        .card {
        border-radius: 6px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        /* max-width: 300px; */
        margin: auto;
        text-align: center;
        border-style: groove;
        margin-bottom: 20px;
        }

        .title {
        color: grey;
        font-size: 18px;
        }

        button:hover, a:hover {
        opacity: 0.7;
        }

        .navbar-fixed-top.scrolled {
            background-color: #222222 !important;
            transition: background-color 200ms linear;
        }
        img {
            width: 150px;
            height: 180px;
        }

    </style>
    <!-- Theme CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-info navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <!-- <a class="navbar-brand page-scroll" href="#page-top">Bunda Fitry Wedding Organizer</a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="<?= base_url() . 'home'; ?>">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Pelayanan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#rias">Make Up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#dekorasi">Dekorasi</a>
                    </li>
                    <li>
                        <a href="<?= base_url() . 'tentang'; ?>">Tentang Kami</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#daftar">Daftar</a>
                    </li>
                    <li>
                        <a href="<?= base_url() . 'login'; ?>">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Welcome to Bunda Fitry Wedding Organizer</div>
                    <div class="intro-heading">It's your wedding event partner</div>
                </div>
            </div>
        </header>
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Pelayanan</h2>
                    <h3 class="section-subheading text-muted">Pelayanan terbaik dari Kami untuk Anda.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><i class="fa fa-list-alt"></i> DAFTAR PAKET</h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-4 col-sm-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4 class="title"><?= $paketLengkap[0]->nama_paket ?></h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <img src="<?php echo base_url(); ?>assets/images/oke7_1.jpg" width="60%" height="60%">
                                    <p><?= (strlen($paketLengkap[0]->keterangan_paket) > 80 ? substr($paketLengkap[0]->keterangan_paket,0,80).'...' : $paketLengkap[0]->keterangan_paket) ?></p>
                                    <p><b>RP. <?= number_format($paketLengkap[0]->harga_paket,0) ?></b></p>
                                    <a class="btn btn-success btn-block" href="<?= base_url() . 'paketlengkap'; ?>">Lihat Paket</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4 class="title"><?= $paketA[0]->nama_paket ?></h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <img src="<?php echo base_url(); ?>assets/images/oke2_1.jpg" width="60%" height="70%">
                                    <p><?= (strlen($paketA[0]->keterangan_paket) > 80 ? substr($paketA[0]->keterangan_paket,0,80).'...' : $paketA[0]->keterangan_paket) ?></p>
                                    <p><b>RP. <?= number_format($paketA[0]->harga_paket,0) ?></b></p>
                                    <a class="btn btn-success btn-block" href="<?= base_url() . 'paketa'; ?>">Lihat Paket</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4 class="title"><?= $paketFoto[0]->nama_paket ?></h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <img src="<?php echo base_url(); ?>assets/images/oke3-1.jpg" width="60%" height="70%">
                                    <p><?= (strlen($paketFoto[0]->keterangan_paket) > 80 ? substr($paketFoto[0]->keterangan_paket,0,80).'...' : $paketFoto[0]->keterangan_paket) ?></p>
                                    <p><b>RP. <?= number_format($paketFoto[0]->harga_paket,0) ?></b></p>
                                    <a class="btn btn-success btn-block" href="<?= base_url() . 'paketfoto'; ?>">Lihat Paket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4 class="panel-title"><i class="fa fa-list-alt"></i> DAFTAR PAKET</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-3 col-sm-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4 class="title"><?= $paketD[0]->nama_paket ?></h4>
                                    </div>
                                </div>
                                <div class="panel-body">                                    
                                    <img src="<?php echo base_url(); ?>assets/images/oke5_1.jpg" width="60%" height="90%">
                                    <p><?= (strlen($paketD[0]->keterangan_paket) > 40 ? substr($paketD[0]->keterangan_paket,0,40).'...' : $paketD[0]->keterangan_paket) ?></p>
                                    <p><b>RP. <?= number_format($paketD[0]->harga_paket,0) ?></b></p>
                                    <a class="btn btn-success btn-block" href="<?= base_url() . 'paketd'; ?>">Lihat Paket</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="panel-title">                                        
                                        <h4 class="title"><?= $paketC[0]->nama_paket ?></h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <img src="<?php echo base_url(); ?>assets/images/oke4-1.jpg" width="60%" height="90%">
                                    <p><?= (strlen($paketC[0]->keterangan_paket) > 40 ? substr($paketC[0]->keterangan_paket,0,40).'...' : $paketC[0]->keterangan_paket) ?></p>
                                    <p><b>RP. <?= number_format($paketC[0]->harga_paket,0) ?></b></p>
                                    <a class="btn btn-success btn-block" href="<?= base_url() . 'paketc'; ?>">Lihat Paket</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4 class="title"><?= $paketB[0]->nama_paket ?></h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <img src="<?php echo base_url(); ?>assets/images/oke1_1.jpg" width="60%" height="90%">
                                    <p><?= (strlen($paketB[0]->keterangan_paket) > 40 ? substr($paketB[0]->keterangan_paket,0,40).'...' : $paketB[0]->keterangan_paket) ?></p>
                                    <p><b>RP. <?= number_format($paketB[0]->harga_paket,0) ?></b></p>
                                    <a class="btn btn-success btn-block" href="<?= base_url() . 'paketb'; ?>">Lihat Paket</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="panel-tut">
                                        <h4 class="title"><?= $paketKipas[0]->nama_paket ?></h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <img src="<?php echo base_url(); ?>assets/images/oke6_1.jpg" width="60%" height="90%">
                                    <p><?= (strlen($paketKipas[0]->keterangan_paket) > 40 ? substr($paketKipas[0]->keterangan_paket,0,40).'...' : $paketKipas[0]->keterangan_paket) ?></p>
                                    <p><b>RP. <?= number_format($paketKipas[0]->harga_paket,0) ?></b></p>
                                    <a class="btn btn-success btn-block" href="<?= base_url() . 'paketkipas'; ?>">Lihat Paket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Rias Section -->
    <section id="rias">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">MAKE UP</h2>
                    <h3 class="section-subheading text-muted">Menjadi cantik dihari pernikahan sesuai dengan idaman anda!!!</h3>
                </div>
            </div>
            <div class="row">
                <?php
                    foreach ($dataRias as $rias) {
                        echo '<div class="box">';
                        echo '<div class="col-md-3">';
                        echo '<div class="card-deck">';
                        echo '<div class="card">';
                        echo '<img class="card-img-top" src="';
                        echo base_url().'/uploads'.'/'.$rias->gambar.'" border="5">';
                        echo '<div class="card-body">';
                        echo '</div></div></div></div></div>';
                    }
                ?>
            </div>
    </section>
    <!-- Dekorasi Section -->
    <section id="dekorasi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Dekorasi</h2>
                    <h3 class="section-subheading text-muted">Dekorasi yang sesuai dengan impian dan keinginan Anda!!!</h3>
                </div>
            </div>
            <div class="row text-center">
                <?php
                    foreach ($dataDekorasi as $dekorasi) {
                        echo '<div class="col-md-2">';
                        echo '<div class="card" style="width: 18rem;">';
                        echo '<img class="card-img-top" src="';
                        echo base_url().'/uploads'.'/'.$dekorasi->foto.'">';
                        echo '<div class="card-body">';
                        echo '</div></div></div>';
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="daftar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Formulir Pendaftaran</h2>
                    <h3 class="section-subheading text-muted">Daftarkan diri dan jadwal acara Anda untuk pemesanan.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo base_url() . 'daftar'; ?>" method="post">
                        <div class="row">
							<div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Anda *" value="<?php echo set_value('nama',isset($pelanggan->nama) ? $pelanggan->nama : ''); ?>" required>
                                    <p class="help-block text-danger"><?php echo $this->session->flashdata('nama'); ?></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_telp" class="form-control" placeholder="Nomor Ponsel *" value="<?php echo set_value('nama',isset($pelanggan->nama) ? $pelanggan->nama : ''); ?>">
                                    <p class="help-block text-danger"><?php echo $this->session->flashdata('no_telp'); ?></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email *" id="email" value="<?php echo set_value('nama',isset($pelanggan->nama) ? $pelanggan->nama : ''); ?>" required>
                                    <p class="help-block text-danger"><?php echo $this->session->flashdata('email'); ?></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat *" value="<?php echo set_value('nama',isset($pelanggan->nama) ? $pelanggan->nama : ''); ?>" required>
                                    <p class="help-block text-danger"><?php echo $this->session->flashdata('alamat'); ?></p>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password *" value="" required>
                                    <p class="help-block text-danger"><?php echo $this->session->flashdata('password'); ?></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Daftar <i class="fa fa-send"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class=col-md-4>
                    <h4>Wedding Organizer</h4>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://gmail.com/"><i class="fa fa-envelope"></i></a>
                        </li>
                        <li><a href="https://id-id.facebook.com/login/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/bundafitripali_makeup/"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>INFORMASI PERUSAHAAN</h4>
                        <p align="left"><i class="fa fa-envelope"> Email   : </i> bundafitrypali@gmail.com </p>
                        <p align="left"><i class="fa fa-phone"> Telp   : </i> (+6281367967760) </p>
                        <p align="left"><i class="fa fa-map-marker"> Alamat : </i> Jl.Taman Siswa Kel. Talang Ubi selatan, Kec. Talang Ubi Pendopo, Kabupaten Penukal Abab Lematang Ilir </p>
                </div>
                <div class="col-md-4">
                    <h4>METODE PEMBAYARAN</h4>
                    <img src="<?php echo base_url(); ?>assets/images/bank.jpeg" width="60%" height="60%">
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $(function() {
            $(document).scroll(function() {
                var nav = $(".navbar-fixed-top");
                console.log(nav);
                nav.toggleClass('scrolled', $(this).scrollTop() > nav.height());
            });
        });
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <!-- Theme JavaScript -->
    <script src="assets/js/agency.min.js"></script>
</body>
</html>
