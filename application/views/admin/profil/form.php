<div class="form-group">
    <label for="nama_profil" class="control-label col-sm-3"> Nama Perusahaan </label>
    <div class="col-sm-6">
        <input type="text" name="nama_perusahaan" value="<?php echo set_value('nama_perusahaan',isset($profil->nama_perusahaan) ? $profil->nama_perusahaan : ''); ?>" class="form-control">
        <?php echo form_error('nama_perusahaan'); ?>
    </div>
</div>
<div class="form-group">
    <label for="pemilik" class="control-label col-sm-3"> Pemilik </label>
    <div class="col-sm-4">
        <input type="text" name="pemilik" value="<?php echo set_value('pemilik',isset($profil->pemilik) ? $profil->pemilik : ''); ?>" class="form-control">
        <?php echo form_error('pemilik'); ?>
    </div>
</div>
<div class="form-group">
    <label for="no_tlp" class="control-label col-sm-3"> No Telepon </label>
    <div class="col-sm-4">
        <textarea name="no_tlp" class="form-control"><?php echo set_value('no_telp',isset($profil->no_tlp) ? $profil->no_tlp : ''); ?></textarea>
        <?php echo form_error('no_tlp'); ?>
    </div>
</div>
<div class="form-group">
    <label for="email" class="control-label col-sm-3"> Email </label>
    <div class="col-sm-4">
        <textarea name="email" class="form-control"><?php echo set_value('email',isset($profil->email) ? $profil->email : ''); ?></textarea>
        <?php echo form_error('email'); ?>
    </div>
</div>
<div class="form-group">
    <label for="alamat" class="control-label col-sm-3"> Alamat </label>
    <div class="col-sm-4">
        <textarea name="alamat" class="form-control"><?php echo set_value('alamat',isset($profil->alamat) ? $profil->alamat : ''); ?></textarea>
        <?php echo form_error('alamat'); ?>
    </div>
</div>
<!-- <div class="form-group">
    <label for="sejarah" class="control-label col-sm-3"> Sejarah </label>
    <div class="col-sm-4">
        <textarea name="sejarah" class="form-control"><?php echo set_value('sejarah',isset($profil->sejarah) ? $profil->sejarah : ''); ?></textarea>
        <?php echo form_error('sejarah'); ?>
    </div>
</div>
<div class="form-group">
    <label for="visi" class="control-label col-sm-3"> Visi </label>
    <div class="col-sm-4">
        <textarea name="visi" class="form-control"><?php echo set_value('visi',isset($profil->visi) ? $profil->visi : ''); ?></textarea>
        <?php echo form_error('visi'); ?>
    </div>
</div>
<div class="form-group">
    <label for="misi" class="control-label col-sm-3"> Misi </label>
    <div class="col-sm-4">
        <textarea name="misi" class="form-control"><?php echo set_value('misi',isset($profil->misi) ? $profil->misi : ''); ?></textarea>
        <?php echo form_error('misi'); ?>
    </div>
</div> -->
<div class="form-group">
    <label for="struktur_organisasi" class="control-label col-sm-3">  </label>
    <div class="col-sm-4">
        <input type="file" name="struktur_organisasi" value="">
        <?php echo form_error('struktur_organisasi'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Simpan</button>
    <a href="<?php echo base_url() . 'admin/profil'; ?>" class="btn btn-default">Batal</a>
</div>
