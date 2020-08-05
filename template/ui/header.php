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

                            $jmltotal = $jmliumk + $jmlsktubaru;
                            ?>

                            <?php if ($jmltotal != 0) { ?>
                                <sup class="badge badge-danger" style="padding: 7%; height: auto; margin-left: -5px; padding-top: 4px; padding-bottom: 4px;">
                                    <?= $jmltotal; ?>
                                </sup>
                            <?php } ?>
                        </a>
                        <div class="dropdown-menu" style="width: 300px;" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-header text-center my-2">Notifikasi</div>

                            <!-- NOTIF IUMK -->
                            <?php if (mysqli_num_rows($dataiumk) === 1) { ?>
                                <div class="dropdown-divider"></div>
                                <a href="<?= base_url('page/iumk') ?>" class="dropdown-item" style="word-wrap: break-word; white-space: normal;">
                                    IUMK
                                    <span class="float-right text-sm" style="color: red;"><?= $jmliumk; ?></span>
                                </a>
                            <?php } ?>
                            <!-- // NOTIF IUMK -->

                            <!-- NOTIF SKTU BARU -->
                            <?php if (mysqli_num_rows($datasktubaru) === 1) { ?>
                                <div class="dropdown-divider"></div>
                                <a href="<?= base_url('page/sktu') ?>" class="dropdown-item" style="word-wrap: break-word; white-space: normal;">
                                    SKTU Baru
                                    <span class="float-right text-sm" style="color: red;"><?= $jmlsktubaru; ?></span>
                                </a>
                            <?php } ?>
                            <!-- // NOTIF SKTU BARU -->

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