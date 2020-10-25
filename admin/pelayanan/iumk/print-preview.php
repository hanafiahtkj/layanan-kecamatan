<?php
ob_start();
include_once "../../../config/config.php";
include_once "../../../config/auth-admin.php";
include_once "../../../config/bulan.php";
include_once "../../../config/terbilang.php";

$id   = encryptor('decrypt', $_GET['id']);
$f    = $_GET['f'];
$data = $koneksi->query("SELECT * FROM iumk WHERE id_iumk = '$id'");
$row  = $data->fetch_array();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Surat Izin Usaha Mikro dan Kecil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../../assets/img/logo-bjm.png">

    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
            margin-top: 12px;
        }

        @font-face {
            font-family: 'font';
            font-style: normal;
            font-weight: normal;
            /* src: url(../../../assets/dompdf/lib/fonts/times-new-roman.ttf) format('truetype'); */
            src: url(../../../assets/dompdf/lib/fonts/times-new-roman.ttf) format('truetype');
        }

        body {
            font-family: 'font';
            line-height: 1.0;
            font-size: 10;
        }
    </style>
</head>

<body>

    <img src="../../../assets/img/logo-bjm.png" style="position: absolute; width: 75px; height: 90px;">

    <table style="width: 100%;" border="0" cellspacing="2">
        <tr>
            <td align="center">
                <span style="font-weight: bold; font-size: 24px; letter-spacing: 1px;">
                    KECAMATAN BANJARMASIN UTARA <br>
                </span>
                <span style="line-height: 1.2;">
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

    <p style="text-align: center; margin-top: 2%;">
        <label>
            <b><u>SURAT IZIN USAHA MIKRO DAN KECIL</u> <br>
                Nomor : <?= $row['nomor_iumk']; ?></b>
        </label>
    </p>

    <div style="margin-bottom: -14px;">Berdasarkan</div>
    <div style="text-align: justify; margin-left: -20px;">
        <?= $row['peraturan']; ?>
    </div>

    <div style="margin-bottom: -14px;">Bersama ini memberikan izin kepada</div>
    <p style="text-align: center;">
        <span>
            <table border=" 0" width="100%" style="text-align: left; margin-left: 5px;" cellpadding=" 1">
                <tr>
                    <td width="40%">Nama</td>
                    <td width="3%">:</td>
                    <td><?= $row['nama_pemohon']; ?></td>
                </tr>
                <tr>
                    <td width="40%">Nomor KTP</td>
                    <td width="3%">:</td>
                    <td><?= $row['nomor_ktp']; ?></td>
                </tr>
                <tr>
                    <td width="40%" valign="top">Alamat</td>
                    <td width="3%" valign="top">:</td>
                    <td><?= $row['alamat']; ?></td>
                </tr>
                <tr>
                    <td width="40%">Nomor Telepon</td>
                    <td width="3%">:</td>
                    <td><?= $row['no_telp']; ?></td>
                </tr>
            </table>
        </span>

    </p>

    <div style="text-align: justify; word-spacing: 5px; margin-top: -15px;">
        <p>
            Untuk mendirikan Usaha Mikro dan Kecil yang mencakup perizinan dasar yang berupa : <br>
            menempati lokasi/domisili, melakukan kegiatan usaha baik produksi maupun penjualan barang dan jasa, dengan identitas :
        </p>
    </div>


    <table border=" 0" width="100%" style="text-align: left; margin-left: 5px;" cellpadding=" 1">
        <tr>
            <td width="40%">Nama Perusahaan</td>
            <td width="3%">:</td>
            <td><?= $row['nama_perusahaan']; ?></td>
        </tr>
        <tr>
            <td width="40%">Bentuk Perusahaan</td>
            <td width="3%">:</td>
            <td><?= $row['bentuk_perusahaan']; ?></td>
        </tr>
        <tr>
            <td width="40%">NPWP</td>
            <td width="3%">:</td>
            <td><?= $row['npwp']; ?></td>
        </tr>
        <tr>
            <td width="40%">Kegiatan Usaha</td>
            <td width="3%">:</td>
            <td><?= $row['kegiatan_usaha']; ?></td>
        </tr>
        <tr>
            <td width="40%">Sarana Usaha yang Digunakan</td>
            <td width="3%">:</td>
            <td><?= $row['sarana_usaha']; ?></td>
        </tr>
        <tr>
            <td width="40%" valign="top">Alamat Usaha</td>
            <td width="3%" valign="top">:</td>
            <td><?= $row['alamat_usaha']; ?></td>
        </tr>
        <tr>
            <td width="40%" valign="top">Jumlah Modal Usaha</td>
            <td width="3%" valign="top">:</td>
            <td>
                <?=
                    "Rp. " . number_format($row['jumlah_modal_usaha'], '0', ',', '.') .
                        " ( " . strtoupper(terbilang($row['jumlah_modal_usaha']) . " RUPIAH )");
                ?>
                <br><br>
            </td>
        </tr>
        <tr>
            <td width="40%">Nomor Pendaftaran</td>
            <td width="3%">:</td>
            <td><u><?= $row['nomor_pendaftaran']; ?></u></td>
        </tr>
    </table>

    <table border="0" style="width: 100%; margin-top: 2%;">
        <tr>
            <td width="60%">
                <?php if ($f == 0) : ?>
                    <div style="border: 1px solid #000; margin-left: 68%; text-align: center; width: 3cm; height: 3cm; vertical-align: bottom;">
                        <br><br>
                        Foto 4x6
                    </div>
                <?php else : ?>
                    <img src="../../../assets/iumk_foto_pemohon/<?= $row['foto_pemohon']; ?>" style="width: 4cm; height: 6cm; margin-left: 60%;">
                <?php endif ?>

            </td>
            <td align="center">
                Ditetapkan di Banjarmasin <br>
                Pada Tanggal,
                <?php if ($row['tgl_selesai'] == "0000-00-00" or is_null($row['tgl_selesai'])) {
                    echo tgl_indo(date('Y-m-d'));
                } else {
                    echo tgl_indo($row['tgl_selesai']);
                }
                ?>
                <br>
                CAMAT,
                <br><br><br><br><br><br><br>
                <b><?= $row['nama_camat']; ?></b> <br>
                <?= $row['jabatan']; ?> <br>
                <?= "NIP. " . $row['nip']; ?>
            </td>
        </tr>
    </table>

</body>

</html>

<?php
$html = ob_get_clean();

use Dompdf\Dompdf;

require_once "../../../assets/dompdf/autoload.inc.php";
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('Legal', 'Portrait');
$dompdf->render();
$dompdf->stream("iumk.pdf", array("Attachment" => false));
?>