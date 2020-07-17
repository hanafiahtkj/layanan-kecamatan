<!DOCTYPE html>
<html>

<?php
include_once "../../config/config.php";
include_once "../../config/auth-kasi.php";
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
                        <div class="col-sm-8">
                            <h1 class="m-0 text-dark">Data Legalisasi Permohonan Izin Mendirikan Bangunan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>

                                <li class="breadcrumb-item active">Legalisasi Permohonan IMB</li>
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
                                    <a href="tambah" class="btn bg-gradient-indigo"><i class="fa fa-plus-circle"> Tambah Data</i></a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                                    ?>
                                        <div class="alert alert-info alertinfo" role="alert">
                                            <i class="fa fa-check-circle"> <?= $_SESSION['pesan']; ?></i>
                                        </div>
                                    <?php
                                        $_SESSION['pesan'] = '';
                                    } ?>

                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead class="bg-gradient-indigo">
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Kelurahan</th>
                                                    <th>Nama Pemohon</th>
                                                    <th>Keterangan</th>
                                                    <th>Tanggal Selesai</th>
                                                    <th>Posisi</th>
                                                    <th>Status</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>

                                            <tbody style="background-color: azure">
                                                <?php
                                                $data = $koneksi->query("SELECT * FROM legalisasi_imb ORDER BY id_imb DESC");
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
                                                        <td align="left"><?= $row['nama_pemohon'] ?></td>
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
                                                            <?php
                                                            if ($row['status'] != "Selesai") {
                                                            ?>

                                                                <button type="button" class="btn bg-gradient-purple btn-sm dropdown-toggle" data-toggle="dropdown" title="Ubah Status">
                                                                    <i class="fa fa-pencil-alt"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="status?id=<?= encryptor('encrypt', $row['id_imb']) ?>&s=Belum Diproses">Belum Diproses</a>
                                                                    <a class="dropdown-item" href="status?id=<?= encryptor('encrypt', $row['id_imb']) ?>&s=Dalam Proses">Dalam Proses</a>
                                                                    <a class="dropdown-item alert-status" href="status?id=<?= encryptor('encrypt', $row['id_imb']) ?>&s=Selesai">Selesai</a>
                                                                </div>

                                                            <?php } ?>

                                                            <a href="detail?id=<?= encryptor('encrypt', $row['id_imb']); ?>" class="btn bg-gradient-info btn-sm" title="Detail"><i class="fa fa-eye"></i></a>

                                                            <a href="edit?id=<?= encryptor('encrypt', $row['id_imb']); ?>" class="btn bg-gradient-success btn-sm" title="Edit"><i class="fa fa-edit"></i></a>

                                                            <a href="hapus?id=<?= encryptor('encrypt', $row['id_imb']); ?>" class="btn bg-gradient-danger btn-sm alert-hapus" data-id="<?= $row['nama_pemohon'] ?>" title="Hapus"><i class="fa fa-trash"></i></a>
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