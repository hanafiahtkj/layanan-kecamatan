<?php
include '../../config/config.php';
include_once "../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM camat WHERE id_camat = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data Camat Dihapus";
    echo "<script>window.location.replace('../camat/');</script>";
}
