<!DOCTYPE html>
<html>

<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";
include_once "../../template/head.php";

$id   = encryptor('decrypt', $_GET['id']);
$data = $koneksi->query("SELECT * FROM user AS u LEFT JOIN role_user AS r ON u.id_role = r.id_role WHERE id_user = '$id'");
$row  = $data->fetch_array();

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
                            <h1 class="m-0 text-dark">Edit Data User</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">User</li>
                                <li class="breadcrumb-item active">Edit</li>
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
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- Horizontal Form -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Edit Data</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal" method="POST" action="">
                                    <div class="card-body" style="background-color: azure;">

                                        <div class="form-group row">
                                            <label for="nama_user" class="col-sm-2 col-form-label">Nama User</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?= $row['nama_user'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nip" name="nip" value="<?= $row['nip'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $row['jabatan'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="username" name="username" value="<?= $row['username'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input type="password" class="form-control" name="password" id="pass" autocomplete="off" placeholder="Kosongkan Password jika tidak diubah">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text" id="ikon">
                                                            <span id="mybutton" onclick="lihatpass();" class="fas fa-eye" title="Lihat Password"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="id_role" class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-10">
                                                <select name="id_role" id="id_role" class="form-control select2" data-placeholder="Pilih Role" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $datarole = $koneksi->query("SELECT * FROM role_user ORDER BY role ASC");
                                                    foreach ($datarole as $rr) {
                                                    ?>
                                                        <option value="<?= $rr['id_role'] ?>" <?php if ($rr['id_role'] == $row['id_role']) {
                                                                                                    echo "selected";
                                                                                                } ?>><?= $rr['role'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/user') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
                                        <button type="submit" name="submit" class="btn bg-gradient-primary float-right mr-2"><i class="fa fa-save"> Simpan</i></button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            </div>
                            <!-- /.card -->

                        </div>
                        <!--/.col (left) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
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
        function lihatpass() {
            var x = document.getElementById('pass').type;

            if (x == 'password') {
                document.getElementById('pass').type = 'text';
                document.getElementById('ikon').innerHTML = '<span id="mybutton" onclick="lihatpass();" class="fas fa-eye" style="color: blue;" title="Lihat Password"></span>';
            } else {
                document.getElementById('pass').type = 'password';
                document.getElementById('ikon').innerHTML = '<span id="mybutton" onclick="lihatpass();" class="fas fa-eye" title="Lihat Password"></span>';
            }
        }
    </script>

    <?php
    if (isset($_POST['submit'])) {
        $nama_user = $_POST['nama_user'];
        $nip       = $_POST['nip'];
        $jabatan   = $_POST['jabatan'];
        $username  = $_POST['username'];
        $pass      = $_POST['password'];
        if (empty($pass)) {
            $password  = $row['password'];
        } else {
            // hash password
            $options = [
                'cost' => 10,
            ];
            $password = password_hash($pass, PASSWORD_DEFAULT, $options);
        }
        $id_role   = $_POST['id_role'];

        $submit = $koneksi->query("UPDATE user SET nama_user = '$nama_user', nip = '$nip', jabatan = '$jabatan', username = '$username', password = '$password', id_role = '$id_role'  WHERE id_user = '$id'");
        if ($submit) {
            $_SESSION['pesan'] = "Data User Diubah";
            echo "<script>window.location.replace('../user/');</script>";
        }
    }

    ?>

</body>

</html>