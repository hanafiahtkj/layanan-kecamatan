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
                            <h1 class="m-0 text-dark">Data Nomor Urut IUMK</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Nomor Urut IUMK</li>
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
                                        if ($_SESSION['pesan'] == "Nomor Urut IUMK Sudah Ada !") {
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
                                                    <th>Nomor Urut</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>

                                            <tbody style="background-color: azure">
                                                <?php
                                                $data = $koneksi->query("SELECT * FROM nomor_urut_iumk");
                                                foreach ($data as $row) {
                                                ?>
                                                    <tr align="center">
                                                        <td width="5%"><?= $no++; ?></td>
                                                        <td align="left"><?= $row['nomor_urut'] ?></td>
                                                        <td width="15%">
                                                            <button id="edit" data-id="<?= encryptor('encrypt', $row['id_no']); ?>" class="btn bg-gradient-success btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                            <form action="reset" method="POST" class="d-inline">
                                                                <input type="hidden" name="id_no" value="<?= $row['id_no']; ?>" readonly>
                                                                <button type="submit" class="btn bg-gradient-maroon btn-sm" name="reset" title="Reset Nomor Urut"><i class="fa fa-retweet"></i></button>
                                                            </form>
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


    <!-- MODAL EDIT LAMPIRAN -->
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Nomor Urut IUMK</h4>
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