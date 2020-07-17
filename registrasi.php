<?php
include_once "config/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Layanan Kecamatan | Banjarmasin Utara</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/logo-bjm.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login-user/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login-user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login-user/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login-user/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login-user/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login-user/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/toastr/toastr.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login-user/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login-user/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= base_url() ?>/assets/bg-cover/kantor1.jpg');">
            <div class="wrap-login100 p-b-30">
                <form class="login100-form validate-form" action="" method="POST">
                    <!-- <div class="login100-form-avatar">
                        <img src="images/avatar-01.jpg" alt="AVATAR">
                    </div> -->

                    <span class="login100-form-title p-b-30">
                        REGISTRASI MASYARAKAT
                    </span>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Nama Tidak Boleh Kosong">
                        <input class="input100" type="text" name="nama" placeholder="Nama Lengkap" maxlength="50">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="NIK Tidak Boleh Kosong">
                        <input class="input100" type="text" name="nik" placeholder="NIK" maxlength="25" onkeypress="return Angkasaja(event)">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Tempat Lahir Tidak Boleh Kosong">
                        <input class="input100" type="text" name="tempat_lahir" placeholder="Tempat Lahir" maxlength="50">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Tanggal Lahir Tidak Boleh Kosong">
                        <input class="input100" type="date" name="tgl_lahir" title="Tanggal Lahir">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Jenis Kelamin Belum Dipilih">
                        <select name="jk" class="input100">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Agama Belum Dipilih">
                        <select name="agama" class="input100">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="katolik">katolik</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Nomor Telpon Tidak Boleh Kosong">
                        <input class="input100" type="text" name="telpon" placeholder="Nomor Telpon" maxlength="13" onkeypress="return Angkasaja(event)">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Alamat Tidak Boleh Kosong">
                        <input class="input100" type="text" name="alamat" placeholder="Alamat Lengkap" maxlength="500">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Password Tidak Boleh Kosong">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <hr>

                    <!-- <div class="wrap-input100 validate-input m-b-10 text-center">
                        <img src="captcha" alt="gambar" />
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Captcha Tidak Boleh Kosong">
                        <input class="input100" type="text" placeholder="Isikan Code Captcha">
                        <span class="focus-input100"></span>
                    </div> -->

                    <hr>

                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn" type="submit" name="regis">
                            Registrasi
                        </button>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <a href="<?= base_url(); ?>" class="login100-form-btn">
                            Kembali ke Home
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/template/login-user/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/template/login-user/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>/template/login-user/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/template/login-user/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/assets/plugins/toastr/toastr.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/template/login-user/js/main.js"></script>

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
                } ,1500);  
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
                    } ,1500);   
                    </script>";
            }
        }
    }
    ?>

</body>

</html>