<!DOCTYPE html>
<html>

<?php
include_once "../../../config/config.php";
include_once "../../../config/bulan.php";
include_once "../../../config/auth-admin.php";
include_once "../../../template/head.php";

$id   = encryptor('decrypt', $_GET['id']);
$data = $koneksi->query("SELECT * FROM iumk WHERE id_iumk = '$id'");
$row  = $data->fetch_array();
?>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once "../../../template/navbar.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once "../../../template/sidebar.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Edit Data Surat Izin Usaha Mikro dan Kecil</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Pelayanan</li>
                                <li class="breadcrumb-item active">IUMK</li>
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
                                        <h3 class="card-title">Form Edit IUMK</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: azure;">

                                        <div class="form-group row">
                                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control datepicker" id="tanggal" name="tanggal" value="<?= date('Y-m-d', strtotime($row['tanggal'])); ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nomor_iumk" class="col-sm-2 col-form-label">Nomor</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_iumk" name="nomor_iumk" value="<?= $row['nomor_iumk']; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_pemohon" class="col-sm-2 col-form-label">Nama Pemohon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" required readonly value="<?= $row['nama_pemohon']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nomor_ktp" class="col-sm-2 col-form-label">Nomor KTP</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" onkeypress="return Angkasaja(event)" maxlength="25" required value="<?= $row['nomor_ktp']; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="alamat" id="alamat" rows="3" required readonly><?= $row['alamat']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telpon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="no_telp" name="no_telp" onkeypress="return Angkasaja(event)" required maxlength="13" value="<?= $row['no_telp']; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required value="<?= $row['nama_perusahaan']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="bentuk_perusahaan" class="col-sm-2 col-form-label">Bentuk Perusahaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="bentuk_perusahaan" name="bentuk_perusahaan" required readonly value="<?= $row['bentuk_perusahaan']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="npwp" class="col-sm-2 col-form-label">NPWP</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="npwp" id="npwp" value="<?= $row['npwp']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="kegiatan_usaha" class="col-sm-2 col-form-label">Kegiatan Usaha</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="kegiatan_usaha" id="kegiatan_usaha" required value="<?= $row['kegiatan_usaha']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sarana_usaha" class="col-sm-2 col-form-label">Sarana Usaha</label>
                                            <div class="col-sm-10">
                                                <select name="sarana_usaha" id="sarana_usaha" class="form-control" required>
                                                    <option value="">--Pilih--</option>
                                                    <option value="Milik Sendiri" <?php if ($row['sarana_usaha'] == "Milik Sendiri") {
                                                                                        echo "selected";
                                                                                    } ?>>Milik Sendiri</option>
                                                    <option value="Pinjam Pakai" <?php if ($row['sarana_usaha'] == "Pinjam Pakai") {
                                                                                        echo "selected";
                                                                                    } ?>>Pinjam Pakai</option>
                                                    <option value="Sewa" <?php if ($row['sarana_usaha'] == "Sewa") {
                                                                                echo "selected";
                                                                            } ?>>Sewa</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat_usaha" class="col-sm-2 col-form-label">Alamat Usaha</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="alamat_usaha" id="alamat_usaha" rows="3" required><?= $row['alamat_usaha'] ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jumlah_modal_usaha" class="col-sm-2 col-form-label">Jumlah Modal Usaha</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="background-color: blue; color: white;">Rp</span>
                                                    </div>
                                                    <input type="text" name="jumlah_modal_usaha" id="jumlah_modal_usaha" class="form-control rupiah" required value="<?= $row['jumlah_modal_usaha']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nomor_pendaftaran" class="col-sm-2 col-form-label">Nomor Pendaftaran</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nomor_pendaftaran" id="nomor_pendaftaran" class="form-control" readonly value="<?= $row['nomor_pendaftaran']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Foto Pemohon</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="foto_pemohon" id="input-file-now-custom-2" class="dropify val_file" data-height="200" data-default-file="<?= base_url() ?>/assets/iumk_foto_pemohon/<?= $row['foto_pemohon']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="kelengkapan" class="col-sm-2 col-form-label">Kelengkapan</label>
                                            <div class="col-sm-5">
                                                <select name="kelengkapan" id="kelengkapan" class="form-control" data-placeholder="Pilih">
                                                    <option value="">--Pilih--</option>
                                                    <option value="Lengkap" <?php if ($row['kelengkapan'] == "Lengkap") {
                                                                                echo "selected";
                                                                            } ?>>Lengkap</option>
                                                    <option value="Tidak Lengkap" <?php if ($row['kelengkapan'] == "Tidak Lengkap") {
                                                                                        echo "selected";
                                                                                    } ?>>Tidak Lengkap</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Boleh Dikosongkan" value="<?= $row['keterangan']; ?>">
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

                                        <div class="form-group row" id="tglselesai" style="display: none;">
                                        </div>

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
                                        $datalampiran = $koneksi->query("SELECT * FROM lampiran_iumk ORDER BY id_lampiran ASC");
                                        foreach ($datalampiran as $lampiran) {
                                        ?>

                                            <div class="form-group row">
                                                <label><?= $lampiran['nama_lampiran'] ?></label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input val_file" name="file[]">
                                                    <input type="hidden" name="id_lampiran[]" value="<?= $lampiran['id_lampiran'] ?>">
                                                    <label class="custom-file-label">Choose File</label>
                                                </div>
                                            </div>

                                        <?php } ?>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/pelayanan/iumk') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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

        <?php include_once "../../../template/footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include_once "../../../template/script.php"; ?>

    <script>
        $(document).ready(function() {
            $(".dropify").dropify();

            $("#npwp").mask("99.999.999.9-999.999");
        });

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

        // ambil dasar hukum IUMK
        $dataperaturan = $koneksi->query("SELECT * FROM peraturan_iumk")->fetch_array();

        $nomor_iumk         = $row['nomor_iumk'];
        $peraturan          = $dataperaturan['peraturan'];
        $nama_pemohon       = $_POST['nama_pemohon'];
        $nomor_ktp          = $_POST['nomor_ktp'];
        $alamat             = $_POST['alamat'];
        $tanggal            = $_POST['tanggal'] . " " . date('H:i:s');
        $no_telp            = $_POST['no_telp'];
        $nama_perusahaan    = $_POST['nama_perusahaan'];
        $bentuk_perusahaan  = $_POST['bentuk_perusahaan'];
        $npwp               = $_POST['npwp'];
        $kegiatan_usaha     = $_POST['kegiatan_usaha'];
        $sarana_usaha       = $_POST['sarana_usaha'];
        $alamat_usaha       = $_POST['alamat_usaha'];
        $jumlah_modal_usaha = $_POST['jumlah_modal_usaha'];
        $jumlah_modal_usaha = preg_replace('/[.]/', '', $jumlah_modal_usaha);
        $nomor_pendaftaran  = $_POST['nomor_pendaftaran'];
        $nama_camat         = $_POST['nama_camat'];
        $jabatan            = $_POST['jabatan'];
        $nip                = $_POST['nip'];
        $kelengkapan        = $_POST['kelengkapan'];
        $keterangan         = $_POST['keterangan'];
        $id_posisi          = $_POST['id_posisi'];
        $status             = $_POST['status'];

        $event_fotopemohon = "";

        // CEK APAKAH FOTO DIGANTI
        if (!empty($_FILES['foto_pemohon']['name'])) {
            $fotolama = $row['foto_pemohon'];

            // UPLOAD FOTO PEMOHON
            $fotopemohon      = $_FILES['foto_pemohon']['name'];
            $x_fotopemohon    = explode('.', $fotopemohon);
            $ext_fotopemohon  = end($x_fotopemohon);
            $nama_fotopemohon = rand(1, 99999) . '.' . $ext_fotopemohon;
            $size_fotopemohon = $_FILES['foto_pemohon']['size'];
            $tmp_fotopemohon  = $_FILES['foto_pemohon']['tmp_name'];
            $dir_fotopemohon  = '../../../assets/iumk_foto_pemohon/';


            move_uploaded_file($tmp_fotopemohon, $dir_fotopemohon . $nama_fotopemohon);
            if (file_exists($dir_fotopemohon . $fotolama)) {
                unlink($dir_fotopemohon . $fotolama);
            }
            $event_fotopemohon .= "Foto Sukses Diubah";
        } else {
            $nama_fotopemohon = $row['foto_pemohon'];
            $event_fotopemohon .= "Foto Tidak Diubah";
        }

        if ($status == "Selesai" and $nomor_iumk == '-') {
            $ceknoiumk    = $koneksi->query("SELECT * FROM nomor_urut_iumk")->fetch_array();
            $nourut       = $ceknoiumk['nomor_urut'];
            $kodeotomatis = "IUMK / " . sprintf('%03s', $nourut) . " / BU / " . date('Y');
            $nomor_iumk   = $kodeotomatis;
            // no urut iumk++
            $notambah = $nourut + 1;

            if ($notambah < '009') {
                $nourutbaru = '00' . $notambah;
            } elseif ($nnotambaho < '099') {
                $nourutbaru = '0' . $notambah;
            } else {
                $nourutbaru = $notambah;
            }
            $submit = $koneksi->query("UPDATE nomor_urut_iumk SET nomor_urut = '$nourutbaru'");
            //-- no urut iumk++
            $tgl_selesai = $_POST['tgl_selesai'];
            $id_posisi   = 4;

            $submit = $koneksi->query("UPDATE iumk SET
            nomor_iumk         = '$nomor_iumk', 
            peraturan          = '$peraturan', 
            nama_pemohon       = '$nama_pemohon', 
            nomor_ktp          = '$nomor_ktp', 
            alamat             = '$alamat', 
            tanggal            = '$tanggal', 
            no_telp            = '$no_telp', 
            nama_perusahaan    = '$nama_perusahaan',
            bentuk_perusahaan  = '$bentuk_perusahaan',
            npwp               = '$npwp',
            kegiatan_usaha     = '$kegiatan_usaha',
            sarana_usaha       = '$sarana_usaha',
            alamat_usaha       = '$alamat_usaha',
            jumlah_modal_usaha = '$jumlah_modal_usaha',
            nama_camat         = '$nama_camat',
            jabatan            = '$jabatan',
            nip                = '$nip',
            foto_pemohon       = '$nama_fotopemohon',
            kelengkapan        = '$kelengkapan',
            keterangan         = '$keterangan',
            tgl_selesai        = '$tgl_selesai',
            id_posisi          = '$id_posisi', 
            status             = '$status'
            WHERE id_iumk      = '$id'
            ");
        } else if ($status == "Selesai") {
            $tgl_selesai = $_POST['tgl_selesai'];
            $id_posisi   = 4;

            $submit = $koneksi->query("UPDATE iumk SET
            nomor_iumk         = '$nomor_iumk', 
            peraturan          = '$peraturan', 
            nama_pemohon       = '$nama_pemohon', 
            nomor_ktp          = '$nomor_ktp', 
            alamat             = '$alamat', 
            tanggal            = '$tanggal', 
            no_telp            = '$no_telp', 
            nama_perusahaan    = '$nama_perusahaan',
            bentuk_perusahaan  = '$bentuk_perusahaan',
            npwp               = '$npwp',
            kegiatan_usaha     = '$kegiatan_usaha',
            sarana_usaha       = '$sarana_usaha',
            alamat_usaha       = '$alamat_usaha',
            jumlah_modal_usaha = '$jumlah_modal_usaha',
            nama_camat         = '$nama_camat',
            jabatan            = '$jabatan',
            nip                = '$nip',
            foto_pemohon       = '$nama_fotopemohon',
            kelengkapan        = '$kelengkapan',
            keterangan         = '$keterangan',
            tgl_selesai        = '$tgl_selesai',
            id_posisi          = '$id_posisi', 
            status             = '$status'
            WHERE id_iumk      = '$id'
            ");
        } else {
            $submit = $koneksi->query("UPDATE iumk SET 
            peraturan          = '$peraturan', 
            nama_pemohon       = '$nama_pemohon', 
            nomor_ktp          = '$nomor_ktp', 
            alamat             = '$alamat', 
            tanggal            = '$tanggal', 
            no_telp            = '$no_telp', 
            nama_perusahaan    = '$nama_perusahaan',
            bentuk_perusahaan  = '$bentuk_perusahaan',
            npwp               = '$npwp',
            kegiatan_usaha     = '$kegiatan_usaha',
            sarana_usaha       = '$sarana_usaha',
            alamat_usaha       = '$alamat_usaha',
            jumlah_modal_usaha = '$jumlah_modal_usaha',
            nama_camat         = '$nama_camat',
            jabatan            = '$jabatan',
            nip                = '$nip',
            foto_pemohon       = '$nama_fotopemohon',
            kelengkapan        = '$kelengkapan',
            keterangan         = '$keterangan',
            tgl_selesai        = null,
            id_posisi          = '$id_posisi', 
            status             = '$status'
            WHERE id_iumk      = '$id'
            ");
        }


        if ($submit) {

            if (!empty($event_fotopemohon)) {

                // UPLOAD FILE LAMPIRAN
                $gambar_arr    = array();
                $filelama      = array();
                $idl           = $_POST['id_lampiran'];
                $hitungidl     = count($idl);

                $event = "";

                for ($i = 0; $i < $hitungidl; $i++) {

                    $file           = $_FILES['file']['name'][$i];

                    if (!empty($file)) {

                        $nama_lamp      = explode('.', $file);
                        $format_lamp    = end($nama_lamp);
                        $nama_lampiran  = rand(1, 99999) . '.' . $format_lamp;

                        // temporari file
                        $tmp_file  = $_FILES['file']['tmp_name'][$i];

                        $targer_dir = '../../../assets/iumk/';
                        $target_file = $targer_dir . $nama_lampiran;

                        move_uploaded_file($tmp_file, $target_file);
                        $gambar_arr[] = $target_file;

                        // REPLACE FILE LAMA
                        $queryfilelama = $koneksi->query("SELECT * FROM lampiran_iumk_file WHERE id_iumk = '$id'");
                        foreach ($queryfilelama as $fl) {
                            $filelama[] = $fl['file'];
                            if (file_exists($targer_dir . $filelama[$i])) {
                                unlink($targer_dir . $filelama[$i]);
                            }
                        }

                        $koneksi->query("UPDATE lampiran_iumk_file SET file = '$nama_lampiran' WHERE id_lampiran = '$idl[$i]' AND id_iumk = '$id'");

                        $event .= "upload berhasil";
                    } else {
                        $event .= "File Tidak Diubah";
                    }
                }
            }


            if (!empty($event)) {
                $_SESSION['pesan'] = "Data IUMK Diubah";
                echo "<script>window.location.replace('../iumk/');</script>";
            }
        }
    }
    ?>

</body>

</html>