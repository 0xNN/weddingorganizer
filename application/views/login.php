<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bunda Fitry Wedding Organizer</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/admin-theme.css'; ?>">
    <style>
        body {background:#f9f9f9 url(<?php echo base_url() . "assets/images/bg-cover.jpg"; ?>);background-size:cover;padding-top:100px;min-height:100vh;}
        .box {background:rgba(255,255,255,0.5);padding:20px;box-shadow: 1px 1px 7px 0px #555;border-radius:2px;}
        .heading-title {margin-bottom:20px;}
        .tagline {color:#fed136;font-size:20px;font-family:"Kaushan Script";}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php if($this->session->has_userdata('errors')): ?>
                <div class="col-sm-offset-3 col-sm-6">
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('errors'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <form action="<?= base_url() . 'login'; ?>" class="form" method="post">
                <div class="col-sm-offset-4 col-sm-4">
                <div class="box">
                   <center>
                        <h3 class="heading-title">Pelanggan Login <br> <small class="tagline"><i>Bunda Fitry Wedding Organizer</i></small></h3>
                    </center>
                        <div class="panel-heading">
                            <h4 class="panel-title"><center>Silahkan Login</center></h4>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Login</button>
                            </div>
                        </div>
                    <a href="<?= base_url(); ?>"> Kembali ke Homepage </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>