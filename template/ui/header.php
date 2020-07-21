<header id="header" class="fixed-top d-flex align-items-center">
    <!-- <div class="container d-flex align-items-center"> -->
    <div class="container-fluid d-flex align-items-center">

        <div class="logo mr-auto">
            <h1>
                <a href="index"> <img src="<?= base_url() ?>/assets/img/logo-bjm.png" style="width: 35px; height: 40px; margin-top: -6px;"> Layanan Kecamatan</a>
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
                <?php } ?>
                <li><a href="#"><i class="fa fa-bell"></i></a></li>

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