<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-book"></i> Laporan Pemesanan</h4>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Transaksi</th>
                        <th>Nama Pemesan</th>
                        <th>No Telp</th>
                        <th>Paket</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($pemesanans as $pemesanan): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>#<?= $pemesanan->id_pemesanan ?></td>
                            <td><?= $pemesanan->nama ?></td>
                            <td><?= $pemesanan->no_telp ?></td>
                            <td><?= $pemesanan->nama_paket ?></td>
                            <!--  <td width="10%">
                                <a href="<?php echo base_url() . 'admin/pemesanan/detail/'.$pemesanan->id_pemesanan; ?>" class="btn btn-xs btn-info" title="Lihat"><i class="fa fa-eye fa-fw"></i></a>
                            </td> -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
            <a target="_blank" href="<?= base_url()."admin/laporanpesan/print" ?>" class="btn btn-warning btn-sm text-right"><i class="fa fa-print"> Download PDF</i></a>
        </div>
    </div>
</div>
