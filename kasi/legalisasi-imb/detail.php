<!DOCTYPE html>
<html>

<?php
include_once "../../config/config.php";
include_once "../../config/auth-kasi.php";
include_once "../../config/bulan.php";
include_once "../../template/head.php";

$id   = encryptor('decrypt', $_GET['id']);
$data = $koneksi->query("SELECT * FROM legalisasi_imb WHERE id_imb = '$id'");
$row  = $data->fetch_array();

$po = $koneksi->query("SELECT * FROM posisi_berkas WHERE id_posisi = '$row[id_posisi]'")->fetch_array();
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
                        <div class="col-sm-7">
                            <h1 class="m-0 text-dark">Detail Legalisasi Permohonan Izin Mendirikan Bangunan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-5">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>

                                <li class="breadcrumb-item">Legalisasi Permohonan IMB</li>
                                <li class="breadcrumb-item active">Detail</li>
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
                        <div class="col-md-12">

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <a href="<?= base_url('kasi/legalisasi-imb') ?>" class="btn bg-gradient-gray float-right"><i class="fa fa-arrow-left"> Kembali</i></a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tr>
                                                <th width="30%">Tanggal</th>
                                                <td width="2%">:</td>
                                                <td>
                                                    <?=
                                                        date('d', strtotime($row['tgl_permohonan'])) . " " . $bln[date('m', strtotime($row['tgl_permohonan']))] . " " . date('Y', strtotime($row['tgl_permohonan']));
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Kelurahan</th>
                                                <td width="2%">:</td>
                                                <td> <?= $row['kelurahan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Nama Pemohon</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['nama_pemohon'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Alamat Pemohon</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['alamat_pemohon'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Lokasi Bangunan</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['lokasi_bangunan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Keterangan</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['keterangan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Tanggal Selesai</th>
                                                <td width="2%">:</td>
                                                <td>
                                                    <?php
                                                    if (!empty($row['tgl_selesai'])) {
                                                        echo date('d', strtotime($row['tgl_selesai'])) . " " . $bln[date('m', strtotime($row['tgl_selesai']))] . " " . date('Y', strtotime($row['tgl_selesai']));
                                                    } else {
                                                        echo "-";
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Posisi Berkas</th>
                                                <td width="2%">:</td>
                                                <td><?= $po['posisi'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Status</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['status'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include_once "../../template/footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include_once "../../template/script.php"; ?>

</body>

</html>