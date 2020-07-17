<?php
function aktif($pageSekarang)
{
    $namaHalaman = $_SERVER['PHP_SELF'];
    $namaArray = explode('/', $namaHalaman);
    $jumlah = count($namaArray);
    $namaHalaman = $namaArray[$jumlah - 2];
    if ($pageSekarang == $namaHalaman) {
        echo 'active';
    }
}

$namaHalaman = $_SERVER['PHP_SELF'];
$namaArray   = explode('/', $namaHalaman);
$jumlah      = count($namaArray);
$namaHalaman = $namaArray[$jumlah - 2];
$menumasterdata  = [
    "dasar-hukum-sktu",
    "dasar-hukum-iumk",
    "lampiran-sktu",
    "lampiran-iumk",
    "kelurahan",
    "camat",
    "role",
    "user",
    "kegiatan-usaha",
    "masyarakat"
];

$menupelayanan  = [
    "sktu",
    "baru", //sub folder sktu
    "perpanjangan", //sub folder sktu
    "iumk",
    "ahli-waris",
    "rpp",
    "legalisasi-imb",
    "legalisasi-proposal",
    "legalisasi-izin-tower"
];

$menusktu = [
    "sktu",
    "baru",
    "perpanjangan"
];

// link logo
if ($_SESSION['role'] == "Admin") {
    $logo_link = base_url('admin');
} elseif ($_SESSION['role'] == "Kasi") {
    $logo_link = base_url('kasi');
} elseif ($_SESSION['role'] == "Sekcam") {
    $logo_link = base_url('sekcam');
} elseif ($_SESSION['role'] == "Camat") {
    $logo_link = base_url('camat');
} elseif ($_SESSION['role'] == "Staf") {
    $logo_link = base_url('staf');
}


?>

