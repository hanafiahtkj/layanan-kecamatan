<?php
// COUNT SKTU BARU
$sktubaru_bl = $koneksi->query("SELECT COUNT(*) AS jml FROM sktu_baru WHERE status = 'Belum Diproses'")->fetch_array();
$sktubaru_dp = $koneksi->query("SELECT COUNT(*) AS jml FROM sktu_baru WHERE status = 'Dalam Proses'")->fetch_array();
$sktubaru_s  = $koneksi->query("SELECT COUNT(*) AS jml FROM sktu_baru WHERE status = 'Selesai'")->fetch_array();

// COUNT SKTU PERPANJANGAN
$sktuppj_bl = $koneksi->query("SELECT COUNT(*) AS jml FROM sktu_perpanjangan WHERE status = 'Belum Diproses'")->fetch_array();
$sktuppj_dp = $koneksi->query("SELECT COUNT(*) AS jml FROM sktu_perpanjangan WHERE status = 'Dalam Proses'")->fetch_array();
$sktuppj_s  = $koneksi->query("SELECT COUNT(*) AS jml FROM sktu_perpanjangan WHERE status = 'Selesai'")->fetch_array();

// COUNT IUMK
$iumk_bl = $koneksi->query("SELECT COUNT(*) AS jml FROM iumk WHERE status = 'Belum Diproses'")->fetch_array();
$iumk_dp = $koneksi->query("SELECT COUNT(*) AS jml FROM iumk WHERE status = 'Dalam Proses'")->fetch_array();
$iumk_s  = $koneksi->query("SELECT COUNT(*) AS jml FROM iumk WHERE status = 'Selesai'")->fetch_array();

// COUNT AHLI WARIS
$ahliwaris_bl = $koneksi->query("SELECT COUNT(*) AS jml FROM ahli_waris WHERE status = 'Belum Diproses'")->fetch_array();
$ahliwaris_dp = $koneksi->query("SELECT COUNT(*) AS jml FROM ahli_waris WHERE status = 'Dalam Proses'")->fetch_array();
$ahliwaris_s  = $koneksi->query("SELECT COUNT(*) AS jml FROM ahli_waris WHERE status = 'Selesai'")->fetch_array();

// COUNT REKOMENDASI PENDIRIAN PAUD
$rpp_bl = $koneksi->query("SELECT COUNT(*) AS jml FROM rekomendasi_pendirian_paud WHERE status = 'Belum Diproses'")->fetch_array();
$rpp_dp = $koneksi->query("SELECT COUNT(*) AS jml FROM rekomendasi_pendirian_paud WHERE status = 'Dalam Proses'")->fetch_array();
$rpp_s  = $koneksi->query("SELECT COUNT(*) AS jml FROM rekomendasi_pendirian_paud WHERE status = 'Selesai'")->fetch_array();

// COUNT IMB
$imb_bl = $koneksi->query("SELECT COUNT(*) AS jml FROM legalisasi_imb WHERE status = 'Belum Diproses'")->fetch_array();
$imb_dp = $koneksi->query("SELECT COUNT(*) AS jml FROM legalisasi_imb WHERE status = 'Dalam Proses'")->fetch_array();
$imb_s  = $koneksi->query("SELECT COUNT(*) AS jml FROM legalisasi_imb WHERE status = 'Selesai'")->fetch_array();

// COUNT LEGALISASI PROPOSAL
$proposal_bl = $koneksi->query("SELECT COUNT(*) AS jml FROM legalisasi_proposal WHERE status = 'Belum Diproses'")->fetch_array();
$proposal_dp = $koneksi->query("SELECT COUNT(*) AS jml FROM legalisasi_proposal WHERE status = 'Dalam Proses'")->fetch_array();
$proposal_s  = $koneksi->query("SELECT COUNT(*) AS jml FROM legalisasi_proposal WHERE status = 'Selesai'")->fetch_array();

