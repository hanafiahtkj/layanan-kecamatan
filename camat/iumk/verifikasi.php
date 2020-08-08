<?php
include_once "../../config/config.php";
include_once "../../config/auth-camat.php";

if (isset($_POST['verif'])) {

    $id_iumk    = $_POST['id_iumk'];
    $status     = $_POST['status'];
    $keterangan = $_POST['keterangan'];

    if ($status == 1) {
        $ceknoiumk    = $koneksi->query("SELECT * FROM nomor_urut_iumk")->fetch_array();
        $nourut       = $ceknoiumk['nomor_urut'];
        $kodeotomatis = "IUMK / " . sprintf('%03s', $nourut) . " / BU / " . date('Y');
        $nomor_iumk   = $kodeotomatis;
        // no urut iumk++
        $notambah = $nourut + 1;

        if ($notambah < '009') {
            $nourutbaru = '00' . $notambah;
        } elseif ($nnotambaho < '099') {
            $nourutbaru = '0' . $notambah;
        } else {
            $nourutbaru = $notambah;
        }
        $submit = $koneksi->query("UPDATE nomor_urut_iumk SET nomor_urut = '$nourutbaru'");
        //-- no urut iumk++

        $posisi = 4;
        $kelengkapan = 'Lengkap';
        $tgl_selesai = date('Y-m-d');
    } else {
        $posisi = 3;
        $kelengkapan = 'Tidak Lengkap';
        $tgl_selesai = null;
    }

    $submit = $koneksi->query("UPDATE iumk SET nomor_iumk = '$nomor_iumk', kelengkapan = '$kelengkapan', keterangan = '$keterangan', tgl_selesai = '$tgl_selesai', id_posisi = '$posisi' WHERE id_iumk = '$id_iumk'");

    if ($submit) {
        $_SESSION['pesan'] = "Data Permohonan IUMK Telah Diverifikasi";
        echo "<script>window.location.replace('../iumk/');</script>";
    }
}
