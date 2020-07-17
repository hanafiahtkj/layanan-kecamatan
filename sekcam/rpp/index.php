<!DOCTYPE html>
<html>

<?php
include_once "../../config/config.php";
include_once "../../config/auth-sekcam.php";
include_once "../../config/bulan.php";
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
                            <h1 class="m-0 text-dark">Data Surat Rekomendasi Pendirian PAUD</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Surat Rekomendasi Pendirian PAUD</li>
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
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead class="bg-gradient-indigo">
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Kelurahan</th>
                                                    <th>Nama Pendiri/Ketua Yayasan</th>
                                                    <th>Keterangan</th>
                                                    <th>Tanggal Selesai</th>
                                                    <th>Posisi</th>
                                                    <th>Status</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>

                                            <tbody style="background-color: azure">
                                                <?php
                                                $data = $koneksi->query("SELECT * FROM rekomendasi_pendirian_paud ORDER BY id_rpp DESC");
                                                foreach ($data as $row) {
                                                    $po = $koneksi->query("SELECT * FROM posisi_berkas WHERE id_posisi = '$row[id_posisi]'")->fetch_array();
                                                ?>
                                                    <tr align="center">
                                                        <td width="5%"><?= $no++; ?></td>
                                                        <td width="15%">
                                                            <?=
                                                                date('d', strtotime($row['tgl_permohonan'])) . " " .
                                                                    $bln[date('m', strtotime($row['tgl_permohonan']))] . " " .
                                                                    date('Y', strtotime($row['tgl_permohonan']));
                                                            ?>
                                                        </td>
                                                        <td><?= $row['kelurahan'] ?></td>
                                                        <td align="left"><?= $row['nama_pendiri'] ?></td>
                                                        <td align="left"><?= $row['keterangan'] ?></td>
                                                        <td width="15%">
                                                            <?php
                                                            if ($row['tgl_selesai']) {
                                                                echo
                                                                    date('d', strtotime($row['tgl_selesai'])) . " " .
                                                                        $bln[date('m', strtotime($row['tgl_selesai']))] . " " .
                                                                        date('Y', strtotime($row['tgl_selesai']));
                                                            } else {
                                                                echo "-";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td width="10%"><?= $po['posisi'] ?></td>
                                                        <td width="10%"><?= $row['status'] ?></td>
                                                        <td width="15%">
                                                            <a href="detail?id=<?= encryptor('encrypt', $row['id_rpp']); ?>" class="btn bg-gradient-info btn-sm" title="Detail"><i class="fa fa-eye"></i></a>
                                                        </td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>

                                        </table>
                                    </div>

                                </div>
                                <!-- /.card-body -->
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