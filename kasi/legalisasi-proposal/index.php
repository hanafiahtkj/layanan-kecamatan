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
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Data Legalisasi Proposal</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>

                                <li class="breadcrumb-item active">Legalisasi Proposal</li>
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
                                <div class="card-header">
                                    <button data-toggle="modal" data-target="#modal-tambah" class="btn bg-gradient-indigo"><i class="fa fa-plus-circle"> Tambah Data</i></button>
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
                                                    <th>Tanggal Permohonan</th>
                                                    <th>Nama Pemohon</th>
                                                    <th>Judul Proposal</th>
                                                    <th>Tanggal Selesai</th>
                                                    <th>Posisi</th>
                                                    <th>Status</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>

                                            <tbody style="background-color: azure">
                                                <?php
                                                $data = $koneksi->query("SELECT * FROM legalisasi_proposal ORDER BY id_proposal DESC");
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
                                                        <td align="left"><?= $row['nama'] ?></td>
                                                        <td align="left"><?= $row['judul_proposal'] ?></td>
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
                                                        <td width="15%"><?= $po['posisi'] ?></td>
                                                        <td width="15%"><?= $row['status'] ?></td>
                                                        <td width="15%">
                                                            <?php
                                                            if ($row['status'] != "Selesai") {
                                                            ?>
                                                                <button type="button" class="btn bg-gradient-purple btn-sm dropdown-toggle" data-toggle="dropdown" title="Ubah Status">
                                                                    <i class="fa fa-pencil-alt"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="status?id=<?= encryptor('encrypt', $row['id_proposal']) ?>&s=Belum Diproses">Belum Diproses</a>
                                                                    <a class="dropdown-item" href="status?id=<?= encryptor('encrypt', $row['id_proposal']) ?>&s=Dalam Proses">Dalam Proses</a>
                                                                    <a class="dropdown-item alert-status" href="status?id=<?= encryptor('encrypt', $row['id_proposal']) ?>&s=Selesai">Selesai</a>
                                                                </div>


                                                            <?php } ?>

                                                            <button id="edit" data-id="<?= encryptor('encrypt', $row['id_proposal']); ?>" class="btn bg-gradient-success btn-sm" title="Edit"><i class="fa fa-edit"></i></button>

                                                            <a href="hapus?id=<?= encryptor('encrypt', $row['id_proposal']); ?>" class="btn bg-gradient-danger btn-sm alert-hapus" data-id="<?= $row['nama'] ?>" title="Hapus"><i class="fa fa-trash"></i></a>
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


    <!-- MODAL TAMBAH -->
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Legalisasi Proposal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="simpan">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="tgl_permohonan" class="col-sm-6 col-form-label">Tanggal Permohonan</label>
                            <div class="col-sm-12">
                                <input type="date" class="form-control" name="tgl_permohonan" id="tgl_permohonan" required value="<?= date('Y-m-d') ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul_proposal" class="col-sm-4 col-form-label">Judul Proposal</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="judul_proposal" id="judul_proposal" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="posisi" class="col-sm-4 col-form-label">Posisi</label>
                            <div class="col-sm-12">
                                <select name="id_posisi" id="posisi" class="form-control" required>
                                    <?php
                                    $posisi = $koneksi->query("SELECT * FROM posisi_berkas ORDER BY id_posisi ASC");
                                    foreach ($posisi as $po) {
                                    ?>
                                        <option value="<?= $po['id_posisi'] ?>"><?= $po['posisi'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-12">
                                <select name="status" id="status" class="form-control" data-placeholder="Pilih">
                                    <option value="Belum Diproses" selected>Belum Diproses</option>
                                    <option value="Dalam Proses">Dalam Proses</option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" id="tglselesai" style="display: none;">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="simpan" class="btn bg-gradient-primary"><i class="fa fa-save"> Simpan</i></button>
                        <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal"><i class="fa fa-times"> Batal</i></button>
                    </div>

                </form>

            </div>
            <!-- /.modal-content -->
        </div>
    </div>



    <!-- MODAL EDIT -->
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Legalisasi Proposal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="update" id="form-edit">
                    <div class="modal-body">

                        <div id="data-edit"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="edit" class="btn bg-gradient-primary"><i class="fa fa-save"> Simpan</i></button>
                        <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal"><i class="fa fa-times"> Batal</i></button>
                    </div>

                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <script>
        $(document).on('click', '#edit', function(e) {
            e.preventDefault();
            $("#modal-edit").modal('show');
            $.post('modaledit.php', {
                    id: $(this).attr('data-id')
                },
                function(html) {
                    $("#data-edit").html(html);
                }
            );
        });

        $('#status').on('change', function() {
            if (this.value == "Selesai") {
                $("#tglselesai").slideDown("fast");
                $("#tglselesai").append('<label for="tgl_selesai" class=col-sm-4 col-form-label">Tanggal Selesai</label><div class="col-sm-12"><input type="date" class="form-control" name="tgl_selesai" id="tgl_selesai" required></div>');
            } else {
                $("#tglselesai").slideUp("fast");
                $("#tglselesai").empty();
            }
        });
    </script>

</body>

</html>