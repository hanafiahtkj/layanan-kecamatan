<!DOCTYPE html>
<html>

<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";
include_once "../../template/head.php";

$id   = encryptor('decrypt', $_GET['id']);
$data = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$id'");
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
                            <h1 class="m-0 text-dark">Edit Data Masyarakat</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Masyarakat</li>
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
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama" name="nama" required value="<?= $row['nama']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nik" name="nik" maxlength="25" required onkeypress="return Angkasaja(event)" value="<?= $row['nik']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required value="<?= $row['tempat_lahir']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required value="<?= $row['tgl_lahir']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <select name="jk" id="jk" class="form-control" required>
                                                    <option value="">--Pilih Jenis Kelamin--</option>
                                                    <option value="Laki-laki" <?php if ($row['jk'] == "Laki-laki") {
                                                                                    echo "selected";
                                                                                } ?>>Laki-laki</option>
                                                    <option value="Perempuan" <?php if ($row['jk'] == "Perempuan") {
                                                                                    echo "selected";
                                                                                } ?>>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                            <div class="col-sm-10">
                                                <select name="agama" id="agama" class="form-control" required>
                                                    <option value="">--Pilih Agama--</option>
                                                    <option value="Islam" <?php if ($row['agama'] == "Islam") {
                                                                                echo "selected";
                                                                            } ?>>Islam</option>
                                                    <option value="Kristen" <?php if ($row['agama'] == "Kristen") {
                                                                                echo "selected";
                                                                            } ?>>Kristen</option>
                                                    <option value="Hindu" <?php if ($row['agama'] == "Hindu") {
                                                                                echo "selected";
                                                                            } ?>>Hindu</option>
                                                    <option value="Budha" <?php if ($row['agama'] == "Budha") {
                                                                                echo "selected";
                                                                            } ?>>Budha</option>
                                                    <option value="katolik" <?php if ($row['agama'] == "katolik") {
                                                                                echo "selected";
                                                                            } ?>>katolik</option>
                                                    <option value="Lain-lain" <?php if ($row['agama'] == "Lain-lain") {
                                                                                    echo "selected";
                                                                                } ?>>Lain-lain</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="telpon" class="col-sm-2 col-form-label">No. Telpon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="telpon" name="telpon" maxlength="13" required onkeypress="return Angkasaja(event)" value="<?= $row['telpon']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" name="email" placeholder="Email" required value="<?= $row['email'] ?>">
                                            </div>
                                        </div>

                                        <hr>
                                        <legend style="margin-bottom: 15px;">Alamat Lengkap</legend>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jalan</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="alamat" rows="2" required placeholder="Jalan"><?= $row['alamat'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">RT / RW</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" name="rt" required placeholder="RT" maxlength="10" onkeypress="return Angkasaja(event)" value="<?= $row['rt'] ?>">
                                            </div>
                                            <span style="margin-top: 5px;">/</span>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" name="rw" required placeholder="RW" maxlength="10" onkeypress="return Angkasaja(event)" value="<?= $row['rw'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">No. Rumah</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="no_rumah" required placeholder="Nomor Rumah" maxlength="10" onkeypress="return Angkasaja(event)" value="<?= $row['no_rumah'] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kelurahan</label>
                                            <div class="col-sm-10">
                                                <select name="kelurahan" id="kelurahan" class="form-control select2" data-placeholder="Pilih Kelurahan" style="width: 100%;" required>
                                                        <option value=""></option>
                                                        <?php
                                                        $kelurahan = $koneksi->query("SELECT * FROM kelurahan ORDER BY kelurahan ASC");
                                                        foreach ($kelurahan as $kel) {
                                                        ?>
                                                            <option value="<?= $kel['kelurahan'] ?>" <?= $row['kelurahan'] == $kel['kelurahan'] ? 'selected' : '' ?>><?= $kel['kelurahan'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input type="password" class="form-control" name="password" id="pass" placeholder="Kosongkan Password jika tidak diubah" autocomplete="off">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text" id="ikon">
                                                            <span id="mybutton" onclick="lihatpass();" class="fas fa-eye-slash" title="Lihat Password"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/masyarakat') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
                document.getElementById('ikon').innerHTML = '<span id="mybutton" onclick="lihatpass();" class="fas fa-eye-slash" title="Lihat Password"></span>';
            }
        }
    </script>

    <?php
    if (isset($_POST['submit'])) {
        $nama         = $_POST['nama'];
        $nik          = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir    = $_POST['tgl_lahir'];
        $jk           = $_POST['jk'];
        $agama        = $_POST['agama'];
        $telpon       = $_POST['telpon'];
        $email        = $_POST['email'];
        $alamat       = $_POST['alamat'];
        $no_rumah     = $_POST['no_rumah'];
        $rt           = $_POST['rt'];
        $rw           = $_POST['rw'];
        $kelurahan    = $_POST['kelurahan'];
        $password     = $_POST['password'];

        if (empty($pass)) {
            $password  = $row['password'];
        } else {
            // hash password
            $options = [
                'cost' => 10,
            ];
            $password = password_hash($pass, PASSWORD_DEFAULT, $options);
        }

        $submit = $koneksi->query("UPDATE masyarakat SET 
                                    nama         = '$nama', 
                                    nik          = '$nik', 
                                    tempat_lahir = '$tempat_lahir', 
                                    tgl_lahir    = '$tgl_lahir', 
                                    jk           = '$jk', 
                                    agama        = '$agama', 
                                    telpon       = '$telpon', 
                                    email        = '$email', 
                                    alamat       = '$alamat', 
                                    no_rumah     = '$no_rumah', 
                                    rt           = '$rt', 
                                    rw           = '$rw', 
                                    kelurahan    = '$kelurahan',
                                    password     = '$password'
                                    WHERE id_masyarakat = '$id'
                                    ");

        if ($submit) {
            $_SESSION['pesan'] = "Data Masyarakat Diubah";
            echo "<script>window.location.replace('../masyarakat/');</script>";
        }
    }

    ?>

</body>

</html>