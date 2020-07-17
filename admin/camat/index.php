<!DOCTYPE html>
<html>

<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";
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
                            <h1 class="m-0 text-dark">Data Camat</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Camat</li>
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
                                    <!-- <h3 class="card-title">DataTable with default features</h3> -->
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
                                    <?php $_SESSION['pesan'] = '';
                                    } ?>

                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead class="bg-gradient-indigo">
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NIP</th>
                                                    <th>Jabatan</th>
                                                    <th>Periode Jabatan</th>
                                                    <th>Status</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>

                                            <tbody style="background-color: azure">
                                                <?php
                                                $data = $koneksi->query("SELECT * FROM camat ORDER BY status ASC");
                                                foreach ($data as $row) {
                                                ?>
                                                    <tr align="center">
                                                        <td width="5%"><?= $no++; ?></td>
                                                        <td align="left"><?= $row['nama_camat'] ?></td>
                                                        <td align="left"><?= $row['nip'] ?></td>
                                                        <td align="left"><?= $row['jabatan'] ?></td>
                                                        <td width="17%">
                                                            <?=
                                                                date('d', strtotime($row['periode_awal_jabatan'])) . " " . $bln[date('m', strtotime($row['periode_awal_jabatan']))] . " " . date('Y', strtotime($row['periode_awal_jabatan'])) . " - " .
                                                                    date('d', strtotime($row['periode_akhir_jabatan'])) . " " . $bln[date('m', strtotime($row['periode_akhir_jabatan']))] . " " . date('Y', strtotime($row['periode_akhir_jabatan']))
                                                            ?>
                                                        </td>
                                                        <td width="5%">
                                                            <?php if ($row['status'] == "Aktif") { ?>
                                                                <span class="badge badge-primary" style="font-size: 15px;"><?= $row['status'] ?></span>
                                                            <?php } else { ?>
                                                                <span class="badge badge-danger" style="font-size: 15px;"><?= $row['status'] ?></span>
                                                            <?php } ?>
                                                        </td>
                                                        <td width="15%">
                                                            <form action="aktif" method="POST" class="d-inline">
                                                                <input type="hidden" name="id" value="<?= encryptor('encrypt', $row['id_camat']); ?>">
                                                                <button type="submit" name="aktif" class="btn bg-gradient-warning btn-sm" title="Aktif"><i class="fa fa-check"></i></button>
                                                            </form>
                                                            <button id="edit" data-id="<?= encryptor('encrypt', $row['id_camat']); ?>" class="btn bg-gradient-success btn-sm"><i class="fa fa-edit" title="Edit"></i></button>

                                                            <?php if ($row['status'] != "Aktif") { ?>
                                                                <a href="hapus?id=<?= encryptor('encrypt', $row['id_camat']); ?>" class="btn bg-gradient-danger btn-sm alert-hapus" data-id="<?= $row['nama_camat'] ?>" title="Hapus"><i class="fa fa-trash"></i></a>
                                                            <?php } ?>
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


    <!-- MODAL TAMBAH CAMAT -->
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Camat</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="simpan">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="nama_camat" class="col-sm-4 col-form-label">Nama Camat</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nama_camat" id="nama_camat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nip" id="nip" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="jabatan" id="jabatan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="periode_awal" class="col-sm-6 col-form-label">Periode Awal Jabatan</label>
                            <div class="col-sm-12">
                                <input type="date" class="form-control" name="periode_awal" id="periode_awal" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="periode_akhir" class="col-sm-6 col-form-label">Periode Akhir Jabatan</label>
                            <div class="col-sm-12">
                                <input type="date" class="form-control" name="periode_akhir" id="periode_akhir" required>
                            </div>
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



    <!-- MODAL EDIT PERATURAN -->
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Camat</h4>
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
        $(document).ready(function() {
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


        });
    </script>

</body>

</html>