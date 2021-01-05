<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest | Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/admin-theme.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/jquery-ui.min.css'; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style media="screen">
        .text-white {
          color: #fff !important;
        }
    </style>
</head>
<body>
  <nav style="background-color: #222222;" id="mainNav" class="navbar navbar-info navbar-custom navbar-fixed-top">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand text-white" href="<?= base_url() . 'home'; ?>">Home</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a class="text-white" href="<?= base_url(). 'home'; ?>">Daftar</a>
                  </li>
                  <li>
                      <a class="text-white" href="<?= base_url() . 'login'; ?>">Login</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>

    <!--cover-->
    <section id="cover">
        <div class="container-fluid">
            <div class="row">
                <div class="jumbotron">
                    <h3 style="color:#fff">Bunda Fitry Wedding Organizer <br><small style="color:#fff;">Melayani Anda dengan kemampuan terbaik!</small></h3>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
