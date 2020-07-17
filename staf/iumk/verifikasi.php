<?php
include_once "../../config/config.php";
include_once "../../config/auth-staf.php";

if (isset($_POST['verif'])) {
    $id_iumk    = $_POST['id_iumk'];
    $status     = $_POST['status'];
    $keterangan = $_POST['keterangan'];

    $submit = $koneksi->query("UPDATE iumk SET keterangan = '$keterangan', status = '$status', id_posisi = 4 WHERE id_iumk = '$id_iumk'");

    if ($submit) {
        $_SESSION['pesan'] = "Status Permohonan IUMK Diubah";
        echo "<script>window.location.replace('../iumk/');</script>";
    }
}
