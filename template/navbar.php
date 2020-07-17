      <nav class="main-header navbar navbar-expand navbar-dark" style="background-color: deepskyblue;">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li> -->
        </ul>

        <!-- SEARCH FORM -->
        <!-- <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Cari" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form> -->

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

          <?php
          if ($_SESSION['role'] == "Admin") {
            $n_sktu_baru = $koneksi->query("SELECT * FROM sktu_baru WHERE status != 'Selesai'");

            $n_sktu_ppj  = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE status != 'Selesai'");

            $n_iumk  = $koneksi->query("SELECT * FROM iumk WHERE status != 'Selesai'");

            $url_link = base_url('admin/notifikasi');
          } else

          if ($_SESSION['role'] == "Kasi") {
            $n_sktu_baru = $koneksi->query("SELECT * FROM sktu_baru WHERE id_posisi = 1 AND status = 'Belum Diproses' AND ISNULL(kelengkapan) OR kelengkapan = ''");

            $n_sktu_ppj = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE id_posisi = 1 AND status = 'Belum Diproses' AND ISNULL(kelengkapan) OR kelengkapan = ''");

            $n_iumk = $koneksi->query("SELECT * FROM iumk WHERE id_posisi = 1 AND status = 'Belum Diproses' AND ISNULL(kelengkapan) OR kelengkapan = ''");
            $url_link = base_url('kasi/notifikasi');
          } else
          
          if ($_SESSION['role'] == "Sekcam") {
            $n_sktu_baru    = $koneksi->query("SELECT * FROM sktu_baru WHERE status = 'Dalam Proses' AND id_posisi = 2");

            $n_sktu_ppj     = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE status = 'Dalam Proses' AND id_posisi = 2");

            $n_iumk = $koneksi->query("SELECT * FROM iumk WHERE status = 'Dalam Proses' AND id_posisi = 2");
            $url_link = base_url('sekcam/notifikasi');
          } else
          
          if ($_SESSION['role'] == "Camat") {
            $n_sktu_baru = $koneksi->query("SELECT * FROM sktu_baru WHERE status = 'Dalam Proses' AND id_posisi = 3");

            $n_sktu_ppj = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE status = 'Dalam Proses' AND id_posisi = 3");

            $n_iumk = $koneksi->query("SELECT * FROM iumk WHERE status = 'Dalam Proses' AND id_posisi = 3");
            $url_link = base_url('camat/notifikasi');
          } else
          
          if ($_SESSION['role'] == "Staf") {
            $n_sktu_baru = $koneksi->query("SELECT * FROM sktu_baru WHERE id_posisi = 4 AND status = 'Dalam Proses'");

            $n_sktu_ppj = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE id_posisi = 4 AND status = 'Dalam Proses'");

            $n_iumk = $koneksi->query("SELECT * FROM iumk WHERE id_posisi = 4 AND status = 'Dalam Proses'");
            $url_link = base_url('staf/notifikasi');
          }

          $count_sktubaru = mysqli_num_rows($n_sktu_baru);
          $count_sktuppj  = mysqli_num_rows($n_sktu_ppj);
          $count_iumk     = mysqli_num_rows($n_iumk);

          $count_total = $count_sktubaru + $count_sktuppj + $count_iumk;

          ?>


          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell" style="font-size: 17px;"></i>
              <?php if ($count_total) { ?>
                <span class="badge badge-danger navbar-badge">
                  <?= $count_total; ?>
                </span>
              <?php } ?>
            </a>

            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
              <span class="dropdown-item dropdown-header">Notifikasi Permohonan</span>
              <div class="dropdown-divider"></div>

              <!-- SKTU BARU -->
              <a href="<?= $url_link; ?>" class="dropdown-item" title="Lihat Semua Notifikasi">
                <i class="fas fa-file mr-2"></i> SKTU BARU
                <?php if ($count_sktubaru) { ?>
                  <span class="float-right text-danger">
                    <?= $count_sktubaru; ?>
                  </span>
                <?php } ?>
              </a>
              <div class="dropdown-divider"></div>

              <!-- SKTU PERPANJANGAN -->
              <a href="<?= $url_link; ?>" class="dropdown-item" title="Lihat Semua Notifikasi">
                <i class="fas fa-file mr-2"></i> SKTU PERPANJANGAN
                <?php if ($count_sktuppj) { ?>
                  <span class="float-right text-danger">
                    <?= $count_sktuppj; ?>
                  </span>
                <?php } ?>
              </a>
              <div class="dropdown-divider"></div>


              <!-- IUMK -->
              <a href="<?= $url_link; ?>" class="dropdown-item" title="Lihat Semua Notifikasi">
                <i class="fas fa-file mr-2"></i> IUMK
                <?php if ($count_iumk) { ?>
                  <span class="float-right text-danger">
                    <?= $count_iumk; ?>
                  </span>
                <?php } ?>
              </a>



              <!-- <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">Lihat Semua Notifikasi</a> -->
            </div>
          </li>




          <!-- Notifications SKTU BARU -->

          <!-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell" style="font-size: 17px;"></i>
              <?php
              if ($_SESSION['role'] == "Sekcam") {
                $n_sktu = $koneksi->query("SELECT * FROM sktu_baru WHERE status = 'Dalam Proses' AND id_posisi = 2");
              } elseif ($_SESSION['role'] == "Staf") {
                $n_sktu = $koneksi->query("SELECT * FROM sktu_baru WHERE id_posisi = 3");
              } else {
                $n_sktu = $koneksi->query("SELECT * FROM sktu_baru WHERE status = 'Belum Diproses' AND ISNULL(kelengkapan)");
              }
              if (mysqli_num_rows($n_sktu)) { ?>
                <span class="badge badge-danger navbar-badge">
                  <?= mysqli_num_rows($n_sktu); ?>
                </span>
              <?php } ?>
            </a>

            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
              <span class="dropdown-item dropdown-header">Permohonan SKTU Baru</span>

              <?php
              foreach ($n_sktu as $r_sktu) :
                $tgl_sekarang = new DateTime();
                $tgl_upload   = new DateTime($r_sktu['tgl']);
                $notif        = $tgl_sekarang->diff($tgl_upload);

                if ($notif->y != 0) {
                  $dt = $notif->y . " Tahun yang lalu";
                } else
                if ($notif->m != 0) {
                  $dt = $notif->m . " Bulan yang lalu";
                } else
                if ($notif->d != 0) {
                  $dt = $notif->d . " Hari yang lalu";
                } else
                if ($notif->h != 0) {
                  $dt = $notif->h . " Jam yang lalu";
                } else
                if ($notif->i != 0) {
                  $dt = $notif->i . " Menit yang lalu";
                } else
                if ($notif->s != 0) {
                  $dt = $notif->s . " Detik yang lalu";
                }


                // url notif
                if ($_SESSION['role'] == "Admin") {
                  $url_link_notif = base_url('admin/pelayanan/sktu/baru/detail?id= ' . encryptor('encrypt', $r_sktu['id_sktu']));
                } else
                if ($_SESSION['role'] == "Kasi") {
                  $url_link_notif = base_url('kasi/sktu/baru/detail?id= ' . encryptor('encrypt', $r_sktu['id_sktu']));
                } else
                if ($_SESSION['role'] == "Sekcam") {
                  $url_link_notif = base_url('sekcam/sktu/baru/detail?id= ' . encryptor('encrypt', $r_sktu['id_sktu']));
                } else
                if ($_SESSION['role'] == "Staf") {
                  $url_link_notif = base_url('staf/sktu/baru/detail?id= ' . encryptor('encrypt', $r_sktu['id_sktu']));
                }

              ?>

                <div class="dropdown-divider"></div>
                <a href="<?= $url_link_notif; ?>" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> <?= $r_sktu['nama_pemohon']; ?>
                  <span class="float-right text-muted text-sm">
                    <?= $dt; ?>
                  </span>
                </a>

              <?php endforeach ?>

            </div>
          </li> -->


          <!-- Notifications SKTU PERPANJANGAN -->
          <!-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell" style="font-size: 17px;"></i>
              <?php
              if ($_SESSION['role'] == "Sekcam") {
                $n_sktu = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE status = 'Dalam Proses' AND id_posisi = 2");
              } elseif ($_SESSION['role'] == "Staf") {
                $n_sktu = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE id_posisi = 3");
              } else {
                $n_sktu = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE status = 'Belum Diproses' AND ISNULL(kelengkapan)");
              }
              if (mysqli_num_rows($n_sktu)) { ?>
                <span class="badge badge-danger navbar-badge">
                  <?= mysqli_num_rows($n_sktu); ?>
                </span>
              <?php } ?>
            </a>

            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
              <span class="dropdown-item dropdown-header">Permohonan Perpanjangan SKTU</span>

              <?php
              foreach ($n_sktu as $r_sktu) :
                $tgl_sekarang = new DateTime();
                $tgl_upload   = new DateTime($r_sktu['tgl']);
                $notif        = $tgl_sekarang->diff($tgl_upload);

                if ($notif->y != 0) {
                  $dt = $notif->y . " Tahun yang lalu";
                } else
                if ($notif->m != 0) {
                  $dt = $notif->m . " Bulan yang lalu";
                } else
                if ($notif->d != 0) {
                  $dt = $notif->d . " Hari yang lalu";
                } else
                if ($notif->h != 0) {
                  $dt = $notif->h . " Jam yang lalu";
                } else
                if ($notif->i != 0) {
                  $dt = $notif->i . " Menit yang lalu";
                } else
                if ($notif->s != 0) {
                  $dt = $notif->s . " Detik yang lalu";
                }


                // url notif
                if ($_SESSION['role'] == "Admin") {
                  $url_link_notif = base_url('admin/pelayanan/sktu/perpanjangan/detail?id= ' . encryptor('encrypt', $r_sktu['id_sktu']));
                } else
                if ($_SESSION['role'] == "Kasi") {
                  $url_link_notif = base_url('kasi/sktu/perpanjangan/detail?id= ' . encryptor('encrypt', $r_sktu['id_sktu']));
                } else
                if ($_SESSION['role'] == "Sekcam") {
                  $url_link_notif = base_url('sekcam/sktu/perpanjangan/detail?id= ' . encryptor('encrypt', $r_sktu['id_sktu']));
                } else
                if ($_SESSION['role'] == "Staf") {
                  $url_link_notif = base_url('staf/sktu/perpanjangan/detail?id= ' . encryptor('encrypt', $r_sktu['id_sktu']));
                }

              ?>

                <div class="dropdown-divider"></div>
                <a href="<?= $url_link_notif; ?>" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> <?= $r_sktu['nama_pemohon']; ?>
                  <span class="float-right text-muted text-sm">
                    <?= $dt; ?>
                  </span>
                </a>

              <?php endforeach ?>

            </div>
          </li> -->


          <!-- Notifications IUMK -->
          <!-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell" style="font-size: 17px;"></i>
              <?php
              if ($_SESSION['role'] == "Sekcam") {
                $n_iumk = $koneksi->query("SELECT * FROM iumk WHERE status = 'Dalam Proses' AND id_posisi = 2");
              } elseif ($_SESSION['role'] == "Camat") {
                $n_iumk = $koneksi->query("SELECT * FROM iumk WHERE id_posisi = 3");
              } elseif ($_SESSION['role'] == "Staf") {
                $n_iumk = $koneksi->query("SELECT * FROM iumk WHERE id_posisi = 4 AND status = 'Dalam Proses'");
              } else {
                $n_iumk = $koneksi->query("SELECT * FROM iumk WHERE status = 'Belum Diproses' AND ISNULL(kelengkapan)");
              }
              if (mysqli_num_rows($n_iumk)) { ?>
                <span class="badge badge-danger navbar-badge">
                  <?= mysqli_num_rows($n_iumk); ?>
                </span>
              <?php } ?>
            </a>

            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
              <span class="dropdown-item dropdown-header">Permohonan IUMK</span>

              <?php
              foreach ($n_iumk as $r_iumk) :
                $tgl_sekarang = new DateTime();
                $tgl_upload   = new DateTime($r_iumk['tanggal']);
                $notif        = $tgl_sekarang->diff($tgl_upload);

                if ($notif->y != 0) {
                  $dt = $notif->y . " Tahun yang lalu";
                } else
                if ($notif->m != 0) {
                  $dt = $notif->m . " Bulan yang lalu";
                } else
                if ($notif->d != 0) {
                  $dt = $notif->d . " Hari yang lalu";
                } else
                if ($notif->h != 0) {
                  $dt = $notif->h . " Jam yang lalu";
                } else
                if ($notif->i != 0) {
                  $dt = $notif->i . " Menit yang lalu";
                } else
                if ($notif->s != 0) {
                  $dt = $notif->s . " Detik yang lalu";
                }


                // url notif
                if ($_SESSION['role'] == "Admin") {
                  $url_link_notif = base_url('admin/pelayanan/iumk/detail?id= ' . encryptor('encrypt', $r_iumk['id_iumk']));
                } else
                if ($_SESSION['role'] == "Kasi") {
                  $url_link_notif = base_url('kasi/iumk/detail?id= ' . encryptor('encrypt', $r_iumk['id_iumk']));
                } else
                if ($_SESSION['role'] == "Sekcam") {
                  $url_link_notif = base_url('sekcam/iumk/detail?id= ' . encryptor('encrypt', $r_iumk['id_iumk']));
                } else
                if ($_SESSION['role'] == "Camat") {
                  $url_link_notif = base_url('camat/iumk/detail?id= ' . encryptor('encrypt', $r_iumk['id_iumk']));
                } else
                if ($_SESSION['role'] == "Staf") {
                  $url_link_notif = base_url('staf/iumk/detail?id= ' . encryptor('encrypt', $r_iumk['id_iumk']));
                }

              ?>

                <div class="dropdown-divider"></div>
                <a href="<?= $url_link_notif; ?>" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> <?= $r_iumk['nama_pemohon']; ?>
                  <span class="float-right text-muted text-sm">
                    <?= $dt; ?>
                  </span>
                </a>

              <?php endforeach ?>

            </div>
          </li> -->


          <li class="nav-item">
            <a class="nav-link btn bg-gradient-warning btn-sm alert-logout" href="<?= base_url('log-out-admin'); ?>" title="Logout">
              <i class="fas fa-sign-out-alt" style="color: black;"> Logout</i>
            </a>
          </li>


        </ul>
      </nav>