<?php
include_once "config/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once "template/ui/head.php"; ?>
<style>
    /* .warna-hover :hover {
        background-image: linear-gradient(-90deg, lightblue, DodgerBlue);
    } */

    #bg-card {
        background: url('assets/bg-cover/orange.jpg') center center no-repeat;
        background-size: cover;
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <?php include_once "template/ui/header.php"; ?>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center" data-aos="fade-up">
            <h1 style="color: yellow; text-shadow: 0 0 25px #000000;">
                <!-- APLIKASI <br> -->
                E-LAYANAN ONLINE KECAMATAN
                <span>BANJARMASIN UTARA</span>
            </h1>
            <h5 style="color: yellow; text-shadow: 0 0 15px #000000; font-weight: bold;">JL. HKSN RT. 10. Alalak Utara Banjarmasin 70125</h5>
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Pelayanan Section ======= -->
        <section id="pelayanan" class="pelayanan section-bg gra">
            <div class="container-fluid">

                <div class="section-title" style="font-weight: bold; color: black;">
                    <h2>Pelayanan</h2>
                    <p>Pilih Jenis Pelayanan</p>
                </div>

                <div class="row">

                    <div class="col-md-4 mt-4">
                        <a class="text-center" href="<?= base_url('page/sktu') ?>" style="color: black;">
                            <div class="icon-box" id="bg-card">
                                <img src="https://img.icons8.com/color/100/000000/shop.png"> <br>
                                <h4>Surat Keterangan Tempat Usaha</h4>
                                <p>Surat keterangan tempat usaha adalah surat keterangan resmi dari Kelurahan dan/atau Kecamatan setempat yang menjelaskan bahwa benar adanya suatu usaha berlokasi di alamat/domisili tertentu. Di kota lain, SKTU dikenal sebagai Surat Keterangan Domisili Usaha (SKDU).</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 mt-4">
                        <a class="warna-hover text-center" href="<?= base_url('page/iumk') ?>" style="color: black;">
                            <div class="icon-box" id="bg-card">
                                <img src="https://img.icons8.com/color/100/000000/clipboard.png" /> <br>
                                <h4>Izin Usaha Mikro dan Kecil</h4>
                                <p>Surat izin usaha mikro dan kecil adalah tanda legalitas kepada seseorang atau pelaku usaha/kegiatan tertentu dalam bentuk izin usaha mikro dan kecil dalam bentuk satu lembar, maka setiap usaha harus memiliki izin secara legal</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 mt-4">
                        <a class="warna-hover text-center" href="<?= base_url('page/ahli-waris') ?>" style="color: black;">
                            <div class="icon-box" id="bg-card">
                                <img src="https://img.icons8.com/color/100/000000/group.png" /> <br>
                                <h4>Surat Keterangan Ahli Waris</h4>
                                <p>Surat Keterangan Ahli Waris adalah surat yang dibuat dihadapan pejabat yang berwenang, yang isinya menerangkan tentang siapa saja ahli waris dari seseorang yang sudah meninggal dunia</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 mt-4">
                        <a class="warna-hover text-center" href="<?= base_url('page/rekomendasi-pendirian-paud') ?>" style="color: black;">
                            <div class="icon-box" id="bg-card">
                                <img src="https://img.icons8.com/color/100/000000/playground.png" /> <br>
                                <h4>Rekomendasi Pendirian PAUD</h4>
                                <p>Surat Rekomendasi Pendirian PAUD adalah surat yang dibuat untuk memenuhi persyaratan untuk mendirikan sekolah pendidikan anak usia dini</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 mt-4">
                        <a class="warna-hover text-center" href="<?= base_url('page/legalisasi-proposal') ?>" style="color: black;">
                            <div class="icon-box" id="bg-card">
                                <img src="https://img.icons8.com/color/100/000000/copybook.png" /> <br>
                                <h4>Legalisasi Proposal</h4>
                                <p>Surat Legalisasi Proposal adalah surat yang dibuat untuk mengesahkan pembuatan proposal</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 mt-4">
                        <a class="warna-hover text-center" href="<?= base_url('page/legalisasi-izin-tower') ?>" style="color: black;">
                            <div class="icon-box" id="bg-card">
                                <img src="https://img.icons8.com/color/100/000000/water-tower.png" /> <br>
                                <h4>Legalisasi Permohonan Izin Tower</h4>
                                <p>Surat Legalisasi Permohonan Izin Tower surat yang menyatakan izin untuk mendirikan sebuah tower atau menara</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 my-4"></div>

                    <div class="col-md-4 my-4">
                        <a class="warna-hover text-center" href="<?= base_url('page/legalisasi-imb') ?>" style="color: black;">
                            <div class="icon-box" id="bg-card">
                                <img src="https://img.icons8.com/color/100/000000/city.png" /> <br>
                                <h4>Legalisasi Permohonan Izin Mendirikan Bangunan</h4>
                                <p>Surat Legalisasi Permohonan Izin Mendirikan Bangunan adalah surat yang menyatakan izin untuk mendirikan suatu bangunan</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 my-4"></div>

                </div>

                <hr size="30" style="background-color: white; margin-top: 3%; margin-bottom: 3%;">

                <div class="section-title" id="tentang" style="font-weight: bold; color: black; margin-top: 3%;">
                    <h2>Tentang</h2>
                    <p>Tentang Aplikasi E-Lok</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 my-4" style="color: black;">

                        <div class="card my-4">
                            <div class="card-header" style="background-color: #386dff; color: white;">
                                APLIKASI E-LAYANAN ONLINE KECAMATAN
                            </div>
                            <div class="card-body">
                                Aplikasi E-layanan online kecamatan adalah aplikasi yang difungsikan untuk mempermudah masyarakat dalam mengajukan pembuatan surat menyurat secara online di wilayah kecamatan Banjarmasin Utara
                            </div>
                        </div>


                        <div class="card my-4">
                            <div class="card-header" style="background-color: #386dff; color: white;">
                                ALUR PELAYANAN PEMOHON
                            </div>
                            <div class="card-body">
                                <img src="<?= base_url('assets/img/alurpemohon.png'); ?>" style="width: 100%; height: 100%;" alt="digram alur">
                            </div>
                        </div>

                        <div class="card my-4">
                            <div class="card-header" style="background-color: #386dff; color: white;">
                                PERSYARATAN
                            </div>
                            <div class="card-body">

                                <div class="accordion" id="accordionExample">

                                    <div class="card">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#sktu-baru" aria-expanded="true" aria-controls="collapseOne" style="font-size: 20px; font-weight: bold;">
                                                Surat Keterangan Tempat Usaha (Baru)
                                            </button>
                                        </h2>

                                        <div id="sktu-baru" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <ol>
                                                <?php
                                                $syaratsktubaru = $koneksi->query("SELECT * FROM lampiran_sktu WHERE keterangan LIKE '%Baru%' ORDER BY id_lampiran DESC");
                                                foreach ($syaratsktubaru as $sb) {
                                                    echo "<li>" . $sb['nama_lampiran'] . "</li>";
                                                }
                                                ?>
                                            </ol>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#sktu-ppj" aria-expanded="true" aria-controls="collapseOne" style="font-size: 20px; font-weight: bold;">
                                                Surat Keterangan Tempat Usaha (Perpanjangan)
                                            </button>
                                        </h2>

                                        <div id="sktu-ppj" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <ol>
                                                <?php
                                                $syaratsktuppj = $koneksi->query("SELECT * FROM lampiran_sktu WHERE keterangan LIKE '%Perpanjangan%' ORDER BY id_lampiran DESC");
                                                foreach ($syaratsktuppj as $sp) {
                                                    echo "<li>" . $sp['nama_lampiran'] . "</li>";
                                                }
                                                ?>
                                            </ol>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#iumk" aria-expanded="true" aria-controls="collapseOne" style="font-size: 20px; font-weight: bold;">
                                                Surat Izin Usaha Mikro dan Kecil
                                            </button>
                                        </h2>

                                        <div id="iumk" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <ol>
                                                <?php
                                                $syaratiumk = $koneksi->query("SELECT * FROM lampiran_iumk ORDER BY id_lampiran DESC");
                                                foreach ($syaratiumk as $si) {
                                                    echo "<li>" . $si['nama_lampiran'] . "</li>";
                                                }
                                                ?>
                                            </ol>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div class="card my-4">
                            <div class="card-header" style="background-color: #386dff; color: white;">
                                BLANKO
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%">
                                        <thead>
                                            <tr align="center">
                                                <th width="5%">No</th>
                                                <th style="text-align: left;">Blanko</th>
                                                <th style="text-align: left;">Keterangan</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $blanko = $koneksi->query("SELECT * FROM blanko ORDER BY nama_blanko ASC");
                                            foreach ($blanko as $blk) {
                                            ?>
                                                <tr align="center">
                                                    <td width="5%"><?= $no++; ?></td>
                                                    <td width="30%" align="left"><?= $blk['nama_blanko']; ?></td>
                                                    <td align="justify"><?= $blk['keterangan']; ?></td>
                                                    <td width="10%">
                                                        <!-- <a href="<?= base_url('assets/blanko/' . $blk['file']); ?>" download=""><u>Download</u></a> -->
                                                        <a href="<?= base_url('assets/blanko/' . $blk['file']); ?>" class="btn btn-success btn-sm" download=""><i class="fa fa-download"> Download</i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>


                <hr size="30" style="background-color: white; margin-top: 3%; margin-bottom: 3%;">

                <div class="section-title" id="contact" style="font-weight: bold; color: black; margin-top: 3%;">
                    <h2>Survey Kepuasan Masyarakat</h2>
                    <!-- <p>Informasi Kontak Kecamatan Banjarmasin Utara</p> -->
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-4" align="center">
                        <div class="card">
                            <div class="card-header" style="font-weight: bold; background-color: white;">
                                Bagaimana pendapat anda tentang pelayanan aplikasi e-LOK ?
                            </div>
                            <div class="card-body" align="left" style="margin-bottom: -4rem;">
                                <?php if (isset($_COOKIE['notif'])) { ?>
                                    <h5 style="text-align: center;"><?= $_COOKIE['notif']; ?></h5>
                                <?php } ?>
                                <form action="polling" method="POST" style="<?php if (isset($_COOKIE['polling'])) {
                                                                                echo $_COOKIE['polling'];
                                                                            } ?>">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="polling" id="exampleRadios1" value="1">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Sangat Baik
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="polling" id="exampleRadios2" value="2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Baik
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="polling" id="exampleRadios2" value="3">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Cukup
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="polling" id="exampleRadios2" value="4">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Kurang
                                        </label>
                                    </div>

                                    <div align="center" class="mt-3">
                                        <button class="btn btn-primary" name="vote">Vote</button>
                                    </div>
                                </form>
                                <hr>
                                <!-- ======= Skills Section ======= -->
                                <section id="skills" class="skills" style="margin-top: -4rem;">

                                    <div class="row skills-content">

                                        <div class="col-lg-12">

                                            <?php
                                            $polling    = $koneksi->query("SELECT * FROM polling")->fetch_array();
                                            $sangatbaik = $polling['sangatbaik'];
                                            $baik       = $polling['baik'];
                                            $cukup      = $polling['cukup'];
                                            $kurang     = $polling['kurang'];

                                            $jumlah       = $sangatbaik + $baik + $cukup + $kurang;
                                            $p_sangatbaik = round(($sangatbaik / $jumlah) * 100);
                                            $p_baik       = round(($baik / $jumlah) * 100);
                                            $p_cukup      = round(($cukup / $jumlah) * 100);
                                            $p_kurang     = round(($kurang / $jumlah) * 100);
                                            ?>

                                            <div class="progress">
                                                <span class="skill">Sangat Baik <i class="val"><?= $p_sangatbaik . " %"; ?></i></span>
                                                <div class="progress-bar-wrap">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?= $p_sangatbaik; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <span class="skill">Baik <i class="val"><?= $p_baik . " %"; ?></i></span>
                                                <div class="progress-bar-wrap">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?= $p_baik; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <span class="skill">Cukup <i class="val"><?= $p_cukup . " %"; ?></i></span>
                                                <div class="progress-bar-wrap">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?= $p_cukup; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <span class="skill">Kurang <i class="val"><?= $p_kurang . " %"; ?></i></span>
                                                <div class="progress-bar-wrap">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?= $p_kurang; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </section>
                                <!-- End Skills Section -->

                            </div>
                        </div>
                    </div>
                </div>

                <hr size="30" style="background-color: white; margin-top: 3%; margin-bottom: 3%;">

                <div class="section-title" id="contact" style="font-weight: bold; color: black; margin-top: 3%;">
                    <h2>Kontak Kami</h2>
                    <p>Informasi Kontak Kecamatan Banjarmasin Utara</p>
                </div>

                <div class="row justify-content-center">

                    <div class="col-lg-12">

                        <div class="info-wrap">
                            <div class="row" style="color: white;">
                                <div class="col-lg-3 info">
                                    <i class="icofont-google-map"></i>
                                    <h4>Lokasi:</h4>
                                    <p>
                                        <a href="https://goo.gl/maps/dosZdbzhPCwN62UC7" target="blank">
                                            Jl. Hksn No.8, Alalak Utara, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70125
                                        </a>
                                    </p>
                                </div>

                                <div class="col-lg-3 info mt-4 mt-lg-0">
                                    <i class="icofont-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>kecamatan.bu@gmail.com</p>
                                </div>

                                <div class="col-lg-3 info mt-4 mt-lg-0">
                                    <i class="icofont-web"></i>
                                    <h4>Website:</h4>
                                    <p><a href="https://utara.banjarmasinkota.go.id/">utara.banjarmsinkota.go.id</a></p>
                                </div>

                                <div class="col-lg-3 info mt-4 mt-lg-0">
                                    <i class="icofont-phone"></i>
                                    <h4>Telepon:</h4>
                                    <p>0857 7116 0341</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include_once "template/ui/footer.php"; ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->

    <?php include_once "template/ui/script.php"; ?>

</body>

</html>