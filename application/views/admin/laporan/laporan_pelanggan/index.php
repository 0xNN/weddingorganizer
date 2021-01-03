<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-book"></i> Laporan Data Pelanggan</h4>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($pelanggans as $pelanggan): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $pelanggan->nama ?></td>
                            <td><?= $pelanggan->no_telp ?></td>
                            <td><?= $pelanggan->alamat ?></td>
                            <td><?= $pelanggan->email ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
            <a target="_blank" href="<?= base_url()."admin/laporanpel/print" ?>" class="btn btn-warning btn-sm text-right"><i class="fa fa-print"> Download PDF</i></a>
        </div>
    </div>