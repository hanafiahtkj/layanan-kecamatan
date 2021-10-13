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

                <form action="" method="POST" id="validasi_regis">

                    <!-- ROW -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required maxlength="50">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nik" placeholder="Nomor NIK KTP" required maxlength="20" onkeypress="return Angkasaja(event)">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required maxlength="50">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" name="tgl_lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <select name="jk" class="form-control" required>
                                                <option value="">--Pilih--</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Agama</label>
                                        <div class="col-sm-10">
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
                                        <label class="col-sm-2 col-form-label">Nomor Telpon</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="telpon" placeholder="Nomor Telpon/HP" required maxlength="15" onkeypress="return Angkasaja(event)">
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
                                            <textarea class="form-control alamat" name="alamat" rows="2" required></textarea>
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
                                        <label class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required maxlength="20">
                                                <div class="input-group-append">
                                                    <div class="input-group-text" id="ikon">
                                                        <span id="mybutton" onclick="lihatpass();" class="fas fa-eye-slash" title="Tampilkan Password"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Ulangi Password</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="ulangipassword" id="ulangpass" placeholder="Ulangi Password" required maxlength="20">
                                                <div class="input-group-append">
                                                    <div class="input-group-text" id="ikon1">
                                                        <span id="mybutton1" onclick="ulanglihatpass();" class="fas fa-eye-slash" title="Tampilkan Password"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <div class="g-recaptcha" data-sitekey="6LeKrb4ZAAAAAC5zORPJNdM2kIRORQ8FiWMI-MzX"></div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- tombol -->
                        <div class="col-md-12" style="margin-top: 2%; text-align: right;">
                            <div class="card">
                                <div class="card-body">
                                    <button type="submit" name="regis" class="btn btn-primary">Registrasi</button>
                                    <a href="<?= base_url('') ?>" class="btn btn-secondary">Batal</a>
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


    <!-- Link javascript untuk api reCAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php include_once "template/ui/script.php"; ?>

    <script>
        $(document).ready(function() {
            $('#validasi_regis').validate({
                rules: {
                    nama: {
                        required: true
                    },
                    nik: {
                        required: true,
                        minlength: 16,
                        maxlength: 20,
                    },
                    tempat_lahir: {
                        required: true
                    },
                    tgl_lahir: {
                        required: true
                    },
                    jk: {
                        required: true
                    },
                    agama: {
                        required: true
                    },
                    telpon: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    alamat: {
                        required: true
                    },
                    no_rumah: {
                        required: true
                    },
                    rt: {
                        required: true
                    },
                    rw: {
                        required: true
                    },
                    kelurahan: {
                        required: true
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    ulangipassword: {
                        required: true,
                        equalTo: "#pass"
                    }
                },
                messages: {
                    nama: {
                        required: "Nama Lengkap Wajib Diisi"
                    },
                    nik: {
                        required: "NIK Wajib Diisi",
                        minlength: "NIK Tidak Kurang Dari 16 Digit",
                        maxlength: "NIK Maksimal 20 Karakter"
                    },
                    tempat_lahir: {
                        required: "Tempat Lahir Wajib Diisi"
                    },
                    tgl_lahir: {
                        required: "Tanggal Lahir Wajib Diisi"
                    },
                    jk: {
                        required: "Jenis Kelamin Wajib Diisi"
                    },
                    agama: {
                        required: "Agama Wajib Diisi"
                    },
                    telpon: {
                        required: "Nomor Telpon Wajib Diisi"
                    },
                    email: {
                        required: "Email Wajib Diisi",
                        email: "Format Email Salah"
                    },
                    alamat: {
                        required: "Jalan Wajib Diisi"
                    },
                    no_rumah: {
                        required: "Nomor Rumah Wajib Diisi"
                    },
                    rt: {
                        required: "RT Wajib Diisi"
                    },
                    rw: {
                        required: "RW Wajib Diisi"
                    },
                    kelurahan: {
                        required: "Kelurahan Wajib Diisi"
                    },
                    password: {
                        required: "Password Wajib Diisi",
                        minlength: "Password Minimal 8 Karakter"
                    },
                    ulangipassword: {
                        required: "Ulangi Password Wajib Diisi",
                        equalTo: "Password Tidak Sama"
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.col-sm-10').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });


        // CONFIRM PASSWORD
        // $("#ulangpass").on('keyup', function() {
        //     var password = $("#pass").val();
        //     var confirmPassword = $("#ulangpass").val();
        //     if (password != confirmPassword) {
        //         $("#password_error").text('*Password Tidak Cocok !');
        //     } else {
        //         $("#password_error").text('');
        //     }
        // });
        // $("#pass").on('keyup', function() {
        //     var password = $("#pass").val();
        //     var confirmPassword = $("#ulangpass").val();
        //     if (password != confirmPassword) {
        //         $("#password_error").text('*Password Tidak Cocok !');
        //     } else {
        //         $("#password_error").text('');
        //     }
        // });


        // TAMPILKAN PASSWORD
        function lihatpass() {
            var x = document.getElementById('pass').type;

            if (x == 'password') {
                document.getElementById('pass').type = 'text';
                document.getElementById('ikon').innerHTML = '<span id="mybutton" onclick="lihatpass();" class="fas fa-eye" title="Tampilkan Password"></span>';
            } else {
                document.getElementById('pass').type = 'password';
                document.getElementById('ikon').innerHTML = '<span id="mybutton" onclick="lihatpass();" class="fas fa-eye-slash" title="Tampilkan Password"></span>';
            }
        }

        function ulanglihatpass() {
            var x = document.getElementById('ulangpass').type;

            if (x == 'password') {
                document.getElementById('ulangpass').type = 'text';
                document.getElementById('ikon1').innerHTML = '<span id="mybutton1" onclick="ulanglihatpass();" class="fas fa-eye" title="Tampilkan Password"></span>';
            } else {
                document.getElementById('ulangpass').type = 'password';
                document.getElementById('ikon1').innerHTML = '<span id="mybutton1" onclick="ulanglihatpass();" class="fas fa-eye-slash" title="Tampilkan Password"></span>';
            }
        }



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
        $nama           = $_POST['nama'];
        $nik            = $_POST['nik'];
        $tempat_lahir   = $_POST['tempat_lahir'];
        $tgl_lahir      = $_POST['tgl_lahir'];
        $jk             = $_POST['jk'];
        $agama          = $_POST['agama'];
        $telpon         = $_POST['telpon'];
        $email          = $_POST['email'];
        $alamat         = $_POST['alamat'];
        $no_rumah       = $_POST['no_rumah'];
        $rt             = $_POST['rt'];
        $rw             = $_POST['rw'];
        $kelurahan      = $_POST['kelurahan'];
        $pass           = $_POST['password'];
        $ulangipassword = $_POST['ulangipassword'];
        $captcha        = $_POST['g-recaptcha-response'];

        // hash password
        $options = [
            'cost' => 10,
        ];
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT, $options);

        // if (strlen($nik) < 23) {
        //     echo "
        //     <script type='text/javascript'>
        //         setTimeout(function () {    
        //             toastr.error('NIK Tidak Boleh Kurang Dari 23 Digit !');      
        //         },10);  
        //         window.setTimeout(function(){ 
        //             window.history.back();
        //         } ,3000);  
        //     </script>";
        // }

        // if ($pass != $ulangipassword) {
        //     echo "
        //     <script type='text/javascript'>
        //         setTimeout(function () {    
        //             toastr.error('Password Tidak Cocok, Mohon Masukkan Password Dengan Benar !');      
        //         },10);  
        //         window.setTimeout(function(){ 
        //             window.history.back();
        //         } ,3000);  
        //     </script>";
        // }

        $secretKey        = "6LeKrb4ZAAAAACxHcpT2kHPYxmVaNTTDbHaKud2b";
        $ip             = $_SERVER['REMOTE_ADDR'];
        $response        = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha . "&remoteip=" . $ip);
        $responseKeys    = json_decode($response, true);

        if (intval($responseKeys["success"]) != 1) {
            echo "
            <script type='text/javascript'>
                setTimeout(function () {    
                    toastr.error('Captcha Belum Dicentang !');      
                },30);  
                window.setTimeout(function(){ 
                    window.history.back();
                } ,3000);  
            </script>";
        } else {

            // CEK NIK MASYARAKAT
            $cek = $koneksi->query("SELECT * FROM masyarakat WHERE nik = '$nik'")->fetch_array();
            if (!empty($cek)) {
                echo "
            <script type='text/javascript'>
                setTimeout(function () {    
                    toastr.error('Nomor NIK KTP Sudah Terdaftar Dalam Sistem');      
                },30);  
                window.setTimeout(function(){ 
                    window.history.back();
                } ,5000);  
            </script>";
            } else {
                $submit = $koneksi->query("INSERT INTO masyarakat VALUES (null, '$nama', '$nik', '$tempat_lahir', '$tgl_lahir', '$jk', '$agama', '$telpon', '$email', '$alamat', '$no_rumah', '$rt', '$rw', '$kelurahan', '$pass_hash')");

                if ($submit) {

                    // PROSES LOGIN
                    $query = $koneksi->query("SELECT * FROM masyarakat WHERE nik = '$nik'")->fetch_array();
                    $_SESSION['id_masyarakat'] = $query['id_masyarakat'];
                    $_SESSION['nama']          = $query['nama'];

                    // log
                    $ket  = "Registrasi Masyarakat -> NIK = " . $nik;
                    $koneksi->query("INSERT INTO log VALUES(null, '$ket', CURRENT_TIME(), '$nama', null, null)");
                    // --Log

                    echo "
                    <script type='text/javascript'>
                    setTimeout(function () {    
                        toastr.success('Registrasi Berhasil, Anda akan masuk ke halaman dashboard');     
                    },30);  
                    window.setTimeout(function(){ 
                        window.location.replace('". base_url('dashboard') ."');
                    } ,3000);   
                    </script>";
                }
            }
        }
    }
    ?>

</body>

</html>