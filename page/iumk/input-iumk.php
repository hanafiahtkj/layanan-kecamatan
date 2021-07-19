<!DOCTYPE html>
<html lang="en">

<?php
include_once "../../config/config.php";
include_once "../../config/auth-mas.php";
include_once "../../template/ui/head.php";

$idm      = $_SESSION['id_masyarakat'];
$data_mas = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$idm'")->fetch_array();

// NOMOR SURAT OTOMATIS
$ceknoiumk    = $koneksi->query("SELECT * FROM nomor_urut_iumk")->fetch_array();
$nourut       = $ceknoiumk['nomor_urut'];
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
                    <h2>Buat Surat Izin Usaha Mikro dan Kecil Baru</h2>
                    <ol>
                        <li><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li><a href="<?= base_url('page/iumk'); ?>">IUMK</a></li>
                        <li>Input</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services graform">
            <div class="container">

                <div class="section-title">
                    <h2>IUMK</h2>
                    <p>Form Input Surat Izin Usaha Mikro dan Kecil Baru</p>
                </div>

                <form action="" method="POST" enctype="multipart/form-data" class="form-input">

                    <!-- ROW -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Permohonan</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control datepicker" id="tanggal" name="tanggal" value="<?= date('Y-m-d') ?>" required readonly>
                                        </div>
                                    </div>

                                    <div class="card mb-3" style="border: 2px solid crimson;">
                                        <div class="card-body">


                                            <div class="form-group row">
                                                <label for="nama_pemohon" class="col-sm-3 col-form-label">Nama Pemohon</label>
                                                <div class="col-sm-9">
                                                    <input name="nama_pemohon" id="nama_pemohon" class="form-control" required readonly value="<?= $data_mas['nama'] ?>">
                                                </div>
                                            </div>

                                            <input type="text" name="id_masyarakat" id="id_masyarakat" hidden readonly>

                                            <div class="form-group row">
                                                <label for="nomor_ktp" class="col-sm-3 col-form-label">Nomor KTP</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" onkeypress="return Angkasaja(event)" maxlength="25" required readonly value="<?= $data_mas['nik'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control alamat" name="alamat" id="alamat" rows="2" required readonly><?= $data_mas['alamat'] . ' No. ' . $data_mas['no_rumah'] . ' Rt. ' . $data_mas['rt'] . ' Rw. ' . $data_mas['rw'] . ' Kelurahan ' . $data_mas['kelurahan'] ?>
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="no_telp" class="col-sm-3 col-form-label">Nomor Telpon</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="no_telp" name="no_telp" onkeypress="return Angkasaja(event)" required readonly maxlength="13" value="<?= $data_mas['telpon'] ?>">
                                                </div>
                                            </div>

                                            <div class="justify-content-between text-right" style="color: red; font-style: italic;">
                                                <small>*Klik Tombol Edit Profil untuk mengubah data profil anda</small> <a href="<?= base_url('profil') ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"> Edit Profil</i></a>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama_perusahaan" class="col-sm-3 col-form-label">Nama Perusahaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="bentuk_perusahaan" class="col-sm-3 col-form-label">Bentuk Perusahaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="bentuk_perusahaan" name="bentuk_perusahaan" required readonly value="Perseorangan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="npwp" class="col-sm-3 col-form-label">NPWP</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="npwp" id="npwp" placeholder="Kosongkan jika tidak ada NPWP">
                                            <span style="color: red; font-style: italic;"><small>*Input hanya angka</small></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kegiatan_usaha" class="col-sm-3 col-form-label">Kegiatan Usaha</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="kegiatan_usaha" id="kegiatan_usaha" required placeholder="Contoh : Jualan Barang">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="sarana_usaha" class="col-sm-3 col-form-label">Sarana Usaha</label>
                                        <div class="col-sm-9">
                                            <select name="sarana_usaha" id="sarana_usaha" class="form-control" required>
                                                <option value="">--Pilih--</option>
                                                <option value="Milik Sendiri">Milik Sendiri</option>
                                                <option value="Pinjam Pakai">Pinjam Pakai</option>
                                                <option value="Sewa">Sewa</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr>
                                    <legend style="margin-bottom: 15px;">Alamat Usaha</legend>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jalan</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control alamat" name="alamat_usaha" id="alamat_usaha" rows="2" maxlength="110" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">RT / RW</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="rt" id="rt" required placeholder="RT" maxlength="10" onkeypress="return Angkasaja(event)">
                                        </div>
                                        <span style="margin-top: 5px;">/</span>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="rw" id="rw" required placeholder="RW" maxlength="10" onkeypress="return Angkasaja(event)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No. Rumah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="no_rumah" id="no_rumah" required maxlength="10" onkeypress="return Angkasaja(event)">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kelurahan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kelurahan" id="kelurahan" class="form-control" maxlength="100" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jumlah_modal_usaha" class="col-sm-3 col-form-label">Jumlah Modal Usaha</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="background-color: darkgrey; color: white;">Rp</span>
                                                </div>
                                                <input type="text" name="jumlah_modal_usaha" id="jumlah_modal_usaha" class="form-control rupiah" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nomor_pendaftaran" class="col-sm-3 col-form-label">Nomor Pendaftaran</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nomor_pendaftaran" id="nomor_pendaftaran" class="form-control" readonly value="<?= sprintf('%03s', $nourut) ?>">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">
                                            Foto Pemohon <br>
                                            <span style="color: red; font-style: italic; font-size: 12px;">
                                                (*Diharapkan Pas Foto Ukuran 4x6)</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="file" name="foto_pemohon" id="input-file-now-custom-2" class="dropify val_file" data-height="200" required>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- ROW-->


                    <!-- LAMPIRAN -->
                    <div class="section-title" style="margin-top: 5%;">
                        <h2>Lampiran</h2>
                        <p style="color: red; font-style: italic;">*Upload File Dalam Format JPG / PNG / PDF dengan Ukuran Maksimal 1 Mb</p>
                    </div>
                    <!-- ROW -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <!-- <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input cekfile" type="checkbox" value="">
                                            <label class="form-check-label" for="defaultCheck1" style="color: red; font-style: italic; font-weight: bold;">
                                                Centang jika file tidak diupload <br>
                                                <small>*Catatan : Jika file tidak diupload, masyarakat diharuskan membawa berkas fisik ke Kantor Kecamatan Banjarmasin Utara</small>
                                            </label>
                                        </div>
                                    </div>

                                    <hr> -->

                                    <?php
                                    $datalampiran = $koneksi->query("SELECT * FROM lampiran_iumk ORDER BY id_lampiran ASC");
                                    foreach ($datalampiran as $lampiran) {
                                    ?>

                                        <div class="form-group">
                                            <label>
                                                <?= $lampiran['nama_lampiran'] ?> <span style="font-size: 12px; font-style: italic; font-weight: bold;">(<?= $lampiran['ketentuan'] ?>)</span>
                                                <?php if ($lampiran['ketentuan'] == "Tidak Wajib") { ?>
                                                    <br>
                                                    <span style="color: red; font-size: 12px; font-style: italic;">*<?= $lampiran['deskripsi']; ?></span>
                                                <?php } ?>
                                            </label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input val_file req_file" data-name="<?= $lampiran['nama_lampiran'] ?>" name="file[]" <?php if ($lampiran['ketentuan'] == "Wajib") {
                                                                                                                                                                                echo "required";
                                                                                                                                                                            } else {
                                                                                                                                                                            } ?>>
                                                <input type="hidden" name="id_lampiran[]" value="<?= $lampiran['id_lampiran'] ?>">
                                                <label class="custom-file-label">Choose File</label>
                                            </div>
                                        </div>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!-- tombol -->
                        <div class="col-md-12" style="margin-top: 2%; text-align: right;">
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" id="submit" class="btn btn-primary">Buat IUMK</button>
                                    <button type="submit" name="submit" id="tombol-submit" style="display: none;">Buat IUMK</button>
                                    <a href="<?= base_url('page/iumk') ?>" class="btn btn-secondary">Batal</a>
                                </div>
                            </div>
                        </div>

                    </div>



                </form>

            </div>
        </section><!-- End Services Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include_once "../../template/ui/footer.php"; ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


    <?php include_once "../../template/ui/script.php"; ?>

    <script>
        $(document).ready(function() {
            $(".dropify").dropify();

            $("#npwp").mask("99.999.999.9-999.999");

            // FILE CENTANG UNTUK MENGABAIKAN JIKA FILE TIDAK DI UPLOAD
            // $('.cekfile').click(function() {
            //     if ($(this).is(':checked')) {
            //         $('.req_file').attr('disabled', true);
            //         $('.req_file').removeAttr('required');
            //     } else {
            //         $('.req_file').removeAttr('disabled');
            //         $('.req_file').attr('required', true);
            //     }
            // });

            // VALIDASI SUBMIT
            $('#submit').click(function() {
                swal({
                        title: 'Apakah anda yakin data sudah terisi dengan benar ?',
                        text: 'Setelah tersimpan, Data tidak dapat diubah kembali',
                        type: "warning",
                        html: true,
                        confirmButtonColor: '#FF0000',
                        showCancelButton: true,
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            var nama_perusahaan = $('#nama_perusahaan').val();
                            var kegiatan_usaha = $('#kegiatan_usaha').val();
                            var sarana_usaha = $('#sarana_usaha').val();
                            var alamat_usaha = $('#alamat_usaha').val();
                            var jumlah_modal_usaha = $('#jumlah_modal_usaha').val();
                            var foto_pemohon = $('input[name="foto_pemohon"]').val();

                            if (nama_perusahaan == '') {
                                setTimeout(function() {
                                    toastr.error('Nama Perusahaan Tidak Boleh Kosong!');
                                    $('#nama_perusahaan').focus();
                                }, 20);
                            } else
                            if (kegiatan_usaha == '') {
                                setTimeout(function() {
                                    toastr.error('Kegiatan Usaha Tidak Boleh Kosong!');
                                    $('#kegiatan_usaha').focus();
                                }, 20);
                            } else
                            if (sarana_usaha == '') {
                                setTimeout(function() {
                                    toastr.error('Sarana Usaha Tidak Boleh Kosong!');
                                    $('#sarana_usaha').focus();
                                }, 20);
                            } else
                            if (alamat_usaha == '') {
                                setTimeout(function() {
                                    toastr.error('Alamat Usaha Tidak Boleh Kosong!');
                                    $('#alamat_usaha').focus();
                                }, 20);
                            } else
                            if (no_rumah == '') {
                                setTimeout(function() {
                                    toastr.error('Nomor Rumah Tidak Boleh Kosong!');
                                    $('#no_rumah').focus();
                                }, 20);
                            } else
                            if (rt == '') {
                                setTimeout(function() {
                                    toastr.error('Rt Tidak Boleh Kosong!');
                                    $('#rt').focus();
                                }, 20);
                            } else
                            if (rw == '') {
                                setTimeout(function() {
                                    toastr.error('Rw Tidak Boleh Kosong!');
                                    $('#rw').focus();
                                }, 20);
                            } else
                            if (kelurahan == '') {
                                setTimeout(function() {
                                    toastr.error('Kelurahan Tidak Boleh Kosong!');
                                    $('#kelurahan').focus();
                                }, 20);
                            } else
                            if (jumlah_modal_usaha == '') {
                                setTimeout(function() {
                                    toastr.error('Jumlah Modal Usaha Tidak Boleh Kosong!');
                                    $('#jumlah_modal_usaha').focus();
                                }, 20);
                            } else
                            if (foto_pemohon == '') {
                                setTimeout(function() {
                                    toastr.error('Foto Pemohon Tidak Boleh Kosong!');
                                    $('#foto_pemohon').focus();
                                }, 20);
                            }


                            $('input[name^="file"]').each(function() {
                                var attr = $(this).attr('required');
                                if (attr) {
                                    if ($(this).val() == '') {
                                        var namafile = $(this).attr('data-name');
                                        setTimeout(function() {
                                            toastr.error('Lampiran ' + namafile + ' Tidak Boleh Kosong!');
                                        }, 20);
                                    }
                                }
                            });

                            $("#tombol-submit").click();
                        }
                    });
            });

        });


        // VALIDASI FILE UPLOAD
        $('.val_file').on('change', function() {
            var nf = this.files[0].name;
            var ext = this.files[0].type;

            // VALIDASI UKURAN FILE TIDAK LEBIH DARI 1 MB
            // if (this.files[0].size > 1 * 1024 * 1024) {
            //     setTimeout(function() {
            //         toastr.error('File ' + nf + ' Terlalu Besar ! Silahkan Upload File Dengan Ukuran Maksimal 1 Mb');
            //     }, 20);
            //     this.value = "";
            // }

            // VALIDAST EKSTENSION FILE UPLOAD
            // if (ext != "image/jpeg" && ext != "image/png" && ext != "application/pdf") {
            //     setTimeout(function() {
            //         toastr.error('Format File ' + nf + ' Tidak Diperbolehkan ! Silahkan Upload File Dengan Format JPG / PNG / PDF');
            //     }, 20);
            //     this.value = "";
            // }
        });

        // EVENT ON ENTER IN TEXT AREA
        $('.alamat').on('keydown', function(e) {
            if (e.keyCode == 13 && !e.shiftKey) {
                e.preventDefault();
                return false;
            }
        });
    </script>


    <!-- SIMPAN -->
    <?php
    if (isset($_POST['submit'])) {

        // ambil dasar hukum IUMK
        $dataperaturan = $koneksi->query("SELECT * FROM peraturan_iumk")->fetch_array();
        // ambil data camat aktif
        $camat = $koneksi->query("SELECT * FROM camat WHERE status = 'Aktif'")->fetch_array();

        $id_masyarakat      = $idm;
        $nomor_iumk         = '-';
        $peraturan          = $dataperaturan['peraturan'];
        $nama_pemohon       = strip_tags($_POST['nama_pemohon']);
        $nomor_ktp          = strip_tags($_POST['nomor_ktp']);
        $alamat             = strip_tags($_POST['alamat']);
        $tanggal            = $_POST['tanggal'] . " " . date('H:i:s');
        $no_telp            = strip_tags($_POST['no_telp']);
        $nama_perusahaan    = strip_tags($_POST['nama_perusahaan']);
        $bentuk_perusahaan  = strip_tags($_POST['bentuk_perusahaan']);
        $npwp               = $_POST['npwp'];
        $kegiatan_usaha     = strip_tags($_POST['kegiatan_usaha']);
        $sarana_usaha       = strip_tags($_POST['sarana_usaha']);
        $alamat_usaha       = strip_tags($_POST['alamat_usaha']);
        $rt                 = strip_tags($_POST['rt']);
        $rw                 = strip_tags($_POST['rw']);
        $no_rumah           = strip_tags($_POST['no_rumah']);
        $kelurahan          = strip_tags($_POST['kelurahan']);
        $jumlah_modal_usaha = $_POST['jumlah_modal_usaha'];
        $jumlah_modal_usaha = preg_replace('/[.]/', '', $jumlah_modal_usaha);
        $nomor_pendaftaran  = $_POST['nomor_pendaftaran'];
        $nama_camat         = $camat['nama_camat'];
        $nip                = $camat['nip'];
        $jabatan            = $camat['jabatan'];
        $status             = "Belum Diproses";

        // UPLOAD FILE LAMPIRAN
        $gambar_arr    = array();
        $idl           = $_POST['id_lampiran'];
        $hitungidl     = count($idl);

        $event = "";
        $ekstensi =  array('png', 'jpg', 'jpeg', 'pdf');

        for ($i = 0; $i < $hitungidl; $i++) {

            if (!empty($_FILES['file']['name'][$i])) {

                $file           = $_FILES['file']['name'][$i];
                $size           = $_FILES['file']['size'][$i];
                $nama_lamp      = explode('.', $file);
                $format_lamp    = end($nama_lamp);
                $ext            = strtolower($format_lamp);

                if (!in_array($ext, $ekstensi)) {
                    echo "
                        <script type='text/javascript'>
                            setTimeout(function () {    
                                toastr.error('File " . $file . " Tidak Diperbolehkan ! Silahkan Upload File Dengan Format JPG / PNG / PDF');      
                            },30);  
                            window.setTimeout(function(){ 
                                window.history.back();
                            } ,4000);  
                        </script>";
                    $event .= "";
                    exit;
                } else {
                    if ($size < 1044070) {
                        $event .= 'next';
                    } else {
                        echo "
                            <script type='text/javascript'>
                                setTimeout(function () {    
                                    toastr.error('File " . $file . " Terlalu Besar ! Silahkan Upload File Dengan Ukuran Maksimal 1 Mb');      
                                },30);  
                                window.setTimeout(function(){ 
                                    window.history.back();
                                } ,4000);  
                            </script>";
                        $event .= "";
                        exit;
                    }
                }
            }
            // else {
            //     $koneksi->query("INSERT INTO lampiran_iumk_file VALUES (null, '$idl[$i]', '$idiumk', 'Belum Ada Lampiran')");
            //     $event .= "upload berhasil";
            // }
        }

        if (!empty($event) || $event == 'next') {
            // UPLOAD FOTO PEMOHON
            $fotopemohon      = $_FILES['foto_pemohon']['name'];
            $x_fotopemohon    = explode('.', $fotopemohon);
            $ext_fotopemohon  = end($x_fotopemohon);
            $nama_fotopemohon = rand(1, 99999) . '.' . $ext_fotopemohon;
            $tmp_fotopemohon  = $_FILES['foto_pemohon']['tmp_name'];
            $dir_fotopemohon  = '../../assets/iumk_foto_pemohon/';

            move_uploaded_file($tmp_fotopemohon, $dir_fotopemohon . $nama_fotopemohon);

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
                                '$no_rumah',
                                '$rt',
                                '$rw',
                                '$kelurahan',
                                '$jumlah_modal_usaha',
                                '$nomor_pendaftaran',
                                '$nama_camat',
                                '$jabatan',
                                '$nip',
                                '$nama_fotopemohon',
                                null,
                                null,
                                null,
                                1,
                                '$status'
                                )");

            if ($submit) {
                $ambilidiumk = $koneksi->query("SELECT * FROM iumk ORDER BY id_iumk DESC LIMIT 1")->fetch_array();
                $idiumk      = $ambilidiumk['id_iumk'];

                for ($i = 0; $i < $hitungidl; $i++) {

                    if (!empty($_FILES['file']['name'][$i])) {

                        $file           = $_FILES['file']['name'][$i];
                        $size           = $_FILES['file']['size'][$i];
                        $nama_lamp      = explode('.', $file);
                        $format_lamp    = end($nama_lamp);
                        $ext            = strtolower($format_lamp);
                        $nama_lampiran  = rand(1, 99999) . '.' . $format_lamp;

                        $tmp_file  = $_FILES['file']['tmp_name'][$i];

                        $targer_dir = '../../assets/iumk/';
                        $target_file = $targer_dir . $nama_lampiran;

                        move_uploaded_file($tmp_file, $target_file);
                        $koneksi->query("INSERT INTO lampiran_iumk_file VALUES (null, '$idl[$i]', '$idiumk', '$nama_lampiran')");
                        $gambar_arr[] = $target_file;
                    }
                }

                echo "
                        <script type='text/javascript'>
                        setTimeout(function () {    
                            toastr.success('Permohonan IUMK Berhasil Dibuat');     
                        },10);
                        window.setTimeout(function(){ 
                            window.location.replace('" . base_url('page/iumk') . "');
                        } ,1500);   
                        </script>";
            }
        }
    }
    ?>

</body>

</html>