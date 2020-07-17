<?php
include_once "../../../config/config.php";
include_once "../../../config/auth-staf.php";

if (isset($_POST['verif'])) {
    $id_sktu            = $_POST['id_sktu'];
    $status             = $_POST['status'];
    $keterangan         = $_POST['keterangan'];
    $tgl                = date('Y-m-d');

    $submit = $koneksi->query("UPDATE sktu_perpanjangan SET keterangan = '$keterangan', tgl_selesai = '$tgl', status = '$status', id_posisi = 4 WHERE id_sktu = '$id_sktu'");

    if ($submit) {
        $_SESSION['pesan'] = "Status Permohonan Perpanjangan SKTU Diubah";
        echo "<script>window.location.replace('../');</script>";
    }
}
