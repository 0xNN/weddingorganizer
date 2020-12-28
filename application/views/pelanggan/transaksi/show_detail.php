<div class="col-sm-9">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-list-alt"></i> Pesanan Anda :</h4>
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
        <table class="table table-sm table-bordered table-responsive">
          <thead class="bg-success">
            <tr>
              <th>No</th>
              <th>Paket</th>
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
              <th colspan="3"><b>Total</b></th>
              <?php
                $total = $detail->harga_paket;
              ?>
              <td><b>Rp <?= number_format($total,0,',','.') ?></b></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="panel-footer">
      <?php if($detail->status == "pending"): ?>
      <form class="" action="<?= base_url() . 'pelanggan/transaksi/delete/'. $detail->id_pemesanan ?>" method="post">
        <button type="submit" onclick="return confirm('Anda yakin ingin membatalkan pesanan ini ?')" class="btn btn-info">Batalkan Pesanan</button>
      </form>
      <?php endif; ?>
    </div>

    </div>
  </div>
</div>
