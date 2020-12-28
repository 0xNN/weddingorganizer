<div class="">
    <div class="card">
      <div class="card-header font-weight-bold">
        <?= $paketc[0]->nama_paket ?>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-6">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php for($i=0; $i<count($paketc); $i++): ?>
                  <li data-target="#carouselExampleCaptions" data-slide-to="<?= $i ?>" <?= (($i==0) ? 'class="active"': '') ?>></li>
                <?php endfor; ?>
              </ol>
              <div class="carousel-inner">
                <?php $i=0; ?>
                <?php foreach($paketc as $a): ?>
                <div class="carousel-item <?= (($i == 0) ? 'active': '') ?>">
                  <img class="w-100" src="<?php echo base_url(); ?>assets/images/<?= $a->foto ?>" style="width:70%">
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?= $a->nama_list ?></h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <?php $i++; endforeach; ?>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-sm-6">
            <p class="text-uppercase text-lg-left font-weight-bold">
              Deskripsi
            </p>
            <p>
              <?= $paketc[0]->keterangan_paket ?>
            </p>
            <p class="text-uppercase text-lg-left font-weight-bold">
              LIST PAKET
              <ul class="text-info font-weight-bold">
                <?php foreach($paketc as $a): ?>
                <li><?= $a->nama_list ?></li>
                <?php endforeach; ?>
              </ul>
            </p>
            <p class="text-uppercase text-lg-left font-weight-bold">
              HARGA PAKET
            </p>
            <p class="text-success font-weight-bold">
              RP. <?= number_format($paketc[0]->harga_paket) ?>
            </p>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <a href="<?= base_url() . '#daftar'; ?>" class="btn btn-success btn-block">Pesan</a>
      </div>
    </div>
  </div>
