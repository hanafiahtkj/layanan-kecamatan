<?php
include_once "../../config/config.php";
include_once "../../config/auth-sekcam.php";

if (isset($_POST['verif'])) {
    $id_iumk    = $_POST['id_iumk'];
    $keterangan = $_POST['keterangan'];

    $submit = $koneksi->query("UPDATE iumk SET keterangan = '$keterangan', id_posisi = 3 WHERE id_iumk = '$id_iumk'");

    if ($submit) {
        $_SESSION['pesan'] = "Data Permohonan IUMK Telah Diverifikasi";
        echo "<script>window.location.replace('../iumk/');</script>";
    }
}
