<?php
include_once "../../config/config.php";
include_once "../../config/auth-camat.php";

if (isset($_POST['verif'])) {

    $id_iumk    = $_POST['id_iumk'];
    $status     = $_POST['status'];
    $keterangan = $_POST['keterangan'];

    if ($status == 1) {
        $posisi = 4;
        $kelengkapan = 'Lengkap';
        $tgl_selesai = date('Y-m-d');
    } else {
        $posisi = 3;
        $kelengkapan = 'Tidak Lengkap';
        $tgl_selesai = null;
    }

    $submit = $koneksi->query("UPDATE iumk SET kelengkapan = '$kelengkapan', keterangan = '$keterangan', tgl_selesai = '$tgl_selesai', id_posisi = '$posisi' WHERE id_iumk = '$id_iumk'");

    if ($submit) {
        $_SESSION['pesan'] = "Data Permohonan IUMK Telah Diverifikasi";
        echo "<script>window.location.replace('../iumk/');</script>";
    }
}
