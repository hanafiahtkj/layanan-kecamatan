<?php
ob_start();
include_once "../../../config/config.php";
include_once "../../../config/auth-admin.php";
include_once "../../../config/bulan.php";
include_once "../../../config/terbilang.php";

$id   = encryptor('decrypt', $_GET['id']);
$data = $koneksi->query("SELECT * FROM sktu_perpanjangan WHERE id_sktu = '$id'");
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <style>
        .kop {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="kop">
        <img src="../../../assets/img/logo-bjm.png" style="width: 90px; height: 130px; margin-top: -25px; margin-bottom: -10px;">

        <p>
            <label style="font-weight: bold; font-size: 20;">
                PEMERINTAH KOTA BANJARMASIN <br>
            </label>
            <label style="font-weight: bold; font-size: 25; line-height: 28px;">
                KECAMATAN BANJARMASIN UTARA <br>
            </label>
            <label style="line-height: 1.2; font-size: 13;">
                Jalan HKSN RT. 10 Alalak Utara Banjarmasin 70125<br>
                <img src="../../../assets/img/phone.png" style="margin-top: 2px; width: 15px; height: 15px;"> (0511) 3306828
                &nbsp;&nbsp;&nbsp;&nbsp;
                <img src="../../../assets/img/mail.png" style="margin-top: 2px; width: 15px; height: 15px;"> kecamatan.bu@gmail.com
                &nbsp;&nbsp;&nbsp;&nbsp;
                <img src="../../../assets/img/globe.png" style="margin-top: 2px; width: 15px; height: 14px;"> camatutara.banjarmasinkota.info
            </label>
        </p>

    </div>

    <p style="text-align: center; margin-top: 2%;">
        <label>
            <b style="font-size: 18;"><u>SURAT KETERANGAN TEMPAT USAHA</u></b> <br>
            <b style="font-size: 12;">Nomor</b> : <?= $row['nomor_sktu']; ?>
        </label>

        <table border="0" width="100%" style="text-align: left; font-size: 12;" cellpadding=" 1">
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

    <div style="text-align: center; font-size: 14;">
        <u>MEMUTUSKAN</u>
    </div>

    <br>

    <table border="0" width="100%" style="text-align: left; font-size: 12;" cellpadding=" 1">
        <tr style="vertical-align: top;">
            <td width="13%">Memberikan</td>
            <td width="3%">:</td>
            <td style="padding-bottom: 5;" colspan="3"><b>SURAT KETERANGAN TEMPAT USAHA</b></td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="30%">1. Nama Perusahaan</td>
            <td>:</td>
            <td width="60%"><b><?= strtoupper($row['nama_perusahaan']); ?></b></td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="30%">2. Alamat Perusahaan</td>
            <td>:</td>
            <td width="60%"><?= strtoupper($row['alamat_perusahaan']); ?></td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="30%">3. Nama Pimpinan Perusahaan</td>
            <td>:</td>
            <td width="60%"><b><?= strtoupper($row['nama_pimpinan_perusahaan']); ?></b></td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="30%">4. Alamat Kediaman</td>
            <td>:</td>
            <td width="60%"><?= strtoupper($row['alamat_kediaman']); ?></td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="30%">5. Kegiatan Usaha</td>
            <td>:</td>
            <td width="60%"><b><?= strtoupper($row['kegiatan_usaha']); ?></b></td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="30%">6. Masa Berlaku</td>
            <td>:</td>
            <td width="60%">
                <?=
                    tgl_indo($row['masa_berlaku_awal']) . " S/D " .
                        tgl_indo($row['masa_berlaku_akhir']);
                ?>
            </td>
        </tr>
        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td width="30%">7. Sifat</td>
            <td>:</td>
            <td width="60%"><b><?= strtoupper($row['sifat']); ?></b></td>
        </tr>

        <tr style="vertical-align: top;">
            <td width="13%"></td>
            <td width="3%"></td>
            <td colspan="3" align="justify">
                <p style="margin-top: 25;">
                    Surat Keterangan Tempat Usaha ini bukan merupakan Izin Usaha Perdagangan/Jasa, tetapi keterangan tentang Tempat Usaha/Kegiatan dari Perorangan / Badan Hukum sebagai dasar untuk pembuatan perizinan berikutnya
                </p>
            </td>
        </tr>
    </table>

    <table border="0" style="width: 100%; font-size: 12;">
        <tr>
            <td width="30%" align="right"> Dikeluarkan di</td>
            <td width="2%" align="center">:</td>
            <td width="30%">Banjarmasin</td>
        </tr>
        <tr>
            <td width="30%" align="right">Pada Tanggal</td>
            <td width="2%" align="center">:</td>
            <td width="30%">
                <?=
                    tgl_indo($row['tgl_selesai']);
                ?>
            </td>
        </tr>
        <tr style="text-align: center;"">
            <td colspan=" 3">
            CAMAT,
            <br><br><br><br>
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
$dompdf->setPaper('Legal', 'Portrait');
$dompdf->render();
$dompdf->stream("sktu-baru.pdf", array("Attachment" => false));
?>