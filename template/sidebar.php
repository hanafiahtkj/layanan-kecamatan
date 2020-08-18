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
    "masyarakat",
    "nomor-urut-sktu",
    "nomor-urut-iumk"
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
        <span class="brand-text font-weight-light"><strong>E-LOK</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>/assets/img/user.png" class="img-circle elevation-2" alt="User Image">
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
                            <li class="nav-item">
                                <a href="<?= base_url('admin/nomor-urut-sktu') ?>" class="nav-link <?= aktif("nomor-urut-sktu"); ?>">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Nomor Urut SKTU</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/nomor-urut-iumk') ?>" class="nav-link <?= aktif("nomor-urut-iumk"); ?>">
                                    <i class="fa fa-minus nav-icon"></i>
                                    <p>Nomor Urut IUMK</p>
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


                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-laporan">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<!-- MODAL LAPORAN -->
<div class="modal fade" id="modal-laporan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Print Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div id="accordion">
                    <!-- SKTU BARU -->
                    <div class="card card-navy">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#sktu-baru">
                                    SKTU Baru
                                </a>
                            </h4>
                        </div>
                        <div id="sktu-baru" class="panel-collapse collapse in">
                            <div class="card-body">

                                <form role="form" action="<?= base_url('laporan/lap-sktu-baru') ?>" method="POST" target="blank">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bulan</label>
                                                <select name="bulan" id="bulan" class="form-control">
                                                    <option value="">--Pilih Bulan--</option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <select name="tahun" id="tahun" class="form-control" required>
                                                    <?php
                                                    $tnow = date('Y');
                                                    for ($i = $tnow; $i >= 2020; $i--) :
                                                    ?>
                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                    <?php endfor ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> </label> <br>
                                                <button type="submit" name="print" class="btn btn-primary mt-2"><i class="fa fa-print"></i> Print</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                    <!-- SKTU PERPANJANGAN -->
                    <div class="card card-navy">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#sktu-ppj">
                                    SKTU Perpanjangan
                                </a>
                            </h4>
                        </div>
                        <div id="sktu-ppj" class="panel-collapse collapse">
                            <div class="card-body">

                                <form role="form" action="<?= base_url('laporan/lap-sktu-perpanjangan') ?>" method="POST" target="blank">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bulan</label>
                                                <select name="bulan" id="bulan" class="form-control">
                                                    <option value="">--Pilih Bulan--</option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <select name="tahun" id="tahun" class="form-control" required>
                                                    <?php
                                                    $tnow = date('Y');
                                                    for ($i = $tnow; $i >= 2020; $i--) :
                                                    ?>
                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                    <?php endfor ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> </label> <br>
                                                <button type="submit" name="print" class="btn btn-primary mt-2"><i class="fa fa-print"></i> Print</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                    <!-- IUMK -->
                    <div class="card card-navy">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#lap-iumk">
                                    Izin Usaha Mikro dan Kecil
                                </a>
                            </h4>
                        </div>
                        <div id="lap-iumk" class="panel-collapse collapse">
                            <div class="card-body">

                                <form role="form" action="<?= base_url('laporan/lap-iumk') ?>" method="POST" target="blank">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bulan</label>
                                                <select name="bulan" id="bulan" class="form-control">
                                                    <option value="">--Pilih Bulan--</option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <select name="tahun" id="tahun" class="form-control" required>
                                                    <?php
                                                    $tnow = date('Y');
                                                    for ($i = $tnow; $i >= 2020; $i--) :
                                                    ?>
                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                    <?php endfor ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> </label> <br>
                                                <button type="submit" name="print" class="btn btn-primary mt-2"><i class="fa fa-print"></i> Print</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                    <!-- AHLI WARIS -->
                    <div class="card card-navy">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#lap-ahli-waris">
                                    Surat Pernyataan Ahli Waris
                                </a>
                            </h4>
                        </div>
                        <div id="lap-ahli-waris" class="panel-collapse collapse">
                            <div class="card-body">

                                <form role="form" action="<?= base_url('laporan/lap-ahli-waris') ?>" method="POST" target="blank">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bulan</label>
                                                <select name="bulan" id="bulan" class="form-control">
                                                    <option value="">--Pilih Bulan--</option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <select name="tahun" id="tahun" class="form-control" required>
                                                    <?php
                                                    $tnow = date('Y');
                                                    for ($i = $tnow; $i >= 2020; $i--) :
                                                    ?>
                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                    <?php endfor ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> </label> <br>
                                                <button type="submit" name="print" class="btn btn-primary mt-2"><i class="fa fa-print"></i> Print</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                    <!-- REKOMENDASI PENDIRIAN PAUD -->
                    <div class="card card-navy">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#lap-rpp">
                                    Rekomendasi Pendirian PAUD
                                </a>
                            </h4>
                        </div>
                        <div id="lap-rpp" class="panel-collapse collapse">
                            <div class="card-body">

                                <form role="form" action="<?= base_url('laporan/lap-rpp') ?>" method="POST" target="blank">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bulan</label>
                                                <select name="bulan" id="bulan" class="form-control">
                                                    <option value="">--Pilih Bulan--</option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <select name="tahun" id="tahun" class="form-control" required>
                                                    <?php
                                                    $tnow = date('Y');
                                                    for ($i = $tnow; $i >= 2020; $i--) :
                                                    ?>
                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                    <?php endfor ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> </label> <br>
                                                <button type="submit" name="print" class="btn btn-primary mt-2"><i class="fa fa-print"></i> Print</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                    <!-- IMB -->
                    <div class="card card-navy">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#lap-imb">
                                    Legalisasi Permohonan IMB
                                </a>
                            </h4>
                        </div>
                        <div id="lap-imb" class="panel-collapse collapse">
                            <div class="card-body">

                                <form role="form" action="<?= base_url('laporan/lap-imb') ?>" method="POST" target="blank">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bulan</label>
                                                <select name="bulan" id="bulan" class="form-control">
                                                    <option value="">--Pilih Bulan--</option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <select name="tahun" id="tahun" class="form-control" required>
                                                    <?php
                                                    $tnow = date('Y');
                                                    for ($i = $tnow; $i >= 2020; $i--) :
                                                    ?>
                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                    <?php endfor ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> </label> <br>
                                                <button type="submit" name="print" class="btn btn-primary mt-2"><i class="fa fa-print"></i> Print</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                    <!-- PROPOSAL -->
                    <div class="card card-navy">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#lap-proposal">
                                    Legalisasi Proposal
                                </a>
                            </h4>
                        </div>
                        <div id="lap-proposal" class="panel-collapse collapse">
                            <div class="card-body">

                                <form role="form" action="<?= base_url('laporan/lap-proposal') ?>" method="POST" target="blank">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bulan</label>
                                                <select name="bulan" id="bulan" class="form-control">
                                                    <option value="">--Pilih Bulan--</option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <select name="tahun" id="tahun" class="form-control" required>
                                                    <?php
                                                    $tnow = date('Y');
                                                    for ($i = $tnow; $i >= 2020; $i--) :
                                                    ?>
                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                    <?php endfor ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> </label> <br>
                                                <button type="submit" name="print" class="btn btn-primary mt-2"><i class="fa fa-print"></i> Print</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                    <!-- IZIN TOWER -->
                    <div class="card card-navy">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#lap-tower">
                                    Legalisasi Permohonan Izin Tower
                                </a>
                            </h4>
                        </div>
                        <div id="lap-tower" class="panel-collapse collapse">
                            <div class="card-body">

                                <form role="form" action="<?= base_url('laporan/lap-tower') ?>" method="POST" target="blank">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bulan</label>
                                                <select name="bulan" id="bulan" class="form-control">
                                                    <option value="">--Pilih Bulan--</option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <select name="tahun" id="tahun" class="form-control" required>
                                                    <?php
                                                    $tnow = date('Y');
                                                    for ($i = $tnow; $i >= 2020; $i--) :
                                                    ?>
                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                    <?php endfor ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> </label> <br>
                                                <button type="submit" name="print" class="btn btn-primary mt-2"><i class="fa fa-print"></i> Print</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL LAPORAN -->