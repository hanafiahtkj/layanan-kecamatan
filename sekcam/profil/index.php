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
                            <h1 class="m-0 text-dark">Data Profil</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Profil</li>
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
                                    <a href="edit?id=<?= encryptor('encrypt', $_SESSION['id_user']) ?>" class="btn bg-gradient-indigo"><i class="fa fa-edit"> Edit Profil</i></a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                                        if ($_SESSION['pesan'] == "Data User Sudah Ada !") {
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
                                        <table class="table table-bordered table-striped">
                                            <?php
                                            $row = $koneksi->query("SELECT * FROM user AS u LEFT JOIN role_user AS r ON u.id_role = r.id_role WHERE id_user = '$_SESSION[id_user]'")->fetch_array();
                                            ?>
                                            <tr>
                                                <th width="20%">Nama</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['nama_user'] ?></td>
                                            </tr>

                                            <tr>
                                                <th width="20%">NIP</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['nip'] ?></td>
                                            </tr>

                                            <tr>
                                                <th width="20%">Jabatan</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['jabatan'] ?></td>
                                            </tr>

                                            <tr>
                                                <th width="20%">Username</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['username'] ?></td>
                                            </tr>

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