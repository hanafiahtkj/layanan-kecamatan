<?php
include_once "config/config.php";

if(empty($_GET['key']) || empty($_GET['reset'])){
    header('location: '.base_url().' ', true, 301);
}

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
                        FORM RESET PASSWORD
                    </span>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Password Tidak Boleh Kosong">
                        <input class="input100" type="password" name="password" id="password" placeholder="Password Baru" onkeyup="check();">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10" data-validate="Password Tidak Boleh Kosong">
                        <input class="input100" type="password" name="confirm_password" id="confirm_password" placeholder="Konfirmasi Password" onkeyup="check();">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <span class="txt1" id='message' style="margin: auto; font-size: 12px;"></span>

                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn m-b-5" style="background-color: red;" type="submit" name="reset">
                            Reset
                        </button>
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

    <script type="text/javascript">
       var check = function() {
          if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'lime';
            document.getElementById('message').innerHTML = 'Password dan Konfirmasi Sama';
          } else {
            document.getElementById('message').style.color = 'yellow';
            document.getElementById('message').innerHTML = 'Password dan Konfirmasi Tidak Sama';
          }
        }
    </script>

    <?php
    if (isset($_POST['reset'])) {
        $cekpass        = mysqli_real_escape_string($koneksi, $_POST['password']);
        $cekconfirmpass = mysqli_real_escape_string($koneksi, $_POST['confirm_password']);

        if ($cekpass != $cekconfirmpass) {
            echo "
                <script type='text/javascript'>
                setTimeout(function () {    
                    toastr.error('Password dan Konfirmasi Tidak Sama');     
                },10);
                window.setTimeout(function(){ 
                    window.history.back();
                } ,1800);   
                </script>";
        }elseif (strlen($cekpass) < 8) {
            echo "
                <script type='text/javascript'>
                setTimeout(function () {    
                    toastr.error('Password Minimal 8 Karakter');     
                },10);
                window.setTimeout(function(){ 
                    window.history.back();
                } ,1800);   
                </script>";
        }else{

        $email = $_GET['key'];
        $pass  = $_GET['reset'];

        $passbaru = mysqli_real_escape_string($koneksi, $_POST['password']);
        $options = [
            'cost' => 10,
        ];
        $pass_hash = password_hash($passbaru, PASSWORD_DEFAULT, $options);

        $query = $koneksi->query("SELECT email, password FROM masyarakat WHERE email = '$email' AND password = '$pass'")->fetch_array();
        if ($query) {
            $koneksi->query("UPDATE masyarakat SET password = '$pass_hash' WHERE email = '$email'");
            echo "
                    <script type='text/javascript'>
                    setTimeout(function () {    
                        toastr.success('Reset Password Berhasil');     
                    },10);
                    window.setTimeout(function(){ 
                        window.location.replace('" . base_url('') . "');
                    } ,1800);   
                    </script>";
        } else {
                echo "
                <script type='text/javascript'>
                    toastr.error('Reset Password Gagal');  
                </script>";
            }
        }
    }
    ?>

</body>

</html>