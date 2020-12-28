<div class="col-sm-9">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-list-alt"></i> Pesanan Pelanggan :</h4>
    </div>
    <div class="panel-body">
      <center>
        <h3 class="page-header">Detail Pesanan Sewa <br> <small>No Transaksi #<?= $detail->id_pemesanan ?></small></h3>
      </center>
      <div class="col-sm-6">
        <dl class="dl-horizontal">
          <dt>Nama</dt>
          <dd><?= $detail->nama; ?></dd>
          <dt>No. Hp</dt>
          <dd><?= $detail->no_telp; ?></dd>
          <dt>Alamat</dt>
          <dd><?= $detail->alamat; ?></dd>
          <dt>Tanggal Acara</dt>
          <dd><?= nice_date($detail->tgl_acara,'d-m-Y'); ?></dd>
          <dt>Status</dt>
          <dd><label class="label <?= ($detail->status == "pending") ? 'label-default' : 'label-success' ?>"><?= $detail->status ?></label></dd>
        </dl>
      </div>
      <div class="col-sm-12">
        <table class="table table-bordered table-condensed table-responsive">
          <thead>
           <tr>
              <th>No</th>
              <th>Jenis</th>
              <th>List</th>
              <th>Harga</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><?= $detail->nama_paket ?></td>
              <td><?= $detail->keterangan_paket ?></td>
              <td>Rp <?= number_format($detail->harga_paket,0,',','.') ?></td>
            </tr>
            <tr>
              <th colspan="3">Total</th>
              <?php
                $total = $detail->harga_paket;
              ?>
              <td>Rp <?= number_format($total,0,',','.') ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="panel-footer">
      <?php if ($detail->status == 'pending'): ?>
        <form class="" action="<?= base_url() . 'admin/pemesanan/update/'. $detail->id_pemesanan ?>" method="post">
          <button type="submit" class="btn btn-success">Set Active</button>
        </form>
      <?php endif; ?>
      <br>
        <form class="" action="<?= base_url() . 'admin/pemesanan/delete/'. $detail->id_pemesanan ?>" method="post">
          <button type="submit" class="btn btn-info">Delete</button>
        </form>
    </div>
  </div>
</div>
