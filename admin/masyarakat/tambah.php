<!DOCTYPE html>
<html>

<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";
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
                            <h1 class="m-0 text-dark">Tambah Data Masyarakat</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Masyarakat</li>
                                <li class="breadcrumb-item active">Tambah</li>
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
                                    <h3 class="card-title">Form Tambah Data</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal" method="POST" action="">
                                    <div class="card-body" style="background-color: azure;">

                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama" name="nama" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nik" name="nik" maxlength="25" required onkeypress="return Angkasaja(event)">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <select name="jk" id="jk" class="form-control" required>
                                                    <option value="">--Pilih Jenis Kelamin--</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                            <div class="col-sm-10">
                                                <select name="agama" id="agama" class="form-control" required>
                                                    <option value="">--Pilih Agama--</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="katolik">katolik</option>
                                                    <option value="Lain-lain">Lain-lain</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="telpon" class="col-sm-2 col-form-label">No. Telpon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="telpon" name="telpon" maxlength="13" required onkeypress="return Angkasaja(event)">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                            </div>
                                        </div>

                                    <hr>
                                    <legend style="margin-bottom: 15px;">Alamat Lengkap</legend>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jalan</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="alamat" rows="2" required placeholder="Jalan"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">RT / RW</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="rt" required placeholder="RT" maxlength="10" onkeypress="return Angkasaja(event)">
                                        </div>
                                        <span style="margin-top: 5px;">/</span>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="rw" required placeholder="RW" maxlength="10" onkeypress="return Angkasaja(event)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">No. Rumah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="no_rumah" required placeholder="Nomor Rumah" maxlength="10" onkeypress="return Angkasaja(event)">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Kelurahan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="kelurahan" class="form-control" maxlength="100" required>
                                        </div>
                                    </div>


                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input type="password" class="form-control" name="password" id="pass" autocomplete="off">
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

        // hash password
        $options = [
            'cost' => 10,
        ];
        $pass_hash = password_hash($password, PASSWORD_DEFAULT, $options);


        $cek = $koneksi->query("SELECT * FROM masyarakat WHERE nik = '$nik'")->fetch_array();
        if (!empty($cek)) {
            echo "
            <script type='text/javascript'>
            setTimeout(function () {    
                swal({
                    title: '',
                    text:  'NIK Sudah Ada',
                    type: 'warning',
                    timer: 2000,
                    showConfirmButton: true
                });     
            },10);  
            window.setTimeout(function(){ 
                window.history.back();
            } ,1000);   
            </script>";
        } else {

            $submit = $koneksi->query("INSERT INTO masyarakat VALUES (null, '$nama', '$nik', '$tempat_lahir', '$tgl_lahir', '$jk', '$agama', '$telpon', '$email', '$alamat', '$no_rumah', '$rt', '$rw', '$kelurahan', '$pass_hash')");
            if ($submit) {
                $_SESSION['pesan'] = "Data Masyarakat Ditambahkan";
                echo "<script>window.location.replace('../masyarakat/');</script>";
            }
        }
    }

    ?>

</body>

</html>