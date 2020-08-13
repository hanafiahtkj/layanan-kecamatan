<?php
ob_start();
include_once "../config/config.php";
include_once "../config/bulan.php";
include_once "../config/terbilang.php";

if (isset($_POST['print'])) {

    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];

    if (empty($bulan)) {
        $data  = $koneksi->query("SELECT * FROM legalisasi_proposal WHERE YEAR(tgl_permohonan) = '$tahun'");
        $jml   = mysqli_num_rows($data);
        $info  = "Tahun " . $tahun;
    } else {
        $data  = $koneksi->query("SELECT * FROM legalisasi_proposal WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun'");
        $jml   = mysqli_num_rows($data);
        $info  = "Bulan " . $bln[$bulan] . " " . $tahun;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../assets/img/logo-bjm.png">
    <title>Legalisasi Proposal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
            margin-top: 12px;
        }
    </style>
</head>

<body>

    <img src="../assets/img/logo-bjm.png" style="position: absolute; width: 75px; height: 95px; margin-top: 5px;">

    <table style="width: 100%;" border="0" cellspacing="2">
        <tr>
            <td align="center">
                <span style="font-weight: bold; font-size: 28px; letter-spacing: 1px;">
                    KECAMATAN BANJARMASIN UTARA <br>
                </span>
                <span style="line-height: 1.2; font-size: 12;">
                    Jalan HKSN RT. 10 Kelurahan Alalak Utara Kecamatan Banjarmasin Utara <br>
                    Kota Banjarmasin 70125, Telpon (0511) 3306828 <br>
                    Email : <u style="color: blue;">kecamatan.bu@gmail.com</u>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Website : utara.banjarmasinkota.go.id
                </span>
            </td>
        </tr>
    </table>

    <hr class="line-title">

    <h2 align="center">
        <u>Laporan Legalisasi Proposal</u>
    </h2>

    <table border="1" width="100%" cellpadding="2" cellspacing="0">
        <thead>
            <tr align="center" style="font-weight: bold;">
                <th>No</th>
                <th>Tanggal Permohonan</th>
                <th>Nama Pemohon</th>
                <th>Judul Proposal</th>
                <th>Posisi</th>
                <th>Tangal Selesai</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($data as $row) {
                $po = $koneksi->query("SELECT * FROM posisi_berkas WHERE id_posisi = '$row[id_posisi]'")->fetch_array();
            ?>
                <tr align="center">
                    <td width="5%"><?= $no++; ?></td>
                    <td>
                        <?=
                            tgl_indo(date('Y-m-d', strtotime($row['tgl_permohonan'])));
                        ?>
                    </td>
                    <td align="left"><?= $row['nama'] ?></td>
                    <td align="left"><?= $row['judul_proposal'] ?></td>
                    <td><?= $po['posisi'] ?></td>
                    <td>
                        <?php
                        if ($row['tgl_selesai'] == '0000-00-00' or is_null($row['tgl_selesai'])) {
                            echo '-';
                        } else {
                            echo tgl_indo($row['tgl_selesai']);
                        }
                        ?>
                    </td>
                    <td><?= $row['status'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr align="center">
                <td colspan="7"><small style="font-weight: bold;"> Jumlah Data : <?= $jml; ?></small></td>
            </tr>
        </tfoot>
    </table>

    <div align="right">
        <small>
            Laporan : <?= $info; ?> <br>
            Dicetak pada : <?= tgl_indo(date('Y-m-d')); ?>
        </small>
    </div>


</body>

</html>

<?php
$html = ob_get_clean();

use Dompdf\Dompdf;

require_once "../assets/dompdf/autoload.inc.php";
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('Legal', 'Landscape');
$dompdf->render();
$dompdf->stream("lap-proposal.pdf", array("Attachment" => false));
?>