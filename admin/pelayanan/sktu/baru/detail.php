<!DOCTYPE html>
<html>

<?php
include_once "../../../../config/config.php";
include_once "../../../../config/auth-admin.php";
include_once "../../../../config/bulan.php";
include_once "../../../../template/head.php";

$id   = encryptor('decrypt', $_GET['id']);
$data = $koneksi->query("SELECT * FROM sktu_baru WHERE id_sktu = '$id'");
$row  = $data->fetch_array();

$po = $koneksi->query("SELECT * FROM posisi_berkas WHERE id_posisi = '$row[id_posisi]'")->fetch_array();
?>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once "../../../../template/navbar.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once "../../../../template/sidebar.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Detail Surat Keterangan Tempat Usaha Baru</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Pelayanan</li>
                                <li class="breadcrumb-item active">SKTU</li>
                                <li class="breadcrumb-item active">Baru</li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-8">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Form Detail Data</h3>
                                    <div class="card-tools">
                                        <a href="<?= base_url('admin/pelayanan/sktu') ?>" class="btn bg-gradient-secondary btn-tool"><i class="fa fa-arrow-left"> Kembali</i></a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tr>
                                                <th width="30%">Tanggal Permohonan</th>
                                                <td width="2%">:</td>
                                                <td>
                                                    <?=
                                                        date('d', strtotime($row['tgl'])) . " " . $bln[date('m', strtotime($row['tgl']))] . " " . date('Y', strtotime($row['tgl']));
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Nomor SKTU</th>
                                                <td width="2%">:</td>
                                                <td>
                                                    <?php
                                                    if ($row['id_posisi'] != 4) {
                                                        echo "-";
                                                    } else {
                                                        echo $row['nomor_sktu'];
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Nama Pemohon</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['nama_pemohon'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">No. Telpon</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['no_telp'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Nama Perusahaan</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['nama_perusahaan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Alamat Perusahaan</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['alamat_perusahaan'] . ' No. ' . $row['no_rumah'] . ' Rt. ' . $row['rt'] . ' Rw. ' . $row['rw'] . ' Kelurahan ' . $row['kelurahan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Nama Pimpinan Perusahaan</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['nama_pimpinan_perusahaan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Alamat Kediaman</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['alamat_kediaman'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Kegiatan Usaha</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['kegiatan_usaha'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Masa Berlaku</th>
                                                <td width="2%">:</td>
                                                <td>
                                                    <?php
                                                    if (($row['masa_berlaku_awal'] == "0000-00-00" or is_null($row['masa_berlaku_awal'])) and ($row['masa_berlaku_akhir'] == "0000-00-00" or is_null($row['masa_berlaku_akhir']))) {
                                                        echo "-";
                                                    } else {
                                                        echo tgl_indo($row['masa_berlaku_awal']) . " s/d " . tgl_indo($row['masa_berlaku_akhir']);
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Kelengkapan</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['kelengkapan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Keterangan</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['keterangan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Tanggal Selesai</th>
                                                <td width="2%">:</td>
                                                <td>
                                                    <?php
                                                    if ($row['tgl_selesai'] == "0000-00-00" or is_null($row['tgl_selesai'])) {
                                                        echo "-";
                                                    } else {
                                                        echo date('d', strtotime($row['tgl_selesai'])) . " " . $bln[date('m', strtotime($row['tgl_selesai']))] . " " . date('Y', strtotime($row['tgl_selesai']));
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Posisi Berkas</th>
                                                <td width="2%">:</td>
                                                <td><?= $po['posisi'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Status</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['status'] ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <!-- LAMPIRAN FILE -->
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Lampiran</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <?php
                                        $lampiran = $koneksi->query("SELECT * FROM lampiran_sktu_file as ls LEFT JOIN lampiran_sktu as l ON ls.id_lampiran = l.id_lampiran WHERE ls.id_sktu = '$row[id_sktu]' AND ls.keterangan = 'Baru'");
                                        foreach ($lampiran as $file) {
                                        ?>

                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" value="<?= $file['nama_lampiran'] ?>" title="<?= $file['nama_lampiran'] ?>" readonly>
                                                <div class="input-group-append">
                                                    <?php
                                                    $nama_lamp      = explode('.', $file['file']);
                                                    $format_lamp    = end($nama_lamp);
                                                    if ($format_lamp == 'pdf') :
                                                    ?>
                                                        <button data-id="<?= $file['file'] ?>" class="input-group-text bg-gradient-info lihatfile" title="Preview"><i class="fas fa-eye"></i></button>
                                                    <?php else : ?>
                                                        <a href="<?= base_url() ?>/assets/sktu/<?= $file['file'] ?>" class="input-group-text bg-gradient-info" title="Preview" data-toggle="lightbox" data-title="Preview" data-gallery="gallery"><i class="fas fa-eye"></i></a>
                                                    <?php endif ?>

                                                    <a href="<?= base_url() ?>/assets/sktu/<?= $file['file'] ?>" class="input-group-text bg-gradient-purple" title="Download" download=""><i class="fas fa-download"></i></a>
                                                </div>
                                            </div>

                                        <?php } ?>
                                    </div>
                                </div>
                            </div>


                            <!-- PERATURAN -->
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Dasar Hukum</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body" style="text-align: justify;">
                                    <ul class="list-unstyled">
                                        <?= $row['peraturan'] ?>
                                    </ul>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <div class="modal fade" id="modal-preview">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


        <?php include_once "../../../../template/footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include_once "../../../../template/script.php"; ?>

    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true,
                width: 1105,
                height: 750
            });
        });
    </script>

    <script>
        $(function() {
            $(document).on('click', '.lihatfile', function(e) {
                e.preventDefault();
                // $("#modal-preview").modal('show');
                $('#modal-preview').modal({
                    backdrop: 'static',
                    keyboard: false
                })
                $.post('view.php', {
                        id: $(this).attr('data-id')
                    },
                    function(html) {
                        $(".modal-body").html(html);
                    }
                );
            });
        });
    </script>

</body>

</html>