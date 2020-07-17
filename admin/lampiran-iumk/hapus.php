<?php
include '../../config/config.php';
include_once "../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM lampiran_iumk WHERE id_lampiran = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data Lampiran IUMK Dihapus";
    echo "<script>window.location.replace('../lampiran-iumk/');</script>";
}
