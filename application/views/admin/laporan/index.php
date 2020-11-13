<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-book"></i>  Laporan Data Pegawai</h4>
        </div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Tugas</th>
                    </tr>
                </thead>
                   <tbody>
                    <?php $no=1; ?>
                    <?php foreach($pegawais as $pegawai): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td width="200px"><?= $pegawai->nama_pegawai?></td>
                            <td><?= $pegawai->no_telp ?></td>
                            <td><?= $pegawai->email_pegawai ?></td>
                            <td><?= $pegawai->alamat_pegawai ?></td>
                            <td><?= $pegawai->tugas_pegawai ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
