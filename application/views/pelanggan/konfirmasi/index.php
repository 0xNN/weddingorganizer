<div class="col-sm-9">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-window-maximize"></i> ID Pemesanan</h4>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered">
          <thead>
            <th>Kode Transaksi</th>
            <th>Jenis Paket</th>
            <th>Status</th>
            <th>#</th>
          </thead>
          <tbody>
            <?php foreach($combo->result() as $transaction): ?>
            <td>#<?= $transaction->id_pemesanan ?></td>
            <td><?= $transaction->nama_paket ?></td>
            <td><?= $transaction->status ?></td>
            <td>
              <a href="<?php echo base_url().'pelanggan/konfirmasi/pemesanan/'.$transaction->id_pemesanan ?>" class="btn btn-success btn-sm">Konfirmasi</a>
            </td>
            <?php endforeach; ?>
          </tbody>
        </table>
    </div>
  </div>  
</div>
