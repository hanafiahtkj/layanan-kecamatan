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
                                    <a href="edit-profil?id=<?= encryptor('encrypt', $row['id_masyarakat']) ?>" class="btn btn-primary btn-tool">
                                        <i class="fa fa-edit"> Edit Profil</i>
                                    </a>
                                    <!-- <a href="password-reset?id=<?= encryptor('encrypt', $row['id_masyarakat']) ?>" class="btn btn-danger btn-tool">
                                        <i class="fa fa-edit"> Reset Password</i>
                                    </a> -->
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
                                            <td><?= $row['rt'].' / '.$row['rw'] ?></td>
                                        </tr>
                                        <!-- <tr>
                                            <th width="30%">Kelurahan</th>
                                            <td width="2%">:</td>
                                            <td><?= $row['kelurahan'] ?></td>
                                        </tr> -->
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


    <?php include_once "template/ui/script.php"; ?>


</body>

</html>