<?php
include '../../config/config.php';
include_once "../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM masyarakat WHERE id_masyarakat = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data Masyarakat Dihapus";
    echo "<script>window.location.replace('../masyarakat/');</script>";
}
