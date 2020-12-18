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
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        border-style: solid;
        }

        .title {
        color: grey;
        font-size: 18px;
        }

        button:hover, a:hover {
        opacity: 0.7;
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
                <a class="navbar-brand page-scroll" href="#page-top">Bunda Fitry Wedding Organizer</a>
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
                    <!-- <li>
                        <a class="page-scroll" href="#gedung">Gedung</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="#rias">Make Up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#dekorasi">Dekorasi</a>
                    </li>
                    <li>
                        <a href="<?= base_url() . 'gedung'; ?>">Tentang Kami</a>
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
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div></div>
                        <img src="<?php echo base_url(); ?>assets/images/oke7_1.jpg" width="60%" height="60%">
                        <p class="title">Wedding Paket Lengkap</p>
                        <p>Menyediakan paket pernikahan lengkap dari mulai make up, baju pengantin, dekorasi pelaminan, dekorasi kamar, kontak amplop, kipas angin sampai urusan prewedding, video dan foto  </br><b> Rp. 30.000.000.-</b></p>
                        <button class="btn btn-info btn-block btn-sm"><a href="<?= base_url() . 'paketlengkap'; ?>">Lihat Paket</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <img src="<?php echo base_url(); ?>assets/images/oke2_1.jpg" width="60%" height="70%"> 
                        <p class="title">Wedding Paket A</p>
                        <p>Menyediakan paket pernikahan dalam bentuk pelayanan Make Up, Baju pengantin (Ortu & Mertua), henna, dekorasi pelaminan, dekorasi kamar, kontak amplop, dan kipas angin </br><b> Rp. 15.000.000.-</b></p> 
                       <button class="btn btn-info btn-block btn-sm"><a href="<?= base_url() . 'paketa'; ?>">Lihat Paket</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <img src="<?php echo base_url(); ?>assets/images/oke3-1.jpg" width="60%" height="90%"> 
                        <p class="title">Paket Fotografi</p>
                        <p>Menyediakan paket pernikahan dalam bentuk pelayanan prewedding serta video shoot </br><b> Rp. 3.000.000.-</b></p>
                        <button class="btn btn-info btn-block btn-sm"><a href="<?= base_url() . 'paketfoto'; ?>">Lihat Paket</button></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="card">
                        <img src="<?php echo base_url(); ?>assets/images/oke5_1.jpg" width="60%" height="90%"> 
                        <p class="title">Wedding Paket D</p>
                        <p>Menyediakan paket pernikahan dalam bentuk pelayanan dekorasi pelaminan minimalis dan make up penggantin</br><b> Rp. 4.000.000.-</b></p>
                       <button class="btn btn-info btn-block btn-sm"><a href="<?= base_url() . 'paketd'; ?>">Lihat Paket</button></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="card">
                        <img src="<?php echo base_url(); ?>assets/images/oke4-1.jpg" width="60%" height="90%"> 
                        <p class="title">Wedding Paket C</p>
                        <p>Menyediakan paket pernikahan dalam bentuk pelayanan dekorasi pelaminan , kontak amplop dan kursi tamu </br><b> Rp. 6.000.000.-</b></p>
                       <button class="btn btn-info btn-block btn-sm"><a href="<?= base_url() . 'paketc'; ?>">Lihat Paket</button></a>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-12">
                    <div class="card">
                        <img src="<?php echo base_url(); ?>assets/images/oke1_1.jpg" width="60%" height="90%"> 
                        <p class="title">Wedding Paket B</p>
                        <p>Menyediakan paket pernikahan dalam bentuk tenda , kursi tamu dan kipas angin </br><b> Rp. 8.000.000.-</b></p>
                        <button class="btn btn-info btn-block btn-sm"><a href="<?= base_url() . 'paketb'; ?>">Lihat Paket</button></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="card">
                        <img src="<?php echo base_url(); ?>assets/images/oke6_1.jpg" width="60%" height="90%"> 
                        <p class="title">Paket Sewa Kipas Angin</p>
                        <p>Menyediakan paket pernikahan dalam bentuk pelayanan sewa kipas angin dan blower </br><b> Rp. .-</b></p>
                        <button class="btn btn-info btn-block btn-sm"><a href="<?= base_url() . 'paketkipas'; ?>">Lihat Paket</button></a>
                    </div>
                </div>
            </div>
    </section>

    <!-- Gedung Section -->
    <!-- <section id="gedung">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Gedung</h2>
                    <h3 class="section-subheading text-muted">Pilihan tempat menikah sesuai idaman Anda</h3>
                </div>
            </div>
            <div class="row text-center">
                <?php
                    foreach ($dataGedung as $gedung) {
                        echo '<div class="col-md-2">';
                        echo '<div class="card" style="width: 18rem;">';
                        echo '<img class="card-img-top" src="';
                        echo base_url().'/uploads'.'/'.$gedung->foto.'">';
                        echo '<div class="card-body">';
                        // echo '<h5 class="card-title bg-info">'.$gedung->nama_gedung.'</h5>';
                        // echo '<p class="card-text">'.$gedung->deskripsi.'</p>';
                        // echo '<span class="badge badge-primary">RP. '.number_format($gedung->harga_gedung, 2).'</span><br/></br>';
                        // echo '<a href="daftar" class="btn btn-primary">Pesan</a>';
                        echo '</div></div></div>';
                    }
                ?>
            </div>
        </div> 
    </section> -->
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
                        // echo '<h5 class="card-title bg-info">'.$rias->nama_rias.'</h5>';
                        // echo '<p class="card-text">'.$rias->deskripsi.'</p>';
                        // echo '<span class="badge badge-primary">RP. '.number_format($rias->harga_rias, 2).'</span><br/></br>';
                        // echo '<a href="daftar" class="btn btn-primary">Pesan</a>';
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
                        // echo '<h5 class="card-title bg-info">'.$dekorasi->nama_dekorasi.'</h5>';
                        // echo '<p class="card-text">'.$dekorasi->deskripsi.'</p>';
                        // echo '<span class="badge badge-primary">RP. '.number_format($dekorasi->harga_dekorasi, 2).'</span><br/></br>';
                        // echo '<a href="daftar" class="btn btn-primary">Pesan</a>';
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
               <!--   <div class="col-md-3">
                    <div class="row">
                    <h4>Menu Beranda</h4>
                    <ul class>
                    <li class="hidden">
                    <a href="#page-top"></a>
                    </li>
                        <li>
                        <a href="<?= base_url() . 'home'; ?>">Home</a>
                        </li>
                        <li>
                             <a class="page-scroll" href="#services">PELAYANAN</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#rias">MAKE UP</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#dekorasi">DEKORASI</a>
                        </li>
                         <li>
                        <a href="<?= base_url() . 'gedung'; ?>">Tentang Kami</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#daftar">Daftar</a>
                        </li>
                        <li>
                            <a href="<?= base_url() . 'login'; ?>">Login</a>
                        </li>
                    </ul>
                </div>
                </div> -->
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
