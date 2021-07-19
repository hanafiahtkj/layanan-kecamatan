<!DOCTYPE html>
<html lang="en">

<?php
include_once "../../config/config.php";
include_once "../../config/auth-mas.php";
include_once "../../template/ui/head.php";

$idm      = $_SESSION['id_masyarakat'];
$data_mas = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$idm'")->fetch_array();

$id = encryptor('decrypt', $_GET['id']);
$row = $koneksi->query("SELECT * FROM iumk WHERE id_iumk = '$id'")->fetch_array();
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
                    <h2>Edit Surat Izin Usaha Mikro dan Kecil</h2>
                    <ol>
                        <li><a href="<?= base_url('dashboard'); ?>">Home</a></li>
                        <li><a href="<?= base_url('page/iumk'); ?>">IUMK</a></li>
                        <li>Edit IUMK</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services graform">
            <div class="container">

                <div class="section-title">
                    <h2>IUMK</h2>
                    <p>Form Edit Surat Izin Usaha Mikro dan Kecil</p>
                </div>

                <form action="" method="POST" enctype="multipart/form-data">

                    <!-- ROW -->
                    <div class="row">

                        <div class="col-md-12">
                            <?php if ($row['kelengkapan'] == "Tidak Lengkap") : ?>
                                <div class="alert" style="background-color: crimson; color: white; font-size: 20px;">
                                    <i class="fa fa-exclamation-triangle"> Keterangan</i>
                                    <p>
                                        "<?= $row['keterangan']; ?>"
                                    </p>
                                </div>
                            <?php endif ?>
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
                                                    <input name="nama_pemohon" id="nama_pemohon" class="form-control" required readonly value="<?= $row['nama_pemohon'] ?>">
                                                </div>
                                            </div>

                                            <input type="text" name="id_masyarakat" id="id_masyarakat" hidden readonly>

                                            <div class="form-group row">
                                                <label for="nomor_ktp" class="col-sm-3 col-form-label">Nomor KTP</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" readonly onkeypress="return Angkasaja(event)" maxlength="25" required value="<?= $row['nomor_ktp'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control alamat" name="alamat" id="alamat" rows="2" maxlength="110" required readonly><?= $row['alamat'] ?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="no_telp" class="col-sm-3 col-form-label">Nomor Telpon</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="no_telp" name="no_telp" onkeypress="return Angkasaja(event)" required readonly maxlength="13" value="<?= $row['no_telp'] ?>">
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
                                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required value="<?= $row['nama_perusahaan'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="bentuk_perusahaan" class="col-sm-3 col-form-label">Bentuk Perusahaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="bentuk_perusahaan" name="bentuk_perusahaan" required readonly value="<?= $row['bentuk_perusahaan'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="npwp" class="col-sm-3 col-form-label">NPWP</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="npwp" id="npwp" value="<?= $row['npwp'] ?>" placeholder="Kosongkan jika tidak ada NPWP">
                                            <span style="color: red; font-style: italic;"><small>*Input hanya angka</small></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kegiatan_usaha" class="col-sm-3 col-form-label">Kegiatan Usaha</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="kegiatan_usaha" id="kegiatan_usaha" required placeholder="Contoh : Jualan Barang" value="<?= $row['kegiatan_usaha'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="sarana_usaha" class="col-sm-3 col-form-label">Sarana Usaha</label>
                                        <div class="col-sm-9">
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

                                    <hr>
                                    <legend style="margin-bottom: 15px;">Alamat Usaha</legend>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jalan</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control alamat" name="alamat_usaha" id="alamat_usaha" rows="2" maxlength="110" required><?= $row['alamat_usaha'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">RT / RW</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="rt" id="rt" required placeholder="RT" maxlength="10" onkeypress="return Angkasaja(event)" value="<?= $row['rt'] ?>">
                                        </div>
                                        <span style="margin-top: 5px;">/</span>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="rw" id="rw" required placeholder="RW" maxlength="10" onkeypress="return Angkasaja(event)" value="<?= $row['rw'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No. Rumah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="no_rumah" id="no_rumah" required maxlength="10" onkeypress="return Angkasaja(event)" value="<?= $row['no_rumah'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Kelurahan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kelurahan" id="kelurahan" class="form-control" maxlength="100" required value="<?= $row['kelurahan'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jumlah_modal_usaha" class="col-sm-3 col-form-label">Jumlah Modal Usaha</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="background-color: darkgray; color: white;">Rp</span>
                                                </div>
                                                <input type="text" name="jumlah_modal_usaha" id="jumlah_modal_usaha" class="form-control rupiah" required value="<?= $row['jumlah_modal_usaha'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nomor_pendaftaran" class="col-sm-3 col-form-label">Nomor Pendaftaran</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nomor_pendaftaran" id="nomor_pendaftaran" class="form-control" readonly value="<?= $row['nomor_pendaftaran'] ?>">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Foto Pemohon</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="foto_pemohon" id="input-file-now-custom-2" class="dropify val_file" data-height="200" data-default-file="<?= base_url() ?>/assets/iumk_foto_pemohon/<?= $row['foto_pemohon']; ?>">
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
                        <p style="color: red; font-style: italic;">
                            *Kosongkan File Jika Tidak Diubah <br>
                            *Upload File Dalam Format JPG / PNG / PDF dengan Ukuran Maksimal 1 Mb
                        </p>
                    </div>
                    <!-- ROW -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
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
                                                <input type="file" class="custom-file-input val_file" name="file[]">
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
                                    <button type="button" id="submit" class="btn btn-primary">Edit</button>
                                    <button type="submit" name="submit" id="tombol-submit" style="display: none;">Edit IUMK</button>
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

        // ambil dasar hukum IUMK
        $dataperaturan = $koneksi->query("SELECT * FROM peraturan_iumk")->fetch_array();
        // ambil data camat aktif
        $camat = $koneksi->query("SELECT * FROM camat WHERE status = 'Aktif'")->fetch_array();

        $id_masyarakat      = $idm;
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


        $event_fotopemohon = "";

        // 

        // CEK APAKAH FOTO DIGANTI
        if (!empty($_FILES['foto_pemohon']['name'])) {
            $fotolama = $row['foto_pemohon'];

            // UPLOAD FOTO PEMOHON
            $fotopemohon      = $_FILES['foto_pemohon']['name'];
            $x_fotopemohon    = explode('.', $fotopemohon);
            $ext_fotopemohon  = end($x_fotopemohon);
            $nama_fotopemohon = rand(1, 99999) . '.' . $ext_fotopemohon;
            $tmp_fotopemohon  = $_FILES['foto_pemohon']['tmp_name'];
            $dir_fotopemohon  = '../../assets/iumk_foto_pemohon/';

            move_uploaded_file($tmp_fotopemohon, $dir_fotopemohon . $nama_fotopemohon);
            if (file_exists($dir_fotopemohon . $fotolama)) {
                unlink($dir_fotopemohon . $fotolama);
            }
            $event_fotopemohon .= "Sukses Upload";
        } else {
            $nama_fotopemohon = $row['foto_pemohon'];
            $event_fotopemohon .= "Foto Tidak Diubah";
        }


        if (!empty($event_fotopemohon)) {

            // UPLOAD FILE LAMPIRAN
            $gambar_arr    = array();
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

                    $targer_dir = '../../assets/iumk/';
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

            if (!empty($event)) {
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
                no_rumah           = '$no_rumah',
                rt                 = '$rt',
                rw                 = '$rw',
                kelurahan          = '$kelurahan',
                jumlah_modal_usaha = '$jumlah_modal_usaha',
                id_posisi          = 1,
                nama_camat         = '$nama_camat',
                jabatan            = '$jabatan',
                nip                = '$nip',
                foto_pemohon       = '$nama_fotopemohon',
                kelengkapan        = null,
                status             = '$status'
                WHERE id_iumk      = '$id'
                ");


                if ($submit) {
                    echo "
                        <script type='text/javascript'>
                        setTimeout(function () {    
                            toastr.success('Permohonan IUMK Berhasil Diubah');     
                        },10);
                        window.setTimeout(function(){ 
                            window.location.replace('" . base_url('page/iumk') . "');
                        } ,1500);   
                        </script>";
                }
            }
        }
    }
    ?>

</body>

</html>