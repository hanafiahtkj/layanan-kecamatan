<!DOCTYPE html>
<html lang="en">

<?php
include_once "../../config/config.php";
include_once "../../config/bulan.php";
include_once "../../config/auth-mas.php";
include_once "../../template/ui/head.php";

$idm      = $_SESSION['id_masyarakat'];
$data_mas = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$idm'")->fetch_array();

// NOMOR SURAT OTOMATIS
$query  = mysqli_query($koneksi, "SELECT max(nomor_sktu) AS kode FROM sktu_baru");
$data   = mysqli_fetch_array($query);
$kode   = $data['kode'];

$nourut = (int) substr($kode, 5, 3);
$nourut++;

$b_romawi = $bulan_romawi[date('m')];
$kodeotomatis = "513/" . sprintf('%03s', $nourut) . "/SKTU-" . $b_romawi . "/CAM-BU/" . date('Y');
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
                    <h2>Input SKTU Baru</h2>
                    <ol>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><a href="<?= base_url('page/sktu'); ?>">SKTU</a></li>
                        <li>Input SKTU Baru</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services graform">
            <div class="container">

                <div class="section-title">
                    <h2>SKTU Baru</h2>
                    <p>Form Input Surat Keterangan Tempat Usaha (Baru)</p>
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

                                    <div class="card mb-3" style="border: 2px solid crimson;">
                                        <div class="card-body">

                                            <div class="form-group row">
                                                <label for="nama_pemohon" class="col-sm-3 col-form-label">Nama Pemohon</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value="<?= $data_mas['nama']; ?>" required readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="no_telp" class="col-sm-3 col-form-label">Nomor Telpon</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="no_telp" name="no_telp" onkeypress="return Angkasaja(event)" value="<?= $data_mas['telpon']; ?>" required readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="alamat_kediaman" class="col-sm-3 col-form-label">Alamat Kediaman</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="alamat_kediaman" id="alamat_kediaman" rows="3" required readonly><?= $data_mas['alamat']; ?></textarea>
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
                                        <label for="alamat_perusahaan" class="col-sm-3 col-form-label">Alamat Perusahaan</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" rows="3" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nama_pimpinan_perusahaan" class="col-sm-3 col-form-label">Nama Pimpinan Perusahaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama_pimpinan_perusahaan" name="nama_pimpinan_perusahaan" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kegiatan_usaha" class="col-sm-3 col-form-label">Kegiatan Usaha</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="kegiatan_usaha" id="kegiatan_usaha" required>
                                                <option value="">--Pilih--</option>
                                                <?php
                                                $kegiatan = $koneksi->query("SELECT * FROM kegiatan_usaha ORDER BY kegiatan_usaha ASC");
                                                foreach ($kegiatan as $ku) {
                                                ?>
                                                    <option value="<?= $ku['kegiatan_usaha']; ?>"><?= $ku['kegiatan_usaha']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="sifat" class="col-sm-3 col-form-label">Sifat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="sifat" value="Baru" readonly require>
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
                        <p>*Upload File Dalam Format JPG / PNG / PDF dengan Ukuran Maksimal 1 Mb</p>
                    </div>
                    <!-- ROW -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                    $datalampiran = $koneksi->query("SELECT * FROM lampiran_sktu WHERE keterangan LIKE '%Baru%' ORDER BY id_lampiran ASC");
                                    foreach ($datalampiran as $lampiran) {
                                    ?>

                                        <div class="form-group">
                                            <label><?= $lampiran['nama_lampiran'] ?></label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input val_file" name="file[]" required>
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
                                    <button type="button" id="submit" class="btn btn-primary">Buat SKTU</button>
                                    <button type="submit" name="submit" id="tombol-submit" style="display: none;">Buat SKTU</button>
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
    </script>


    <!-- SIMPAN -->
    <?php
    if (isset($_POST['submit'])) {

        // ambil data dasar hukum sktu
        $dasarhukum = $koneksi->query("SELECT * FROM peraturan_sktu")->fetch_array();
        // ambil data camat aktif
        $camat = $koneksi->query("SELECT * FROM camat WHERE status = 'Aktif'")->fetch_array();

        $nomor_sktu               = $kodeotomatis;
        $nama_pemohon             = $_POST['nama_pemohon'];
        $no_telp                  = $_POST['no_telp'];
        $tgl                      = $_POST['tgl'] . " " . date('H:i:s');
        $peraturan                = $dasarhukum['peraturan'];
        $nama_perusahaan          = $_POST['nama_perusahaan'];
        $alamat_perusahaan        = $_POST['alamat_perusahaan'];
        $nama_pimpinan_perusahaan = $_POST['nama_pimpinan_perusahaan'];
        $alamat_kediaman          = $_POST['alamat_kediaman'];
        $kegiatan_usaha           = $_POST['kegiatan_usaha'];
        $sifat                    = $_POST['sifat'];
        $nama_camat               = $camat['nama_camat'];
        $nip                      = $camat['nip'];
        $jabatan                  = $camat['jabatan'];
        $status                   = "Belum Diproses";

        $gambar_arr    = array();
        $idl           = $_POST['id_lampiran'];
        $hitungidl     = count($idl);

        $event = "";

        for ($i = 0; $i < $hitungidl; $i++) {

            $file          = $_FILES['file']['name'][$i];
            $nama_lamp     = explode('.', $file);
            $format_lamp   = end($nama_lamp);
            $nama_lampiran = rand(1, 99999) . '.' . $format_lamp;
            $allow_sizefile = 1024 * 1024 * 1;

            // temporari file
            $tmp_file  = $_FILES['file']['tmp_name'][$i];

            $targer_dir = '../../assets/sktu/';
            $target_file = $targer_dir . $nama_lampiran;

            if (move_uploaded_file($tmp_file, $target_file)) {
                $gambar_arr[] = $target_file;
                $koneksi->query("INSERT INTO lampiran_sktu_file VALUES (null, '$idl[$i]', '$nomor_sktu', '$nama_lampiran', 'Baru', null)");
                $event .= "upload berhasil";
            }
        }

        if (!empty($event)) {
            $submit = $koneksi->query("INSERT INTO sktu_baru VALUES (
            null, 
            '$idm', 
            '$nomor_sktu', 
            '$nama_pemohon', 
            '$no_telp', 
            '$tgl', 
            '$peraturan', 
            '$nama_perusahaan', 
            '$alamat_perusahaan', 
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
                $koneksi->query("INSERT INTO riwayat_tgl_sktu VALUES (null, '$nomor_sktu', '$tgl', null)");
                echo "
                <script type='text/javascript'>
                setTimeout(function () {    
                    toastr.success('SKTU Berhasil Dibuat');     
                },10);
                window.setTimeout(function(){ 
                    window.location.replace('" . base_url('page/sktu') . "');
                } ,1500);   
                </script>";
            }
        }
    }
    ?>

</body>

</html>