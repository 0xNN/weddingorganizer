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
            <table id="pemesanan" class="table table-bordered table-striped" style="width:100%">
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
            <div class="row">
                <div class="col-sm-4">
                    <select class="form-control" name="year" id="year">
                        <option>--- PILIH TAHUN ---</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <select name="month" id="month" class="form-control">
                        <option>--- PILIH BULAN ---</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <a id="print" class="btn btn-warning btn-sm text-right"><i class="fa fa-print"></i> Download PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
