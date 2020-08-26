<?php
ob_start();
include_once "../../../config/config.php";
include_once "../../../config/auth-kasi.php";
include_once "../../../config/bulan.php";
include_once "../../../config/terbilang.php";

$id   = encryptor('decrypt', $_GET['id']);
$data = $koneksi->query("SELECT * FROM sktu_baru WHERE id_sktu = '$id'");
$row  = $data->fetch_array();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Surat Keterangan Tempat Usaha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../../assets/img/logo-bjm.png">


    <style type="text/css">
        .kop {
            text-align: center;
        }

        @font-face {
            font-family: 'font';
            font-style: normal;
            font-weight: normal;
            src: url(../../../assets/dompdf/lib/fonts/Times-Roman.afm);
        }

        body {
            font-family: 'font';
        }
    </style>
</head>

<body>

    <div class="kop">
        <img src="../../../assets/img/logo-bjm.png" style="width: 90px; height: 125px; margin-bottom: -10px; margin-top: 8px;">

        <p style="margin-top: -20px; margin-bottom: -8px;">
            <label style="font-weight: bold; font-size: 17;">
                PEMERINTAH KOTA BANJARMASIN <br>
            </label>
            <label style="font-weight: bold; font-size: 21; line-height: 23px;">
                KECAMATAN BANJARMASIN UTARA <br>
            </label>
            <label style="line-height: 1.2; font-size: 9;">
                Jalan HKSN RT. 10 Alalak Utara Banjarmasin 70125<br>
                <img src="../../../assets/img/phone.png" style="margin-top: 2px; width: 15px; height: 15px;"> (0511) 3306828
                &nbsp;&nbsp;&nbsp;&nbsp;
                <img src="../../../assets/img/mail.png" style="margin-top: 2px; width: 15px; height: 15px;"> kecamatan.bu@gmail.com
                &nbsp;&nbsp;&nbsp;&nbsp;
                <img src="../../../assets/img/globe.png" style="margin-top: 2px; width: 15px; height: 14px;"> camatutara.banjarmasinkota.info
            </label>
        </p>

    </div>

    <p style="text-align: center;">
        <label>
            <b style="font-size: 15;"><u>SURAT KETERANGAN TEMPAT USAHA</u></b> <br>
            <b style="font-size: 9;">Nomor : <?= $row['nomor_sktu']; ?></b>
        </label>

        <table border="0" width="100%" style="text-align: left; font-size: 9; margin-top: -10px;" cellpadding=" 1">
            <tr style="vertical-align: top;">
                <td width="13%">Membaca</td>
                <td width="3%">:</td>
                <td width="90%">
                    Surat Permohonan dari : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <b><?= strtoupper($row['nama_pemohon']); ?></b> <br>
                    Tanggal : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?=
                        tgl_indo(date('Y-m-d', strtotime($row['tgl'])));
                    ?>
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td width="13%">Menimbang</td>
                <td width="3%">:</td>
                <td width="90%" align="justify">
                    Bahwa yang bersangkutan telah memenuhi persyaratan untuk mendapatkan Surat Keterangan Tempat Usaha (SKTU)
                </td>
            </tr>
            <tr style="vertical-align: top;">
                <td width="13%">Mengingat</td>
                <td width="3%">:</td>
                <td width="90%" style="padding-top: -15px; padding-left: -19px;">
                    <?= $row['peraturan']; ?>
                </td>
            </tr>
        </table>

    </p>

    <div style="text-align: center; font-size: 11; margin-top: -15px; margin-bottom: -15px;">
        <u>MEMUTUSKAN</u>
    </div>

    <br>

    <table border="0" width="100%" style="text-align: left; font-size: 9;" cellpadding=" 1">
        <tr style="vertical-align: top;">
            <td width="13%">Memberikan</td>
            <td width="3%">:</td>
            <td style="padding-bottom: 5; font-weight: bold;" colspan="3"><b>SURAT KETERANGAN TEMPAT USAHA</b></td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="35%">1. Nama Perusahaan</td>
            <td style="text-align: center;">:</td>
            <td width="60%"><b><?= strtoupper($row['nama_perusahaan']); ?></b></td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="35%">2. Alamat Perusahaan</td>
            <td style="text-align: center;">:</td>
            <td width="60%"><?= strtoupper($row['alamat_perusahaan']); ?></td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="35%">3. Nama Pimpinan Perusahaan</td>
            <td style="text-align: center;">:</td>
            <td width="60%"><b><?= strtoupper($row['nama_pimpinan_perusahaan']); ?></b></td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="35%">4. Alamat Kediaman</td>
            <td style="text-align: center;">:</td>
            <td width="60%"><?= strtoupper($row['alamat_kediaman']); ?></td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="35%">5. Kegiatan Usaha</td>
            <td style="text-align: center;">:</td>
            <td width="60%"><b><?= strtoupper($row['kegiatan_usaha']); ?></b></td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="35%">6. Masa Berlaku</td>
            <td style="text-align: center;">:</td>
            <td width="60%">
                <?=
                    date('d', strtotime($row['masa_berlaku_awal'])) . " " . $bln[date('m', strtotime($row['masa_berlaku_awal']))] . " " . date('Y', strtotime($row['masa_berlaku_awal'])) . " S/D " .
                        date('d', strtotime($row['masa_berlaku_akhir'])) . " " . $bln[date('m', strtotime($row['masa_berlaku_akhir']))] . " " . date('Y', strtotime($row['masa_berlaku_akhir']))
                ?>
            </td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="35%">7. Sifat</td>
            <td style="text-align: center;">:</td>
            <td width="60%"><b><?= strtoupper($row['sifat']); ?></b></td>
        </tr>

        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td colspan="3" align="justify">

                Surat Keterangan Tempat Usaha ini bukan merupakan Izin Usaha Perdagangan/Jasa, tetapi keterangan tentang Tempat Usaha/Kegiatan dari Perorangan / Badan Hukum sebagai dasar untuk pembuatan perizinan berikutnya

            </td>
        </tr>
    </table>

    <table border="0" style="width: 100%; font-size: 9;">
        <tr>
            <td width="110%"></td>
            <td width="30%" align="right"> Dikeluarkan di</td>
            <td width="2%" align="center">:</td>
            <td width="30%">Banjarmasin</td>
        </tr>
        <tr>
            <td width="110%"></td>
            <td width="30%" align="right">Pada Tanggal</td>
            <td width="2%" align="center">:</td>
            <td width="30%">
                <?= tgl_indo(date('Y-m-d', strtotime($row['tgl_selesai']))); ?>
            </td>
        </tr>
        <tr style="text-align: center;">
            <td width="110%"></td>
            <td colspan="3">
                CAMAT,
                <br><br><br><br><br>
                <?= $row['nama_camat']; ?> <br>
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
// $dompdf->setPaper('legal', 'Portrait');
$custompaper = array(0, 0, 609.4488, 935.433); // F4
$dompdf->setPaper($custompaper, 'portrait');
$dompdf->render();
$dompdf->stream("sktu-baru.pdf", array("Attachment" => false));
?>