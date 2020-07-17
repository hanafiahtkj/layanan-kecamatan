<!DOCTYPE html>
<html lang="en">

<?php
include_once "config/config.php";
include_once "config/auth-mas.php";
include_once "config/bulan.php";
include_once "template/ui/head.php";

$id   = encryptor('decrypt', $_GET['id']);
$data = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$id'");
$row  = $data->fetch_array();

?>

<body>

    <!-- ======= Header ======= -->
    <?php include_once "template/ui/header.php"; ?>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Edit Profil</h2>
                    <ol>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li>Edit Profil</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services graform">
            <div class="container">

                <div class="section-title">
                    <h2>Edit Profil</h2>
                </div>

                <!-- ROW -->
                <div class="row">

                    <div class="col-md-12">

                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="card">
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nama" name="nama" required value="<?= $row['nama']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nik" class="col-sm-2 col-form-label">nik</label>
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
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea name="alamat" id="alamat" rows="3" class="form-control" required><?= $row['alamat']; ?></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password" id="pass" placeholder="Kosongkan Password jika tidak diubah" autocomplete="off">
                                                <div class="input-group-append">
                                                    <div class="input-group-text" id="ikon">
                                                        <span id="mybutton" onclick="lihatpass();" class="fas fa-eye" title="Lihat Password"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>



                    </div>
                    <!-- ROW-->

                    <!-- tombol -->
                    <div class="col-md-12" style="margin-top: 2%; text-align: right;">
                        <div class="card">
                            <div class="card-body">
                                <button type="submit" name="submit" class="btn btn-primary">Edit Profil</button>
                                <a href="<?= base_url('profil') ?>" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </div>

                    </form>

                </div>


            </div>
        </section><!-- End Services Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include_once "template/ui/footer.php"; ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


    <?php include_once "template/ui/script.php"; ?>

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
        $nama         = $_POST['nama'];
        $nik          = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir    = $_POST['tgl_lahir'];
        $jk           = $_POST['jk'];
        $agama        = $_POST['agama'];
        $telpon       = $_POST['telpon'];
        $alamat       = $_POST['alamat'];
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
                                    alamat       = '$alamat', 
                                    password     = '$password'
                                    WHERE id_masyarakat = '$id'
                                    ");

        if ($submit) {
            echo "
            <script type='text/javascript'>
            setTimeout(function () {    
                toastr.success('Data Profil Berhasil Diubah');     
            },10);
            window.setTimeout(function(){ 
                window.location.replace('" . base_url('profil') . "');
            } ,1800);   
            </script>";
        }
    }

    ?>


</body>

</html>