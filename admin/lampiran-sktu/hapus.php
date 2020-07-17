<?php
include '../../config/config.php';
include_once "../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM lampiran_sktu WHERE id_lampiran = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data Lampiran SKTU Dihapus";
    echo "<script>window.location.replace('../lampiran-sktu/');</script>";
}
