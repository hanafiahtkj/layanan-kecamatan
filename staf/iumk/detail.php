<!DOCTYPE html>
<html>

<?php
include_once "../../config/config.php";
include_once "../../config/auth-staf.php";
include_once "../../config/bulan.php";
include_once "../../template/head.php";

$id   = encryptor('decrypt', $_GET['id']);
$data = $koneksi->query("SELECT * FROM iumk WHERE id_iumk = '$id'");
$row  = $data->fetch_array();

$po = $koneksi->query("SELECT * FROM posisi_berkas WHERE id_posisi = '$row[id_posisi]'")->fetch_array();

?>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once "../../template/navbar.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once "../../template/sidebar.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Detail Surat Izin Usaha Mikro dan Kecil</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">IUMK</li>
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
                                        <?php if ($row['id_posisi'] == 4 and $row['status'] == 'Dalam Proses') : ?>
                                            <button class="btn bg-gradient-primary btn-sm dropdown-toggle" data-toggle="dropdown" title="Print"><i class="fa fa-print"> Print</i></button>
                                            <div class="dropdown-menu">
                                                <a href="print-preview?id=<?= encryptor('encrypt', $row['id_iumk']); ?>&f=1" class="dropdown-item" target="blank">Print Dengan Foto</a>
                                                <a href="print-preview?id=<?= encryptor('encrypt', $row['id_iumk']); ?>&f=0" class="dropdown-item" target="blank">Print Tanpa Foto</a>
                                            </div>

                                            <button class="btn bg-gradient-success btn-tool" data-toggle="modal" data-target="#modal-verif"><i class="fa fa-edit"> Ubah Status</i></button>


                                        <?php endif ?>
                                        <a href="<?= base_url('staf/iumk') ?>" class="btn bg-gradient-secondary btn-tool"><i class="fa fa-arrow-left"> Kembali</i></a>
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
                                                        date('d', strtotime($row['tanggal'])) . " " . $bln[date('m', strtotime($row['tanggal']))] . " " . date('Y', strtotime($row['tanggal']));
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Nomor IUMK</th>
                                                <td width="2%">:</td>
                                                <td>
                                                    <?php
                                                    if ($row['id_posisi'] != 4) {
                                                        echo "-";
                                                    } else {
                                                        echo $row['nomor_iumk'];
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
                                                <th width="30%">Nomor KTP</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['nomor_ktp'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Alamat</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['alamat'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">No. Telepon</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['no_telp'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Nama Perusahaan</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['nama_perusahaan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Bentuk Perusahaan</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['bentuk_perusahaan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">NPWP</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['npwp']; ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Kegiatan Usaha</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['kegiatan_usaha'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Sarana Usaha</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['sarana_usaha'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Alamat Usaha</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['alamat_usaha'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Jumlah Modal Usaha</th>
                                                <td width="2%">:</td>
                                                <td><?= "Rp. " . number_format($row['jumlah_modal_usaha'], '0', ',', '.') . " -," ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Nomor Pendaftaran</th>
                                                <td width="2%">:</td>
                                                <td><?= $row['nomor_pendaftaran'] ?></td>
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

                            <!-- FOTO PEMOHON -->
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Foto Pemohon</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <a href="<?= base_url() ?>/assets/iumk_foto_pemohon/<?= $row['foto_pemohon'] ?>" title="Download Foto" download="">
                                            <img class="profile-user-img img-fluid" style="width: 4cm; height: 6cm;" src="<?= base_url() ?>/assets/iumk_foto_pemohon/<?= $row['foto_pemohon'] ?>" alt="User profile picture">
                                        </a>
                                    </div>
                                </div>
                            </div>

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
                                        $lampiran = $koneksi->query("SELECT * FROM lampiran_iumk_file as ls LEFT JOIN lampiran_iumk as l ON ls.id_lampiran = l.id_lampiran WHERE ls.nomor_iumk = '$row[nomor_iumk]'");
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
                                                        <a href="<?= base_url() ?>/assets/iumk/<?= $file['file'] ?>" class="input-group-text bg-gradient-info" title="Preview" data-toggle="lightbox" data-title="Preview" data-gallery="gallery"><i class="fas fa-eye"></i></a>
                                                    <?php endif ?>

                                                    <a href="<?= base_url() ?>/assets/iumk/<?= $file['file'] ?>" class="input-group-text bg-gradient-purple" title="Download" download=""><i class="fas fa-download"></i></a>
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
                                    <div class="table-responsive">
                                        <?= $row['peraturan'] ?>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- MODEL UPDATE STATUS -->
        <div class="modal fade" id="modal-verif">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Status IUMK</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form method="post" action="verifikasi">
                        <div class="modal-body">

                            <input type="text" name="id_iumk" value="<?= $row['id_iumk']; ?>" hidden>

                            <div class="form-group">
                                <label for="status" class="col-sm-4 col-form-label">Status</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="status" value="Selesai" required readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                                <div class="col-sm-12">
                                    <textarea name="keterangan" id="keterangan" rows="2" class="form-control" required></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="verif" class="btn bg-gradient-primary"><i class="fa fa-check"> Ubah Status</i></button>
                            <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal"><i class="fa fa-times"> Batal</i></button>
                        </div>

                    </form>

                </div>
                <!-- /.modal-content -->
            </div>
        </div>


        <div class="modal fade" id="modal-preview">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Preview</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body modal-file">

                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <?php include_once "../../template/footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include_once "../../template/script.php"; ?>

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
                        $(".modal-file").html(html);
                    }
                );
            });
        });
    </script>

</body>

</html>