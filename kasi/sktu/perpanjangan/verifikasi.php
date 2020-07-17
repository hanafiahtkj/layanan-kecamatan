<!DOCTYPE html>
<html>

<?php
include_once "../../../config/config.php";
include_once "../../../config/auth-kasi.php";
include_once "../../../template/head.php";

$id   = encryptor('decrypt', $_GET['id']);
$data = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE id_sktu = '$id'");
$row  = $data->fetch_array();
?>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once "../../../template/navbar.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once "../../../template/sidebar.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Verifikasi Perpanjangan Surat Keterangan Tempat Usaha</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">SKTU</li>
                                <li class="breadcrumb-item active">Perpanjangan</li>
                                <li class="breadcrumb-item active">Verifikasi</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- left column -->
                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Horizontal Form -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Form Verifikasi SKTU</h3>
                                        <div class="card-tools">
                                            <a href="<?= base_url('kasi/sktu/perpanjangan/detail?id=' . encryptor('encrypt', $row['id_sktu'])) ?>" class="btn bg-gradient-danger btn-tool"><i class="fa fa-arrow-left"> Kembali</i></a>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: azure;">

                                        <div class="form-group row">
                                            <label for="kelengkapan" class="col-sm-2 col-form-label">Kelengkapan</label>
                                            <div class="col-sm-5">
                                                <select name="kelengkapan" id="kelengkapan" class="form-control" data-placeholder="Pilih">
                                                    <option value="">--Pilih--</option>
                                                    <option value="Lengkap">Lengkap</option>
                                                    <option value="Tidak Lengkap">Tidak Lengkap</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Boleh Dikosongkan" value="<?= $row['keterangan'] ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <button type="submit" name="submit" class="btn bg-gradient-primary float-right mr-2"><i class="fa fa-save"> Verifikasi</i></button>
                                    </div>

                                </div>
                                <!-- /.card -->

                            </div>
                            <!--/.col (left) -->
                        </div>

                    </form>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include_once "../../../template/footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include_once "../../../template/script.php"; ?>

    <?php
    if (isset($_POST['submit'])) {

        // AMBIL DASAR HUKUM SKTU
        $dataperaturan = $koneksi->query("SELECT * FROM peraturan_sktu")->fetch_array();

        // AMBIL CAMAT
        $camat = $koneksi->query("SELECT * FROM camat WHERE status = 'Aktif'")->fetch_array();

        $peraturan                = $dataperaturan['peraturan'];
        $nama_camat               = $camat['nama_camat'];
        $nip                      = $camat['nip'];
        $jabatan                  = $camat['jabatan'];
        $kelengkapan              = $_POST['kelengkapan'];
        $keterangan               = $_POST['keterangan'];

        if ($kelengkapan == "Lengkap") {
            $id_posisi   = 2;
            $status      = "Dalam Proses";
        } else {
            $id_posisi   = 1;
            $status      = "Belum Diproses";
        }

        $submit = $koneksi->query("UPDATE sktu_perpanjangan SET
            peraturan                = '$peraturan',
            nama_camat               = '$nama_camat',
            nip                      = '$nip',
            jabatan                  = '$jabatan',
            kelengkapan              = '$kelengkapan',
            keterangan               = '$keterangan',
            tgl_selesai              = '$tgl_selesai',
            id_posisi                = '$id_posisi',
            status                   = '$status'
            WHERE id_sktu            = '$id'
            ");

        if ($submit) {
            // $koneksi->query("UPDATE riwayat_tgl_sktu SET tgl_dibuat = '$tgl', terakhir_diperpanjang = '$masa_berlaku_akhir' WHERE nomor_sktu = '$nomor_sktu'");
            $_SESSION['pesan'] = "Data Perpanjangan SKTU Diverifikasi";
            echo "<script>window.location.replace('" . base_url('kasi/sktu') . "');</script>";
        }
    }
    ?>

</body>

</html>