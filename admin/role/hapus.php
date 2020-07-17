<?php
include '../../config/config.php';
include_once "../../config/auth-admin.php";

$id    = encryptor('decrypt', $_GET['id']);

$hapus = $koneksi->query("DELETE FROM role_user WHERE id_role = '$id'");

if ($hapus) {
    $_SESSION['pesan'] = "Data Role Dihapus";
    echo "<script>window.location.replace('../role/');</script>";
}
