<?php
include_once "../../../config/config.php";
include_once "../../../config/auth-camat.php";

if (isset($_POST['verif'])) {
    $id_sktu    = $_POST['id_sktu'];
    $status     = $_POST['status'];
    $keterangan = $_POST['keterangan'];
    if ($status == 1) {
        $posisi = 4;
        $kelengkapan = 'Lengkap';
    } else {
        $posisi = 3;
        $kelengkapan = 'Tidak Lengkap';
    }

    $submit = $koneksi->query("UPDATE sktu_perpanjangan SET kelengkapan = '$kelengkapan', keterangan = '$keterangan', id_posisi = '$posisi' WHERE id_sktu = '$id_sktu'");

    if ($submit) {
        $_SESSION['pesan'] = "Data Permohonan Perpanjangan SKTU Telah Diverifikasi";
        echo "<script>window.location.replace('../');</script>";
    }
}
