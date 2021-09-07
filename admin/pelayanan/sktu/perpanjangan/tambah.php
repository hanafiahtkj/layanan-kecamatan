<!DOCTYPE html>
<html>

<?php
include_once "../../../../config/config.php";
include_once "../../../../config/bulan.php";
include_once "../../../../config/auth-admin.php";
include_once "../../../../template/head.php";

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
                            <h1 class="m-0 text-dark">Tambah Data Perpanjangan SKTU</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Pelayanan</li>
                                <li class="breadcrumb-item active">SKTU</li>
                                <li class="breadcrumb-item active">Perpanjangan</li>
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
                                        <h3 class="card-title">Form Tambah SKTU</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: azure;">

                                        <div class="form-group row">
                                            <label for="tgl" class="col-sm-2 col-form-label">Tanggal Permohonan</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tgl" name="tgl" required value="<?= date('Y-m-d') ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nomor_sktu" class="col-sm-2 col-form-label">Nomor</label>
                                            <div class="col-sm-10">
                                                <select name="nomor_sktu" id="nomor_sktu" class="form-control select2" data-placeholder="Pilih Nomor SKTU" onchange="changeValue(this.value)" required style="width: 100%;">
                                                    <option value=""></option>
                                                    <?php
                                                    $sktu = $koneksi->query("SELECT * FROM sktu_baru ORDER BY nomor_sktu DESC");
                                                    $jsArray = "var sktu = new Array();\n";
                                                    foreach ($sktu as $nos) {
                                                        $tglsktu = $koneksi->query("SELECT * FROM riwayat_tgl_sktu WHERE nomor_sktu = '$nos[nomor_sktu]'")->fetch_array();
                                                    ?>
                                                        <option value="<?= $nos['nomor_sktu'] ?>"><?= $nos['nomor_sktu'] . " - (" . $nos['nama_pemohon'] . ")"; ?></option>

                                                    <?php
                                                        $jsArray .= "sktu['" . $nos['nomor_sktu'] . "'] = {
                                                                    id_masyarakat:'" . addslashes($nos['id_masyarakat']) . "', 
                                                                    nama_pemohon:'" . addslashes($nos['nama_pemohon']) . "', 
                                                                    no_telp:'" . addslashes($nos['no_telp']) . "', 
                                                                    masa_berlaku:'" . addslashes($tglsktu['terakhir_diperpanjang']) . "', 
                                                                    nama_perusahaan:'" . addslashes($nos['nama_perusahaan']) . "', 
                                                                    alamat_perusahaan:'" . addslashes($nos['alamat_perusahaan']) . "', 
                                                                    no_rumah:'" . addslashes($nos['no_rumah']) . "', 
                                                                    rt:'" . addslashes($nos['rt']) . "', 
                                                                    rw:'" . addslashes($nos['rw']) . "', 
                                                                    kelurahan:'" . addslashes($nos['kelurahan']) . "', 
                                                                    nama_pimpinan_perusahaan:'" . addslashes($nos['nama_pimpinan_perusahaan']) . "', 
                                                                    alamat_kediaman:'" . addslashes($nos['alamat_kediaman']) . "', 
                                                                    kegiatan_usaha:'" . addslashes($nos['kegiatan_usaha']) . "'
                                                                };\n";
                                                    } ?>
                                                </select>
                                                <input type="text" id="id_masyarakat" name="id_masyarakat" readonly hidden>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_pemohon" class="col-sm-2 col-form-label">Nama Pemohon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telpon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="no_telp" name="no_telp" onkeypress="return Angkasaja(event)" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" readonly>
                                            </div>
                                        </div>

                                        <hr>
                                        <legend style="margin-bottom: 15px;">Alamat Perusahaan</legend>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jalan</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control alamat" name="alamat_perusahaan" id="alamat_perusahaan" rows="2" required maxlength="110"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">RT / RW</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" name="rt" id="rt" required placeholder="RT" maxlength="10" onkeypress="return Angkasaja(event)">
                                            </div>
                                            <span style="margin-top: 5px;">/</span>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" name="rw" id="rw" required placeholder="RW" maxlength="10" onkeypress="return Angkasaja(event)">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">No. Rumah</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="no_rumah" id="no_rumah" required maxlength="10" onkeypress="return Angkasaja(event)">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kelurahan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="kelurahan" id="kelurahan" class="form-control" maxlength="100" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_pimpinan_perusahaan" class="col-sm-2 col-form-label">Nama Pimpinan Perusahaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_pimpinan_perusahaan" name="nama_pimpinan_perusahaan" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat_kediaman" class="col-sm-2 col-form-label">Alamat Kediaman</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="alamat_kediaman" id="alamat_kediaman" rows="3" readonly></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="kegiatan_usaha" class="col-sm-2 col-form-label">Kegiatan Usaha</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="kegiatan_usaha" id="kegiatan_usaha" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Masa Berlaku</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control datepicker" id="masa_berlaku_awal" name="masa_berlaku_awal">
                                            </div>
                                            <label class="col-form-label">S/D</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" id="masa_berlaku_akhir" name="masa_berlaku_akhir">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="sifat" class="col-sm-2 col-form-label">Sifat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="sifat" value="Perpanjangan" readonly>
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
                                        <h3 class="card-title">Lampiran</h3>

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
                                        $datalampiran = $koneksi->query("SELECT * FROM lampiran_sktu WHERE keterangan LIKE '%Perpanjangan%' ORDER BY id_lampiran ASC");
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


        <?php echo $jsArray; ?>

        function changeValue(id) {
            document.getElementById('id_masyarakat').value = sktu[id].id_masyarakat;
            document.getElementById('nama_pemohon').value = sktu[id].nama_pemohon;
            document.getElementById('no_telp').value = sktu[id].no_telp;
            document.getElementById('masa_berlaku_awal').value = sktu[id].masa_berlaku;
            document.getElementById('nama_perusahaan').value = sktu[id].nama_perusahaan;
            document.getElementById('alamat_perusahaan').value = sktu[id].alamat_perusahaan;
            document.getElementById('no_rumah').value = sktu[id].no_rumah;
            document.getElementById('rt').value = sktu[id].rt;
            document.getElementById('rw').value = sktu[id].rw;
            document.getElementById('kelurahan').value = sktu[id].kelurahan;
            document.getElementById('nama_pimpinan_perusahaan').value = sktu[id].nama_pimpinan_perusahaan;
            document.getElementById('alamat_kediaman').value = sktu[id].alamat_kediaman;
            document.getElementById('kegiatan_usaha').value = sktu[id].kegiatan_usaha;

            let bln = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
            let masaawal = document.getElementById('masa_berlaku_awal').value
            let tglawal = new Date(masaawal);
            let dta = tglawal.getDate();
            if (dta < 10) {
                dta = '0' + dta;
            }
            let mta = bln[tglawal.getMonth()];
            let tta = tglawal.getFullYear() + 1;
            let hasil = tta + '-' + mta + '-' + dta;
            console.log(hasil);
            document.getElementById('masa_berlaku_akhir').value = hasil;

        };
    </script>

    <?php
    if (isset($_POST['submit'])) {

        // AMBIL DASAR HUKUM SKTU
        $dataperaturan = $koneksi->query("SELECT * FROM peraturan_sktu")->fetch_array();

        $id_masyarakat            = $_POST['id_masyarakat'];
        $nomor_sktu               = $_POST['nomor_sktu'];
        $nama_pemohon             = $_POST['nama_pemohon'];
        $no_telp                  = $_POST['no_telp'];
        $tgl                      = $_POST['tgl'] . " " . date('H:i:s');;
        $peraturan                = $dataperaturan['peraturan'];
        $nama_perusahaan          = $_POST['nama_perusahaan'];
        $alamat_perusahaan        = $_POST['alamat_perusahaan'];
        $rt                       = $_POST['rt'];
        $rw                       = $_POST['rw'];
        $no_rumah                 = $_POST['no_rumah'];
        $kelurahan                = $_POST['kelurahan'];
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
        if ($status == "Selesai") {
            $tes = explode('/', $nomor_sktu);
            $ambil = [
                'kode' => $tes[0],
                'no'   => $tes[1],
                'cam'  => $tes[3]
            ];
            $nobulanromawi      = "SKTU-" . $bulan_romawi[date('m')];
            $tahunsekarang      = date('Y');
            $nomorsktubaru      = $ambil['kode'] . "/" . $ambil['no'] . "/" . $nobulanromawi . "/" . $ambil['cam'] . "/" . $tahunsekarang;
            $masa_berlaku_awal  = date('Y-m-d');
            $masa_berlaku_akhir = date('Y-m-d', strtotime('+1 year'));
            $tgl_selesai        = $_POST['tgl_selesai'];
            $id_posisi          = 4;

            $submit = $koneksi->query("INSERT INTO sktu_perpanjangan VALUES (
                null, 
                '$id_masyarakat', 
                '$nomorsktubaru', 
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
                '$masa_berlaku_awal',
                '$masa_berlaku_akhir',
                '$sifat',
                '$nama_camat',
                '$nip',
                '$jabatan',
                '$kelengkapan',
                '$keterangan',
                '$tgl_selesai',
                '$id_posisi',
                '$status'
                )");
        } else {
            $nomorsktubaru = $nomor_sktu;

            $submit = $koneksi->query("INSERT INTO sktu_perpanjangan VALUES (
                null, 
                '$id_masyarakat', 
                '$nomorsktubaru', 
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
                '$kelengkapan',
                '$keterangan',
                null,
                '$id_posisi',
                '$status'
                )");
        }


        if ($submit) {

            $ambilidsktu = $koneksi->query("SELECT * FROM sktu_perpanjangan ORDER BY id_sktu DESC LIMIT 1")->fetch_array();
            $idsktu      = $ambilidsktu['id_sktu'];

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

                $targer_dir = '../../../../assets/sktu/perpanjangan/';
                $target_file = $targer_dir . $nama_lampiran;


                move_uploaded_file($tmp_file, $target_file);
                $gambar_arr[] = $target_file;
                $koneksi->query("INSERT INTO lampiran_sktu_file VALUES (null, '$idl[$i]', '$idsktu', '$nama_lampiran', 'Perpanjangan')");
                $event .= "upload berhasil";
            }

            if (!empty($event)) {
                if ($status == "Selesai") {
                    $koneksi->query("UPDATE riwayat_tgl_sktu SET nomor_sktu = '$nomorsktubaru', terakhir_diperpanjang = '$masa_berlaku_akhir' WHERE nomor_sktu = '$nomor_sktu'");
                }
                $_SESSION['pesan'] = "Data SKTU Diperpanjang";
                echo "<script>window.location.replace('../');</script>";
            }
        }
    }
    ?>

</body>

</html>