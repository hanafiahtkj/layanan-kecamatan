<?php
include_once "../../../config/config.php";
include_once "../../../config/auth-sekcam.php";

if (isset($_POST['verif'])) {
    $id_sktu    = $_POST['id_sktu'];
    $keterangan = $_POST['keterangan'];
    $masa_berlaku_awal  = date('Y-m-d');
    $masa_berlaku_akhir = date('Y-m-d', strtotime('+1 year'));

    $submit = $koneksi->query("UPDATE sktu_baru SET masa_berlaku_awal = '$masa_berlaku_awal', masa_berlaku_akhir = '$masa_berlaku_akhir', keterangan = '$keterangan', id_posisi = 3 WHERE id_sktu = '$id_sktu'");

    if ($submit) {
        $_SESSION['pesan'] = "Data Permohonan SKTU BARU Telah Diverifikasi";
        echo "<script>window.location.replace('../');</script>";
    }
}
