<!DOCTYPE html>
<html>

<?php
include_once "../../config/config.php";
include_once "../../config/auth-staf.php";
include_once "../../template/head.php";

$id   = encryptor('decrypt', $_GET['id']);
$data = $koneksi->query("SELECT * FROM legalisasi_imb WHERE id_imb = '$id'");
$row  = $data->fetch_array();
?>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once "../../template/navbar.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once "../../template/sidebar.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Edit Legalisasi Permohonan IMB</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>

                                <li class="breadcrumb-item">Legalisasi Permohonan IMB</li>
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
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- Horizontal Form -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Edit Data</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal" method="POST" action="">
                                    <div class="card-body" style="background-color: azure;">

                                        <div class="form-group row">
                                            <label for="tgl_permohonan" class="col-sm-2 col-form-label">Tanggal</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan" required value="<?= $row['tgl_permohonan'] ?>">
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
                                                        <option value="<?= $kel['kelurahan'] ?>" <?php if ($row['kelurahan'] == $kel['kelurahan']) {
                                                                                                        echo "selected";
                                                                                                    } ?>><?= $kel['kelurahan'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama_pemohon" class="col-sm-2 col-form-label">Nama Pemohon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" required value="<?= $row['nama_pemohon']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="alamat_pemohon" class="col-sm-2 col-form-label">Alamat Pemohon</label>
                                            <div class="col-sm-10">
                                                <textarea name="alamat_pemohon" id="alamat_pemohon" rows="3" class="form-control" required><?= $row['alamat_pemohon']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="lokasi_bangunan" class="col-sm-2 col-form-label">Lokasi Bangunan</label>
                                            <div class="col-sm-10">
                                                <textarea name="lokasi_bangunan" id="lokasi_bangunan" rows="3" class="form-control" required><?= $row['lokasi_bangunan']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Boleh Dikosongkan" value="<?= $row['keterangan']; ?>">
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
                                            <div class="col-sm-10">
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
                                                    <input type="date" class="form-control" name="tgl_selesai" value="<?= $row['tgl_selesai']; ?>" required>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('staf/legalisasi-imb') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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

        <?php include_once "../../template/footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include_once "../../template/script.php"; ?>

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
        $nama_pemohon    = $_POST['nama_pemohon'];
        $alamat_pemohon  = $_POST['alamat_pemohon'];
        $lokasi_bangunan = $_POST['lokasi_bangunan'];
        $keterangan      = $_POST['keterangan'];
        $id_posisi       = $_POST['id_posisi'];
        $status          = $_POST['status'];

        if ($status == "Selesai") {
            $tgl_selesai = $_POST['tgl_selesai'];

            $submit = $koneksi->query("UPDATE legalisasi_imb SET 
                                tgl_permohonan  = '$tgl_permohonan', 
                                kelurahan       = '$kelurahan', 
                                nama_pemohon    = '$nama_pemohon', 
                                alamat_pemohon  = '$alamat_pemohon', 
                                lokasi_bangunan = '$lokasi_bangunan', 
                                keterangan      = '$keterangan', 
                                tgl_selesai     = '$tgl_selesai',
                                id_posisi       = 4, 
                                status          = '$status'
                                WHERE id_imb    = '$id'    
                                ");
        } else {
            $submit = $koneksi->query("UPDATE legalisasi_imb SET 
                                tgl_permohonan  = '$tgl_permohonan', 
                                kelurahan       = '$kelurahan', 
                                nama_pemohon    = '$nama_pemohon', 
                                alamat_pemohon  = '$alamat_pemohon', 
                                lokasi_bangunan = '$lokasi_bangunan', 
                                keterangan      = '$keterangan',
                                tgl_selesai     = null,
                                id_posisi       = '$id_posisi',
                                status          = '$status'
                                WHERE id_imb    = '$id'    
                                ");
        }

        if ($submit) {
            $_SESSION['pesan'] = "Data Legalisasi Permohonan Izin Mendirikan Bangunan Dibah";
            echo "<script>window.location.replace('../legalisasi-imb/');</script>";
        }
    }

    ?>

</body>

</html>