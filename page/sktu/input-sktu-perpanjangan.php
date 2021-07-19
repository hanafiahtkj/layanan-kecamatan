<!DOCTYPE html>
<html lang="en">

<?php
include_once "../../config/config.php";
include_once "../../config/auth-mas.php";
include_once "../../template/ui/head.php";

$idm      = $_SESSION['id_masyarakat'];
$data_mas = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$idm'")->fetch_array();

$id_sktu = encryptor('decrypt', $_GET['id']);
$cekdata = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE id_masyarakat = '$idm' AND id_sktu = '$id_sktu'");
if (mysqli_num_rows($cekdata) === 0) {
    $row = $koneksi->query("SELECT * FROM sktu_baru WHERE id_masyarakat = '$idm' AND id_sktu = '$id_sktu'")->fetch_array();
} else {
    $row = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE id_masyarakat = '$idm' AND id_sktu = '$id_sktu'")->fetch_array();
}


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
                    <h2>Input Perpanjangan SKTU</h2>
                    <ol>
                        <li><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li><a href="<?= base_url('page/sktu'); ?>">SKTU</a></li>
                        <li>Input Perpanjangan SKTU</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services graform">
            <div class="container">

                <div class="section-title">
                    <h2>SKTU Pepanjangan</h2>
                    <p>Form Input Surat Keterangan Tempat Usaha (Perpanjangan)</p>
                </div>

                <form action="" method="POST" enctype="multipart/form-data">

                    <!-- ROW -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="tgl" class="col-sm-3 col-form-label">Tanggal Permohonan</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="tgl" name="tgl" value="<?= date('Y-m-d'); ?>" required readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nomor_sktu" class="col-sm-3 col-form-label">Nomor SKTU Lama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nomor_sktu" name="nomor_sktu" value="<?= $row['nomor_sktu']; ?>" required readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama_pemohon" class="col-sm-3 col-form-label">Nama Pemohon</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= $row['nama_pemohon']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="no_telp" class="col-sm-3 col-form-label">Nomor Telpon</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="no_telp" name="no_telp" onkeypress="return Angkasaja(event)" value="<?= $row['no_telp']; ?>" required maxlength="13">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama_perusahaan" class="col-sm-3 col-form-label">Nama Perusahaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required value="<?= $row['nama_perusahaan']; ?>">
                                        </div>
                                    </div>

                                    <hr>
                                    <legend style="margin-bottom: 15px;">Alamat Perusahaan</legend>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jalan</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control alamat" name="alamat_perusahaan" id="alamat_perusahaan" rows="2" required maxlength="110"><?= $row['alamat_perusahaan']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">RT / RW</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="rt" id="rt" required placeholder="RT" maxlength="10" onkeypress="return Angkasaja(event)" value="<?= $row['rt']; ?>">
                                        </div>
                                        <span style="margin-top: 5px;">/</span>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="rw" id="rw" required placeholder="RW" maxlength="10" onkeypress="return Angkasaja(event)" value="<?= $row['rw']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No. Rumah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="no_rumah" id="no_rumah" required maxlength="10" onkeypress="return Angkasaja(event)" value="<?= $row['no_rumah']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kelurahan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kelurahan" id="kelurahan" class="form-control" maxlength="100" required value="<?= $row['kelurahan']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama_pimpinan_perusahaan" class="col-sm-3 col-form-label">Nama Pimpinan Perusahaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama_pimpinan_perusahaan" name="nama_pimpinan_perusahaan" required value="<?= $row['nama_pimpinan_perusahaan']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat_kediaman" class="col-sm-3 col-form-label">Alamat Kediaman</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control alamat" name="alamat_kediaman" id="alamat_kediaman" rows="2" required maxlength="110"><?= $row['alamat_kediaman']; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kegiatan_usaha" class="col-sm-3 col-form-label">Kegiatan Usaha</label>
                                        <div class="col-sm-5">
                                            <select name="kegiatan_usaha" id="kegiatan_usaha" class="form-control" required>
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
                                        <label for="sifat" class="col-sm-3 col-form-label">Sifat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sifat" value="Perpanjangan" readonly require>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- ROW-->


                    <!-- LAMPIRAN -->
                    <div class="section-title" style="margin-top: 5%;">
                        <h2>Lampiran SKTU</h2>
                        <p style="color: red; font-style: italic;">*Upload File Dalam Format JPG / PNG / PDF dengan Ukuran Maksimal 1 Mb</p>
                    </div>
                    <!-- ROW -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <?php
                                    $datalampiran = $koneksi->query("SELECT * FROM lampiran_sktu WHERE keterangan LIKE '%Perpanjangan%' ORDER BY id_lampiran ASC");
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
                                                <input type="file" class="custom-file-input val_file" data-name="<?= $lampiran['nama_lampiran'] ?>" name="file[]" <?php if ($lampiran['ketentuan'] == "Wajib") {
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
                                    <button type="button" id="submit" class="btn btn-primary">Perpanjang SKTU</button>
                                    <button type="submit" name="submit" id="tombol-submit" style="display: none;">Perpanjang SKTU</button>
                                    <a href="<?= base_url('page/sktu') ?>" class="btn btn-secondary">Batal</a>
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
                            var alamat_perusahaan = $('#alamat_perusahaan').val();
                            var nama_pimpinan_perusahaan = $('#nama_pimpinan_perusahaan').val();
                            var kegiatan_usaha = $('#kegiatan_usaha').val();

                            if(nama_perusahaan == ''){
                                setTimeout(function() {
                                    toastr.error('Nama Perusahaan Tidak Boleh Kosong!');
                                    $('#nama_perusahaan').focus();
                                }, 20);
                            }else
                            if(alamat_perusahaan == ''){
                                setTimeout(function() {
                                    toastr.error('Alamat Perusahaan Tidak Boleh Kosong!');
                                    $('#alamat_perusahaan').focus();
                                }, 20);
                            }else
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
                            if(nama_pimpinan_perusahaan == ''){
                                setTimeout(function() {
                                    toastr.error('Nama Pimpinan Perusahaan Tidak Boleh Kosong!');
                                    $('#nama_pimpinan_perusahaan').focus();
                                }, 20);
                            }else
                            if(kegiatan_usaha == ''){
                                setTimeout(function() {
                                    toastr.error('Kegiatan Usaha Tidak Boleh Kosong!');
                                    $('#kegiatan_usaha').focus();
                                }, 20);
                            }

                            $('input[name^="file"]').each(function () {
                                var attr = $(this).attr('required');
                                if(attr){
                                    if($(this).val() == ''){
                                        var namafile = $(this).attr('data-name');
                                        setTimeout(function() {
                                            toastr.error('Lampiran '+ namafile +' Tidak Boleh Kosong!');
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
            if (this.files[0].size > 1 * 1024 * 1024) {
                setTimeout(function() {
                    toastr.error('File ' + nf + ' Terlalu Besar ! Silahkan Upload File Dengan Ukuran Maksimal 1 Mb');
                }, 20);
                this.value = "";
            }

            // VALIDAST EKSTENSION FILE UPLOAD
            if (ext != "image/jpeg" && ext != "image/png" && ext != "application/pdf") {
                setTimeout(function() {
                    toastr.error('Format File ' + nf + ' Tidak Diperbolehkan ! Silahkan Upload File Dengan Format JPG / PNG / PDF');
                }, 20);
                this.value = "";
            }
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

        // ambil data dasar hukum sktu
        $dasarhukum = $koneksi->query("SELECT * FROM peraturan_sktu")->fetch_array();
        // ambil data camat aktif
        $camat = $koneksi->query("SELECT * FROM camat WHERE status = 'Aktif'")->fetch_array();

        $nomor_sktu               = $row['nomor_sktu'];
        $nama_pemohon             = $_POST['nama_pemohon'];
        $no_telp                  = $_POST['no_telp'];
        $tgl                      = $_POST['tgl'] . " " . date('H:i:s');
        $peraturan                = $dasarhukum['peraturan'];
        $nama_perusahaan          = strip_tags($_POST['nama_perusahaan']);
        $alamat_perusahaan        = strip_tags($_POST['alamat_perusahaan']);
        $rt                       = strip_tags($_POST['rt']);
        $rw                       = strip_tags($_POST['rw']);
        $no_rumah                 = strip_tags($_POST['no_rumah']);
        $kelurahan                = strip_tags($_POST['kelurahan']);
        $nama_pimpinan_perusahaan = strip_tags($_POST['nama_pimpinan_perusahaan']);
        $alamat_kediaman          = strip_tags($_POST['alamat_kediaman']);
        $kegiatan_usaha           = strip_tags($_POST['kegiatan_usaha']);
        $sifat                    = $_POST['sifat'];
        $nama_camat               = $camat['nama_camat'];
        $nip                      = $camat['nip'];
        $jabatan                  = $camat['jabatan'];
        $status                   = "Belum Diproses";

        $submit = $koneksi->query("INSERT INTO sktu_perpanjangan VALUES (
            null, 
            '$idm', 
            '$nomor_sktu', 
            '$nama_pemohon', 
            '$no_telp', 
            '$tgl', 
            '$peraturan', 
            '$nama_perusahaan', 
            '$alamat_perusahaan',
            '$no_rumah', 
            '$rt', 
            '$rw', 
            '$kelurahan',  
            '$nama_pimpinan_perusahaan',
            '$alamat_kediaman',
            '$kegiatan_usaha',
            null,
            null,
            '$sifat',
            '$nama_camat',
            '$nip',
            '$jabatan',
            null,
            null,
            null,
            1,
            '$status'
            )");


        if ($submit) {

            $ambilidsktu = $koneksi->query("SELECT * FROM sktu_perpanjangan ORDER BY id_sktu DESC LIMIT 1")->fetch_array();
            $idsktu      = $ambilidsktu['id_sktu'];

            $gambar_arr    = array();
            $idl           = $_POST['id_lampiran'];
            $hitungidl     = count($idl);

            $event = "";

            for ($i = 0; $i < $hitungidl; $i++) {

                if (!empty($_FILES['file']['name'][$i])) {

                    $file          = $_FILES['file']['name'][$i];
                    $nama_lamp     = explode('.', $file);
                    $format_lamp   = end($nama_lamp);
                    $nama_lampiran = rand(1, 99999) . '.' . $format_lamp;
                    $allow_sizefile = 1024 * 1024 * 1;

                    // temporari file
                    $tmp_file  = $_FILES['file']['tmp_name'][$i];

                    $targer_dir = '../../assets/sktu/perpanjangan/';
                    $target_file = $targer_dir . $nama_lampiran;

                    if (move_uploaded_file($tmp_file, $target_file)) {
                        $gambar_arr[] = $target_file;
                        $koneksi->query("INSERT INTO lampiran_sktu_file VALUES (null, '$idl[$i]', '$idsktu', '$nama_lampiran', 'Perpanjangan')");
                        $event .= "upload berhasil";
                    }
                } else {
                    $koneksi->query("INSERT INTO lampiran_sktu_file VALUES (null, '$idl[$i]', '$idsktu', 'Belum Ada Lampiran', 'Perpanjangan')");
                    $event .= "upload berhasil";
                }
            }

            if (!empty($event)) {

                echo "
                <script type='text/javascript'>
                setTimeout(function () {    
                    toastr.success('Permintaan Perpanjangan SKTU Berhasil Dikirim');     
                },10);
                window.setTimeout(function(){ 
                    window.location.replace('" . base_url('page/sktu') . "');
                } ,2000);   
                </script>";
            }
        }
    }
    ?>

</body>

</html>