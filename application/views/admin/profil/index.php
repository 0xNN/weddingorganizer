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
           <!--  <div class="tool-box">
                <a href="<?php echo base_url() . 'admin/profil/create'; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Profil</a>
            </div> -->
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Pemilik</th>
                        <th>Telp</th>
                        <th>Email</th>
                        <th>Alamat</th>
                       <!--  <th>Sejarah</th>
                        <th>Visi</th>
                        <th>Misi</th> -->
                        <th>Struktur Organisasi</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($profil->result() as $profil): ?>
                        <tr>
                            <td><?= $profil->nama_perusahaan ?></td>
                            <td><?= $profil->pemilik ?></td>
                            <td><?= $profil->no_tlp ?></td>
                            <td><?= $profil->email ?></td>
                            <td><?= $profil->alamat ?></td>
                            <!-- <td><?= $profil->sejarah ?></td>
                            <td><?= $profil->visi ?></td>
                            <td><?= $profil->misi ?></td> -->
                            <td><img src="<?= base_url() . 'uploads/' . $profil->struktur_organisasi ?>" alt="" class="image-display"> <?= $profil->struktur_organisasi ?></td>
                            <td width="10%">
                                <a href="<?php echo base_url() . 'admin/profil/edit/'.$profil->profil_id; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fa fa-pencil fa-fw"></i></a>
                                <a href="<?php echo base_url() . 'admin/profil/delete/'.$profil->profil_id; ?>" class="btn btn-xs btn-danger" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash fa-fw"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
