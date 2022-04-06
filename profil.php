<!DOCTYPE html>
<html lang="en">

<?php
include_once "config/config.php";
include_once "config/auth-mas.php";
include_once "config/bulan.php";
include_once "template/ui/head.php";

$idm      = $_SESSION['id_masyarakat'];
$data_mas = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$idm'")->fetch_array();

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
                    <h2>Profil</h2>
                    <ol>
                        <li><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li>Profil</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="pelayanan" class="pelayanan graform">
            <div class="container">

                <div class="section-title">
                    <h2>Data Profil</h2>
                </div>

                <!-- ROW -->
                <div class="row">

                    <div class="col-md-12">

                        <?php
                        $row = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$idm'")->fetch_array();
                        ?>

                        <div class="card">
                            <div class="card-header">
                                <div class="card-tools float-right">
                                    <?php if ($row['id_sso'] != null) { ?>
                                        <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-check-circle text-aqua"> </i>Terhubung dengan SSO
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#" onClick="clickLogin();">Ganti Akun SSO</a>
                                        </div>
                                    <?php } else { ?>
                                        <a href="#" onClick="clickLogin();" data-id="<?= encryptor('encrypt', $row['id_masyarakat']) ?>" class="btn btn-danger btn-tool">
                                            <i class="fas fa-times-circle"></i> </i>Tidak Terhubung dengan SSO
                                        </a>
                                    <?php } ?>
                                    <a href="edit-profil?id=<?= encryptor('encrypt', $row['id_masyarakat']) ?>" class="btn btn-primary btn-tool">
                                        <i class="fa fa-edit"> Edit Profil</i>
                                    </a>
                                    <button type="button" data-toggle="modal" data-target="#modal-edit-pw" class="btn btn-dark btn-tool">
                                        <i class="fa fa-lock"> Edit Password</i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th width="30%">Nama Lengkap</th>
                                            <td width="2%">:</td>
                                            <td><?= $row['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <th width="30%">NIK KTP</th>
                                            <td width="2%">:</td>
                                            <td><?= $row['nik'] ?></td>
                                        </tr>
                                        <tr>
                                            <th width="30%">Tempat Lahir</th>
                                            <td width="2%">:</td>
                                            <td><?= $row['tempat_lahir']; ?></td>
                                        </tr>
                                        <tr>
                                            <th width="30%">Tanggal Lahir</th>
                                            <td width="2%">:</td>
                                            <td>
                                                <?=
                                                date('d', strtotime($row['tgl_lahir'])) . " " . $bln[date('m', strtotime($row['tgl_lahir']))] . " " . date('Y', strtotime($row['tgl_lahir']));
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="30%">Jenis Kelamin</th>
                                            <td width="2%">:</td>
                                            <td><?= $row['jk'] ?></td>
                                        </tr>
                                        <tr>
                                            <th width="30%">Agama</th>
                                            <td width="2%">:</td>
                                            <td><?= $row['agama'] ?></td>
                                        </tr>
                                        <tr>
                                            <th width="30%">Nomor Telpon</th>
                                            <td width="2%">:</td>
                                            <td><?= $row['telpon'] ?></td>
                                        </tr>
                                        <tr>
                                            <th width="30%">Email</th>
                                            <td width="2%">:</td>
                                            <td><?= $row['email'] ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="3" style="font-style: italic; font-size: 12px;">Alamat Lengkap :</th>
                                        </tr>
                                        <tr>
                                            <th width="30%">Jalan</th>
                                            <td width="2%">:</td>
                                            <td><?= $row['alamat'] ?></td>
                                        </tr>
                                        <tr>
                                            <th width="30%">Nomor Rumah</th>
                                            <td width="2%">:</td>
                                            <td><?= $row['no_rumah'] ?></td>
                                        </tr>
                                        <tr>
                                            <th width="30%">Rt / Rw</th>
                                            <td width="2%">:</td>
                                            <td><?= $row['rt'] . ' / ' . $row['rw'] ?></td>
                                        </tr>
                                        <tr>
                                            <th width="30%">Kelurahan</th>
                                            <td width="2%">:</td>
                                            <td><?= $row['kelurahan'] ?></td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <!-- ROW-->

            </div>
        </section><!-- End Services Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include_once "template/ui/footer.php"; ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- MODAL EDIT PASSWORD -->
    <div class="modal fade" id="modal-edit-pw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold">Ubah Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="pass_lama">Password Lama</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="pass_lama" id="pass_lama">
                                <div class="input-group-append" id="btn_lama">
                                    <button type="button" class="btn btn-dark" onclick="lihatpass('pass_lama');" title="Tampilkan Password"><i class="fas fa-eye-slash"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass_lama">Password Baru</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="pass_baru" id="pass_baru">
                                <div class="input-group-append" id="btn_baru">
                                    <button type="button" class="btn btn-dark" onclick="lihatpass('pass_baru');" title="Tampilkan Password"><i class="fas fa-eye-slash"></i></button>
                                </div>
                            </div>
                            <small class="text-muted font-italic">*Password Minimal 8 Karakter</small>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button class="btn btn-primary text-white" type="submit" name="edit-pw">
                            <i class="fa fa-save"> Simpan</i>
                        </button>
                        <button class="btn btn-dark text-white" type="button" data-dismiss="modal">
                            <i class="fa fa-times"> Batal</i>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- // MODAL EDIT PASSWORD -->


    <?php include_once "template/ui/script.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://bapintar.banjarmasinkota.go.id/vendor/bjm-sso/bjm-sso.css">
	<script src="https://bapintar.banjarmasinkota.go.id/vendor/bjm-sso/bjm-sso.js"></script>
    <!-- <link rel="stylesheet"type="text/css" href="http://server.banjarmasinkota.go.id:8000/vendor/bjm-sso/bjm-sso.css">
	<script src="http://server.banjarmasinkota.go.id:8000/vendor/bjm-sso/bjm-sso.js"></script> -->
    <script>
        function clickLogin() {
            var sso = new BjmSSO();
            sso.loginWindow(function(result) {
                console.log(result);
                if (result['status']) {
                    sendToServer(result);
                }
            });
        }

        function sendToServer(result) {
            var user = result['data']['user'];
            var token = result['data']['key'];
            var formData = new FormData();
            for ( var key in user ) {
                formData.append(key, user[key]);
            }
            formData.append('id_app', '<?php echo $_SESSION['id_masyarakat']; ?>');
            formData.append('id_sso', user['id']);
            formData.append('token', token);
            $.ajax({
                type: "POST",
                url: "sso/api-sync.php",
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(data, textStatus, jqXHR) {
                    // $(".is-invalid").removeClass("is-invalid");
                    if (data['status'] == true) {
                        location.reload();
                    }
                    else {
                        console.log(data['message']);
                        toastr.error(data['message']);
                    } 
                },
                error: function(data, textStatus, jqXHR) {
                    console.log(data);
                    console.log('Login Gagal!');
                },
            });
        }

        // LIHAT PASSWORD
        function lihatpass(id) {
            var getid = document.getElementById(id).id;
            let tipe = document.getElementById(id).type;

            if (getid == 'pass_lama') {
                if (tipe == 'password') {
                    document.getElementById(id).type = 'text';
                    document.getElementById('btn_lama').innerHTML =
                        '<button type="button" class="btn btn-success" onclick=lihatpass("pass_lama") title="Sembunyikan Password"><i class="fas fa-eye"></i></button>';
                } else {
                    document.getElementById(id).type = 'password';
                    document.getElementById('btn_lama').innerHTML =
                        '<button type="button" class="btn btn-dark" onclick=lihatpass("pass_lama"); title="Tampilkan Password"><i class="fas fa-eye-slash"></i></button>';
                }
            }

            if (getid == 'pass_baru') {
                if (tipe == 'password') {
                    document.getElementById(id).type = 'text';
                    document.getElementById('btn_baru').innerHTML =
                        '<button type="button" class="btn btn-success" onclick=lihatpass("pass_baru") title="Sembunyikan Password"><i class="fas fa-eye"></i></button>';
                } else {
                    document.getElementById(id).type = 'password';
                    document.getElementById('btn_baru').innerHTML =
                        '<button type="button" class="btn btn-dark" onclick=lihatpass("pass_baru"); title="Tampilkan Password"><i class="fas fa-eye-slash"></i></button>';
                }
            }

            if (getid == 'pass') {
                if (tipe == 'password') {
                    document.getElementById(id).type = 'text';
                    document.getElementById('btn_pass').innerHTML =
                        '<button type="button" class="btn btn-success" onclick=lihatpass("pass") title="Sembunyikan Password"><i class="fas fa-eye"></i></button>';
                } else {
                    document.getElementById(id).type = 'password';
                    document.getElementById('btn_pass').innerHTML =
                        '<button type="button" class="btn btn-dark" onclick=lihatpass("pass"); title="Tampilkan Password"><i class="fas fa-eye-slash"></i></button>';
                }
            }
        }
    </script>

</body>

</html>

<?php
if (isset($_POST['edit-pw'])) {
    $id_masyarakat = $_SESSION['id_masyarakat'];
    $pass_lama     = $_POST['pass_lama'];
    $pass_baru     = $_POST['pass_baru'];

    if (empty($pass_lama) || empty($pass_baru)) {
        echo "
            <script type='text/javascript'>   
                toastr.error('Password tidak boleh kosong!');  
                $('#modal-edit-pw').modal('show');
            </script>";
    } elseif (strlen($pass_lama) < 8 || strlen($pass_baru) < 8) {
        echo "
            <script type='text/javascript'>    
                toastr.error('Password minimal 8 karakter!');   
                $('#modal-edit-pw').modal('show');
            </script>";
    } else {

        $options = [
            'cost' => 10,
        ];
        $password_baru = password_hash($pass_baru, PASSWORD_DEFAULT, $options);

        $cek_pass_lama = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$id_masyarakat'");

        if (mysqli_num_rows($cek_pass_lama) === 1) {
            $data = mysqli_fetch_array($cek_pass_lama);
            if (password_verify($pass_lama, $data["password"])) {
                $ubah = $koneksi->query("UPDATE masyarakat SET password = '$password_baru' WHERE id_masyarakat = '$id_masyarakat'");
                if ($ubah) {
                    echo "
                    <script type='text/javascript'>
                        setTimeout(function () {    
                            toastr.success('Password berhasil diubah');     
                        },10);
                        window.setTimeout(function(){ 
                            window.location.replace('" . base_url('profil') . "');
                        } ,1500);   
                    </script>";
                }
            } else {
                echo "
            <script type='text/javascript'>   
                toastr.error('Password lama yang anda masukkan salah!');
                $('#modal-edit-pw').modal('show');
            </script>";
            }
        } else {
            echo "
            <script type='text/javascript'>   
                toastr.error('Password lama yang anda masukkan salah!');
                $('#modal-edit-pw').modal('show');
            </script>";
        }
    }
}
?>