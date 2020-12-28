<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-heart"></i> Data Paket</h4>
        </div>
        <div class="panel-body">
            <div class="tool-box">
                <a href="<?php echo base_url() . 'admin/paket/create'; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Paket</a>
            </div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($paket->result() as $paket): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $paket->nama_paket ?></td>
                            <td width="110px">Rp <?= number_format($paket->harga_paket,0) ?></td>
                            <td><?= $paket->keterangan_paket ?></td>
                            <td width="10%">
                                <a href="<?php echo base_url() . 'admin/paket/edit/'.$paket->id_paket; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fa fa-pencil fa-fw"></i></a>
                                <a href="<?php echo base_url() . 'admin/paket/delete/'.$paket->id_paket; ?>" class="btn btn-xs btn-danger" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash fa-fw"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
