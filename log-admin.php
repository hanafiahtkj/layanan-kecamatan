<!DOCTYPE html>
<html lang="en">

<?php include_once "config/config.php"; ?>

<head>
    <title>E-Lok | Layanan Kecamatan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/logo-bjm.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/toastr/toastr.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/template/login/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= base_url() ?>/assets/bg-cover/kantor1.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="">
                    <span class="login100-form-logo">
                        <!-- <i class="zmdi zmdi-landscape"></i> -->
                        <img src="<?= base_url() ?>/assets/img/logo-bjm.png" alt="Logo Pemko Banjarmasin" style="width: 140px; height: 180;">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Halaman Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Username Tidak Boleh Kosong">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password Tidak Boleh Kosong">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" name="login" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <br>

                    <div class="container-login100-form-btn">
                        <a href="Manual Book Aplikasi e-LOK.pdf" class="badge badge-warning" download="">Download Buku Petunjuk Penggunaan Aplikasi</a>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/template/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/template/login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/template/login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>/template/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/template/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/template/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>/template/login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/template/login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/assets/plugins/toastr/toastr.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>/template/login/js/main.js"></script>


    <?php
    if (isset($_POST['login'])) {
        $user = mysqli_real_escape_string($koneksi, $_POST['username']);
        $pass = mysqli_real_escape_string($koneksi, $_POST['password']);

        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user'");

        // CEK USERNAME
        if (mysqli_num_rows($query) === 1) {

            // CEK PASSWORD
            $data = mysqli_fetch_array($query);
            if (password_verify($pass, $data["password"])) {

                $id_user    = $data['id_user'];
                $nama_user  = $data['nama_user'];

                $datarole = $koneksi->query("SELECT * FROM role_user WHERE id_role = '$data[id_role]'")->fetch_array();
                $role     = $datarole['role'];

                $_SESSION['id_user']    = $id_user;
                $_SESSION['nama_user']  = $nama_user;
                $_SESSION['role']       = $role;


                // log
                $ket  = "Login User";
                $user = $nama_user . " -> " . $role;
                $koneksi->query("INSERT INTO log VALUES(null, '$ket', CURRENT_TIME(), '$user', null, null)");
                // --Log

                if ($role == "Admin") {
                    echo "
                    <script type='text/javascript'>
                    setTimeout(function () {    
                        toastr.success('Login Berhasil');     
                    },10);  
                    window.setTimeout(function(){ 
                        window.location.replace('admin');
                    } ,1600);   
                    </script>";
                } elseif ($role == "Kasi") {
                    echo "
                    <script type='text/javascript'>
                    setTimeout(function () {    
                        toastr.success('Login Berhasil');     
                    },10);  
                    window.setTimeout(function(){ 
                        window.location.replace('kasi');
                    } ,1600);   
                    </script>";
                } elseif ($role == "Sekcam") {
                    echo "
                    <script type='text/javascript'>
                    setTimeout(function () {    
                        toastr.success('Login Berhasil');     
                    },10);  
                    window.setTimeout(function(){ 
                        window.location.replace('sekcam');
                    } ,1600);   
                    </script>";
                } elseif ($role == "Camat") {
                    echo "
                    <script type='text/javascript'>
                    setTimeout(function () {    
                        toastr.success('Login Berhasil');     
                    },10);  
                    window.setTimeout(function(){ 
                        window.location.replace('camat');
                    } ,1600);   
                    </script>";
                } elseif ($role == "Staf") {
                    echo "
                    <script type='text/javascript'>
                    setTimeout(function () {    
                        toastr.success('Login Berhasil');     
                    },10);  
                    window.setTimeout(function(){ 
                        window.location.replace('staf');
                    } ,1600);   
                    </script>";
                }
            } else {
                echo "
                <script type='text/javascript'>
                    toastr.error('Username atau Password Tidak Ditemukan');  
                </script>";
            }
        } else {
            echo "
                <script type='text/javascript'>
                    toastr.error('Username atau Password Tidak Ditemukan');  
                </script>";
        }
    }
    ?>

</body>

</html>