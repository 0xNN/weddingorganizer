<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <h2>DAFTAR GEDUNG</h2>

        <?php
        foreach ($dataGedung as $gedung) {
            echo '<div class="col-md-4">';
            echo '<h2>Nama Gedung - <strong>'.$gedung->nama_gedung.'</strong></h2>';
            echo '<h2>Deskripsi</h2>';
            echo '<p>'.$gedung->deskripsi.'</p>';
            echo '<p>Harga Gedung - '.$gedung->harga_gedung.'</p>';
            echo '<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>';
            echo '</div>';
        }
        ?>
    </div>
</div>