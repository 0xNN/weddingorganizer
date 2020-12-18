<?php
    $uri = $this->uri->segment(2);
?>
<!--Sidemenu-->
<div class="col-sm-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-hdd-o"></i> Data Master</h3>
        </div>
        <div class="list-group">
            <a href="<?= base_url() . 'admin/'; ?>" class="list-group-item <?= ($uri == '') ? 'active' : ''; ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
           <!--  <a href="<?= base_url() . 'admin/gedung'; ?>" class="list-group-item <?= ($uri == 'gedung') ? 'active' : ''; ?>"><i class="fa fa-building-o fa-fw"></i> Data Gedung</a> -->
            <a href="<?= base_url() . 'admin/katering'; ?>" class="list-group-item <?= ($uri == 'katering') ? 'active' : ''; ?>"><i class="fa fa-heart fa-fw"></i> Data Paket</a>
           <a href="<?= base_url() . 'admin/dekorasi'; ?>" class="list-group-item <?= ($uri == 'dekorasi') ? 'active' : ''; ?>"><i class="fa fa-diamond fa-fw"></i> Data Dekorasi</a>
          <!--   <a href="<?= base_url() . 'admin/dokumentasi'; ?>" class="list-group-item <?= ($uri == 'dokumentasi') ? 'active' : ''; ?>"><i class="fa fa-camera-retro fa-fw"></i> Data Dokumentasi</a> -->
            <a href="<?= base_url() . 'admin/rias'; ?>" class="list-group-item <?= ($uri == 'rias') ? 'active' : ''; ?>"><i class="fa fa-female fa-fw"></i> Data Rias</a> 
            <a href="<?= base_url() . 'admin/user'; ?>" class="list-group-item <?= ($uri == 'user') ? 'active' : ''; ?>"><i class="fa fa-user fa-fw"></i> Data User</a>
            <a href="<?= base_url() . 'admin/profil'; ?>" class="list-group-item <?= ($uri == 'profil') ? 'active' : ''; ?>"><i class="fa fa-book fa-fw"></i> Data Profil</a>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-hdd-o"></i> Data Transaksi</h3>
        </div>
        <div class="list-group">
            <a href="<?php echo base_url() . 'admin/pelanggan'; ?>" class="list-group-item <?= ($uri == 'pelanggan') ? 'active' : ''; ?>"><i class="fa fa-male fa-fw"></i> Data Pelanggan</a>
            <a href="<?php echo base_url() . 'admin/pemesanan'; ?>" class="list-group-item <?= ($uri == 'pemesanan') ? 'active' : ''; ?>"><i class="fa fa-envelope-o fa-fw"></i> Data Pemesanan</a>
            <a href="<?php echo base_url() . 'admin/pembayaran'; ?>" class="list-group-item <?= ($uri == 'pembayaran') ? 'active' : ''; ?>"><i class="fa fa-file-o fa-fw"></i> Data Bukti Pembayaran</a>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-hdd-o"></i> Laporan</h3>
        </div>
        <div class="list-group">
            <a href="<?php echo base_url() . 'admin/laporanpel'; ?>" class="list-group-item <?= ($uri == 'pelanggan') ? 'active' : ''; ?>"><i class="fa fa-book fa-fw"></i> Laporan Pelanggan</a>
            <a href="<?php echo base_url() . 'admin/laporanpesan'; ?>" class="list-group-item <?= ($uri == 'pemesanan') ? 'active' : ''; ?>"><i class="fa fa-book fa-fw"></i> Laporan Pemesanan</a>
          <!--   <a href="<?php echo base_url() . 'admin/laporan'; ?>" class="list-group-item <?= ($uri == 'pegawai') ? 'active' : ''; ?>"><i class="fa fa-book fa-fw"></i> Laporan Pegawai</a> -->
        </div>
    </div>
</div>