<div class="form-group">
    <label for="nama_paket" class="control-label col-sm-3"> Nama Paket </label>
    <div class="col-sm-6">
        <input type="text" name="nama_paket" value="<?php echo set_value('nama_paket',isset($paket->nama_paket) ? $paket->nama_paket : ''); ?>" class="form-control">
        <?php echo form_error('nama_paket'); ?>
    </div>
</div>
<div class="form-group">
    <label for="harga_paket" class="control-label col-sm-3"> Harga </label>
    <div class="col-sm-4">
        <input type="number" name="harga_paket" value="<?php echo set_value('harga_paket',isset($paket->harga_paket) ? $paket->harga_paket : ''); ?>" class="form-control">
        <?php echo form_error('harga_paket'); ?>
    </div>
</div>
<div class="form-group">
    <label for="keterangan_paket" class="control-label col-sm-3"> Keterangan </label>
    <div class="col-sm-6">
        <textarea name="keterangan_paket" class="form-control"><?php echo set_value('deskripsi',isset($paket->keterangan_paket) ? $paket->keterangan_paket : ''); ?></textarea>
        <?php echo form_error('keterangan_paket'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Simpan</button>
    <a href="<?php echo base_url() . 'admin/paket'; ?>" class="btn btn-default">Batal</a>
</div>
