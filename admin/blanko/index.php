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
                            <h1 class="m-0 text-dark">Data Blanko Surat</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Blanko Surat</li>
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
                                        if ($_SESSION['pesan'] == "Nama Blanko Sudah Ada !") {
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
                                                    <th>Nama Blanko</th>
                                                    <th>Keterangan</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>

                                            <tbody style="background-color: azure">
                                                <?php
                                                $data = $koneksi->query("SELECT * FROM blanko ORDER BY id_blanko ASC");
                                                foreach ($data as $row) {
                                                ?>
                                                    <tr align="center">
                                                        <td width="5%"><?= $no++; ?></td>
                                                        <td align="left"><?= $row['nama_blanko'] ?></td>
                                                        <td align="justify"><?= $row['keterangan'] ?></td>
                                                        <td width="15%">
                                                            <button class="btn bg-gradient-primary btn-sm dropdown-toggle" data-toggle="dropdown" title="File"><i class="fa fa-file"></i></button>
                                                            <div class="dropdown-menu">
                                                                <a href="#" data-id="<?= $row['file'] ?>" class="input-group-text bg-gradient-info lihatfile" title="Preview"><i class="fas fa-eye"> View</i></a>
                                                                <a href="<?= base_url() ?>/assets/blanko/<?= $row['file'] ?>" class="input-group-text bg-gradient-purple" title="Download" download=""><i class="fas fa-download"> Download</i></a>
                                                            </div>
                                                            <button id="edit" data-id="<?= encryptor('encrypt', $row['id_blanko']); ?>" class="btn bg-gradient-success btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                            <a href="hapus?id=<?= encryptor('encrypt', $row['id_blanko']); ?>" class="btn bg-gradient-danger btn-sm alert-hapus" data-id="<?= $row['nama_blanko'] ?>" title="Hapus"><i class="fa fa-trash"></i></a>
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


    <!-- MODAL TAMBAH LAMPIRAN -->
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Blanko</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="simpan" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="nama_lampiran" class="col-sm-4 col-form-label">Nama Blanko</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nama_blanko" id="nama_blanko" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_lampiran" class="col-sm-4 col-form-label">File</label>
                            <div class="col-sm-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input val_file" name="file" required>
                                    <label class="custom-file-label"><i>Upload File Dengan Format PDF</i></label>
                                </div>
                            </div>
                        </div>

                        <div class=" form-group">
                            <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                            <div class="col-sm-12">
                                <textarea class="form-control alamat" name="keterangan" id="keterangan" rows="3" required></textarea>
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



    <!-- MODAL EDIT LAMPIRAN -->
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Blanko</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="post" action="update" id="form-edit" enctype="multipart/form-data">
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



    <!-- MODAL LIHAT FILE -->
    <div class="modal fade" id="modal-preview">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Preview</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <script>
        // VALIDASI FILE UPLOAD
        $('.val_file').on('change', function() {
            var nf = this.files[0].name;
            var ext = this.files[0].type;

            // VALIDASI UKURAN FILE TIDAK LEBIH DARI 1 MB
            if (this.files[0].size > 1 * 1024 * 1024) {
                setTimeout(function() {
                    swal({
                        title: 'File ' + nf + ' Terlalu Besar !',
                        text: 'Silahkan Upload File Dengan Ukuran Maksimal 1 Mb',
                        type: 'warning',
                        timer: 3000,
                        showConfirmButton: true
                    });
                }, 10);
                this.value = "";
            }

            // VALIDAST EKSTENSION FILE UPLOAD
            if (ext != "application/pdf") {
                setTimeout(function() {
                    swal({
                        title: 'Format File ' + nf + ' Tidak Diperbolehkan !',
                        text: 'Silahkan Upload File Dokumen Dengan Format PDF',
                        type: 'warning',
                        timer: 3000,
                        showConfirmButton: true
                    });
                }, 10);
                this.value = "";
            }
        });


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


        $(document).on('click', '.lihatfile', function(e) {
            e.preventDefault();
            // $("#modal-preview").modal('show');
            $('#modal-preview').modal({
                backdrop: 'static',
                keyboard: false
            })
            $.post('view.php', {
                    id: $(this).attr('data-id')
                },
                function(html) {
                    $(".modal-body").html(html);
                }
            );
        });
    </script>

</body>

</html>