<aside class="main-sidebar sidebar-light-info navbar-light elevation-4">
    <!-- Brand Logo -->
    <a href="<?= $logo_link; ?>" class="brand-link" style="background-color: deepskyblue;">
        <img src="<?= base_url() ?>/assets/img/logo-bjm.png" alt="Logo Pemko BJM" class="brand-image ml-3 mr-2" style="text-align: center; width: 25px;">
        <span class="brand-text font-weight-light"><strong>Layanan Kecamatan</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>/assets/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $_SESSION['nama_user']; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="<?= $logo_link; ?>" class="nav-link <?php if ($_SESSION['role'] == "Admin") {
                                                                        echo aktif("admin");
                                                                    } elseif ($_SESSION['role'] == "Kasi") {
                                                                        echo aktif("kasi");
                                                                    } elseif ($_SESSION['role'] == "Sekcam") {
                                                                        echo aktif("sekcam");
                                                                    } elseif ($_SESSION['role'] == "Camat") {
                                                                        echo aktif("camat");
                                                                    } elseif ($_SESSION['role'] == "Staf") {
                                                                        echo aktif("staf");
                                                                    } ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


                <!-- ADMIN -->

                <?php if ($_SESSION['role'] == "Admin") : ?>

                    <!-- MENU MASTER DATA -->
                    <li class="nav-item has-treeview <?php if (in_array($namaHalaman, $menumasterdata) === true) {
                                                            echo "menu-open";
                                                        } ?>">
                        <a href="#" class="nav-link <?php if (in_array($namaHalaman, $menumasterdata) === true) {
                                                        echo "active";
                                                    } ?>">
                            <i class=" nav-icon fas fa-database"></i>
                            <p>
                                Data Master
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('admin/dasar-hukum-sktu') ?>" class="nav-link <?= aktif("dasar-hukum-sktu"); ?>">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Dasar Hukum SKTU</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/dasar-hukum-iumk') ?>" class="nav-link <?= aktif("dasar-hukum-iumk"); ?>">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Dasar Hukum IUMK</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/lampiran-sktu') ?>" class="nav-link <?= aktif("lampiran-sktu"); ?>">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Lampiran SKTU</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/lampiran-iumk') ?>" class="nav-link <?= aktif("lampiran-iumk"); ?>">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Lampiran IUMK</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/kelurahan') ?>" class="nav-link <?= aktif("kelurahan"); ?>">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Kelurahan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/kegiatan-usaha') ?>" class="nav-link <?= aktif("kegiatan-usaha"); ?>">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Kegiatan Usaha</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/camat') ?>" class="nav-link <?= aktif("camat"); ?>">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Camat</p>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="<?= base_url('admin/role') ?>" class="nav-link <?= aktif("role"); ?>">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Role</p>
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a href="<?= base_url('admin/user') ?>" class="nav-link <?= aktif("user"); ?>">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/masyarakat') ?>" class="nav-link <?= aktif("masyarakat"); ?>">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Masyarakat</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                <?php endif ?>

                <?php if ($_SESSION['role'] == "Admin") { ?>
                    <!-- MENU PELAYANAN -->
                    <li class="nav-item has-treeview <?php if (in_array($namaHalaman, $menupelayanan) === true) {
                                                            echo "menu-open";
                                                        } ?>">
                        <a href="#" class="nav-link <?php if (in_array($namaHalaman, $menupelayanan) === true) {
                                                        echo "active";
                                                    } ?>">
                            <i class="nav-icon fas fa-pencil-alt"></i>
                            <p>
                                Pelayanan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('admin/pelayanan/sktu') ?>" class="nav-link <?php if (in_array($namaHalaman, $menusktu) === true) {
                                                                                                        echo "active";
                                                                                                    } ?>" title="Surat Keterangan Tempat Usaha">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>SKTU</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/pelayanan/iumk') ?>" class="nav-link <?= aktif("iumk"); ?>" title="Izin Usaha Mikro dan Kecil">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>IUMK</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/pelayanan/ahli-waris') ?>" class="nav-link <?= aktif("ahli-waris"); ?>" title="Surat Pernyataan Ahli Waris">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Surat Pernyataan Ahli Waris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/pelayanan/rpp') ?>" class="nav-link <?= aktif("rpp"); ?>" title="Rekomendasi Pendirian PAUD">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Rekomendasi Pedirian PAUD</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/pelayanan/legalisasi-imb') ?>" class="nav-link <?= aktif("legalisasi-imb"); ?>" title="Legalisasi Permohonan Izin Mendirikan Bangunan">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Permohonan IMB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/pelayanan/legalisasi-proposal') ?>" class="nav-link <?= aktif("legalisasi-proposal"); ?>" title="Legalisasi Proposal">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Proposal</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/pelayanan/legalisasi-izin-tower') ?>" class="nav-link <?= aktif("legalisasi-izin-tower"); ?>" title="Legalisasi Permohonan Izin Tower">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Permohonan Izin Tower</p>
                                </a>
                            </li>
                        </ul>
                    </li>





                    <!-- ROLE KASI -->
                <?php } elseif ($_SESSION['role'] == "Kasi") { ?>
                    <!-- MENU PELAYANAN -->
                    <li class="nav-item has-treeview <?php if (in_array($namaHalaman, $menupelayanan) === true) {
                                                            echo "menu-open";
                                                        } ?>">
                        <a href="#" class="nav-link <?php if (in_array($namaHalaman, $menupelayanan) === true) {
                                                        echo "active";
                                                    } ?>">
                            <i class="nav-icon fas fa-pencil-alt"></i>
                            <p>
                                Pelayanan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('kasi/sktu') ?>" class="nav-link <?php if (in_array($namaHalaman, $menusktu) === true) {
                                                                                            echo "active";
                                                                                        } ?>" title="Surat Keterangan Tempat Usaha">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>SKTU</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('kasi/iumk') ?>" class="nav-link <?= aktif('iumk'); ?>" title="Surat Izin Usaha Mikro dan Kecil">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>IUMK</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('kasi/ahli-waris') ?>" class="nav-link <?= aktif("ahli-waris"); ?>" title="Surat Pernyataan Ahli Waris">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Surat Pernyataan Ahli Waris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('kasi/rpp') ?>" class="nav-link <?= aktif("rpp"); ?>" title="Rekomendasi Pendirian PAUD">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Rekomendasi Pedirian PAUD</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('kasi/legalisasi-imb') ?>" class="nav-link <?= aktif("legalisasi-imb"); ?>" title="Legalisasi Permohonan Izin Mendirikan Bangunan">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Permohonan IMB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('kasi/legalisasi-proposal') ?>" class="nav-link <?= aktif("legalisasi-proposal"); ?>" title="Legalisasi Proposal">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Proposal</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('kasi/legalisasi-izin-tower') ?>" class="nav-link <?= aktif("legalisasi-izin-tower"); ?>" title="Legalisasi Permohonan Izin Tower">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Permohonan Izin Tower</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('kasi/profil'); ?>" class="nav-link <?= aktif('profil'); ?>">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profil
                            </p>
                        </a>
                    </li>


                    <!-- ROLE SEKCAM -->
                <?php } elseif ($_SESSION['role'] == "Sekcam") { ?>
                    <!-- MENU PELAYANAN -->
                    <li class="nav-item has-treeview <?php if (in_array($namaHalaman, $menupelayanan) === true) {
                                                            echo "menu-open";
                                                        } ?>">
                        <a href="#" class="nav-link <?php if (in_array($namaHalaman, $menupelayanan) === true) {
                                                        echo "active";
                                                    } ?>">
                            <i class="nav-icon fas fa-pencil-alt"></i>
                            <p>
                                Pelayanan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('sekcam/sktu') ?>" class="nav-link <?php if (in_array($namaHalaman, $menusktu) === true) {
                                                                                                echo "active";
                                                                                            } ?>" title="Surat Keterangan Tempat Usaha">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>SKTU</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('sekcam/iumk') ?>" class="nav-link <?= aktif('iumk'); ?>" title="Surat Izin Usaha Mikro dan Kecil">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>IUMK</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('sekcam/ahli-waris') ?>" class="nav-link <?= aktif("ahli-waris"); ?>" title="Surat Pernyataan Ahli Waris">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Surat Pernyataan Ahli Waris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('sekcam/rpp') ?>" class="nav-link <?= aktif("rpp"); ?>" title="Rekomendasi Pendirian PAUD">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Rekomendasi Pedirian PAUD</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('sekcam/legalisasi-imb') ?>" class="nav-link <?= aktif("legalisasi-imb"); ?>" title="Legalisasi Permohonan Izin Mendirikan Bangunan">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Permohonan IMB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('sekcam/legalisasi-proposal') ?>" class="nav-link <?= aktif("legalisasi-proposal"); ?>" title="Legalisasi Proposal">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Proposal</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('sekcam/legalisasi-izin-tower') ?>" class="nav-link <?= aktif("legalisasi-izin-tower"); ?>" title="Legalisasi Permohonan Izin Tower">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Permohonan Izin Tower</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('sekcam/profil'); ?>" class="nav-link <?= aktif('profil'); ?>">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profil
                            </p>
                        </a>
                    </li>


                    <!-- ROLE CAMAT -->
                <?php } elseif ($_SESSION['role'] == "Camat") { ?>
                    <!-- MENU PELAYANAN -->
                    <li class="nav-item has-treeview <?php if (in_array($namaHalaman, $menupelayanan) === true) {
                                                            echo "menu-open";
                                                        } ?>">
                        <a href="#" class="nav-link <?php if (in_array($namaHalaman, $menupelayanan) === true) {
                                                        echo "active";
                                                    } ?>">
                            <i class="nav-icon fas fa-pencil-alt"></i>
                            <p>
                                Pelayanan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('camat/sktu') ?>" class="nav-link <?php if (in_array($namaHalaman, $menusktu) === true) {
                                                                                            echo "active";
                                                                                        } ?>" title="Surat Keterangan Tempat Usaha">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>SKTU</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('camat/iumk') ?>" class="nav-link <?= aktif('iumk'); ?>" title="Surat Izin Usaha Mikro dan Kecil">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>IUMK</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('camat/ahli-waris') ?>" class="nav-link <?= aktif("ahli-waris"); ?>" title="Surat Pernyataan Ahli Waris">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Surat Pernyataan Ahli Waris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('camat/rpp') ?>" class="nav-link <?= aktif("rpp"); ?>" title="Rekomendasi Pendirian PAUD">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Rekomendasi Pedirian PAUD</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('camat/legalisasi-imb') ?>" class="nav-link <?= aktif("legalisasi-imb"); ?>" title="Legalisasi Permohonan Izin Mendirikan Bangunan">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Permohonan IMB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('camat/legalisasi-proposal') ?>" class="nav-link <?= aktif("legalisasi-proposal"); ?>" title="Legalisasi Proposal">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Proposal</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('camat/legalisasi-izin-tower') ?>" class="nav-link <?= aktif("legalisasi-izin-tower"); ?>" title="Legalisasi Permohonan Izin Tower">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Permohonan Izin Tower</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('camat/profil'); ?>" class="nav-link <?= aktif('profil'); ?>">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profil
                            </p>
                        </a>
                    </li>


                    <!-- ROLE STAF -->
                <?php } elseif ($_SESSION['role'] == "Staf") { ?>
                    <!-- MENU PELAYANAN -->
                    <li class="nav-item has-treeview <?php if (in_array($namaHalaman, $menupelayanan) === true) {
                                                            echo "menu-open";
                                                        } ?>">
                        <a href="#" class="nav-link <?php if (in_array($namaHalaman, $menupelayanan) === true) {
                                                        echo "active";
                                                    } ?>">
                            <i class="nav-icon fas fa-pencil-alt"></i>
                            <p>
                                Pelayanan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('staf/sktu') ?>" class="nav-link <?php if (in_array($namaHalaman, $menusktu) === true) {
                                                                                            echo "active";
                                                                                        } ?>" title="Surat Keterangan Tempat Usaha">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>SKTU</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('staf/iumk') ?>" class="nav-link <?= aktif('iumk'); ?>" title="Surat Izin Usaha Mikro dan Kecil">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>IUMK</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('staf/ahli-waris') ?>" class="nav-link <?= aktif("ahli-waris"); ?>" title="Surat Pernyataan Ahli Waris">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Surat Pernyataan Ahli Waris</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('staf/rpp') ?>" class="nav-link <?= aktif("rpp"); ?>" title="Rekomendasi Pendirian PAUD">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Rekomendasi Pedirian PAUD</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('staf/legalisasi-imb') ?>" class="nav-link <?= aktif("legalisasi-imb"); ?>" title="Legalisasi Permohonan Izin Mendirikan Bangunan">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Permohonan IMB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('staf/legalisasi-proposal') ?>" class="nav-link <?= aktif("legalisasi-proposal"); ?>" title="Legalisasi Proposal">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Proposal</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('staf/legalisasi-izin-tower') ?>" class="nav-link <?= aktif("legalisasi-izin-tower"); ?>" title="Legalisasi Permohonan Izin Tower">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Legalisasi Permohonan Izin Tower</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('staf/profil'); ?>" class="nav-link <?= aktif('profil'); ?>">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profil
                            </p>
                        </a>
                    </li>


                <?php } ?>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>