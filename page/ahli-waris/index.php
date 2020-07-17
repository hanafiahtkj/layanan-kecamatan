<!DOCTYPE html>
<html lang="en">

<?php
include_once "../../config/config.php";
include_once "../../config/bulan.php";
// include_once "../../config/auth-mas.php";
include_once "../../template/ui/head.php";

// $idm      = $_SESSION['id_masyarakat'];
// $data_mas = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$idm'")->fetch_array();

?>

<body>

    <!-- ======= Header ======= -->
    <?php include_once "../../template/ui/header.php"; ?>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Surat Pernyataan Ahli Waris</h2>
                    <ol>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li>Ahli Waris</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services graform">
            <div class="container-fluid">

                <div class="section-title">
                    <h2>Informasi Surat Pernyataan Ahli Waris</h2>
                    <!-- <p>Daftar Pemohon</p> -->
                </div>

                <!-- ROW -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="example1">
                                        <thead class="thead-dark">
                                            <tr align="center">
                                                <th>No</th>
                                                <th>Tanggal Permohonan</th>
                                                <th>Kelurahan</th>
                                                <th>Nama Almarhum</th>
                                                <th>Nama Ahli Waris</th>
                                                <th>Tanggal Selesai</th>
                                                <th>Posisi Berkas</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <a href="#">
                                            <tbody style="background-color: azure">
                                                <?php
                                                $data = $koneksi->query("SELECT * FROM ahli_waris ORDER BY id_ahli_waris DESC");
                                                foreach ($data as $row) {
                                                    $po = $koneksi->query("SELECT * FROM posisi_berkas WHERE id_posisi = '$row[id_posisi]'")->fetch_array();
                                                ?>

                                                    <tr align="center">
                                                        <td width="5%"><?= $no++; ?></td>
                                                        <td width="15%">
                                                            <?=
                                                                tgl_indo($row['tgl_permohonan']);
                                                            ?>
                                                        </td>
                                                        <td><?= $row['kelurahan'] ?></td>
                                                        <td align="left"><?= $row['nama_almarhum'] ?></td>
                                                        <td align="left"><?= $row['nama_ahli_waris'] ?></td>
                                                        <td width="15%">
                                                            <?php
                                                            if ($row['tgl_selesai']) {
                                                                echo
                                                                    date('d', strtotime($row['tgl_selesai'])) . " " .
                                                                        $bln[date('m', strtotime($row['tgl_selesai']))] . " " .
                                                                        date('Y', strtotime($row['tgl_selesai']));
                                                            } else {
                                                                echo "-";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td width="15%"><?= $po['posisi'] ?></td>
                                                        <td width="10%">
                                                            <?php
                                                            if ($row['status'] == "Belum Diproses") {
                                                                echo "<span class='badge badge-danger'>" . $row['status'] . "</span>";
                                                            } elseif ($row['status'] == "Dalam Proses") {
                                                                echo "<span class='badge badge-warning'>" . $row['status'] . "</span>";
                                                            } else {
                                                                echo "<span class='badge badge-success'>" . $row['status'] . "</span>";
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </a>
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
    <?php include_once "../../template/ui/footer.php"; ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


    <?php include_once "../../template/ui/script.php"; ?>


</body>

</html>