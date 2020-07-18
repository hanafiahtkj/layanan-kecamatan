<!DOCTYPE html>
<html>

<?php
include_once "../config/config.php";
include_once "../config/auth-kasi.php";
include_once "../config/admin-count-data.php";
include_once "../template/head.php";
?>

<body class="hold-transition sidebar-mini sidebar-collapse">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include_once "../template/navbar.php"; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once "../template/sidebar.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->



      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->



          <!-- CARD COUNT DATA-->
          <div class="row">

            <!-- SKTU baru -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?= $sktu_baru['jml']; ?></h3>

                  <p>SKTU BARU</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= base_url('kasi/sktu/') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->


            <!-- SKTU PERPANJANGAN -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?= $sktu_p['jml']; ?></h3>

                  <p>SKTU PERPANJANGAN</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= base_url('kasi/sktu/') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->



            <!-- IUMK -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?= $iumk['jml']; ?></h3>

                  <p>Izin Usaha Mikro dan Kecil</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= base_url('kasi/iumk/') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->


            <!-- AHLI WARIS -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?= $ahli_waris['jml']; ?></h3>

                  <p>Surat Pernyataan Ahli Waris</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= base_url('kasi/ahli-waris/') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->


            <!-- PENDIRIAN PAUD -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?= $pendirian_paud['jml']; ?></h3>

                  <p>Rekomendasi Pendirian PAUD</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= base_url('kasi/rpp/') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->



            <!-- LEGALISASI IMB -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?= $legalisasi_imb['jml']; ?></h3>

                  <p>Legalisasi Permohonan IMB</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= base_url('kasi/legalisasi-imb/') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->


            <!-- LEGALISASI PROPOSAL -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?= $legalisasi_proposal['jml']; ?></h3>

                  <p>Legalisasi Proposal</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= base_url('kasi/legalisasi-proposal/') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->


            <!-- LEGALISASI IZIN TOWER -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?= $legalisasi_izin_tower['jml']; ?></h3>

                  <p>Legalisasi Izin Tower</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= base_url('kasi/legalisasi-izin-tower/') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

          </div>
          <!-- //CARD COUNT DATA -->











          <!-- PROGRES PAKAI DONUT / PIE CHART-->
          <div class="row">

            <!-- CHART SKTU BARU -->
            <div class="col-md-4">
              <div class="card card-purple">
                <div class="card-header">
                  <h3 class="card-title">Status Proses SKTU Baru</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="sktubaru" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>



            <!-- CHART SKTU PERPANJANGAN -->
            <div class="col-md-4">
              <div class="card card-purple">
                <div class="card-header">
                  <h3 class="card-title">Status Proses SKTU Perpanjangan</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="sktuppj" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>



            <!-- CHART IUMK-->
            <div class="col-md-4">
              <div class="card card-purple">
                <div class="card-header">
                  <h3 class="card-title">Status Proses IUMK</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="iumk" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>


            <!-- CHART AHLI WARIS -->
            <div class="col-md-4">
              <div class="card card-purple">
                <div class="card-header">
                  <h3 class="card-title">Status Proses Surat Pernyataan Ahli Waris</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="ahliwaris" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>



            <!-- CHART REKOMENDASI PENDIRIAN PAUD -->
            <div class="col-md-4">
              <div class="card card-purple">
                <div class="card-header">
                  <h3 class="card-title">Status Proses Rekomendasi Pendirian PAUD</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="rpp" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>



            <!-- CHART LEGALISASI IMB -->
            <div class="col-md-4">
              <div class="card card-purple">
                <div class="card-header">
                  <h3 class="card-title">Status Proses Legalisasi Permohonan IMB</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="imb" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>


            <!-- CHART LEGALISASI PROPOSAL -->
            <div class="col-md-4">
              <div class="card card-purple">
                <div class="card-header">
                  <h3 class="card-title">Status Proses Legalisasi Proposal</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="proposal" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>


            <!-- CHART LEGALISASI IZIN TOWER -->
            <div class="col-md-4">
              <div class="card card-purple">
                <div class="card-header">
                  <h3 class="card-title">Status Proses Legalisasi Izin Tower</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="izintower" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>




          </div>
          <!-- // PROGRES PAKAI DONUT / PIE CHART-->



          <!-- // PROGRES PAKAI BAR CHART
          <div class="row">

            //BAR CHART
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Bar Chart</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                
              </div>
              
            </div>

          </div>
          
          BAR CHART -->


        </div>
        <!-- /.row -->

      </section>
    </div>
    <!-- /.content -->

    <?php include_once "../template/footer.php"; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <?php
  include_once "../template/script.php";
  include_once "../template/chart.php";
  ?>

</body>

</html>