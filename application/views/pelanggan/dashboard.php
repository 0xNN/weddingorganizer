<?php $date = @$_REQUEST['date']; ?>
<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-dashboard"></i> Dashboard</h4>
        </div>
        <div class="panel-body">
            <center><h2>Selamat Datang, <?= $this->session->userdata('nama'); ?> !</h2></center>
            <div class="col-sm-12">
                <h4 class="page-header">Informasi Akun Anda</h4>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Username & Password Anda
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled">
                            <li><strong>Username</strong> : <?= $this->session->userdata('email') ?></li>
                            <li><strong>Password</strong> : <?= $this->session->userdata('password') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Paket yang Anda pilih
                    </div>
                    <div class="panel-body">
                        Anda memiliki <?= $total ?> pemesanan : <br>
                        <?php if (count( (array) $transaksi) != null): ?>
                          <ul class="list-unstyled">
                          <?php foreach($transaksi->result() as $transaksi): ?>
                              <li><a href="<?= base_url() . 'lihat/transaksi/' . $transaksi->id_pemesanan ?>" target="_blank" >Pada tanggal <?= nice_date($transaksi->tgl_acara,'d-m-Y') ?> <small><span class="glyphicon glyphicon-new-window"></span></small></a></li>
                          <?php endforeach; ?>
                          </ul>
                        <?php else: ?>
                                Anda belum memiliki transaksi
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
              <h4 class="page-header">Pilih Paket</h4>
              <div class="row">
                <div class="col-sm-12">
                  <div class="panel panel-info">
                      <div class="panel-heading"><i class="fa fa-calendar"></i> Jadwal Acara Anda</div>
                      <div class="panel-body">
                          <form class="" action="<?= base_url() . 'pelanggan?date=' . $date; ?>" method="get">
                            <div class="alert alert-warning">
                              <ul>
                                <li>Pilih jadwal acara Anda dan klik tombol lihat untuk melihat ketersediaan pelayanan kami pada tanggal tersebut</li>
                                <li>Pemesanan dapat dilakukan minimal 10 hari dari tanggal sekarang.</li>
                              </ul>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                  <input type="text" name="date" class="form-control" value="<?= isset($date) ? $date : '' ?>" placeholder="Tanggal acara Anda">
                                  <div class="input-group-btn">
                                    <button type="submit" class="btn btn-info"><i class="fa fa-eye"></i> Lihat</button>
                                  </div>
                                </div>
                            </div>
                          </form>

                          <?php if (isset($date) && $date != ''): ?>
                            <hr>
                            <!--Tab menu-->
                            <form action="<?= base_url() . 'pelanggan/transaksi' ?>" method="post">
                              <input type="hidden" name="tgl_acara" value="<?= $_REQUEST['date'] ?>">
                              <div id="tab">
                                  <!-- Nav tabs -->
                                  <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation"><a href="#paket" aria-controls="paket" role="tab" data-toggle="tab"><i class="fa fa-heart fa-fw"></i>  Pilih Paket</a></li>
                                  </ul>
                                  <!-- Tab panes -->
                                  <div class="tab-content">
                                    <!-- paket -->
                                    <div role="tabpanel" class="tab-pane" id="paket">
                                      <div class="row">
                                        <?php foreach ($this->db->get('paket')->result() as $paket): ?>
                                          <div class="col-sm-4">
                                              <label class="option">
                                                  <div class="thumbnail">
                                                      <input type="radio" name="paket" value="<?= $paket->id_paket ?>">
                                                      <div class="caption">
                                                          <h4><?= $paket->nama_paket; ?></h4>
                                                          <p class="price">Rp <?= number_format($paket->harga_paket,0,',','.'); ?></p>
                                                          <p class="alamat"><?= (strlen($paket->keterangan_paket) > 50 ? substr($paket->keterangan_paket,0,50).'...' : $paket->keterangan_paket) ?></p>
                                                      </div>
                                                  </div>
                                              </label>
                                          </div>
                                        <?php endforeach; ?>
                                      </div>
                                    </div>
                                    <!-- End of Paket -->
                                  </div>
                              </div>
                              <div class="alert alert-warning">
                                Periksa kembali pemesanan Anda sebelum melanjutkan, apabila telah sesuai klik tombol lanjutkan untuk menuju proses selanjutnya
                              </div>
                              <button type="submit" class="btn btn-info pull-right">Lanjutkan <i class="fa fa-chevron-right"></i></button>
                            </form>
                          <?php endif; ?>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
