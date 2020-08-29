<!DOCTYPE html>
<html lang="en">

<?php
include_once "../../config/config.php";
include_once "../../config/auth-mas.php";
include_once "../../template/ui/head.php";

$idm      = $_SESSION['id_masyarakat'];
$data_mas = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$idm'")->fetch_array();

$id   = encryptor('decrypt', $_GET['id']);
$row = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE id_sktu = '$id'")->fetch_array();

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
                    <h2>Edit Perpanjangan SKTU</h2>
                    <ol>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><a href="<?= base_url('page/sktu'); ?>">SKTU</a></li>
                        <li>Edit Perpanjangan SKTU</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>SKTU Pepanjangan</h2>
                    <p>Form Edit Surat Keterangan Tempat Usaha (Perpanjangan)</p>
                </div>

                <form action="" method="POST" enctype="multipart/form-data">

                    <!-- ROW -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="alert" style="background-color: crimson; color: white; font-size: 20px;">
                                <i class="fa fa-exclamation-triangle"> Keterangan : </i><br>
                                "<?= $row['keterangan']; ?>"
                            </div>
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

                                    <div class="form-group row">
                                        <label for="alamat_perusahaan" class="col-sm-3 col-form-label">Alamat Perusahaan</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control alamat" name="alamat_perusahaan" id="alamat_perusahaan" rows="2" required maxlength="110"><?= $row['alamat_perusahaan']; ?></textarea>
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

                                    <input type="date" name="masa_berlaku_awal" value="<?= $row['masa_berlaku_akhir'] ?>" hidden>
                                    <input type="date" name="masa_berlaku_akhir" value="<?= date('Y-m-d', strtotime($row['masa_berlaku_akhir'] . '+1 year')) ?>" hidden>

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
                                            <label><?= $lampiran['nama_lampiran'] ?></label>
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
                                    <button type="button" id="submit" class="btn btn-primary" style="width: 10%;">Edit</button>
                                    <button type="submit" name="submit" id="tombol-submit" style="display: none;">Edit SKTU</button>
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
        $tgl                      = $row['tgl'];
        $tgl_time                 = $_POST['tgl'] . " " . date('H:i:s');
        $peraturan                = $dasarhukum['peraturan'];
        $nama_perusahaan          = $_POST['nama_perusahaan'];
        $alamat_perusahaan        = $_POST['alamat_perusahaan'];
        $nama_pimpinan_perusahaan = $_POST['nama_pimpinan_perusahaan'];
        $alamat_kediaman          = $_POST['alamat_kediaman'];
        $kegiatan_usaha           = $_POST['kegiatan_usaha'];
        $masa_berlaku_akhir       = $_POST['masa_berlaku_akhir'];
        $nama_camat               = $camat['nama_camat'];
        $nip                      = $camat['nip'];
        $jabatan                  = $camat['jabatan'];
        $status                   = "Belum Diproses";

        $submit = $koneksi->query("UPDATE sktu_perpanjangan SET 
            nama_pemohon             = '$nama_pemohon', 
            no_telp                  = '$no_telp', 
            tgl                      = '$tgl_time', 
            peraturan                = '$peraturan', 
            nama_perusahaan          = '$nama_perusahaan', 
            alamat_perusahaan        = '$alamat_perusahaan', 
            nama_pimpinan_perusahaan = '$nama_pimpinan_perusahaan',
            alamat_kediaman          = '$alamat_kediaman',
            kegiatan_usaha           = '$kegiatan_usaha',
            nama_camat               = '$nama_camat',
            nip                      = '$nip',
            jabatan                  = '$jabatan',
            kelengkapan              = null,
            status                   = '$status'
            WHERE id_sktu            = '$id'
            ");

        if ($submit) {

            $gambar_arr    = array();
            $idl           = $_POST['id_lampiran'];
            $hitungidl     = count($idl);

            $event = "";

            for ($i = 0; $i < $hitungidl; $i++) {

                $file          = $_FILES['file']['name'][$i];

                if (!empty($file)) {

                    $nama_lamp     = explode('.', $file);
                    $format_lamp   = end($nama_lamp);
                    $nama_lampiran = rand(1, 99999) . '.' . $format_lamp;
                    $allow_sizefile = 1024 * 1024 * 1;

                    // temporari file
                    $tmp_file  = $_FILES['file']['tmp_name'][$i];

                    $targer_dir = '../../assets/sktu/perpanjangan/';
                    $target_file = $targer_dir . $nama_lampiran;

                    move_uploaded_file($tmp_file, $target_file);
                    $gambar_arr[] = $target_file;

                    // REPLACE FILE LAMA
                    $queryfilelama = $koneksi->query("SELECT * FROM lampiran_sktu_file WHERE id_sktu = '$id' AND keterangan = 'Perpanjangan'");
                    foreach ($queryfilelama as $fl) {
                        $filelama[] = $fl['file'];
                        if (file_exists($targer_dir . $filelama[$i])) {
                            unlink($targer_dir . $filelama[$i]);
                        }
                    }
                    $koneksi->query("UPDATE lampiran_sktu_file SET file = '$nama_lampiran' WHERE id_lampiran = '$idl[$i]' AND id_sktu = '$id' AND keterangan = 'Perpanjangan'");
                    $event .= "upload berhasil";
                } else {
                    $event .= "Gambar Tidak Diubah";
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