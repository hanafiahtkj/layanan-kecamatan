<!DOCTYPE html>
<html lang="en">

<?php
include_once "../../config/config.php";
include_once "../../config/auth-mas.php";
include_once "../../config/bulan.php";
include_once "../../template/ui/head.php";

$idm      = $_SESSION['id_masyarakat'];
$data_mas = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$idm'")->fetch_array();

?>
<style>
    .warna-hover :hover {
        background-color: lightskyblue;
        cursor: pointer;
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <?php include_once "../../template/ui/header.php"; ?>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Surat Izin Usaha Mikro dan Kecil</h2>
                    <ol>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li>IUMK</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section class="contact graform">
            <div class="container-fluid">

                <div class="section-title">
                    <h2>Data Surat Izin Usaha Mikro dan Kecil</h2>
                    <!-- <p>Pembuatan Izin Usaha Mikro dan Kecil</p> -->
                </div>

                <!-- ROW -->
                <div class="row">

                    <div class="col-md-12">

                        <?php
                        $kondisi = "";
                        $data = $koneksi->query("SELECT * FROM iumk WHERE id_masyarakat = '$idm' ORDER BY id_iumk DESC");
                        if (mysqli_num_rows($data)) {

                            // $row = $data->fetch_array();
                            foreach ($data as $row) {
                                if ($row['kelengkapan'] == "Tidak Lengkap") {
                                    // $kondisi .= "true";
                        ?>

                                    <div class="alert" style="background-color: crimson; color: white; font-size: 20px;">
                                        <i class="fa fa-exclamation-triangle"> Notifikasi</i>
                                        <p>
                                            Berkas "<?= $row['nama_perusahaan']; ?>" tidak disetujui dengan keterangan : <br>
                                            "<?= $row['keterangan']; ?>" <br>

                                            Silahkan klik tombol "<i class="fa fa-edit"></i>" pada tabel untuk memperbaiki berkas permohonan
                                        </p>
                                    </div>

                            <?php }
                            } ?>

                            <div class="card">
                                <div class="card-header">
                                    <div class="card-tools">
                                        <a href="input-iumk" class="btn btn-primary btn-tool"><i class="fa fa-plus-square"> Buat Baru</i></a>
                                    </div>
                                </div>

                                <div class="card-body">

                                    <!-- <div class="alert alert-info">
                                        *Klik tabel untuk melihat detail
                                    </div> -->

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="text-center thead-light">
                                                <tr>
                                                    <th style="vertical-align: middle;">No</th>
                                                    <th style="vertical-align: middle;">Tanggal Permohonan</th>
                                                    <th style="vertical-align: middle;">Nama Pemohon</th>
                                                    <th style="vertical-align: middle;">Nama Perusahaan</th>
                                                    <th style="vertical-align: middle;">Posisi Berkas</th>
                                                    <th style="vertical-align: middle;">Status</th>
                                                    <th style="vertical-align: middle;">Keterangan</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody class="warna-hover">
                                                <?php
                                                foreach ($data as $r) :
                                                    $po  = $koneksi->query("SELECT * FROM posisi_berkas WHERE id_posisi = '$r[id_posisi]'")->fetch_array();
                                                ?>
                                                    <tr>
                                                        <td align="center"><?= $no++; ?></td>
                                                        <td align="center">
                                                            <?=
                                                                date('d', strtotime($r['tanggal'])) . " " .
                                                                    $bln[date('m', strtotime($r['tanggal']))] . " " .
                                                                    date('Y', strtotime($r['tanggal']));
                                                            ?>
                                                        </td>
                                                        <td><?= $r['nama_pemohon']; ?></td>
                                                        <td><?= $r['nama_perusahaan']; ?></td>
                                                        <td><?= $po['posisi']; ?></td>
                                                        <td>
                                                            <?php
                                                            if ($r['status'] == "Belum Diproses") {
                                                                echo "<span class='badge badge-danger'>" . $r['status'] . "</span>";
                                                            } elseif ($r['status'] == "Dalam Proses") {
                                                                echo "<span class='badge badge-warning'>" . $r['status'] . "</span>";
                                                            } else {
                                                                echo "<span class='badge badge-success'>" . $r['status'] . "</span>";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td><?= $r['keterangan']; ?></td>
                                                        <td align="center" width="10%">
                                                            <button id="detail" data-id="<?= encryptor('encrypt', $r['id_iumk']) ?>" class="btn btn-primary btn-sm" title="Lihat Detail Berkas">
                                                                <i class="fa fa-eye"></i>
                                                            </button>
                                                            <?php if ($r['kelengkapan'] == "Tidak Lengkap") : ?>
                                                                <a href="edit-iumk?id=<?= encryptor('encrypt', $r['id_iumk']) ?>" class="btn btn-danger btn-sm" title="Perbaiki Berkas">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            <?php endif ?>
                                                        </td>
                                                    </tr>

                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>

                                <?php } else { ?>

                                    <div class="alert alert-info" role="alert">
                                        <i class="fa fa-info-circle">
                                            ANDA BELUM MENGAJUKAN PEMBUATAN BERKAS, KLIK TOMBOL DI BAWAH INI UNTUK MEMBUAT SURAT IZIN USAHA MIKRO DAN KECIL
                                        </i>
                                    </div>
                                    <a href="input-iumk" class="btn btn-primary btn-lg">Buat IUMK</a>
                                <?php } ?>

                                </div>
                            </div>

                    </div>

                </div>
                <!-- ROW-->

                <!-- </div> -->
        </section><!-- End Services Section -->

    </main><!-- End #main -->



    <!-- MODAL DETAIL -->
    <div class="modal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog fadeIn animated modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: whitesmoke;">
                    <h5 class="modal-title">Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="data-detail"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>



    <!-- ======= Footer ======= -->
    <?php include_once "../../template/ui/footer.php"; ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


    <?php include_once "../../template/ui/script.php"; ?>


    <script type="text/javascript">
        $(document).on('click', '#detail', function(e) {
            e.preventDefault();
            $(".modal").modal('show');
            $.post('request.php', {
                    id: $(this).attr('data-id')
                },
                function(html) {
                    $("#data-detail").html(html);
                }
            );
        });

        // $(document).ready(function() {
        //     $("#tabledata #tbody tr td").on('click', function(e) {
        //         var id = $(this).attr("id");
        //         $('.modal').modal('toggle');

        //     });
        // });
    </script>


</body>

</html>