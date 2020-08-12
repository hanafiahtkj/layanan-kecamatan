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
                    <h2>Surat Keterangan Tempat Usaha</h2>
                    <ol>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li>SKTU</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services graform">
            <div class="container-fluid">

                <div class="section-title">
                    <h2>Informasi Surat Keterangan Tempat Usaha</h2>
                    <!-- <p>Pembuatan SKTU</p> -->
                </div>

                <!-- ROW -->
                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-tabs">
                            <div class="card-header p-0 pt-1" style="background-color: whitesmoke; color: white;">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Baru</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">
                                            Perpanjangan
                                            <?php if ($jmlnotifsktuppj != 0) : ?>
                                                <sup class="badge badge-danger" style="color: white;"><?= $jmlnotifsktuppj; ?></sup>
                                            <?php endif ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">

                                    <!-- TAB SKTU BARU -->
                                    <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                        <?php
                                        $data = $koneksi->query("SELECT * FROM sktu_baru WHERE id_masyarakat = '$idm' ORDER BY id_sktu DESC");
                                        if (mysqli_num_rows($data)) {

                                            $row = $data->fetch_array();
                                            if ($row['kelengkapan'] == "Tidak Lengkap") {
                                        ?>
                                                <div class="alert" style="background-color: crimson; color: white; font-size: 20px;">
                                                    <i class="fa fa-exclamation-triangle"> Notifikasi</i>
                                                    <p>
                                                        Berkas "<?= $row['nama_perusahaan']; ?>" tidak disetujui dengan keterangan : <br>
                                                        "<?= $row['keterangan']; ?>" <br>

                                                        Silahkan klik tombol "<i class="fa fa-edit"></i>" pada tabel untuk memperbaiki berkas permohonan
                                                    </p>
                                                </div>

                                            <?php } ?>

                                            <!-- <div class="alert alert-info">
                                                *Klik tabel untuk melihat detail
                                            </div> -->

                                            <a href="input-sktu-baru" class="btn btn-primary mb-3"><i class="fa fa-plus-square"> Buat Baru</i></a>

                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead class="text-center thead-light">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Tanggal Permohonan</th>
                                                            <th>Nama Pemohon</th>
                                                            <th>Nama Perusahaan</th>
                                                            <th>Posisi Berkas</th>
                                                            <th>Status</th>
                                                            <th>Keterangan</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="warna-hover">
                                                        <?php
                                                        foreach ($data as $r) {
                                                            $po = $koneksi->query("SELECT * FROM posisi_berkas WHERE id_posisi = '$r[id_posisi]'")->fetch_array();
                                                        ?>
                                                            <tr>
                                                                <td align="center"><?= $no++; ?></td>
                                                                <td align="center">
                                                                    <?=
                                                                        date('d', strtotime($r['tgl'])) . " " .
                                                                            $bln[date('m', strtotime($r['tgl']))] . " " .
                                                                            date('Y', strtotime($r['tgl']));
                                                                    ?>
                                                                </td>
                                                                <td><?= $r['nama_pemohon']; ?></td>
                                                                <td><?= $r['nama_perusahaan']; ?></td>
                                                                <td align="center"><?= $po['posisi']; ?></td>
                                                                <td align="center">
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
                                                                    <button id="detail" data-id="<?= encryptor('encrypt', $r['id_sktu']) ?>" class="btn btn-primary btn-sm" title="Lihat Detail Berkas">
                                                                        <i class="fa fa-eye"></i>
                                                                    </button>
                                                                    <?php if ($r['kelengkapan'] == "Tidak Lengkap") : ?>
                                                                        <a href="edit-sktu-baru?id=<?= encryptor('encrypt', $r['id_sktu']) ?>" class="btn btn-danger btn-sm" title="Perbaiki Berkas">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                    <?php endif ?>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>

                                        <?php } else { ?>

                                            <div class="alert alert-info" role="alert">
                                                <i class="fa fa-info-circle">
                                                    ANDA BELUM MENGAJUKAN PEMBUATAN SKTU, KLIK TOMBOL DI BAWAH INI UNTUK MEMBUAT SKTU BARU
                                                </i>
                                            </div>
                                            <a href="input-sktu-baru" class="btn btn-primary btn-lg">Buat SKTU Baru</a>
                                        <?php } ?>
                                    </div>



                                    <!-- TAB SKTU PERPANJANGAN -->
                                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                        <?php
                                        $data1 = $koneksi->query("SELECT * FROM riwayat_tgl_sktu WHERE id_masyarakat = '$idm'");
                                        foreach ($data1 as $r1) {
                                            $ceknotif = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE nomor_sktu = '$r1[nomor_sktu]' AND id_masyarakat = '$r1[id_masyarakat]'");
                                            $rcek = $ceknotif->fetch_array();
                                            if (mysqli_num_rows($ceknotif) === 0) {
                                                $ambilidsktu = $koneksi->query("SELECT * FROM sktu_baru WHERE nomor_sktu = '$r1[nomor_sktu]'")->fetch_array();
                                            } else {
                                                $ambilidsktu = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE nomor_sktu = '$r1[nomor_sktu]'")->fetch_array();
                                            }

                                            if (mysqli_num_rows($ceknotif) === 0) {

                                                if (!empty($r1['terakhir_diperpanjang']) and $r1['terakhir_diperpanjang'] != '0000-00-00') {
                                                    $masa_berlaku = $r1['terakhir_diperpanjang'];
                                                    $tgl_sekarang = date('Y-m-d');
                                                    $selisih      = strtotime($masa_berlaku) - strtotime($tgl_sekarang);
                                                    $selisih_hari = $selisih / (60 * 60 * 24);
                                                    $batas_perpanjangan = date('Y-m-d', strtotime('+6 month', strtotime($masa_berlaku)));
                                                    // var_dump($batas_perpanjangan);
                                                    if ($selisih_hari <= 30 and $selisih_hari > 0) {
                                                        // $ubah = $koneksi->query("UPDATE riwayat_tgl_sktu SET log_status = '0' WHERE id_riwayat = '$r1[id_riwayat]'");
                                        ?>
                                                        <div class="alert alert-info" style="font-size: 20px;" role="alert">
                                                            <i class="fas fa-bullhorn">
                                                                <p>
                                                                    Masa Berlaku SKTU Dengan Nomor "<u><?= $ambilidsktu['nomor_sktu']; ?></u>" Akan Berakhir <?= $selisih_hari; ?> Hari Lagi
                                                                </p>
                                                            </i> <br>
                                                            <a href="input-sktu-perpanjangan?id=<?= encryptor('encrypt', $ambilidsktu['id_sktu']); ?>" class="btn btn-primary">Perpanjang SKTU</a>
                                                        </div>

                                                    <?php } elseif ($tgl_sekarang >= $masa_berlaku and $tgl_sekarang <= $batas_perpanjangan) { ?>
                                                        <div class="alert alert-info" style="font-size: 20px;" role="alert">
                                                            <i class="fas fa-bullhorn">
                                                                <p>
                                                                    Masa Berlaku SKTU Dengan Nomor "<u><?= $ambilidsktu['nomor_sktu']; ?></u>" Telah Berakhir Pada Tanggal <u><?= tgl_indo($r1['terakhir_diperpanjang']); ?></u>, Batas Waktu Perpanjangan Paling Lambat 6 bulan, Jika Tidak Diperpanjang Dalam Waktu 6 Bulan Maka Diwajibkan Mengajukan Pembuatan SKTU Baru.
                                                                </p>
                                                            </i> <br>
                                                            <a href="input-sktu-perpanjangan?id=<?= encryptor('encrypt', $ambilidsktu['id_sktu']); ?>" class="btn btn-primary">Perpanjang SKTU</a>
                                                        </div>

                                                    <?php } elseif ($tgl_sekarang >= $batas_perpanjangan) { ?>
                                                        <div class="alert alert-info" style="font-size: 20px;" role="alert">
                                                            <i class="fas fa-bullhorn">
                                                                <p>
                                                                    Masa Berlaku SKTU Dengan Nomor "<u><?= $ambilidsktu['nomor_sktu']; ?></u>" Telah Berakhir Pada Tanggal <u><?= tgl_indo($r1['terakhir_diperpanjang']); ?></u>, dan Masa Perpanjangan Telah Berakhir Pada <u><?= tgl_indo($batas_perpanjangan); ?></u>. Silahkan Buat Pengajuan SKTU Baru.
                                                                </p>
                                                            </i> <br>
                                                            <a href="input-sktu-baru" class="btn btn-primary">Buat SKTU Baru</a>
                                                        </div>

                                        <?php
                                                    }
                                                }
                                            }
                                        }

                                        ?>

                                        <?php
                                        $data = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE id_masyarakat = '$idm' ORDER BY id_sktu DESC");
                                        if (mysqli_num_rows($data)) {

                                            $row = $data->fetch_array();
                                            if ($row['kelengkapan'] == "Tidak Lengkap") {
                                        ?>
                                                <div class="alert" style="background-color: crimson; color: white; font-size: 20px;">
                                                    <i class="fa fa-exclamation-triangle"> Notifikasi</i>
                                                    <p>
                                                        Perpanjangan SKTU dengan nama perusahaan "<?= $row['nama_perusahaan']; ?>" tidak disetujui dengan keterangan : <br>
                                                        "<?= $row['keterangan']; ?>" <br>

                                                        Silahkan klik tombol "<i class="fa fa-edit"></i>" pada tabel untuk memperbaiki berkas permohonan
                                                    </p>
                                                </div>

                                            <?php } ?>


                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead class="text-center thead-light">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Tanggal Permohonan</th>
                                                            <th>Nama Pemohon</th>
                                                            <th>Nama Perusahaan</th>
                                                            <th>Posisi Berkas</th>
                                                            <th>Status</th>
                                                            <th>Keterangan</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="warna-hover">
                                                        <?php
                                                        $n1 = 1;
                                                        foreach ($data as $r) :
                                                            $po = $koneksi->query("SELECT * FROM posisi_berkas WHERE id_posisi = '$r[id_posisi]'")->fetch_array();
                                                        ?>
                                                            <tr>
                                                                <td align="center"><?= $n1++; ?></td>
                                                                <td align="center">
                                                                    <?=
                                                                        tgl_indo(date('Y-m-d', strtotime($r['tgl'])));
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
                                                                    <button id="detail1" data-id="<?= encryptor('encrypt', $r['id_sktu']) ?>" class="btn btn-primary btn-sm" title="Lihat Detail Berkas">
                                                                        <i class="fa fa-eye"></i>
                                                                    </button>
                                                                    <?php if ($r['kelengkapan'] == "Tidak Lengkap") : ?>
                                                                        <a href="edit-sktu-perpanjangan?id=<?= encryptor('encrypt', $r['id_sktu']) ?>" class="btn btn-danger btn-sm" title="Perbaiki Berkas">
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
                                                    BELUM ADA PERPANJANGAN SKTU
                                                </i>
                                            </div>

                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>


                </div>

            </div>
            <!-- ROW-->
            </div>
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

    <script>
        $(document).on('click', '#detail', function(e) {
            e.preventDefault();
            $(".modal").modal('show');
            $.post('req-sktu-baru.php', {
                    id: $(this).attr('data-id')
                },
                function(html) {
                    $("#data-detail").html(html);
                }
            );
        });

        $(document).on('click', '#detail1', function(e) {
            e.preventDefault();
            $(".modal").modal('show');
            $.post('req-sktu-ppj.php', {
                    id: $(this).attr('data-id')
                },
                function(html) {
                    $("#data-detail").html(html);
                }
            );
        });
    </script>


</body>

</html>