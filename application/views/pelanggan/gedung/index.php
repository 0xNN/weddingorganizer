 <div class="row text-center">
                <?php
                    foreach ($dataprofil as $profil) {
                        echo '<h3 align="left"><b> 1. Sejarah</b></h3>';
                        echo '<p align="justify">'.$profil->sejarah.'</p>';
                        echo '</br>';
                        echo '<h3 align="left"><b>2. Visi dan Misi </b></h3>';
                        echo '<p align="justify">Salon Bunda Fitry mempunyai visi dan misi dalam berbisnis ataupun mengembangkan bisnsinya, yaitu: </p>';
                        echo '<p align="justify"> a. '.$profil->visi.'</p>';
                        echo '<p align="justify"> b. '.$profil->misi.'</p>';
                        echo '</br>';
                        echo '<h3 align="left"><b>3. Struktur Organisasi </b></h3>';
                        echo '<img class="card-img-top" src="';
                        echo base_url().'/uploads'.'/'.$profil->struktur_organisasi.'">';
                        echo '</br>';
                        echo '</br>';
                        echo '<h3 align="left"><b>4. Informasi Umum </b></h3>';
                        echo '<p align="left">Pemilik Perusahaan : '.$profil->pemilik.'</p>';
                        echo '<p align="left">Nama Perusahaan : '.$profil->nama_perusahaan.'</p>';
                        echo '<p align="left">Nomor Hp Perusahaan : '.$profil->no_tlp.'</p>';
                        echo '<p align="left">Email Perusahaan : '.$profil->email.'</p>';
                        echo '<p align="left">Alamat Perusahaan : '.$profil->alamat.'</p>';
                        echo '</div></div></div>';
                    }
                ?>
 </div>