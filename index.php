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
                APLIKASI PELAYANAN <br>
                <span>KECAMATAN BANJARMASIN UTARA</span>
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
                    <p>Tentang Aplikasi Layanan Kecamatan</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 my-4" style="color: black;">

                        <div class="card my-4">
                            <div class="card-header">
                                <h3>APLIKASI LAYANAN KECAMATAN BANJARMASIN UTARA</h3>
                            </div>
                            <div class="card-body">
                                Aplikasil layanan kecamatan adalah aplikasi yang difungsikan untuk mempermudah masyarakat dalam mengajukan pembuatan surat menyurat secara online
                            </div>
                        </div>


                        <div class="card my-4">
                            <div class="card-header">
                                <h3>ALUR LAYANAN KECAMATAN BANJARMASIN UTARA</h3>
                            </div>
                            <div class="card-body">
                                <h1>ALUR PELAYANAN KECAMATAN BANJARMASIN UTARA</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum iste veniam, repudiandae sapiente eos vero fuga laborum est porro officiis saepe praesentium commodi, blanditiis quo repellendus! Molestiae pariatur beatae ducimus!</p>
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