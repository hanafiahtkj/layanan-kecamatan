<?php
include_once "../../config/config.php";
include_once "../../config/auth-admin.php";

if (isset($_POST['edit'])) {
    $id_kegiatan    = $_POST['id_kegiatan'];
    $kegiatan_usaha = $_POST['kegiatan_usaha'];

    $submit = $koneksi->query("UPDATE kegiatan_usaha SET kegiatan_usaha = '$kegiatan_usaha' WHERE id_kegiatan = '$id_kegiatan'");
    if ($submit) {
        $_SESSION['pesan'] = "Data Kegiatan Usaha Diubah";
        echo "<script>window.location.replace('../kegiatan-usaha/');</script>";
    }
}
