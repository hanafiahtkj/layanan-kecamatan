<!DOCTYPE html>
<html>

<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";
include_once "../../config/admin-count-data.php";
include_once "../../template/head.php";

?>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once "../../template/navbar.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once "../../template/sidebar.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Notifikasi</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Notifikasi</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-bell"></i>
                                        SKTU Baru
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" style="color: red; font-size: 18px;"><?= $count_sktubaru; ?></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    $n_sktubaru  = $koneksi->query("SELECT * FROM sktu_baru WHERE status != 'Selesai'");
                                    foreach ($n_sktubaru as $r) :
                                        $tgl_sekarang = new DateTime();
                                        $tgl_upload   = new DateTime($r['tgl']);
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
                                    ?>
                                        <a href="<?= base_url('admin/pelayanan/sktu/baru/detail?id= ' . encryptor('encrypt', $r['id_sktu'])); ?>">
                                            <div class="callout callout-danger">
                                                <h5><?= $r['nama_pemohon']; ?>
                                                    <span class="float-right text-mute"><small><?= $dt; ?></small></span>
                                                </h5>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>


                        <div class="col-md-4">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-bell"></i>
                                        Perpanjangan SKTU
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" style="color: red; font-size: 18px;"><?= $count_sktuppj; ?></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    $n_sktuppj  = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE status != 'Selesai'");
                                    foreach ($n_sktuppj as $r) :
                                        $tgl_sekarang = new DateTime();
                                        $tgl_upload   = new DateTime($r['tgl']);
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
                                    ?>
                                        <a href="<?= base_url('admin/pelayanan/sktu/perpanjangan/detail?id= ' . encryptor('encrypt', $r['id_sktu'])); ?>">
                                            <div class="callout callout-danger">
                                                <h5><?= $r['nama_pemohon']; ?>
                                                    <span class="float-right text-mute"><small><?= $dt; ?></small></span>
                                                </h5>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>






                        <div class="col-md-4">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-bell"></i>
                                        IUMK
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" style="color: red; font-size: 18px;"><?= $count_iumk; ?></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    $n_iumk  = $koneksi->query("SELECT * FROM iumk WHERE status != 'Selesai'");
                                    foreach ($n_iumk as $r) :
                                        $tgl_sekarang = new DateTime();
                                        $tgl_upload   = new DateTime($r['tanggal']);
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
                                    ?>
                                        <a href="<?= base_url('admin/pelayanan/iumk/detail?id= ' . encryptor('encrypt', $r['id_iumk'])); ?>">
                                            <div class="callout callout-danger">
                                                <h5><?= $r['nama_pemohon']; ?>
                                                    <span class="float-right text-mute"><small><?= $dt; ?></small></span>
                                                </h5>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>



                    </div>

            </section>
        </div>
        <!-- /.content -->

        <?php include_once "../../template/footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php
    include_once "../../template/script.php";
    ?>

</body>

</html>