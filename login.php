<?php
include_once "config/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Lok | Banjarmasin Utara</title>
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

                    <span class="login100-form-title p-b-45">
                        LOGIN MASYARAKAT
                    </span>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="NIK Tidak Boleh Kosong">
                        <input class="input100" type="text" name="nik" placeholder="NIK">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Password Tidak Boleh Kosong">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn" type="submit" name="login">
                            Login
                        </button>
                    </div>

                    <div class="text-center w-full p-t-25">
                        <span class="txt1">
                            Belum punya akun ? <br>
                            <a href="<?= base_url('regis'); ?>" style="color: yellow;">Daftar Disini</a>
                        </span>
                    </div>

                    <!-- <div class="text-center w-full">
                        <a class="txt1" href="#">
                            Create new account
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div> -->
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

    <?php
    if (isset($_POST['login'])) {
        $nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
        $pass = mysqli_real_escape_string($koneksi, $_POST['password']);

        $query = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE nik = '$nik'");

        // CEK USERNAME
        if (mysqli_num_rows($query) === 1) {

            // CEK PASSWORD
            $data = mysqli_fetch_array($query);
            if (password_verify($pass, $data["password"])) {

                $id_masyarakat = $data['id_masyarakat'];
                $nama          = $data['nama'];
                $_SESSION['id_masyarakat'] = $id_masyarakat;
                $_SESSION['nama']          = $nama;

                echo "
                    <script type='text/javascript'>
                    setTimeout(function () {    
                        toastr.success('Login Berhasil');     
                    },10);
                    window.setTimeout(function(){ 
                        window.location.replace('" . base_url() . "');
                    } ,1800);   
                    </script>";
            } else {
                echo "
                <script type='text/javascript'>
                    toastr.error('NIK atau Password Tidak Ditemukan');  
                </script>";
            }
        } else {
            echo "
                <script type='text/javascript'>
                    toastr.error('NIK atau Password Tidak Ditemukan');  
                </script>";
        }
    }
    ?>

</body>

</html>