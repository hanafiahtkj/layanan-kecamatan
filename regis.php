<!DOCTYPE html>
<html lang="en">

<?php
include_once "config/config.php";
include_once "template/ui/head.php";

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
                    <h2>Registrasi</h2>
                    <ol>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li>Registrasi</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Registrasi Masyarakat</h2>
                    <p>Form Registrasi Untuk Masyarakat yang ingin mengajukan pembuatan surat</p>
                </div>

                <form action="" method="POST">

                    <!-- ROW -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required maxlength="50">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NIK</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nik" placeholder="Nomor NIK KTP" required maxlength="25" onkeypress="return Angkasaja(event)">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required maxlength="50">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="tgl_lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <select name="jk" class="form-control" required>
                                                <option value="">--Pilih--</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Agama</label>
                                        <div class="col-sm-9">
                                            <select name="agama" class="form-control" required>
                                                <option value="">--Pilih--</option>
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
                                        <label class="col-sm-3 col-form-label">Nomor Telpon</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="telpon" placeholder="Nomor Telpon/HP" required maxlength="15" onkeypress="return Angkasaja(event)">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="alamat" rows="2" required placeholder="Alamat Lengkap"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password" placeholder="Password" required maxlength="20">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- tombol -->
                        <div class="col-md-12" style="margin-top: 2%; text-align: center;">
                            <div class="card">
                                <div class="card-body">
                                    <button type="submit" name="regis" class="btn btn-primary btn-lg btn-block mb-2">Registrasi</button>
                                    <a href="<?= base_url('') ?>" class="btn btn-secondary btn-lg btn-block">Batal</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- ROW-->

                </form>
            </div>

        </section><!-- End Services Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include_once "template/ui/footer.php"; ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


    <?php include_once "template/ui/script.php"; ?>

    <script>
        // FORMAT ANGKA SAJA
        function Angkasaja(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>

    <?php
    if (isset($_POST['regis'])) {
        $nama         = $_POST['nama'];
        $nik          = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir    = $_POST['tgl_lahir'];
        $jk           = $_POST['jk'];
        $agama        = $_POST['agama'];
        $telpon       = $_POST['telpon'];
        $alamat       = $_POST['alamat'];
        $pass         = $_POST['password'];

        // hash password
        $options = [
            'cost' => 10,
        ];
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT, $options);

        // CEK NIK MASYARAKAT
        $cek = $koneksi->query("SELECT * FROM masyarakat WHERE nik = '$nik' OR nama = '$nama'")->fetch_array();
        if (!empty($cek)) {
            echo "
            <script type='text/javascript'>
                setTimeout(function () {    
                    toastr.error('Data Sudah Terdaftar Dalam Sistem');      
                },10);  
                window.setTimeout(function(){ 
                    window.history.back();
                } ,2000);  
            </script>";
        } else {
            $submit = $koneksi->query("INSERT INTO masyarakat VALUES (null, '$nama', '$nik', '$tempat_lahir', '$tgl_lahir', '$jk', '$agama', '$telpon', '$alamat', '$pass_hash')");

            if ($submit) {
                echo "
                    <script type='text/javascript'>
                    setTimeout(function () {    
                        toastr.success('Registrasi Berhasil');     
                    },10);  
                    window.setTimeout(function(){ 
                        window.location.replace('login');
                    } ,2000);   
                    </script>";
            }
        }
    }
    ?>

</body>

</html>