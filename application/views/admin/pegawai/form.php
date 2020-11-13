<div class="form-group">
    <label for="nama_pegawai" class="control-label col-sm-3"> Nama Pegawai </label>
    <div class="col-sm-6">
        <input type="text" name="nama_pegawai" value="<?php echo set_value('nama_pegawai',isset($pegawai->nama_pegawai) ? $pegawai->nama_pegawai : ''); ?>" class="form-control">
        <?php echo form_error('nama_pegawai'); ?>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-3"> No Telp </label>
    <div class="col-sm-4">
        <input type="text" name="no_telp" value="<?php echo set_value('no_telp',isset($pegawai->no_telp) ? $pegawai->no_telp : ''); ?>" class="form-control">
        <?php echo form_error('no_telp'); ?>
    </div>
</div>
<div class="form-group">
    <label for="email_pegawai" class="control-label col-sm-3"> Email </label>
    <div class="col-sm-4">
        <input type="text" name="email_pegawai" value="<?php echo set_value('email_pegawai',isset($pegawai->email_pegawai) ? $pegawai->email_pegawai : ''); ?>" class="form-control">
        <?php echo form_error('email_pegawai'); ?>
    </div>
</div>
<div class="form-group">
    <label for="alamat_pegawai" class="control-label col-sm-3"> Alamat </label>
    <div class="col-sm-6">
        <textarea name="alamat_pegawai" class="form-control"><?php echo set_value('alamat_pegawai',isset($pegawai->alamat_pegawai) ? $pegawai->alamat_pegawai : ''); ?></textarea>
        <?php echo form_error('deskripsi'); ?>
    </div>
</div>
<div class="form-group">
    <label for="tugas_pegawai" class="control-label col-sm-3"> Tugas </label>
    <div class="col-sm-4">
        <input type="text" name="tugas_pegawai" value="<?php echo set_value('tugas_pegawai',isset($pegawai->tugas_pegawai) ? $pegawai->tugas_pegawai : ''); ?>" class="form-control">
        <?php echo form_error('tugas_pegawai'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Simpan</button>
    <a href="<?php echo base_url() . 'admin/pegawai'; ?>" class="btn btn-default">Batal</a>
</div>
