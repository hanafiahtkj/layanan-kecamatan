<!DOCTYPE html>
<html>

<?php
include_once "../../config/config.php";
include_once "../../config/auth-staf.php";
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
                            <h1 class="m-0 text-dark">Data Surat Izin Usaha Mikro dan Kecil</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">IUMK</li>
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
                        <div class="col-12">

                            <div class="card card-primary card-outline">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                                        if ($_SESSION['pesan'] == "Data IUMK Sudah Ada !") {
                                    ?>
                                            <div class="alert alert-warning alertinfo" role="alert">
                                                <i class="fa fa-exclamation-triangle"> <?= $_SESSION['pesan']; ?></i>
                                            </div>

                                        <?php } else { ?>
                                            <div class="alert alert-info alertinfo" role="alert">
                                                <i class="fa fa-check-circle"> <?= $_SESSION['pesan']; ?></i>
                                            </div>
                                    <?php }
                                        $_SESSION['pesan'] = '';
                                    } ?>

                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead class="bg-gradient-indigo">
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Nomor</th>
                                                    <th>Nama Pemohon</th>
                                                    <th>Nama Perusahaan</th>
                                                    <th>Posisi</th>
                                                    <th>Status</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>

                                            <tbody style="background-color: azure">
                                                <?php
                                                $data = $koneksi->query("SELECT * FROM iumk ORDER BY id_iumk DESC");
                                                foreach ($data as $row) {
                                                    $po = $koneksi->query("SELECT * FROM posisi_berkas WHERE id_posisi = '$row[id_posisi]'")->fetch_array();
                                                ?>
                                                    <tr align="center">
                                                        <td width="5%"><?= $no++; ?></td>
                                                        <td>
                                                            <?=
                                                                date('d', strtotime($row['tanggal'])) . " " .
                                                                    $bln[date('m', strtotime($row['tanggal']))] . " " .
                                                                    date('Y', strtotime($row['tanggal']))
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($row['id_posisi'] != 4) {
                                                                echo "-";
                                                            } else {
                                                                echo $row['nomor_iumk'];
                                                            }
                                                            ?>
                                                        </td>
                                                        <td align="left"><?= $row['nama_pemohon'] ?></td>
                                                        <td align="left"><?= $row['nama_perusahaan'] ?></td>
                                                        <td><?= $po['posisi'] ?></td>
                                                        <td><?= $row['status'] ?></td>
                                                        <td width="15%">
                                                            <?php if ($row['id_posisi'] == 4) : ?>
                                                                <button class="btn bg-gradient-primary btn-sm dropdown-toggle" data-toggle="dropdown" title="Print"><i class="fa fa-print"></i></button>
                                                                <div class="dropdown-menu">
                                                                    <a href="<?= base_url() ?>/preview/iumk?id=<?= encryptor('encrypt', $row['id_iumk']); ?>&f=1" class="dropdown-item" target="blank">Print Dengan Foto</a>
                                                                    <a href="<?= base_url() ?>/preview/iumk?id=<?= encryptor('encrypt', $row['id_iumk']); ?>&f=0" class="dropdown-item" target="blank">Print Tanpa Foto</a>
                                                                </div>
                                                            <?php endif ?>
                                                            <a href="detail?id=<?= encryptor('encrypt', $row['id_iumk']); ?>" class="btn bg-gradient-info btn-sm" title="Detail"><i class="fa fa-eye"></i></a>
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

    <script>
        $(document).ready(function() {
            $('.tabel-data').DataTable();
        });
    </script>

</body>

</html>