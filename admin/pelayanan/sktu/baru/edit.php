<!DOCTYPE html>
<html>

<?php
include_once "../../../../config/config.php";
include_once "../../../../config/bulan.php";
include_once "../../../../config/auth-admin.php";
include_once "../../../../template/head.php";

$id   = encryptor('decrypt', $_GET['id']);
$data = $koneksi->query("SELECT * FROM sktu_baru WHERE id_sktu = '$id'");
$row  = $data->fetch_array();
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
                            <h1 class="m-0 text-dark">Edit Data Surat Keterangan Tempat Usaha</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Pelayanan</li>
                                <li class="breadcrumb-item active">SKTU</li>
                                <li class="breadcrumb-item active">Baru</li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- left column -->
                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Horizontal Form -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Form Edit SKTU</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: azure;">

                                        <div class="form-group row">
                                            <label for="tgl" class="col-sm-2 col-form-label">Tanggal Permohonan</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tgl" name="tgl" value="<?= date('Y-m-d', strtotime($row['tgl'])); ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nomor_sktu" class="col-sm-2 col-form-label">Nomor</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_sktu" name="nomor_sktu" value=" <?php
                                                                                                                                    if ($row['id_posisi'] != 4) {
                                                                                                                                        echo "-";
                                                                                                                                    } else {
                                                                                                                                        echo $row['nomor_sktu'];
                                                                                                                                    }
                                                                                                                                    ?>" readonly>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="nama_pemohon" class="col-sm-2 col-form-label">Nama Pemohon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" required readonly value="<?= $row['nama_pemohon']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telpon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="no_telp" name="no_telp" onkeypress="return Angkasaja(event)" required value="<?= $row['no_telp']; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required value="<?= $row['nama_perusahaan']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat_perusahaan" class="col-sm-2 col-form-label">Alamat Perusahaan</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" rows="3" required><?= $row['alamat_perusahaan']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_pimpinan_perusahaan" class="col-sm-2 col-form-label">Nama Pimpinan Perusahaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_pimpinan_perusahaan" name="nama_pimpinan_perusahaan" required value="<?= $row['nama_pimpinan_perusahaan']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat_kediaman" class="col-sm-2 col-form-label">Alamat Kediaman</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="alamat_kediaman" id="alamat_kediaman" rows="3" required readonly><?= $row['alamat_kediaman']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="kegiatan_usaha" class="col-sm-2 col-form-label">Kegiatan Usaha</label>
                                            <div class="col-sm-5">
                                                <select name="kegiatan_usaha" id="kegiatan_usaha" class="form-control select2" data-placeholder="Pilih" required style="width: 100%;">
                                                    <option value=""></option>
                                                    <?php
                                                    $kegiatan = $koneksi->query("SELECT * FROM kegiatan_usaha ORDER BY kegiatan_usaha ASC");
                                                    foreach ($kegiatan as $ku) {
                                                    ?>
                                                        <option value="<?= $ku['kegiatan_usaha']; ?>" <?php if ($row['kegiatan_usaha'] == $ku['kegiatan_usaha']) {
                                                                                                            echo "selected";
                                                                                                        } ?>><?= $ku['kegiatan_usaha']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Masa Berlaku</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control datepicker" id="masa_berlaku_awal" name="masa_berlaku_awal" value="<?= $row['masa_berlaku_awal'] ?>">
                                            </div>
                                            <label class="col-form-label">S/D</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" id="masa_berlaku_akhir" name="masa_berlaku_akhir" value="<?= $row['masa_berlaku_akhir'] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sifat" class="col-sm-2 col-form-label">Sifat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="sifat" value="<?= $row['sifat']; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="kelengkapan" class="col-sm-2 col-form-label">Kelengkapan</label>
                                            <div class="col-sm-5">
                                                <select name="kelengkapan" id="kelengkapan" class="form-control" data-placeholder="Pilih">
                                                    <option value="">--Pilih--</option>
                                                    <option value="Lengkap" <?php if ($row["kelengkapan"] == "Lengkap") {
                                                                                echo "selected";
                                                                            } ?>>Lengkap</option>
                                                    <option value="Tidak Lengkap" <?php if ($row["kelengkapan"] == "Tidak Lengkap") {
                                                                                        echo "selected";
                                                                                    } ?>>Tidak Lengkap</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Boleh Dikosongkan" value="<?= $row['keterangan'] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="posisi" class="col-sm-2 col-form-label">Posisi Berkas</label>
                                            <div class="col-sm-10">
                                                <select name="id_posisi" id="posisi" class="form-control" required>
                                                    <?php
                                                    $posisi = $koneksi->query("SELECT * FROM posisi_berkas ORDER BY id_posisi ASC");
                                                    foreach ($posisi as $po) {
                                                    ?>
                                                        <option value="<?= $po['id_posisi'] ?>" <?php if ($row['id_posisi'] == $po['id_posisi']) {
                                                                                                    echo "selected";
                                                                                                } ?>><?= $po['posisi'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-5">
                                                <select name="status" id="status" class="form-control" data-placeholder="Pilih">
                                                    <option value="Belum Diproses" <?php if ($row['status'] == "Belum Diproses") {
                                                                                        echo "selected";
                                                                                    } ?>>Belum Diproses</option>
                                                    <option value="Dalam Proses" <?php if ($row['status'] == "Dalam Proses") {
                                                                                        echo "selected";
                                                                                    } ?>>Dalam Proses</option>
                                                    <option value="Selesai" <?php if ($row['status'] == "Selesai") {
                                                                                echo "selected";
                                                                            } ?>>Selesai</option>
                                                </select>
                                            </div>
                                        </div>

                                        <?php if ($row['tgl_selesai'] == "0000-00-00" or is_null($row['tgl_selesai'])) { ?>
                                            <div class="form-group row" id="tglselesai" style="display: none;">
                                            </div>
                                        <?php } else { ?>
                                            <div class="form-group row">
                                                <label for="tgl_selesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control" name="tgl_selesai" value="<?= $row['tgl_selesai']; ?>">
                                                </div>
                                            </div>
                                        <?php } ?>

                                        <div class="form-group row">
                                            <label for="nama_camat" class="col-sm-2 col-form-label">Camat</label>
                                            <div class="col-sm-10">
                                                <?php $camat = $koneksi->query("SELECT * FROM camat WHERE status = 'Aktif'")->fetch_array(); ?>
                                                <input type="text" class="form-control" id="nama_camat" name="nama_camat" value="<?= $camat['nama_camat'] ?>" readonly>
                                                <input type="hidden" name="nip" value="<?= $camat['nip'] ?>" readonly>
                                                <input type="hidden" name="jabatan" value="<?= $camat['jabatan'] ?>" readonly>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                </div>
                                <!-- /.card -->

                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Lampiran <small style="color: yellow;">(*Kosongkan Lampiran Jika Tidak Diubah)</small></h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" style="background-color: azure;">

                                        <small style="color: red; font-style: italic; font-weight: bold;">
                                            *Upload File Dalam Format JPG / PNG / PDF <br>
                                            *Ukuran Maksimal File 1 Mb <br>
                                        </small>
                                        <hr>

                                        <?php
                                        $datalampiran = $koneksi->query("SELECT * FROM lampiran_sktu WHERE keterangan LIKE '%Baru%' ORDER BY id_lampiran ASC");
                                        foreach ($datalampiran as $lampiran) {
                                        ?>

                                            <div class="form-group row">
                                                <label><?= $lampiran['nama_lampiran'] ?></label>
                                                <div class="custom-file">
                                                    <input type="text" name="namafilelampiran" value="<?= $lampiran['nama_lampiran'] ?>" hidden>
                                                    <input type="file" class="custom-file-input val_file" name="file[]">
                                                    <input type="hidden" name="id_lampiran[]" value="<?= $lampiran['id_lampiran'] ?>">
                                                    <label class="custom-file-label">Choose File</label>
                                                </div>
                                            </div>

                                        <?php } ?>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/pelayanan/sktu') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
                                        <button type="submit" name="submit" class="btn bg-gradient-primary float-right mr-2"><i class="fa fa-save"> Simpan</i></button>
                                    </div>
                                    <!-- /.card-footer -->

                                </div>

                            </div>
                            <!--/.col (left) -->
                        </div>

                    </form>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

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
        // APPEND KOLOM INPUT TANGGAL SELESAI
        $('#status').on('change', function() {
            if (this.value == "Selesai") {
                $("#tglselesai").slideDown("fast");
                $("#tglselesai").append('<label class="col-sm-2 col-form-label">Tanggal Selesai</label><div class="col-sm-10"><input type="date" class="form-control" name="tgl_selesai" required></div>');
            } else {
                $("#tglselesai").slideUp("fast");
                $("#tglselesai").empty();
            }
        });

        // VALIDASI FILE UPLOAD
        $('.val_file').on('change', function() {
            var nf = this.files[0].name;
            var ext = this.files[0].type;

            // VALIDASI UKURAN FILE TIDAK LEBIH DARI 1 MB
            if (this.files[0].size > 1 * 1024 * 1024) {
                setTimeout(function() {
                    swal({
                        title: 'File ' + nf + ' Terlalu Besar !',
                        text: 'Silahkan Upload File Dengan Ukuran Maksimal 1 Mb',
                        type: 'warning',
                        timer: 3000,
                        showConfirmButton: true
                    });
                }, 10);
                this.value = "";
            }

            // VALIDAST EKSTENSION FILE UPLOAD
            if (ext != "image/jpeg" && ext != "image/png" && ext != "application/pdf") {
                setTimeout(function() {
                    swal({
                        title: 'Format File ' + nf + ' Tidak Diperbolehkan !',
                        text: 'Silahkan Upload File Format JPG / PNG / PDF',
                        type: 'warning',
                        timer: 3000,
                        showConfirmButton: true
                    });
                }, 10);
                this.value = "";
            }
        });
    </script>

    <?php
    if (isset($_POST['submit'])) {

        // AMBIL DASAR HUKUM SKTU
        $dataperaturan = $koneksi->query("SELECT * FROM peraturan_sktu")->fetch_array();

        $nama_pemohon             = $_POST['nama_pemohon'];
        $no_telp                  = $_POST['no_telp'];
        $tgl                      = $_POST['tgl'] . " " . date('H:i:s');;
        $peraturan                = $dataperaturan['peraturan'];
        $nama_perusahaan          = $_POST['nama_perusahaan'];
        $alamat_perusahaan        = $_POST['alamat_perusahaan'];
        $nama_pimpinan_perusahaan = $_POST['nama_pimpinan_perusahaan'];
        $alamat_kediaman          = $_POST['alamat_kediaman'];
        $kegiatan_usaha           = $_POST['kegiatan_usaha'];
        $masa_berlaku_awal        = $_POST['masa_berlaku_awal'];
        $masa_berlaku_akhir       = $_POST['masa_berlaku_akhir'];
        $sifat                    = $_POST['sifat'];
        $nama_camat               = $_POST['nama_camat'];
        $nip                      = $_POST['nip'];
        $jabatan                  = $_POST['jabatan'];
        $kelengkapan              = $_POST['kelengkapan'];
        $keterangan               = $_POST['keterangan'];
        $id_posisi                = $_POST['id_posisi'];
        $status                   = $_POST['status'];
        if ($status == "Selesai" and $row['nomor_sktu'] == '-') {
            $ceknosktu  = $koneksi->query("SELECT * FROM nomor_urut_sktu")->fetch_array();
            $nourut     = $ceknosktu['nomor_urut'];
            $b_romawi   = $bulan_romawi[date('m')];
            $nomor_sktu = "513/" . sprintf('%03s', $nourut) . "/SKTU-" . $b_romawi . "/CAM-BU/" . date('Y');

            // no urut sktu++
            $notambah = $nourut + 1;

            if ($notambah < '009') {
                $nourutbaru = '00' . $notambah;
            } elseif ($nnotambaho < '099') {
                $nourutbaru = '0' . $notambah;
            } else {
                $nourutbaru = $notambah;
            }
            $submit = $koneksi->query("UPDATE nomor_urut_sktu SET nomor_urut = '$nourutbaru'");
            //-- no urut sktu++

            $kelengkapan        = "Lengkap";
            $masa_berlaku_awal  = date('Y-m-d');
            $masa_berlaku_akhir = date('Y-m-d', strtotime('+1 year'));
            $tgl_selesai        = $_POST['tgl_selesai'];
            $id_posisi          = 4;
        } elseif ($status == "Selesai") {
            $nomor_sktu         = $row['nomor_sktu'];
            $kelengkapan        = "Lengkap";
            $masa_berlaku_awal  = $_POST['masa_berlaku_awal'];
            $masa_berlaku_akhir = $_POST['masa_berlaku_akhir'];
            $tgl_selesai        = $_POST['tgl_selesai'];
            $id_posisi          = 4;
        } else {
            $nomor_sktu  = $row['nomor_sktu'];
            $tgl_selesai = null;
            // $id_posisi   = 1;
        }


        $submit = $koneksi->query("UPDATE sktu_baru SET
            nomor_sktu               = '$nomor_sktu', 
            nama_pemohon             = '$nama_pemohon', 
            no_telp                  = '$no_telp', 
            tgl                      = '$tgl', 
            peraturan                = '$peraturan', 
            nama_perusahaan          = '$nama_perusahaan', 
            alamat_perusahaan        = '$alamat_perusahaan', 
            nama_pimpinan_perusahaan = '$nama_pimpinan_perusahaan',
            alamat_kediaman          = '$alamat_kediaman',
            kegiatan_usaha           = '$kegiatan_usaha',
            masa_berlaku_awal        = '$masa_berlaku_awal',
            masa_berlaku_akhir       = '$masa_berlaku_akhir',
            nama_camat               = '$nama_camat',
            nip                      = '$nip',
            jabatan                  = '$jabatan',
            kelengkapan              = '$kelengkapan',
            keterangan               = '$keterangan',
            tgl_selesai              = '$tgl_selesai',
            id_posisi                = '$id_posisi',
            status                   = '$status'
            WHERE id_sktu            = '$id'
            ");

        if ($submit) {


            $gambar_arr    = array();
            $filelama      = array();
            $idl           = $_POST['id_lampiran'];
            $hitungidl     = count($idl);

            $event = "";

            for ($i = 0; $i < $hitungidl; $i++) {

                $file          = $_FILES['file']['name'][$i];

                if (!empty($file)) {

                    $nama_lamp     = explode('.', $file);
                    $format_lamp   = end($nama_lamp);
                    $nama_lampiran = rand(1, 99999) . '.' . $format_lamp;

                    // tipe file
                    // $tipe_file = $_FILES['file']['type'][$i];
                    // ukuran file
                    // $size_file = $_FILES['file']['size'][$i];

                    // temporari file
                    $tmp_file  = $_FILES['file']['tmp_name'][$i];

                    $targer_dir = '../../../../assets/sktu/';
                    $target_file = $targer_dir . $nama_lampiran;

                    move_uploaded_file($tmp_file, $target_file);
                    $gambar_arr[] = $target_file;

                    // REPLACE FILE LAMA
                    $queryfilelama = $koneksi->query("SELECT * FROM lampiran_sktu_file WHERE id_sktu = '$id' AND keterangan = 'Baru'");
                    foreach ($queryfilelama as $fl) {
                        $filelama[] = $fl['file'];
                        if (file_exists($targer_dir . $filelama[$i])) {
                            unlink($targer_dir . $filelama[$i]);
                        }
                    }
                    $koneksi->query("UPDATE lampiran_sktu_file SET file = '$nama_lampiran' WHERE id_lampiran = '$idl[$i]' AND id_sktu = '$id' AND keterangan = 'Baru'");
                    $event .= "upload berhasil";
                } else {
                    $event .= "Gambar Tidak Diubah";
                }
            }

            if (!empty($event)) {
                $koneksi->query("UPDATE riwayat_tgl_sktu SET nomor_sktu = '$nomor_sktu', tgl_dibuat = '$tgl', terakhir_diperpanjang = '$masa_berlaku_akhir' WHERE id_sktu = '$id' AND nomor_sktu = '$row[nomor_sktu]'");
                $_SESSION['pesan'] = "Data SKTU Diubah";
                echo "<script>window.location.replace('../');</script>";
            }
        }
    }
    ?>

</body>

</html>