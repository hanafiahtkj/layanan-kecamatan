<?php
include '../../config/config.php';
include_once "../../config/auth-admin.php";

$id   = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM kelurahan WHERE id_kelurahan = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data Kelurahan Dihapus";
    echo "<script>window.location.replace('../kelurahan/');</script>";
}
