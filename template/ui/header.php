<header id="header" class="fixed-top d-flex align-items-center">
    <!-- <div class="container d-flex align-items-center"> -->
    <div class="container-fluid d-flex align-items-center">

        <div class="logo mr-auto">
            <h1>
                <a href="<?= base_url(); ?>"> <img src="<?= base_url() ?>/assets/img/logo-bjm.png" style="width: 35px; height: 40px; margin-top: -6px;"> E-LOK</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="<?= base_url(); ?>">Home</a></li>
                <!-- <li class="drop-down"><a href="">About</a>
                        <ul>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#team">Team</a></li>
                            <li class="drop-down"><a href="#">Deep Drop Dow</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                <li><a href="#pelayanan">Pelayanan</a></li>
                <li><a href="#tentang">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>

                <?php if (!isset($_SESSION['id_masyarakat'])) { ?>
                    <li>
                        <a href="<?= base_url('login') ?>"><b>Login</b></a>
                    </li>
                <?php } else { ?>
                    <li class="drop-down"><a href="#"><b><?= $_SESSION['nama'] ?></b></a>
                        <ul>
                            <li><a href="<?= base_url('profil') ?>">Profil</a></li>
                            <li><a href="<?= base_url('logout') ?>" class="alert-logout">Logout</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <!-- HITUNG SEMUA JUMLAH NOTIF -->
                            <?php
                            $dataiumk = $koneksi->query("SELECT * FROM iumk WHERE id_masyarakat = '$_SESSION[id_masyarakat]' AND kelengkapan = 'Tidak Lengkap' ORDER BY id_iumk DESC");
                            $jmliumk = mysqli_num_rows($dataiumk);

                            $datasktubaru = $koneksi->query("SELECT * FROM sktu_baru WHERE id_masyarakat = '$_SESSION[id_masyarakat]' AND kelengkapan = 'Tidak Lengkap' ORDER BY id_sktu DESC");
                            $jmlsktubaru = mysqli_num_rows($datasktubaru);

                            $datasktuppj = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE id_masyarakat = '$_SESSION[id_masyarakat]' AND kelengkapan = 'Tidak Lengkap' ORDER BY id_sktu DESC");
                            $jmlsktuppj = mysqli_num_rows($datasktuppj);


                            $data1 = $koneksi->query("SELECT * FROM riwayat_tgl_sktu WHERE id_masyarakat = '$_SESSION[id_masyarakat]'");
                            foreach ($data1 as $r1) {
                                $ceknotif = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE nomor_sktu = '$r1[nomor_sktu]' AND id_masyarakat = '$r1[id_masyarakat]'");
                                if (mysqli_num_rows($ceknotif) === 0) {
                                    if (!empty($r1['terakhir_diperpanjang']) and $r1['terakhir_diperpanjang'] != '0000-00-00') {

                                        $datanotifsktuppj = $koneksi->query("SELECT ((terakhir_diperpanjang - CURRENT_DATE()) <= 30 AND (terakhir_diperpanjang - CURRENT_DATE()) > 0) OR ((CURRENT_DATE() >= terakhir_diperpanjang) AND (CURRENT_DATE() <= (SELECT terakhir_diperpanjang + INTERVAL 6 MONTH))) OR (CURRENT_DATE() >= (SELECT terakhir_diperpanjang + INTERVAL 6 MONTH)) AS hasil FROM riwayat_tgl_sktu WHERE nomor_sktu NOT IN (SELECT nomor_sktu FROM sktu_perpanjangan)")->fetch_array();
                                        // $datanotifsktuppj = $koneksi->query("SELECT * FROM riwayat_tgl_sktu WHERE nomor_sktu NOT IN (SELECT nomor_sktu FROM sktu_perpanjangan) AND ((terakhir_diperpanjang - CURRENT_DATE()) <= 30 AND (terakhir_diperpanjang - CURRENT_DATE()) > 0) OR ((CURRENT_DATE() >= terakhir_diperpanjang) AND (CURRENT_DATE() <= (SELECT terakhir_diperpanjang + INTERVAL 6 MONTH))) OR (CURRENT_DATE() >= (SELECT terakhir_diperpanjang + INTERVAL 6 MONTH))");
                                        $jmlnotifsktuppj = $datanotifsktuppj['hasil'];
                                    }
                                }
                            }
                            // echo "<pre>";
                            // var_dump($ceknotif);


                            $jmltotal = $jmliumk + $jmlsktubaru + $jmlsktuppj + $jmlnotifsktuppj;
                            ?>

                            <?php if ($jmltotal != 0) { ?>
                                <sup class="badge badge-danger" style="padding: 10%; height: auto; margin-left: -5px; padding-top: 3px; padding-bottom: 3px;">
                                    <?= $jmltotal; ?>
                                </sup>
                            <?php } ?>
                        </a>
                        <div class="dropdown-menu" style="width: 300px; background-color: aliceblue;" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-header text-center my-2">Notifikasi</div>

                            <!-- NOTIF IUMK -->
                            <?php if (mysqli_num_rows($dataiumk) === 1) { ?>
                                <div class="dropdown-divider"></div>
                                <a href="<?= base_url('page/iumk') ?>" class="dropdown-item" style="word-wrap: break-word; white-space: normal;">
                                    <?php $iumk = $dataiumk->fetch_array(); ?>
                                    IUMK "<u><?= $iumk['nama_perusahaan']; ?></u>" Tidak Disetujui. Lihat Detail...
                                    <span class="float-right text-sm" style="color: red;"><i class="fa fa-chevron-circle-right"></i></span>
                                </a>
                            <?php } ?>
                            <!-- // NOTIF IUMK -->

                            <!-- NOTIF SKTU BARU -->
                            <?php if (mysqli_num_rows($datasktubaru) === 1) { ?>
                                <div class="dropdown-divider"></div>
                                <a href="<?= base_url('page/sktu') ?>" class="dropdown-item" style="word-wrap: break-word; white-space: normal;">
                                    <?php $sktubaru = $datasktubaru->fetch_array(); ?>
                                    SKTU "<u><?= $sktubaru['nama_perusahaan']; ?></u>" Tidak Disetujui. Lihat Detail...
                                    <span class="float-right text-sm" style="color: red;"><i class="fa fa-chevron-circle-right"></i></span>
                                </a>
                            <?php } ?>
                            <!-- // NOTIF SKTU BARU -->

                            <!-- NOTIF SKTU PERPANJANGAN -->
                            <?php if (mysqli_num_rows($datasktuppj) === 1) { ?>
                                <div class="dropdown-divider"></div>
                                <a href="<?= base_url('page/sktu') ?>" class="dropdown-item" style="word-wrap: break-word; white-space: normal;">
                                    <?php $sktuppj = $datasktuppj->fetch_array(); ?>
                                    Perpanjangan SKTU "<u><?= $sktuppj['nama_perusahaan']; ?></u>" Tidak Disetujui. Lihat Detail...
                                    <span class="float-right text-sm" style="color: red;"><i class="fa fa-chevron-circle-right"></i></span>
                                </a>
                            <?php } ?>
                            <!-- // NOTIF SKTU PERPANJANGAN -->

                            <!-- NOTIF MASA PERPAJANGAN -->
                            <?php
                            $data1 = $koneksi->query("SELECT * FROM riwayat_tgl_sktu WHERE id_masyarakat = '$_SESSION[id_masyarakat]'");
                            foreach ($data1 as $r1) {
                                $ceknotif = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE nomor_sktu = '$r1[nomor_sktu]' AND id_masyarakat = '$r1[id_masyarakat]'");
                                if (mysqli_num_rows($ceknotif) === 0) {
                                    $rcek = $ceknotif->fetch_array();
                                    $ambilidsktu = $koneksi->query("SELECT * FROM sktu_baru WHERE nomor_sktu = '$r1[nomor_sktu]'")->fetch_array();

                                    if (!empty($r1['terakhir_diperpanjang']) and $r1['terakhir_diperpanjang'] != '0000-00-00') {
                                        $masa_berlaku = $r1['terakhir_diperpanjang'];
                                        $tgl_sekarang = date('Y-m-d');
                                        $selisih      = strtotime($masa_berlaku) - strtotime($tgl_sekarang);
                                        $selisih_hari = $selisih / (60 * 60 * 24);
                                        $batas_perpanjangan = date('Y-m-d', strtotime('+6 month', strtotime($masa_berlaku)));
                                        // var_dump($batas_perpanjangan);
                                        if (($selisih_hari <= 30 and $selisih_hari > 0) or ($tgl_sekarang >= $masa_berlaku and $tgl_sekarang <= $batas_perpanjangan) or ($tgl_sekarang >= $batas_perpanjangan)) {

                            ?>

                                            <div class="dropdown-divider"></div>
                                            <a href="<?= base_url('page/sktu') ?>" class="dropdown-item" style="word-wrap: break-word; white-space: normal;">
                                                Pemberitahuan Perpanjangan Masa Berlaku SKTU "<u><?= $ambilidsktu['nama_perusahaan']; ?></u>"
                                                <span class="float-right text-sm" style="color: red;"><i class="fa fa-chevron-circle-right"></i></span>
                                            </a>

                            <?php
                                        }
                                    }
                                }
                            }
                            ?>
                            <!-- // NOTIF MASA PERPAJANGAN -->

                        </div>
                    </li>

                <?php } ?>

            </ul>
        </nav><!-- .nav-menu -->

        <!-- <div class="header-social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div> -->

    </div>
</header>