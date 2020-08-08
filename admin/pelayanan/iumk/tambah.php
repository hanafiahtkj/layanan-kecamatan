<!DOCTYPE html>
<html>

<?php
include_once "../../../config/config.php";
include_once "../../../config/auth-admin.php";
include_once "../../../template/head.php";

$ceknoiumk    = $koneksi->query("SELECT * FROM nomor_urut_iumk")->fetch_array();
$nourut       = $ceknoiumk['nomor_urut'];

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
                            <h1 class="m-0 text-dark">Tambah Data Surat Izin Usaha Mikro dan Kecil</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Pelayanan</li>
                                <li class="breadcrumb-item active">IUMK</li>
                                <li class="breadcrumb-item active">Tambah</li>
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
                                        <h3 class="card-title">Form Tambah IUMK</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: azure;">

                                        <div class="form-group row">
                                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control datepicker" id="tanggal" name="tanggal" value="<?= date('Y-m-d') ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nomor_iumk" class="col-sm-2 col-form-label">Nomor</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_iumk" name="nomor_iumk" value="-" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_pemohon" class="col-sm-2 col-form-label">Nama Pemohon</label>
                                            <div class="col-sm-10">
                                                <select name="nama_pemohon" id="nama_pemohon" class="form-control select2" data-placeholder="Pilih Nama Pemohon" onchange="changeValue(this.value)" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $masyarakat = $koneksi->query("SELECT * FROM masyarakat ORDER BY nama ASC");
                                                    $jsArray = "var mas = new Array();\n";
                                                    foreach ($masyarakat as $mas) {
                                                    ?>
                                                        <option value="<?= $mas['nama'] ?>"><?= $mas['nama'] ?></option>

                                                    <?php
                                                        $jsArray .= "mas['" . $mas['nama'] . "'] = {
                                                                    id_masyarakat:'" . addslashes($mas['id_masyarakat']) . "',
                                                                    nomor_ktp:'" . addslashes($mas['nik']) . "',
                                                                    alamat:'" . addslashes($mas['alamat']) . "',
                                                                    no_telp:'" . addslashes($mas['telpon']) . "' 
                                                                };\n";
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <input type="text" name="id_masyarakat" id="id_masyarakat" hidden readonly>

                                        <div class="form-group row">
                                            <label for="nomor_ktp" class="col-sm-2 col-form-label">Nomor KTP</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" readonly onkeypress="return Angkasaja(event)" maxlength="25" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="alamat" id="alamat" rows="3" required readonly></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telpon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="no_telp" name="no_telp" onkeypress="return Angkasaja(event)" required readonly maxlength="13">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="bentuk_perusahaan" class="col-sm-2 col-form-label">Bentuk Perusahaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="bentuk_perusahaan" name="bentuk_perusahaan" required readonly value="Perseorangan">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="npwp" class="col-sm-2 col-form-label">NPWP</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="npwp" id="npwp">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="kegiatan_usaha" class="col-sm-2 col-form-label">Kegiatan Usaha</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="kegiatan_usaha" id="kegiatan_usaha" required placeholder="Contoh : Jualan Barang">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sarana_usaha" class="col-sm-2 col-form-label">Sarana Usaha Yang Digunakan</label>
                                            <div class="col-sm-10">
                                                <select name="sarana_usaha" id="sarana_usaha" class="form-control" required>
                                                    <option value="">--Pilih--</option>
                                                    <option value="Milik Sendiri">Milik Sendiri</option>
                                                    <option value="Pinjam Pakai">Pinjam Pakai</option>
                                                    <option value="Sewa">Sewa</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat_usaha" class="col-sm-2 col-form-label">Alamat Usaha</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="alamat_usaha" id="alamat_usaha" rows="3" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="jumlah_modal_usaha" class="col-sm-2 col-form-label">Jumlah Modal Usaha</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="background-color: blue; color: white;">Rp</span>
                                                    </div>
                                                    <input type="text" name="jumlah_modal_usaha" id="jumlah_modal_usaha" class="form-control rupiah" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nomor_pendaftaran" class="col-sm-2 col-form-label">Nomor Pendaftaran</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nomor_pendaftaran" id="nomor_pendaftaran" class="form-control" readonly value="<?= sprintf('%03s', $nourut) ?>">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Foto Pemohon</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="foto_pemohon" id="input-file-now-custom-2" class="dropify val_file" data-height="200" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="kelengkapan" class="col-sm-2 col-form-label">Kelengkapan</label>
                                            <div class="col-sm-5">
                                                <select name="kelengkapan" id="kelengkapan" class="form-control" data-placeholder="Pilih">
                                                    <option value="">--Pilih--</option>
                                                    <option value="Lengkap">Lengkap</option>
                                                    <option value="Tidak Lengkap">Tidak Lengkap</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Boleh Dikosongkan">
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
                                                        <option value="<?= $po['id_posisi'] ?>"><?= $po['posisi'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-5">
                                                <select name="status" id="status" class="form-control" data-placeholder="Pilih">
                                                    <option value="Belum Diproses" selected>Belum Diproses</option>
                                                    <option value="Dalam Proses">Dalam Proses</option>
                                                    <option value="Selesai">Selesai</option>
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
                                        <h3 class="card-title">Lampiran </h3>

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
                                                    <input type="file" class="custom-file-input val_file" name="file[]" required>
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

        // TAMPILKAN DATA DARI TABLE MASYARAKAT
        <?php echo $jsArray; ?>

        function changeValue(id) {
            document.getElementById('id_masyarakat').value = mas[id].id_masyarakat;
            document.getElementById('nomor_ktp').value = mas[id].nomor_ktp;
            document.getElementById('alamat').value = mas[id].alamat;
            document.getElementById('no_telp').value = mas[id].no_telp;
        }
    </script>

    <?php
    if (isset($_POST['submit'])) {

        // ambil dasar hukum IUMK
        $dataperaturan = $koneksi->query("SELECT * FROM peraturan_iumk")->fetch_array();

        $id_masyarakat      = $_POST['id_masyarakat'];
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
        if ($status == "Selesai") {

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
            $tgl_selesai  = $_POST['tgl_selesai'];
            $id_posisi    = 4;
        } else {
            $tgl_selesai = null;
            $nomor_iumk  = '-';
        }


        $event_fotopemohon = "";

        // UPLOAD FOTO PEMOHON
        $fotopemohon      = $_FILES['foto_pemohon']['name'];
        $x_fotopemohon    = explode('.', $fotopemohon);
        $ext_fotopemohon  = end($x_fotopemohon);
        $nama_fotopemohon = rand(1, 99999) . '.' . $ext_fotopemohon;
        $tmp_fotopemohon  = $_FILES['foto_pemohon']['tmp_name'];
        $dir_fotopemohon  = '../../../assets/iumk_foto_pemohon/';

        move_uploaded_file($tmp_fotopemohon, $dir_fotopemohon . $nama_fotopemohon);
        $event_fotopemohon .= "Sukses Upload";


        $submit = $koneksi->query("INSERT INTO iumk VALUES (
            null, 
            '$id_masyarakat', 
            '$nomor_iumk', 
            '$peraturan', 
            '$nama_pemohon', 
            '$nomor_ktp', 
            '$alamat', 
            '$tanggal', 
            '$no_telp', 
            '$nama_perusahaan',
            '$bentuk_perusahaan',
            '$npwp',
            '$kegiatan_usaha',
            '$sarana_usaha',
            '$alamat_usaha',
            '$jumlah_modal_usaha',
            '$nomor_pendaftaran',
            '$nama_camat',
            '$jabatan',
            '$nip',
            '$nama_fotopemohon',
            '$kelengkapan',
            '$keterangan',
            '$tgl_selesai',
            '$id_posisi',
            '$status'
            )");

        if ($submit) {

            $ambilidiumk = $koneksi->query("SELECT * FROM iumk ORDER BY id_iumk DESC LIMIT 1")->fetch_array();
            $idiumk      = $ambilidiumk['id_iumk'];

            if (!empty($event_fotopemohon)) {

                // UPLOAD FILE LAMPIRAN
                $gambar_arr    = array();
                $idl           = $_POST['id_lampiran'];
                $hitungidl     = count($idl);

                $event = "";

                for ($i = 0; $i < $hitungidl; $i++) {

                    $file           = $_FILES['file']['name'][$i];
                    $nama_lamp      = explode('.', $file);
                    $format_lamp    = end($nama_lamp);
                    $nama_lampiran  = rand(1, 99999) . '.' . $format_lamp;

                    // temporari file
                    $tmp_file  = $_FILES['file']['tmp_name'][$i];

                    $targer_dir = '../../../assets/iumk/';
                    $target_file = $targer_dir . $nama_lampiran;

                    move_uploaded_file($tmp_file, $target_file);
                    $koneksi->query("INSERT INTO lampiran_iumk_file VALUES (null, '$idl[$i]', '$idiumk', '$nama_lampiran')");
                    $gambar_arr[] = $target_file;
                    $event .= "upload berhasil";
                }

                if (!empty($event)) {
                    $_SESSION['pesan'] = "Data IUMK Ditambahkan";
                    echo "<script>window.location.replace('../iumk/');</script>";
                }
            }
        }
    }
    ?>

</body>

</html>