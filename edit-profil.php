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
                        <li><a href="<?= base_url('dashboard'); ?>">Home</a></li>
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
                                            <textarea class="form-control alamat" name="alamat" rows="2" required placeholder="Jalan"><?= $row['alamat'] ?></textarea>
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
                                            <input type="text" name="kelurahan" class="form-control" maxlength="100" required value="<?= $row['kelurahan'] ?>">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password" id="pass" placeholder="Kosongkan Password jika tidak diubah" autocomplete="off" minlength="8">
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
                        required: "RW Wajib Diisi"
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

        // EVENT ON ENTER IN TEXT AREA
        $('.alamat').on('keydown', function(e) {
            if (e.keyCode == 13 && !e.shiftKey) {
                e.preventDefault();
                return false;
            }
        });
    </script>



    <?php
    if (isset($_POST['submit'])) {
        $nama         = strip_tags($_POST['nama']);
        $nik          = strip_tags($_POST['nik']);
        $tempat_lahir = strip_tags($_POST['tempat_lahir']);
        $tgl_lahir    = strip_tags($_POST['tgl_lahir']);
        $jk           = strip_tags($_POST['jk']);
        $agama        = strip_tags($_POST['agama']);
        $telpon       = strip_tags($_POST['telpon']);
        $email        = $_POST['email'];
        $alamat       = strip_tags($_POST['alamat']);
        $no_rumah     = strip_tags($_POST['no_rumah']);
        $rt           = strip_tags($_POST['rt']);
        $rw           = strip_tags($_POST['rw']);
        $kelurahan    = strip_tags($_POST['kelurahan']);

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
                                    kelurahan    = '$kelurahan'
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