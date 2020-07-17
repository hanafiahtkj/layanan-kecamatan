<!DOCTYPE html>
<html>

<?php
include_once "../../../config/config.php";
include_once "../../../config/auth-admin.php";
include_once "../../../template/head.php";
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
                            <h1 class="m-0 text-dark">Tambah Surat Rekomendasi Pendirian PAUD</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item">Pelayanan</li>
                                <li class="breadcrumb-item">Surat Rekomendasi Pendirian PAUD</li>
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
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- Horizontal Form -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Tambah Data</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal" method="POST" action="">
                                    <div class="card-body" style="background-color: azure;">

                                        <div class="form-group row">
                                            <label for="tgl_permohonan" class="col-sm-2 col-form-label">Tanggal</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan" required value="<?= date('Y-m-d') ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                                            <div class="col-sm-10">
                                                <select name="kelurahan" id="kelurahan" class="form-control select2" data-placeholder="Pilih Kelurahan" style="width: 100%;" required>
                                                    <option value=""></option>
                                                    <?php
                                                    $kelurahan = $koneksi->query("SELECT * FROM kelurahan ORDER BY kelurahan ASC");
                                                    foreach ($kelurahan as $kel) {
                                                    ?>
                                                        <option value="<?= $kel['kelurahan'] ?>"><?= $kel['kelurahan'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_pendiri" class="col-sm-2 col-form-label">Nama Pendiri/Ketua Yayasan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_pendiri" name="nama_pendiri" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea name="alamat" id="alamat" rows="3" class="form-control" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat_sekolah" class="col-sm-2 col-form-label">Alamat Sekolah</label>
                                            <div class="col-sm-10">
                                                <textarea name="alamat_sekolah" id="alamat_sekolah" rows="3" class="form-control" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Boleh Dikosongkan">
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
                                            <div class="col-sm-10">
                                                <select name="status" id="status" class="form-control" data-placeholder="Pilih">
                                                    <option value="Belum Diproses" selected>Belum Diproses</option>
                                                    <option value="Dalam Proses">Dalam Proses</option>
                                                    <option value="Selesai">Selesai</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row" id="tglselesai" style="display: none;">
                                        </div>


                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/pelayanan/rpp') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
                                        <button type="submit" name="submit" class="btn bg-gradient-primary float-right mr-2"><i class="fa fa-save"> Simpan</i></button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            </div>
                            <!-- /.card -->

                        </div>
                        <!--/.col (left) -->
                    </div>
                    <!-- /.row -->
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

    <script type="text/javascript">
        $(document).ready(function() {

            // TAMPILKAN NAMA HARI INI BERDASARKAN VALUE TANNGAL PERMOHONAN
            // let NamaHari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat",
            //     "Sabtu");
            // let tgl = document.getElementById('tgl_permohonan').value;
            // let date = new Date(tgl);
            // let day = NamaHari[date.getDay()];
            // $('#hari').val(day);


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

        });

        // TAMPILKAN NAMA HARI KETIKA TANGGAL PERMOHONAN BERUBAH
        // function ChangeHari(val) {
        //     let NamaHari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat",
        //         "Sabtu");
        //     let tgl = document.getElementById('tgl_permohonan').value = val;
        //     let date = new Date(tgl);
        //     let day = NamaHari[date.getDay()];
        //     $('#hari').val(day);
        // }
    </script>

    <?php
    if (isset($_POST['submit'])) {
        $tgl_permohonan  = $_POST['tgl_permohonan'];
        $kelurahan       = $_POST['kelurahan'];
        $nama_pendiri    = $_POST['nama_pendiri'];
        $alamat          = $_POST['alamat'];
        $nama_sekolah    = $_POST['nama_sekolah'];
        $alamat_sekolah  = $_POST['alamat_sekolah'];
        $keterangan      = $_POST['keterangan'];
        $id_posisi       = $_POST['id_posisi'];
        $status          = $_POST['status'];

        if ($status == "Selesai") {
            $tgl_selesai = $_POST['tgl_selesai'];

            $submit = $koneksi->query("INSERT INTO rekomendasi_pendirian_paud VALUES (null, '$tgl_permohonan', '$kelurahan', '$nama_pendiri', '$alamat', '$nama_sekolah', '$alamat_sekolah', '$keterangan', '$tgl_selesai', 4, '$status')");
        } else {
            $submit = $koneksi->query("INSERT INTO rekomendasi_pendirian_paud VALUES (null, '$tgl_permohonan', '$kelurahan', '$nama_pendiri', '$alamat', '$nama_sekolah', '$alamat_sekolah', '$keterangan', null, '$id_posisi', '$status')");
        }

        if ($submit) {
            $_SESSION['pesan'] = "Data Surat Rekomendasi Pendirian PAUD Ditambahkan";
            echo "<script>window.location.replace('../rpp/');</script>";
        }
    }

    ?>

</body>

</html>