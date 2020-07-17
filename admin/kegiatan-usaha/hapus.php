<?php
include '../../config/config.php';
include_once "../../config/auth-admin.php";

$id   = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM kegiatan_usaha WHERE id_kegiatan = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data Kegiatan Usaha Dihapus";
    echo "<script>window.location.replace('../kegiatan-usaha/');</script>";
}
