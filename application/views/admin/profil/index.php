<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-book"></i> Data Profil</h4>
        </div>
        <div class="panel-body">
            <div class="tool-box">
                <a href="<?php echo base_url() . 'admin/profil/create'; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Profil</a>
            </div>
            <table class="table table-responsive table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Pemilik</th>
                        <th>Telp</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Struktur</th>
                        <th>Pemilik</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($profil->result() as $profil): ?>
                        <tr>
                            <td><?= $profil->nama_perusahaan ?></td>
                            <td><?= $profil->pemilik ?></td>
                            <td><?= $profil->no_telp ?></td>
                            <td><?= $profil->email ?></td>
                            <td><?= $profil->alamat ?></td>
                            <td>
                                <img id="myImg" src="<?php echo base_url() . 'assets/images/'.$profil->struktur_organisasi ?>" alt="struktur organisasi" class="image-display">
                            </td>
                            <td>
                                <img id="myImg" src="<?php echo base_url() . 'assets/images/'.$profil->foto ?>" alt="pemilik" class="image-display">
                            </td>
                            <td width="10%">
                                <a href="<?php echo base_url() . 'admin/profil/edit/'.$profil->id; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fa fa-pencil fa-fw"></i></a>
                                <a href="<?php echo base_url() . 'admin/profil/delete/'.$profil->id; ?>" class="btn btn-xs btn-danger" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash fa-fw"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
        </div>
    </div>
</div>
