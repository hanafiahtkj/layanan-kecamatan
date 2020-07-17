<!DOCTYPE html>
<html lang="en">

<?php
include_once "config/config.php";
include_once "template/ui/head.php";
?>

<body>

    <!-- ======= Header ======= -->
    <?php include_once "template/ui/header.php"; ?>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Kontak</h2>
                    <ol>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li>Kontak</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Kontak Kami</h2>
                    <p>Informasi Kontak Kecamatan Banjarmasin Utara</p>
                </div>

                <div class="row mt-5 justify-content-center">

                    <div class="col-lg-12">

                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-3 info">
                                    <i class="icofont-google-map"></i>
                                    <h4>Lokasi:</h4>
                                    <p>
                                        <a href="https://goo.gl/maps/dosZdbzhPCwN62UC7">
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
                                    <p>(0511) 3306828</p>
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


    <?php include_once "template/ui/script.php"; ?>

</body>

</html>