// COUNT LEGALISASI IZIN TOWER
$izintower_bl = $koneksi->query("SELECT COUNT(*) AS jml FROM legalisasi_izin_tower WHERE status = 'Belum Diproses'")->fetch_array();
$izintower_dp = $koneksi->query("SELECT COUNT(*) AS jml FROM legalisasi_izin_tower WHERE status = 'Dalam Proses'")->fetch_array();
$izintower_s  = $koneksi->query("SELECT COUNT(*) AS jml FROM legalisasi_izin_tower WHERE status = 'Selesai'")->fetch_array();

?>

<script>
    //--------------------------------------------------------------------------------------------------------------------
    //- PIE CHART - SKTU BARU
    var SktuBaruChartCanvas = $('#sktubaru').get(0).getContext('2d')
    var SktuBaruData = {
        labels: [
            'Belum Diproses',
            'Dalam Proses',
            'Selesai',
        ],
        datasets: [{
            data: [
                <?= $sktubaru_bl['jml'] ?>,
                <?= $sktubaru_dp['jml'] ?>,
                <?= $sktubaru_s['jml'] ?>
            ],
            backgroundColor: ['#f56954', '#00c0ef', '#00a65a'],
        }]
    }
    var SktuBaruOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var SktuBaruChart = new Chart(SktuBaruChartCanvas, {
        type: 'pie',
        data: SktuBaruData,
        options: SktuBaruOptions
    })
    //-------------------------------------------------------------------------------------------------------------------


    //--------------------------------------------------------------------------------------------------------------------
    //- PIE CHART - SKTU PERPANJANGAN
    var SktuPpjChartCanvas = $('#sktuppj').get(0).getContext('2d')
    var SktuPpjData = {
        labels: [
            'Belum Diproses',
            'Dalam Proses',
            'Selesai',
        ],
        datasets: [{
            data: [
                <?= $sktuppj_bl['jml'] ?>,
                <?= $sktuppj_dp['jml'] ?>,
                <?= $sktuppj_s['jml'] ?>
            ],
            backgroundColor: ['#f56954', '#00c0ef', '#00a65a'],
        }]
    }
    var SktuPpjOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var SktuPpjChart = new Chart(SktuPpjChartCanvas, {
        type: 'pie',
        data: SktuPpjData,
        options: SktuPpjOptions
    })
    //-------------------------------------------------------------------------------------------------------------------



    //--------------------------------------------------------------------------------------------------------------------
    //- PIE CHART - IUMK
    var IumkChartCanvas = $('#iumk').get(0).getContext('2d')
    var IumkData = {
        labels: [
            'Belum Diproses',
            'Dalam Proses',
            'Selesai',
        ],
        datasets: [{
            data: [
                <?= $iumk_bl['jml'] ?>,
                <?= $iumk_dp['jml'] ?>,
                <?= $iumk_s['jml'] ?>
            ],
            backgroundColor: ['#f56954', '#00c0ef', '#00a65a'],
        }]
    }
    var IumkOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var IumkChart = new Chart(IumkChartCanvas, {
        type: 'pie',
        data: IumkData,
        options: IumkOptions
    })
    //-------------------------------------------------------------------------------------------------------------------


    //-------------------------------------------------------------------------------------------------------------------
    //- DONUT CHART - AHLI WARIS
    var AhliWarisChartCanvas = $('#ahliwaris').get(0).getContext('2d')
    var AhliWarisData = {
        labels: [
            'Belum Diproses',
            'Dalam Proses',
            'Selesai',
        ],
        datasets: [{
            data: [
                <?= $ahliwaris_bl['jml'] ?>,
                <?= $ahliwaris_dp['jml'] ?>,
                <?= $ahliwaris_s['jml'] ?>
            ],
            backgroundColor: ['#f56954', '#00c0ef', '#00a65a'],
        }]
    }
    var AhliWarisOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var AhliWarisChart = new Chart(AhliWarisChartCanvas, {
        type: 'doughnut',
        data: AhliWarisData,
        options: AhliWarisOptions
    })
    //-------------------------------------------------------------------------------------------------------------------



    //-------------------------------------------------------------------------------------------------------------------
    //- DONUT CHART - PENDIRIAN PAUD
    var RppChartCanvas = $('#rpp').get(0).getContext('2d')
    var RppData = {
        labels: [
            'Belum Diproses',
            'Dalam Proses',
            'Selesai',
        ],
        datasets: [{
            data: [
                <?= $rpp_bl['jml'] ?>,
                <?= $rpp_dp['jml'] ?>,
                <?= $rpp_s['jml'] ?>
            ],
            backgroundColor: ['#f56954', '#00c0ef', '#00a65a'],
        }]
    }
    var RppOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var RppChart = new Chart(RppChartCanvas, {
        type: 'doughnut',
        data: RppData,
        options: RppOptions
    })
    //-------------------------------------------------------------------------------------------------------------------


    //-------------------------------------------------------------------------------------------------------------------
    //- DONUT CHART - LEGALISASI IMB
    var ImbChartCanvas = $('#imb').get(0).getContext('2d')
    var ImbData = {
        labels: [
            'Belum Diproses',
            'Dalam Proses',
            'Selesai',
        ],
        datasets: [{
            data: [
                <?= $imb_bl['jml'] ?>,
                <?= $imb_dp['jml'] ?>,
                <?= $imb_s['jml'] ?>
            ],
            backgroundColor: ['#f56954', '#00c0ef', '#00a65a'],
        }]
    }
    var ImbOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var ImbChart = new Chart(ImbChartCanvas, {
        type: 'doughnut',
        data: ImbData,
        options: ImbOptions
    })
    //-------------------------------------------------------------------------------------------------------------------


    //-------------------------------------------------------------------------------------------------------------------
    //- DONUT CHART - LEGALISASI PROPOSAL
    var ProposalChartCanvas = $('#proposal').get(0).getContext('2d')
    var ProposalData = {
        labels: [
            'Belum Diproses',
            'Dalam Proses',
            'Selesai',
        ],
        datasets: [{
            data: [
                <?= $proposal_bl['jml'] ?>,
                <?= $proposal_dp['jml'] ?>,
                <?= $proposal_s['jml'] ?>
            ],
            backgroundColor: ['#f56954', '#00c0ef', '#00a65a'],
        }]
    }
    var ProposalOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var ProposalChart = new Chart(ProposalChartCanvas, {
        type: 'doughnut',
        data: ProposalData,
        options: ProposalOptions
    })
    //-------------------------------------------------------------------------------------------------------------------



    //-------------------------------------------------------------------------------------------------------------------
    //- DONUT CHART - LEGALISASI IZINI TOWER
    var IzinTowerChartCanvas = $('#izintower').get(0).getContext('2d')
    var IzinTowerData = {
        labels: [
            'Belum Diproses',
            'Dalam Proses',
            'Selesai',
        ],
        datasets: [{
            data: [
                <?= $izintower_bl['jml'] ?>,
                <?= $izintower_dp['jml'] ?>,
                <?= $izintower_s['jml'] ?>
            ],
            backgroundColor: ['#f56954', '#00c0ef', '#00a65a'],
        }]
    }
    var IzinTowerOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var IzinTowerChart = new Chart(IzinTowerChartCanvas, {
        type: 'doughnut',
        data: IzinTowerData,
        options: IzinTowerOptions
    })
    //-------------------------------------------------------------------------------------------------------------------




    var areaChartData = {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli'],
        datasets: [{
                label: 'Digital Goods',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [28, 48, 40, 19, 86, 27, 90]
            },
            {
                label: 'Electronics',
                backgroundColor: 'rgba(210, 214, 222, 1)',
                borderColor: 'rgba(210, 214, 222, 1)',
                pointRadius: false,
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [65, 59, 80, 81, 56, 55, 40]
            },
        ]
    }

    var areaChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
            display: false
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: false,
                }
            }],
            yAxes: [{
                gridLines: {
                    display: false,
                }
            }]
        }
    }


    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
    }

    var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
    })
</script>