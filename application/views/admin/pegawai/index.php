<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-male"></i> Data Pegawai</h4>
        </div>
        <div class="panel-body">
            <div class="tool-box">
                <a href="<?php echo base_url() . 'admin/pegawai/create'; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Pegawai</a>
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
                        <th>Tools</th>
                    </tr>
                </thead>
                   <tbody>
                    <?php $no=1; ?>
                    <?php foreach($pegawaies->result() as $pegawai): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td width="200px"><?= $pegawai->nama_pegawai?></td>
                            <td><?= $pegawai->no_telp ?></td>
                            <td><?= $pegawai->email_pegawai ?></td>
                            <td><?= $pegawai->alamat_pegawai ?></td>
                            <td><?= $pegawai->tugas_pegawai ?></td>
                            <td width="10%">
                                <a href="<?php echo base_url() . 'admin/pegawai/edit/'.$pegawai->pegawai_id; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fa fa-pencil fa-fw"></i></a>
                                <a href="<?php echo base_url() . 'admin/pegawai/delete/'.$pegawai->pegawai_id; ?>" class="btn btn-xs btn-danger" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash fa-fw"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
